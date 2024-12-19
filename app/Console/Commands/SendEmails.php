<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Log;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send the emails';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $mail = Mail::to("shiekhhassan1234draq@gmail.com")
        ->send(new MyEmail("Hassan Raza"));
        if($mail){
           Log::info("Email Send Successfully") ;
        }
        else{
            Log::info("Email not send");
        }
    }
}
