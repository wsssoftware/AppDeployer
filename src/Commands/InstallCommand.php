<?php

namespace AppDeployer\Commands;

use Illuminate\Console\Command;

use function Laravel\Prompts\spin;

class InstallCommand extends Command
{
    public $signature = 'app_deployer:install';

    public $description = 'Install deployer application configuration';

    public function handle(): int
    {
        $stub = __DIR__.'/stubs/deploy.stub';
        $path = base_path('deploy.php');

        if (file_exists($path)) {
            $this->components->error('Deploy file already exists.');

            return self::FAILURE;
        }
        spin(fn () => copy($stub, $path));

        $this->components->info(sprintf('Deploy file [%s] created successfully.', $path));

        return self::SUCCESS;
    }
}
