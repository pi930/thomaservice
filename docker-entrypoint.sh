#!/bin/sh

# Run migrations
php artisan migrate --force

# Start supervisor
exec /usr/bin/supervisord

