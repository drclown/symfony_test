FROM php:7.2-apache

RUN apt-get update -y && apt-get upgrade -y && apt-get install -y \
wget \
git

WORKDIR /tmp

RUN wget https://get.symfony.com/cli/installer -O - | bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=/bin --filename=composer

WORKDIR /var/www/html
RUN git config --global user.email "thomaspeyrou@gmail.com"
RUN git config --global user.name "dr.clown"
RUN symfony new test-symfony --full