FROM alpine:3.17.3

RUN apk --no-cache --repository https://dl-cdn.alpinelinux.org/alpine/edge/community \
    add tini php81 php81-fpm php81-pgsql php81-pdo_pgsql php81-dom php81-xml php81-xmlwriter \
        php81-xmlreader php81-ctype php81-tokenizer php81-openssl php81-json php81-mbstring \
        php81-phar php81-iconv php81-session nginx php81-xmlwriter

RUN ln -sf /usr/bin/php81 /usr/bin/php && \
    ln -sf /usr/sbin/php-fpm81 /usr/sbin/php-fpm8

EXPOSE 80

RUN rm -rf /var/cache/apk/*

RUN adduser -u 82 -D -S -G www-data www-data

RUN mkdir -p /var/www/symfony && chown -R www-data:www-data /var/www/symfony && chmod 755 /var/www/symfony

RUN mkdir -p /var/log && chmod 777 /var/log

ADD rootfs /

ENTRYPOINT ["/sbin/tini", "--"]

EXPOSE 9000

USER www-data

WORKDIR /var/www/symfony

CMD ["php-fpm81", "--nodaemonize"]
