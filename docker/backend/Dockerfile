FROM dunglas/frankenphp:1.9-alpine

ARG USER=app
ARG UID=1000
ARG GID=1000

RUN apk add --no-cache \
    bash \
    curl \
    git \
    linux-headers \
    nano \
    nodejs \
    npm \
    postgresql-client \
    shadow \
    unzip

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

RUN groupadd -g $GID $USER || true \
    && useradd -u $UID -g $GID -m -s /bin/bash $USER || true

WORKDIR /app

RUN chown -R $USER:$USER /app

RUN setcap cap_net_bind_service=+ep /usr/local/bin/frankenphp

RUN mkdir -p /data/caddy && mkdir -p /config/caddy \
    && chown -R $USER:$USER /data \
    && chown -R $USER:$USER /config

USER $USER
