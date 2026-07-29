#!/bin/sh
set -e

# Railway injects $PORT dynamically (usually 8080).
# envsubst does NOT support ${VAR:-default} syntax, so set default here first.
if [ -z "$PORT" ]; then
    PORT=8080
fi

export PORT

echo "Starting nginx on PORT=$PORT"

# Resolve $PORT in nginx config template
envsubst '$PORT' < /etc/nginx/http.d/default.conf.template > /etc/nginx/http.d/default.conf

# Verify
echo "Nginx config listen line: $(grep 'listen' /etc/nginx/http.d/default.conf | head -1)"

# Test nginx config is valid before starting
nginx -t

# Laravel optimizations
php /var/www/html/artisan config:cache
php /var/www/html/artisan route:cache
php /var/www/html/artisan view:cache

# Run migrations and seed
php /var/www/html/artisan migrate --force || { echo "Migration failed"; exit 1; }
php /var/www/html/artisan db:seed --force --class=LayananSeeder || echo "Seeder already run or failed"

# Start all processes via Supervisor
exec /usr/bin/supervisord -c /etc/supervisord.conf
