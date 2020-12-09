<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\User;

use Illuminate\Support\Facades\Log;

class LoadApiData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:email_relance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load data from the emprunt table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
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
        Log::info('Relances : SUCCES  !!');
        $this->info('Relances : SUCCES  !!');
    }
}
