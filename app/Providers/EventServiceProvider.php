<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Login ;
use Illuminate\Auth\Events\Logout ;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

 
use App\Listeners\LoginListener;

use App\Listeners\LogOutListener;
 
use App\Listeners\RegisteredListener;

use App\Listeners\PaymentListener;

use App\Events\PaymentUpdates;
use App\Events\LeadCreated;

use App\Listeners\Subscribeto3rdParty;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
   /*     Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        
        
         Registered::class => [
            RegisteredListener::class,
        ],
        
php artisan make:listener  --event=PaymentUpdates

   */
   
   PaymentUpdates::class => [PaymentListener::class],
   
   LeadCreated::class => [Subscribeto3rdParty::class],
   
   
        Login::class => [
         LoginListener::class,
        ],
        
         Logout::class => [
            LogOutListener::class,
        ],
        
        
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
