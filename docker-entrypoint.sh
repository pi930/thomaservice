#!/bin/sh

# Start PHP-FPM and Nginx via Supervisor
supervisord -c /etc/supervisor/conf.d/supervisord.conf &

# Wait for Laravel to be fully bootstrapped
sleep 5

# Run migrations and seed
php artisan migrate --force
php artisan db:seed --force

# Keep container running
tail -f /dev/null
