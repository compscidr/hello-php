# hello-php
[![codecov](https://codecov.io/gh/compscidr/hello-php/graph/badge.svg?token=mEfO0Gbz3n)](https://codecov.io/gh/compscidr/hello-php)

Minimal setup with:
- composer
- php unit
- code cov
- gh actions
- secrets via .env

## local setup:
- requires php >= 8.3
- composer: `wget https://raw.githubusercontent.com/composer/getcomposer.org/f3108f64b4e1c1ce6eb462b159956461592b3e3e/web/installer -O - -q | php -- --quiet`
- requires `php-dev`, `php-pear`
- requires pcov: `sudo pecl install pcov`
- copy the `sample.env` to `.env`

## Resources
- https://www.hostinger.com/tutorials/how-to-install-composer
- https://www.frobiovox.com/posts/2016/08/16/basic-hello-world-with-composer-and-php.html
- https://phpunit.de/getting-started/phpunit-10.html
- https://github.com/codecov/example-php/tree/main
- https://dev.to/swashata/setup-php-pcov-for-5-times-faster-phpunit-code-coverage-3d9c
- https://www.codementor.io/@ccornutt/keeping-credentials-secure-in-php-kvcbrk55z