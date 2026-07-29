#!/bin/sh
set -e

# Railway injects $PORT dynamically. Default to 80 if not set.
# Must be set as plain value BEFORE envsubst — envsubst does NOT support ${VAR:-default} syntax.
if [ -z "$PORT" ]; then
    PORT=80
fi

export PORT

echo "Starting nginx on PORT=$PORT"

# Resolve $PORT in nginx config template → write final config
envsubst '$PORT' < /etc/nginx/http.d/default.conf.template > /etc/nginx/http.d/default.conf

# Verify the config was written correctly
echo "Nginx will listen on: $(grep 'listen' /etc/nginx/http.d/default.conf)"

# Laravel optimizations
php /var/www/html/artisan config:cache
php /var/www/html/artisan route:cache
php /var/www/html/artisan view:cache

# Run migrations automatically on deploy
php /var/www/html/artisan migrate --force

# Start all processes via Supervisor
exec /usr/bin/supervisord -c /etc/supervisord.conf
