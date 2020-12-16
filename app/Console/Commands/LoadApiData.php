<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\User;
use App\Models\Emprunt;
use Carbon\Carbon;
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

        ///////////////////////////////
$liste_des_emprunts_non_remis_a_temps_et_avec_relance_null =
Emprunt::whereNull('date_de_restitution')
 ->whereNull('relance')
 ->where('created_at', '<', now()->subDays(30))
 ->get();
 foreach($liste_des_emprunts_non_remis_a_temps_et_avec_relance_null as $emprunt)
 {
     Mail::raw("TEST-  Mpap baw manti : pote liv la tounen !", function ($mail) use ($emprunt) {
        $mail->from('kevindubuche@gmail.com');
        $mail->to($emprunt->idUtilisateur->email)
            ->subject('BIBLIOTHECH Rappel pou pote liv la tounen !');
            
            dd($emprunt->idUtilisateur->email);
    });
 }

///////////////////////////////
            Log::info($emp->id);
         $this->info('Relances : SUCCES  !!');
        
        
       
    }
}
