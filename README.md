PHP Boilerplate
===============

[![Build Status](https://secure.travis-ci.org/keyvanakbary/php-boilerplate.svg?branch=master)](http://travis-ci.org/keyvanakbary/php-boilerplate)

Boilerplate for PHP projects. It includes [PHPUnit](https://github.com/sebastianbergmann/phpunit) and [Mockery](https://github.com/padraic/mockery).

Usage
-----
Download and extract the boilerplate

    curl -sSL https://github.com/keyvanakbary/php-boilerplate/archive/master.zip > tmp.zip &&
    unzip tmp.zip && rm tmp.zip

Into the project, install and run [Composer](https://getcomposer.org/)

    curl -sS https://getcomposer.org/installer | php && ./composer.phar install

Run Tests
---------

    bin/phpunit