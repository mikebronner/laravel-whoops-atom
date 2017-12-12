<?php namespace GeneaLabs\LaravelCaffeine\Providers;

use GeneaLabs\LaravelWhoopsAtom\Console\Commands\Publish;
use Illuminate\Support\ServiceProvider;

class Service extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/genealabs-laravel-whoops-atom.php'
                => config_path('genealabs-laravel-whoops-atom.php')
        ], 'config');

        config([
            'app.editor' => function ($file, $line) {
                $homstead = rtrim(config('genealabs-laravel-whoops-atom.homestead-sites-path'), '/');
                $local = rtrim(config('genealabs-laravel-whoops-atom.homestead-local-path'), '/');
                $file = str_replace("{$homstead}/", "{$local}/", $file);

                return "atm://open?url=file://{$file}&line={$line}";
            },
        ]);
    }

    public function register()
    {
        $this->commands(Publish::class);
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/genealabs-laravel-whoops-atom.php',
            'genealabs-laravel-whoops-atom'
        );
    }

    public function provides() : array
    {
        return ['genealabs-laravel-whoops-atom'];
    }
}
