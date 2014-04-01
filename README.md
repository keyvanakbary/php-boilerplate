PHP Boilerplate
===============

[![Build Status](https://secure.travis-ci.org/keyvanakbary/php-boilerplate.svg?branch=master)](http://travis-ci.org/keyvanakbary/php-boilerplate)

Boilerplate for PHP projects. It includes [PHPUnit](https://github.com/sebastianbergmann/phpunit) and [Mockery](https://github.com/padraic/mockery).

Usage
-----
Download the boilerplate

    git clone git@github.com:keyvanakbary/php-boilerplate.git && rm -rf php-boilerplate/.git

Into the project, install and run [Composer](https://getcomposer.org/)

    curl -sS https://getcomposer.org/installer | php && ./composer.phar install

Run Tests
---------

    bin/phpunit
