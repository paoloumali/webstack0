FROM httpd:2.4.55

RUN set -x && \
  adduser --system --home /usr/local/apache2/app \
  --uid 1000 --gid 33 paoloumali

USER paoloumali

EXPOSE 80
