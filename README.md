# Golem Auth

[![Latest Stable Version](https://poser.pugx.org/golem/auth-storage-zend/v/stable.png)](https://packagist.org/packages/golem/auth-storage-zend)
[![Build Status](https://travis-ci.org/spekkionu/golem-auth-storage-zend.svg?branch=master)](https://travis-ci.org/spekkionu/golem-auth-storage-zend)
[![Code Coverage](https://scrutinizer-ci.com/g/spekkionu/golem-auth-storage-zend/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/spekkionu/golem-auth-storage-zend/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spekkionu/golem-auth-storage-zend/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/spekkionu/golem-auth-storage-zend/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/7de4d722-aa4b-4a45-8cfa-d781e9d541bf/mini.png)](https://insight.sensiolabs.com/projects/7de4d722-aa4b-4a45-8cfa-d781e9d541bf)

Zend Framework - Zend Session storage adapter for Golem Auth

## Install

Via Composer

``` bash
$ composer require golem/auth-storage-zend
```

## Usage

Follow the documentation on [Golem Auth](https://github.com/spekkionu/golem-auth) to create a user model and a user repository class.

``` php
$session = new \Zend\Session\Container();
$storage = new \Golem\Auth\Storage\ZendSessionStorage($session);
// get an instance of your user repository however you need to
$userRepository = new UserRepository($database_connection);
$auth = new \Golem\Auth($storage, $userRepository);
```

## Testing

``` bash
$ composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
