FROM php:8.2-fpm-alpine

# Installer les dépendances système et l'extension pdo_pgsql
RUN apk add --no-cache \
    postgresql-dev \
    libpng-dev \
    zip \
    libzip-dev \
    unzip

RUN docker-php-ext-install pdo_pgsql zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Optionnel : Si vous souhaitez inclure le code directement dans l'image pour la production
# COPY . /var/www
# RUN composer install --no-dev --optimize-autoloader

EXPOSE 9000
CMD ["php-fpm"]
