# dap.paolo.ph webstack

dap.paolo.ph

## Setup

- add valid wildcard cert for paolo.ph in _ssl
  - paolo.ph.crt
  - paolo.ph.key

- add dap.paolo.ph in hosts file i.e. `127.0.0.1 dap.paolo.ph`

- setup wp with db values:
  - host: mysql
  - db and user: wordpress
  - pw: password

## Resources

- https://httpd.apache.org/docs/2.4/mod/mod_proxy_fcgi.html
- https://gist.github.com/megahirt/e80086d1d029a7406e9eaec1fb1dcc9e
- https://serverfault.com/questions/1077212/varnish-doesnt-open-backend-connection
- https://serverfault.com/questions/1037380/turning-an-apache-http-site-into-secure-https-site-via-nginx-reverse-proxy
