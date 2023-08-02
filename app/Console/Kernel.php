<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Models\BulkMessage;
use App\Models\MetaApp;
use App\Models\MassMessage;
use Illuminate\Support\Facades\Log;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {    
              
        $schedule->call(function () {
        
        
          $from = Carbon::now();
            $to = Carbon::now()->addMinute();
               
            
             
            
            $seconds=60*60*24*1;
            
      
 
        
         $credential=[
    'from_phone_number_id' =>DotenvEditor::getValue('whatsapp_from_phone_number_id'),
    'access_token' =>       DotenvEditor::getValue('whatsapp_access_token'),
]; 
 
 
     
          $massMessage = BulkMessage::whereBetween('scheduled_at', [$from, $to])->first();
        
        if($massMessage)
        {
    
        $messages=  get_lead_list_by_tags($massMessage->lead_tags) ;
        
        

        foreach($messages as $request){
             
            $message=$request->content;
            $to =$request->phone;
           
             send2WappV3($to,$message,$credential); 
        
             
        }
        }
        
        
        })->everyMinute();
     
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
