# ---------- Stage 1: Build frontend ----------
FROM node:20 AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build

# ---------- Stage 2: PHP ----------
FROM php:8.2-cli

# Install system packages
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libzip-dev \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Copy built frontend assets
COPY --from=frontend /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Cache config and views
RUN php artisan config:clear
RUN php artisan view:cache

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000