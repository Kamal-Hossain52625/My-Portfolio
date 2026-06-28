FROM richarvey/nginx-php-fpm:3.1.6

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN npm install && npm run build

RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

RUN chown -R nginx:nginx /var/www/html/storage
RUN chown -R nginx:nginx /var/www/html/bootstrap/cache

EXPOSE 8080