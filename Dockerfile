# Restoring Composer Dependencies
FROM tutagomes/larabed:build as base

WORKDIR /app


COPY . .
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

COPY .env.example .env
COPY --from=base /app /var/www/html
COPY --from=base /usr/local/bin/composer /usr/local/bin/composer

# Removendo pasta caso exista
RUN rm -rf /var/www/html/public/storage || true

RUN chown -R www-data:www-data *
RUN composer dump-autoload

