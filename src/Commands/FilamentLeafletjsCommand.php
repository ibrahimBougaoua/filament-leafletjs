<?php

namespace IbrahimBougaoua\FilamentLeafletjs\Commands;

use Illuminate\Console\Command;

class FilamentLeafletjsCommand extends Command
{
    public $signature = 'filament-leafletjs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
