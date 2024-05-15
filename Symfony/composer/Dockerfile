FROM alpine:3.17.3


RUN apk --repository http://nl.alpinelinux.org/alpine/edge/testing/ add \
    wget \
    curl \
    git \
    php81 \
    php81-curl \
    php81-openssl \
    php81-ctype \
    php81-xml \
    php81-iconv \
    php81-json \
    php81-dom \
    php81-tokenizer \
    php81-xmlwriter \
    php81-xmlreader \
    php81-simplexml \
    php81-fileinfo \
    php81-pdo \
    php81-mbstring \
    php81-session \
    php81-phar \
    && ln -s /usr/bin/php81 /usr/bin/php \
    && rm -rf /var/cache/apk/*


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

WORKDIR /var/www/symfony


EXPOSE 9000


ENTRYPOINT ["composer"]
CMD ["--ansi"]

