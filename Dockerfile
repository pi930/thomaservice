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

COPY --from=node_builder /app/public ./public

RUN composer install --no-dev --optimize-autoloader

COPY nginx.conf /etc/nginx/nginx.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# ---- Fix PHP-FPM listen directives ----
# On remplace TOUTES les formes possibles de "listen"
# ---- Fix PHP-FPM listen directives ----
RUN sed -i 's/listen = 9000/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/www.conf \
 && sed -i 's/listen=9000/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/www.conf \
 && sed -i 's/listen = 127.0.0.1:9000/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/www.conf \
 && sed -i 's/listen = \/run\/php\/php8.3-fpm.sock/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/www.conf \
 && sed -i 's/listen = \/run\/php\/php-fpm.sock/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/www.conf \
 && sed -i 's/listen = \/var\/run\/php\/php8.3-fpm.sock/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/www.conf \
 && sed -i 's/listen = 9000/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.conf \
 && sed -i 's/listen = 127.0.0.1:9000/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.conf \
 && sed -i 's/listen = \/run\/php\/php8.3-fpm.sock/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.conf \
 && sed -i 's/listen = \/run\/php\/php-fpm.sock/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.conf \
 && sed -i 's/listen = \/var\/run\/php\/php8.3-fpm.sock/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.conf \
 && sed -i 's/listen = 9000/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/*conf \
 && sed -i 's/listen = 127.0.0.1:9000/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/*conf \
 && sed -i 's/listen = \/run\/php\/php8.3-fpm.sock/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/*conf \
 && sed -i 's/listen = \/run\/php\/php-fpm.sock/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/*conf \
 && sed -i 's/listen = \/var\/run\/php\/php8.3-fpm.sock/listen = \/var\/run\/php-fpm.sock/g' /usr/local/etc/php-fpm.d/*conf \
 && rm -f /usr/local/etc/php-fpm.d/docker.conf

# ---- Create socket directory ----
RUN mkdir -p /var/run/php && chown -R www-data:www-data /var/run/php

EXPOSE 8080

CMD ["/usr/bin/supervisord"]
