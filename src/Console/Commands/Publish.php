<?php namespace GeneaLabs\LaravelWhoopsAtom\Console\Commands;

use File;
use GeneaLabs\LaravelWhoopsAtom\Providers\Service;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Kernel;

class Publish extends Command
{
    protected $signature = 'whoops-atom:publish {--assets} {--config}';
    protected $description = 'Publish various assets of the Whoops-Atom for Laravel package.';

    public function handle()
    {
        if ($this->option('config')) {
            $this->call('vendor:publish', [
                '--provider' => Service::class,
                '--tag' => ['config'],
                '--force' => true,
            ]);
        }
    }
}
