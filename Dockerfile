# ================================
# Stage 1: Build Frontend (Vite)
# ================================
FROM node:20-alpine AS node-builder

WORKDIR /app

COPY package*.json ./

# Gunakan npm install agar aman jika package-lock.json tidak ada
RUN npm install

COPY . .

RUN npm run build


# ================================
# Stage 2: PHP + Laravel
# ================================
FROM php:8.2-fpm-alpine

# Install system packages
RUN apk add --no-cache \
    nginx \
    supervisor \
    git \
    curl \
    unzip \
    zip \
    icu-dev \
    oniguruma-dev \
    libzip-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev

# Install PHP Extensions
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

# ================================
# Composer
# ================================
COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction

# ================================
# Copy Source Code
# ================================
COPY . .

# Copy hasil build Vite
COPY --from=node-builder /app/public/build ./public/build

# ================================
# Laravel Setup
# ================================

# Pastikan folder Laravel ada
RUN mkdir -p \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

# Permission
RUN chown -R www-data:www-data storage bootstrap/cache

RUN chmod -R 775 storage bootstrap/cache

# Clear cache lama
RUN php artisan optimize:clear || true

# Generate cache baru
RUN php artisan config:cache || true
RUN php artisan route:cache || true
RUN php artisan view:cache || true

# ================================
# Config Files
# ================================
COPY docker/nginx/default.conf /etc/nginx/http.d/default.conf
COPY docker/supervisor/supervisord.conf /etc/supervisord.conf
COPY docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

EXPOSE 80

CMD ["/usr/bin/supervisord","-c","/etc/supervisord.conf"]