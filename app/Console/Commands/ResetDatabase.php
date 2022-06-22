<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset site data';


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Resetting Site');

        /* php artisan cache:clear */
        \Artisan::call('cache:clear');

        /* php artisan migrate */
        \Artisan::call('migrate:fresh --seed --step');

        return 0;
    }
}
