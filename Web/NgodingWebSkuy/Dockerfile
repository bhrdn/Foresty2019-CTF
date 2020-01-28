FROM alpine:3.10

# install package
RUN apk --no-cache add php7 php7-fpm nginx supervisor

# configure nginx
COPY config/nginx.conf /etc/nginx/nginx.conf

# Configure supervisord
COPY config/supervisor.conf /etc/supervisor/conf.d/supervisord.conf

# Configure PHP-FPM
COPY config/fpm-pool.conf /etc/php7/php-fpm.d/www.conf

# remove defaut server definition
RUN rm /etc/nginx/conf.d/default.conf

# Make sure files/folders needed by the processes are accessable when they run under the nobody user
RUN chown -R nobody.nobody /run && \
  chown -R nobody.nobody /var/lib/nginx && \
  chown -R nobody.nobody /var/tmp/nginx && \
  chown -R nobody.nobody /var/log/nginx

# setup document root
RUN mkdir -p /var/www/html

# Make the document root a volume
VOLUME /var/www/html

# Swith to use a non-root user
USER nobody

# add application
WORKDIR /var/www/html
COPY --chown=nobody src/ /var/www/html/

EXPOSE 8080

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
