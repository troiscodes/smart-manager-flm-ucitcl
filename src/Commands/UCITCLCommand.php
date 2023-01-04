<?php

namespace AgenceKonig\UCITCL\Commands;

use Illuminate\Console\Command;

class UCITCLCommand extends Command
{
    public $signature = 'smart-manager-flm-ucitcl';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
