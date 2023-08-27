<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\LoginHistory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

 use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\OTP;
use Illuminate\Support\Facades\Notification;

use Illuminate\Support\Facades\Mail;
use App\Notifications\ChangePasswordNotifications; 

use App\Mail\SakshMail;
 use DB;
use App\Models\Lead;
use App\Models\Property;

use App\Models\Customform;
use App\Models\Order;

use App\Models\Subscription;

use MailchimpTransactional\ApiClient ;



class AuthController extends Controller
{
    //
       public function home()
    {
 
 
 
 
  $user=Auth::User();
  
 
        $available_listing=available_listing($user );
 
 
 
  
 $login_histories = $user->login_histories;
 
 
 $roles = $user->getRoleNames(); // Returns a collection
 
 $orders=$user->orders ;
 $properties=$user->properties ;
 
 
 $subscription=$user->subscription;
 
  
          

        
      //  $leads = Lead::orderBy('created_at', 'desc')->take(15)->get();
        
      
        
   $last_cron_run_time=  last_cron_run_time( );
   
   
   
        // graph data start
        
        
        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("Monthname(created_at) Monthname  "))

                  ->groupBy(DB::raw("Monthname(created_at)"))

                    ->pluck('count', 'Monthname');


 

        $labels = $users->keys();

        $data = $users->values();
        
        // graph data end
        
        
   
       
         
        
        
         
        
        
        return view('user.home', compact('login_histories','properties', 'last_cron_run_time','roles','user','labels','data','subscription','available_listing'));
        
      
    }
    
     public function login_history()
    {


 

$login_histories = LoginHistory::where("user_id",Auth::user()->id)->latest()->take(50)->get();
          
 
        return view('user.login_history', compact('login_histories'));
    }
       
 



     
    
     
    
    
    
    private function verify_recaptha(Request $request)
    {
        
                $data = array(
            'secret'   => env('GOOGLE_RECAPTCHA_SECRET'),
            'response' => $request->grecaptcha_token
        );

$res=false;

        
            $verify = curl_init();
            curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($verify, CURLOPT_POST, true);
            curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($verify);
         $res= json_decode($response)->success;
       
        return $res;
    }
    
    
     public function verify_login_with_otp(Request $request)
    {
         
     
             
  $recaptcha=$this->verify_recaptha(  $request);
         
          
   if(!$recaptcha)
   
  return redirect()->back() ->with('error','Recaptcha Error plz try again after some time. ');
        
        
      $email=$request->email;
   $otp=$request->otp;
        
        
   $user=User::where("email",$email)->first();
  
   
   
   if(!$user)
   
  return redirect()->back() ->with('error','No user registed with this email ');
    
    
    
   if(!$this->verify_otp($user->id,$otp,"Login"))
   
    return redirect()->back() ->with('error','Incorrect OTP ');
    
   // login now 

      Auth::login($user);
      
 
            return redirect()->route("home")  ->with('success','Login success ');
            
             
    
    }
    
    
    
    public function login_with_otp(Request $request)
    {
         
  $recaptcha=$this->verify_recaptha(  $request);
         
          
   if(!$recaptcha)
   
  return redirect()->back() ->with('error','Recaptcha Error plz try again after some time. ');
    
  
    
    
   $email=$request->email;
   
   $user=User::where("email",$email)->first();
   
   
   
   if(!$user)
   
   {
       $user=new User();
       
    
       
       $user->username= $email;
       
       $user->email= $email;
        
       $user->save();
       
       
   }
      
        
        
  
   
  $otp= $this->send_otp($user,"Login");
    
  
  return view('auth.verify_otp_for_login',compact('email')) ;

    
    
    }
    
    
    function verify_otp($user_id,$otp,$purpose)
    {
        
        $otp=OTP::where("user_id",$user_id)->where("code",$otp)->where("purpose",$purpose)->first();
        
        if($otp)
        return true;
        else
        return false;
        
        
        
    }
    function send_otp($user,$purpose){
      
        $otp=new OTP(); 
      
      $code=223322;
      
        $otp->code=223322;//$code;
        
        
        $otp->user_id=$user->id;
        
        
         $otp->purpose=$purpose;
        $otp->save(); 
        
        $message="OTP for the login is ".$code;
        
                Mail::to($user)->send(new SakshMail($message));
                
                
        
        
    }
    
    
    
    
    
    
    
     public function getprofile()
    {
            
$user = Auth::user();

 return view('user.profile',compact('user')) ;
    }
    
    
    
    
    
    
    
       public function getprofileEdit()
    {
            
$user = Auth::user();

      $customform=  Customform::where("form_name","user_profile")->first();
        
 
         return view('user.profile_edit',compact('user','customform')) ;
    }  
    
    
    
    
    
    public function postprofileEdit(Request $request)
    {
         
   
  
            
$user = Auth::user();
 
 
        
            
      $request_data=$request->except('_method', '_token')  ;
       
       
       $user->form_json=json_encode($request_data);
              
 
 
 $user->assignRole('Executive');
 $user->save();
 
 
 
       $user->save();
        
   
   
   
   
  
  
 return redirect()->route('home')->with('success','Updated successfully.');
       

   // return redirect()->route('profile') ->with('success','Profile updated successfully.');
    
     
    }
    
    
}
