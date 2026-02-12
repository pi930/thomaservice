# ---- PHP + Composer ----
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpq-dev libonig-dev libzip-dev nginx

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql mbstring zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Build Vite assets
RUN npm install && npm run build

# Laravel permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Copy Nginx config
COPY ./Docker/nginx.conf /etc/nginx/nginx.conf

# Expose port
EXPOSE 80

# Start Nginx + PHP-FPM properly
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]

