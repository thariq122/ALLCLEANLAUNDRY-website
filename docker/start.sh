#!/bin/sh
set -e

# Railway inject $PORT secara dinamis. Default ke 80 jika tidak ada.
export PORT=${PORT:-80}

echo "Starting with PORT=$PORT"

# Resolve $PORT di nginx config template
envsubst '${PORT}' < /etc/nginx/http.d/default.conf.template > /etc/nginx/http.d/default.conf

# Jalankan Laravel artisan optimizations
php /var/www/html/artisan config:cache
php /var/www/html/artisan route:cache
php /var/www/html/artisan view:cache

# Jalankan migration otomatis saat deploy
php /var/www/html/artisan migrate --force

# Start semua proses via Supervisor
exec /usr/bin/supervisord -c /etc/supervisord.conf
