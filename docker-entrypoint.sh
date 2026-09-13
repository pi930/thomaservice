#!/bin/sh

# Run migrations
php artisan migrate --force

# Run seeders
php artisan db:seed --force

# Start supervisor
exec /usr/bin/supervisord
