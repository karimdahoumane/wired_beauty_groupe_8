FROM php:8.0.12-fpm-alpine

# Add composer from Docker image (multi-stage build)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install required extensions
RUN set -ex \
    && apk add --no-cache \
    autoconf \
    g++ \
    freetype-dev \
    make \
    icu-dev \
    postgresql-dev \
    bash \
    imagemagick-dev \
    imagemagick \
    libzip-dev \
    libpng \
    libpng-dev \
    jpegoptim \
    libjpeg-turbo-dev \
    optipng

RUN apk add nodejs npm git zsh zsh-autosuggestions zsh-syntax-highlighting bind-tools curl

# Use oh-my-zsh installer
RUN sh -c "$(wget https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh -O -)"

# Source oh-my-zsh plugins
RUN echo "source /usr/share/zsh/plugins/zsh-syntax-highlighting/zsh-syntax-highlighting.zsh" >> ~/.zshrc && \
    echo "source /usr/share/zsh/plugins/zsh-autosuggestions/zsh-autosuggestions.zsh" >> ~/.zshrc

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql

RUN docker-php-ext-configure gd \
    --with-jpeg \
    --with-freetype

RUN docker-php-ext-install \
    pgsql \
    pdo_pgsql \
    intl \
    opcache \
    exif \
    zip \
    gd \
    calendar

# Install extensions from PECL
RUN pecl install \
    apcu \
    xdebug \
    imagick

RUN docker-php-ext-enable \
    apcu \
    xdebug \
    imagick

WORKDIR /home/api

COPY php.ini /usr/local/etc/php/conf.d/
