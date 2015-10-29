# Mobly Logger Service Provider for Laravel 5

A simple [Laravel 5](http://laravel.com/) service provider for including the [Mobly Logger](https://github.com/mobly/logger) package in your Laravel project.

## Installation

The Mobly Logger Service Provider can be installed via [Composer](http://getcomposer.org) running `php composer.phar require mobly/logger-laravel:2.*` or adding manually in your project's `composer.json`:

```json
{
    "require": {
        "mobly/logger": "2.*"
    }
}
```

Then run a composer update:

```sh
php composer.phar update
```

To use the Mobly Logger Service Provider you must register the provider when bootstrapping your Laravel application.

Find the `providers` key in you `config/app.php` and register the Mobly Logger Service Provider as below:

```php
	'providers' => [
		// ...
		Mobly\LoggerLaravel\LoggerServiceProvider::class,
	]
```

Find the `aliases` key in you `config/app.php` and add the Mobly Logger facades:

```php
	'providers' => [
		// ...
		'MoblyLogger' => Mobly\LoggerLaravel\Facades\Logger::class,
	]
```

## Links

* [Mobly Logger](http://github.com/mobly/logger/)
* [License](http://choosealicense.com/licenses/mit/)
* [Laravel](http://laravel.com/)
* [Composer](https://getcomposer.org/download/)
