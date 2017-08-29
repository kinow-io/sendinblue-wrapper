# Sendinblue API with support for Laravel

The package supports use with [Laravel][1] 5 providing a `SendinblueWrapper` facade.

## Installation:

### First method

Just run `composer require floriankaemo/sendinblue-wrapper`

### Second method

In order to install, add the following to your `composer.json` file within the `require` block:

```js
"require": {
    …
    "floriankaemo/sendinblue-wrapper": "dev-master"
    …
}
```

Within Laravel, locate the file `config/app.php`.
Add the following to the `providers` array:

```php
'providers' => [
    …
    \Floriankaemo\Sendinblue\SendinblueServiceProvider::class,
],
```

Furthermore, add the following the the `aliases` array:

```php
'aliases' => [
    …
    'SendinblueWrapper' => 'Floriankaemo\Sendinblue\Facades\SendinBlueWrapper',
],
```

Run the command `composer update`.

### Publish the configuration:

```sh
// Laravel 5
$ php artisan vendor:publish
```

----

## Usage:

Your unique Sendinblue API key should be set in your `.env` file as `SENDINBLUE_KEY`.

Methods of the Sendinblue API class work as described by the Sendinblue API docs found [Here][2].
Thanks to Laravel's use of the "Facade" design pattern, all methods may be called in the following manner:

```php
…
// Retrieve your account info
$account = SendinblueWrapper::get_account();
…
```

Project forked from vansteen/sendinblue

[1]: http://laravel.com/
[2]: https://apidocs.sendinblue.com/