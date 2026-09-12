# ---- Build Stage (Node/Vite) ----
FROM node:20 AS node_builder
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# ---- PHP-FPM + Nginx ----
FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git curl zip unzip libpq-dev nginx supervisor \
    && docker-php-ext-install pdo pdo_pgsql

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Fix Laravel storage permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
 && chmod -R 775 storage bootstrap/cache

RUN chmod -R 777 /tmp

# Ensure Laravel storage subdirectories exist
RUN mkdir -p storage/framework/views \
 && mkdir -p storage/framework/cache \
 && chown -R www-data:www-data storage \
 && chmod -R 775 storage

COPY --from=node_builder /app/public ./public

RUN composer install --no-dev --optimize-autoloader

COPY nginx.conf /etc/nginx/nginx.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Run migrations automatically
RUN php artisan migrate --force || true

EXPOSE 8080

CMD ["/usr/bin/supervisord"]
