<?php

namespace App\Listeners;

use App\Events\PaymentUpdates;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

 
 use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Notification;

use App\Notifications\PaymentStatusNotification; 




class PaymentListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PaymentUpdates  $event
     * @return void
     */
    public function handle(PaymentUpdates $event)
    {
          $user=Auth::User();
       
        
     $response=$event->response;
     
  
             
       Notification::send($user, new PaymentStatusNotification($response['status'] ));
    }
}
