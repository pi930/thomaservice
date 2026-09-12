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
# force rebuild

WORKDIR /var/www/html

COPY . .

COPY --from=node_builder /app/public ./public

RUN composer install --no-dev --optimize-autoloader

COPY nginx.conf /etc/nginx/nginx.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
RUN sed -i 's/listen = 9000/listen = \/var\/run\/php-fpm.sock/' /usr/local/etc/php-fpm.d/www.conf \
 && sed -i 's/listen = 9000/listen = \/var\/run\/php-fpm.sock/' /usr/local/etc/php-fpm.conf \
 && sed -i 's/listen = 9000/listen = \/var\/run\/php-fpm.sock/' /usr/local/etc/php-fpm.d/*conf \
 && rm /usr/local/etc/php-fpm.d/docker.conf

EXPOSE 8080

CMD ["/usr/bin/supervisord"]
