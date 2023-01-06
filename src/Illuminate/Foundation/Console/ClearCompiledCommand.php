<?php

namespace Illuminate\Foundation\Console;

use Illuminate\Console\Command;

class ClearCompiledCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'clear-compiled';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove the compiled class file';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if (is_file($servicesPath = $this->vdes->getCachedServicesPath())) {
            @unlink($servicesPath);
        }

        if (is_file($packagesPath = $this->vdes->getCachedPackagesPath())) {
            @unlink($packagesPath);
        }

        $this->info('Compiled services and packages files removed!');
    }
}
