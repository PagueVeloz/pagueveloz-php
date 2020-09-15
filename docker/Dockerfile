FROM php:7.3-fpm-alpine

LABEL maintainer="Bludata <dev@bludata.com.br>"

ENV URL_COMPOSER=https://getcomposer.org/download/1.8.5/composer.phar

RUN apk add --no-cache --virtual .fetch-deps \
	git \
	autoconf \
	gcc \
	automake \
	build-base \
	&& mkdir -p /opt/composer \
	&& curl -fSL ${URL_COMPOSER} -o /opt/composer/composer.phar \
	&& ln -sf /opt/composer/composer.phar /usr/local/bin/composer \
	&& chmod +x /usr/local/bin/composer \
	&& composer -V \
	&& pecl install xdebug \
    && echo "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20180731/xdebug.so" >> /usr/local/etc/php/conf.d/xdebug.ini \
	&& rm -rf /tmp/*

WORKDIR /var/www