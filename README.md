# Whoops-Atom for Laravel
## Goal
Provide a method to open stack trace files from the Whoops error page, like is
available for some other editors.

## Installation
### Dependencies
- Laravel 5.5.25 or greater
- PHP 7.0.0 or higher
- Atom Protocol Handler

1. Install the package:
   ```sh
   composer require genealabs/laravel-whoops-atom
   ```

2. Install [Atom Protocol Handler](https://github.com/WizardOfOgz/atom-handler)
as per the instructions provided there.

## Configuration
```php
/*
|--------------------------------------------------------------------------
| Local Sites Path
|--------------------------------------------------------------------------
|
| Specify the local development folder that is synchronized with Homestead.
| If you are not using Homestead, set this to an empty string or null.
| This corresponds to the `-map:` line under `folders` in your
| `Homestead.yaml` file.
|
| Default: ~/Code (string|null)
|
*/
'local-sites-path' => '~/code',

/*
|--------------------------------------------------------------------------
| Homestead Sites Path
|--------------------------------------------------------------------------
|
| Specify the base path where Homestead stores the synced folder with your
| web sites. If you are not using Homestead, set this to an empty string
| or null. This corresponds to the `to:` line under `folders` in
| your `Homestead.yaml` file.
|
| Default: /home/vagrant/Code (string|null)
|
*/
'homestead-sites-path' => '/home/vagrant/code',
```

___Only publish the config file if you need to customize it___:
```sh
php artisan whoops-atom:publish --config
```

## Usage
That was it! It will apply itself automatically to your application
configuration.
