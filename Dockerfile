# for 5.6 version use "jaschweder/php:5.6-tools" see https://hub.docker.com/r/jaschweder/php/
FROM jaschweder/php:tools

# install xdebug
RUN cd /usr/src \
    && git clone -b master --depth 1 https://github.com/xdebug/xdebug \
    && cd xdebug \
    && phpize \
    && ./configure \
    && make \
    && make install \
    && echo "zend_extension=xdebug.so">>/usr/local/lib/php.ini \
    && rm -rf /usr/src/xdebug
