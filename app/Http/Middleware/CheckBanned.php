<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
 
 
 
 //use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Auth;
class CheckBanned
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
        
         
        $user=Auth::User();
        
        if(!$user) return $next($request); 
        
        
            
         if ( $user->status =='Active' ) return $next($request);
      
        
        
         
    
        
            Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();

        return redirect('/');
        
      
    
        
    }
}
