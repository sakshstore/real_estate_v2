<?php

namespace App\Listeners;

use App\Events\LeadCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Subscribeto3rdParty
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
     * @param  \App\Events\LeadCreated  $event
     * @return void
     */
    public function handle(LeadCreated $event)
    {
     
     $lead=$event->lead;
     

$mailchimp = new \MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
	'apiKey' => '8969e9d9370f7ce8980f5c5d93a6b0b0-us21',
	'server' => 'us21'
]);

 
$list_id = "adea1aeeea";
 

try {
    $response = $mailchimp->lists->addListMember($list_id, [
        "email_address" => $lead->email,
        "status" => "subscribed",
        "merge_fields" => [
          "FNAME" => $lead->name,
          "LNAME" => ""
        ]
    
    
    ]);
    
    
 Log::debug("sendlog___" . print_r($response, true));
         
        
         
    
    
} catch (MailchimpMarketing\ApiException $e) {
     Log::debug( $e->getMessage());
}




    }
}
