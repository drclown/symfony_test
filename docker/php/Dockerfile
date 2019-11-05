FROM php:7.3-fpm-alpine

RUN apk update && apk upgrade && apk add \
bash \
wget \
git \
gcc \
make \
autoconf \
build-base

WORKDIR /tmp

# Installation symfony cli
RUN wget https://get.symfony.com/cli/installer -O - | /bin/bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony

# Installation composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

# Installation xdebug
ADD bin/xdebug-2.8.0.tgz /tmp
WORKDIR /tmp/xdebug-2.8.0/
RUN phpize
RUN ./configure
RUN make
RUN mkdir -p /usr/local/lib/php/extensions/no-debug-non-zts-20180731
RUN cp modules/xdebug.so /usr/local/lib/php/extensions/no-debug-non-zts-20180731
