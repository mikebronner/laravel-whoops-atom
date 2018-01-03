<?php namespace GeneaLabs\LaravelWhoopsAtom\Providers;

use GeneaLabs\LaravelWhoopsAtom\Console\Commands\Publish;
use Illuminate\Support\ServiceProvider;

class Service extends ServiceProvider
{
    public function boot()
    {
        if (config('app.env') !== 'production') {
            $this->publishes([
                __DIR__ . '/../../config/genealabs-laravel-whoops-atom.php'
                    => config_path('genealabs-laravel-whoops-atom.php')
            ], 'config');

            config([
                'app.editor' => function ($file, $line) {
                    $homestead = rtrim(config('genealabs-laravel-whoops-atom.homestead-sites-path'), '/');
                    $local = rtrim(config('genealabs-laravel-whoops-atom.local-sites-path'), '/');

                    if (! $local) {
                        return '';
                    }

                    $file = str_replace("{$homestead}/", "{$local}/", $file);

                    return "atom://open?url=file://{$file}&line={$line}";
                },
            ]);
            $this->commands(Publish::class);
            $this->mergeConfigFrom(
                __DIR__ . '/../../config/genealabs-laravel-whoops-atom.php',
                'genealabs-laravel-whoops-atom'
            );
        }
    }
}
