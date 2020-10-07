# Restoring Composer Dependencies
FROM composer:1.7 as vendor

COPY database/ database/

COPY composer.json composer.json
COPY composer.lock composer.lock

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist \
    --no-dev \
    --no-interaction \
    --optimize-autoloader

# Now to the business
FROM tutagomes/larabed:latest

WORKDIR /var/www/html

COPY . /var/www/html
COPY .env.example .env
COPY --from=vendor /app/vendor/ /var/www/html/vendor/

RUN chown www-data:www-data -R *
