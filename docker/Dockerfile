FROM php:7.2-alpine

RUN docker-php-ext-install mbstring pdo pdo_mysql

RUN apk add --no-cache \
        curl \
        gnupg \
        git \
        imagemagick \
        icu-dev \
        postgresql-dev \
        zlib-dev \
        netcat-openbsd

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/include/postgresql/
RUN docker-php-ext-install \
    bcmath \
    intl \
    mbstring \
    pcntl \
    pdo_pgsql \
    pgsql \
    shmop \
    zip

COPY . /srv/app

WORKDIR /srv/app

CMD php -S 0.0.0.0:80 public/index.php