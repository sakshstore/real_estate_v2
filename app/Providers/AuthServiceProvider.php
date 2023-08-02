<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Ticket;
use App\Models\Page;
 use App\Models\Post;
 
use App\Models\Property;
 

use App\Policies\TicketPolicy;
 
use App\Models\Lead;
 

use App\Policies\LeadPolicy;
use App\Policies\PostPolicy;
use App\Policies\PropertyPolicy;
use App\Policies\PagePolicy;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
      Ticket::class =>  TicketPolicy::class,
          Page::class =>  PagePolicy::class,
          
              Property::class =>  PropertyPolicy::class,
              
                      Lead::class => LeadPolicy::class,
                      Post::class => PostPolicy::class,
              
        
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
 
        $this->registerPolicies();

 
        //
    }
}
