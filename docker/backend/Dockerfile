FROM dunglas/frankenphp:1.9-alpine

RUN apk add --no-cache \
    bash \
    git \
    nodejs \
    npm \
    postgresql-client \
    nano \
    unzip \
    curl \
    linux-headers

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions \
    pdo_pgsql \
    gd \
    intl \
    zip \
    bcmath \
    pcntl \
    sockets \
    redis \
    xdebug

RUN echo "xdebug.mode=debug,develop" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN echo "memory_limit = -1" > /usr/local/etc/php/conf.d/memory-limit.ini

WORKDIR /app
