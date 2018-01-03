![laravel-whoops-atom](https://user-images.githubusercontent.com/1791050/33916828-cc12f3dc-df5f-11e7-94fd-1eabda15613c.png)

# Whoops-Atom for Laravel
[![Join the chat at https://gitter.im/GeneaLabs/laravel-whoops-atom](https://badges.gitter.im/GeneaLabs/laravel-whoops-atom.svg)](https://gitter.im/GeneaLabs/laravel-whoops-atom?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/8a832dfd-f86d-44dd-b15c-89ad324a54a2.svg)](https://insight.sensiolabs.com/projects/8a832dfd-f86d-44dd-b15c-89ad324a54a2/analyses/latest)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/GeneaLabs/laravel-whoops-atom.svg)](https://scrutinizer-ci.com/g/GeneaLabs/laravel-whoops-atom/)
[![GitHub (pre-)release](https://img.shields.io/github/release/GeneaLabs/laravel-whoops-atom/all.svg)](https://github.com/GeneaLabs/laravel-whoops-atom)
[![Packagist](https://img.shields.io/packagist/dt/GeneaLabs/laravel-whoops-atom.svg)](https://packagist.org/packages/genealabs/laravel-whoops-atom)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/GeneaLabs/laravel-whoops-atom/master/LICENSE)

## Goal
Provide a method to open stack trace files from the Whoops error page, like is
available for some other editors.

## Installation
### Dependencies
- Laravel 5.5.25 or greater
- PHP 7.0.0 or higher
- Atom Open Package

1. Install the package:
   ```sh
   composer require genealabs/laravel-whoops-atom --dev
   ```

2. Install [Atom Open](https://atom.io/packages/open) package.

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
**Warning: this package inserts a closure into a configuration setting. As
this is intended for development environments only. To work with this, we
recommend that you don't cache your config settings in your dev environment.**

That was it! It will apply itself automatically to your application
configuration.
