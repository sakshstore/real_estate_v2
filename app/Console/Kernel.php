<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Models\BulkMessage;
use App\Models\MetaApp;
use App\Models\MassMessage;
use Illuminate\Support\Facades\Log;

use Jackiedo\DotenvEditor\Facades\DotenvEditor;
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
            
             monitor_cron_job( );
             
             
 Log::debug(Carbon::now());
 
 
         Send_schedules_Wapp_messages(  );
         
         process_auto_posts();
        })->everyMinute()->sendOutputTo(
            "kernal_schedule.txt"); 
     
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
