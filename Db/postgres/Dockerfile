
FROM alpine:3.17.3

RUN set -eux; \
	addgroup -g 1000 -S postgres; \
	adduser -u 1000 -S -D -G postgres -H -h /var/lib/postgresql -s /bin/sh postgres; \
	mkdir -p /var/lib/postgresql; \
	chown -R postgres:postgres /var/lib/postgresql

ENV LANG en_EN.utf8

RUN apk update && \
    apk add su-exec tzdata libpq postgresql postgresql-dev postgresql-url_encode && \
    mkdir /docker-entrypoint-initdb.d && \
    rm -rf /var/cache/apk/*

COPY entrypoint/docker-entrypoint.sh /

RUN chmod -R 777 /docker-entrypoint.sh && \
    mkdir -p /run/postgresql/ && \
    chown postgres:postgres /run/postgresql/

COPY ./initdb/* /docker-entrypoint-initdb.d/
RUN chmod -R 755 /docker-entrypoint-initdb.d
    

ENV PGDATA /var/lib/postgresql/data

RUN mkdir -p "$PGDATA" && chown -R postgres:postgres "$PGDATA" && chmod 1777 "$PGDATA"

ENTRYPOINT ["/docker-entrypoint.sh"]

STOPSIGNAL SIGINT

EXPOSE 5432
CMD ["postgres"]
