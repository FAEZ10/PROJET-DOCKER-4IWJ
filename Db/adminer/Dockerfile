FROM alpine:3.17.3

RUN apk --no-cache --repository https://dl-cdn.alpinelinux.org/alpine/edge/testing add \
    tini \
    php81 \
    php81-session \
    php81-pgsql \
    php81-pdo_pgsql && \
    ln -sf /usr/bin/php81 /usr/bin/php && \
    rm -rf /var/cache/apk/*

COPY src/adminer-4.8.1.php /srv/index.php

WORKDIR /srv
EXPOSE 80

ENTRYPOINT ["/sbin/tini", "--"]

CMD /usr/bin/php \
    -d memory_limit=256M \
    -d upload_max_filesize=2048M \
    -d post_max_size=2048M \
    -S 0.0.0.0:80
