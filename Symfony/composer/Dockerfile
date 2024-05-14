FROM alpine:3.17.3

# Ajouter PHP et les extensions nécessaires
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

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Définir le répertoire de travail
WORKDIR /var/www/symfony

# Exposer le port 9000
EXPOSE 9000

# Entrypoint pour le Composer
ENTRYPOINT ["composer"]
CMD ["--ansi"]

