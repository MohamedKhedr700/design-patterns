# Use PHP 8.2 FPM Alpine base image
FROM php:8.2-fpm-alpine

# Set UID and GID as environment variables
ARG UID
ARG GID
ENV UID=${UID} GID=${GID}

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apk --no-cache add \
    build-base \
    libpng \
    libpng-dev \
    libjpeg-turbo \
    libjpeg-turbo-dev \
    freetype \
    freetype-dev \
    libzip \
    libzip-dev \
    icu \
    icu-dev \
    oniguruma \
    oniguruma-dev \
    openssl-dev \
    zip \
    unzip \
    git \
    curl \
    vim \
    autoconf \
    linux-headers

#Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    gd \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    pcntl \
    intl

# Install MongoDB PHP extension
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

# Install Xdebug dependencies
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Remove build dependencies
RUN apk del --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    openssl-dev \
    autoconf \
    linux-headers

# Copy Xdebug configuration
COPY ./rootfs/etc/php82/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add laravel user and group
RUN addgroup -g ${GID} laravel && adduser -u ${UID} -G laravel -s /bin/bash -D laravel

# Change ownership
RUN chown -R laravel:laravel /var/www

# Copy php configuration file
COPY ./rootfs/etc/php82/local.ini /usr/local/etc/php/conf.d/local.ini

# Expose port 9000 and start php-fpm server
EXPOSE 9000

CMD ["php-fpm"]

