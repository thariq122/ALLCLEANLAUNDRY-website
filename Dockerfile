# ==========================================
# Stage 1 - Build Frontend (Vite)
# ==========================================
FROM node:20-alpine AS node-builder

WORKDIR /app

COPY package*.json ./

RUN if [ -f package-lock.json ]; then \
      npm ci; \
    else \
      npm install; \
    fi

COPY . .

RUN npm run build


# ==========================================
# Stage 2 - Laravel
# ==========================================
FROM php:8.2-fpm-alpine

ENV COMPOSER_ALLOW_SUPERUSER=1

# Install system packages
RUN apk add --no-cache \
    nginx \
    supervisor \
    bash \
    curl \
    git \
    unzip \
    zip \
    gettext \
    icu-dev \
    oniguruma-dev \
    libzip-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mbstring \
        bcmath \
        exif \
        intl \
        zip \
        gd \
        opcache

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy seluruh project Laravel
COPY . .

# Copy hasil build Vite
COPY --from=node-builder /app/public/build ./public/build

# Install dependency Laravel
RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction

# Buat folder yang dibutuhkan Laravel
RUN mkdir -p \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

# Buat file log
RUN touch storage/logs/laravel.log

# Bersihkan cache
RUN php artisan optimize:clear || true

# Permission
RUN chown -R www-data:www-data \
    storage \
    bootstrap/cache

RUN chmod -R 777 \
    storage \
    bootstrap/cache

# Nginx config template (uses $PORT from Railway)
COPY docker/nginx/default.conf /etc/nginx/http.d/default.conf.template

# Supervisor
COPY docker/supervisor/supervisord.conf /etc/supervisord.conf

# PHP Opcache
COPY docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# Startup script
COPY docker/start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 80

CMD ["/start.sh"]