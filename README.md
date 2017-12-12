# Whoops-Atom for Laravel
## Goal
Provide a method to open stack trace files from the Whoops error page, like is
available for some other editors.

## Implementation

## Reasoning

### Dependencies
- Laravel 5.5.25 or greater
- PHP 7.0.0 or higher
- Atom Protocol Handler

## Installation
1. Install the package:
   ```sh
   composer require genealabs/laravel-whoops-atom
   ```

2. **This is only required for Laravel 5.4 or below:**
   Add the service provider entry in `config/app.php`:
   ```php
   // 'providers' => [
       GeneaLabs\LaravelWhoopsAtom\Providers\Service::class,
   // ],
   ```

## Configuration
```php

```

___Only publish the config file if you need to customize it___:
```sh
php artisan whoops-atom:publish --config
```

## Usage
That was it! It will apply itself automatically to your application
configuration.
