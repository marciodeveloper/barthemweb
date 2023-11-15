# WORDPRESS IMAGE
FROM wordpress:latest

# REDIS CLIENT
RUN pecl install redis && docker-php-ext-enable redis 