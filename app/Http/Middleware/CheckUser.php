<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
 

 use Illuminate\Support\Facades\Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       // dd(    $request->route());
        
        
        $user=Auth::User();
        
         //if( $request->route()=="profile")    return $next($request);
         
        if($user && (   $user->hasRole(['Executive', 'admin'])   )  )   {
           
            
         return $next($request);
           
            }
            else
            
            {
                
              return redirect()->route('profile.edit')->with('error', 'Plz provide your basic details and then continue...');

    }
 
    }
}
