<?php

namespace AppDeployer\Commands;

use Illuminate\Console\Command;

class AppDeployerCommand extends Command
{
    public $signature = 'appdeployer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
