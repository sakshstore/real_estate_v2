<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jackiedo\DotenvEditor\Facades\DotenvEditor;

use App\Models\Settings;
 use Illuminate\Support\Facades\Auth;
 

use App\Models\User;
 
use Illuminate\Support\Facades\Mail;
 
use App\Mail\SakshMail;



class SettingsController extends Controller
{
    //
    
      public function get_settings()
    {
        
        $settings= new Settings();
        
        
        $settings->app_name=DotenvEditor::getValue('APP_NAME'); 
        $settings->instagram_url=DotenvEditor::getValue('INSTAGRAM_URL'); 
        $settings->app_logo=DotenvEditor::getValue('APP_LOGO'); 
        $settings->app_url=DotenvEditor::getValue('APP_URL');  
        
        
        $settings->host=DotenvEditor::getValue('MAIL_HOST'); 
        $settings->port=DotenvEditor::getValue('MAIL_PORT'); 
        $settings->username=DotenvEditor::getValue('MAIL_USERNAME'); 
        $settings->password=DotenvEditor::getValue('MAIL_PASSWORD'); 
        
        
     
        
        
        $settings->encryption=DotenvEditor::getValue('MAIL_ENCRYPTION'); 
        $settings->from_address=DotenvEditor::getValue('MAIL_FROM_ADDRESS'); 
        $settings->from_name=DotenvEditor::getValue('MAIL_FROM_NAME'); 
        
        
        
        $settings->twitter_url=DotenvEditor::getValue('TWITTER_URL'); 
        $settings->facebook_url=DotenvEditor::getValue('FACEBOOK_URL'); 
        $settings->youtube_url=DotenvEditor::getValue('YOUTUBE_URL'); 
        $settings->whatsapp_url=DotenvEditor::getValue('WHATSAPP_URL'); 
        
        
        
        
           $settings->recaptcha_key=DotenvEditor::getValue('GOOGLE_RECAPTCHA_KEY'); 
        $settings->recaptcha_secret=DotenvEditor::getValue('GOOGLE_RECAPTCHA_SECRET'); 
        
        
        
        //$keys = DotenvEditor::getKeys();
         
 return view('settings.form',compact('settings'));
   
   
     
        
    }
    
          
      public function settings_logo(Request $request)
    {
        
  
     
         $app_logo = $request->file('file');
         
         
      $imagefileName  = time().'__'.$app_logo->getClientOriginalName();
      
      
   $app_logo_url = $app_logo->storeAs('logo', $imagefileName, 'public');
            
$host=DotenvEditor::getValue('APP_URL'); 

  
           $editor = DotenvEditor::setKeys([
    
    'APP_LOGO' =>$host."/storage/". $app_logo_url  
    
    
]);
     

$editor->save();

return "Uploaded succesfully";


    }
    
        
      public function settings_branding(Request $request)
    {
        
        


           $editor = DotenvEditor::setKeys([
     'APP_NAME' =>  $request->app_name,
   
       'APP_URL' =>  $request->app_url ,
       'INSTAGRAM_URL' =>  $request->instagram_url
    ,
       'WHATSAPP_URL' =>  $request->whatsapp_url
    ,
       'TWITTER_URL' =>  $request->twitter_url
    ,
       'FACEBOOK_URL' =>  $request->facebook_url
    ,
       'YOUTUBE_URL' =>  $request->youtube_url
  
    
]);
     

$editor->save();
        
     return redirect()->back() ->with('success', 'Updated successfully.');  
        
        
    }
    
    
    
    public function settings_recaptcha(Request $request)
    {
        
        
        $editor = DotenvEditor::setKeys([
    'GOOGLE_RECAPTCHA_KEY' =>  $request->recaptcha_key,
    'GOOGLE_RECAPTCHA_SECRET' => $request->recaptcha_secret 
    
    
]);

    $editor->save();
        
        
        return redirect()->back()
            ->with('success', 'Updated successfully.');  
        
        
    }
    
    
    
    
    public function settings_notifications(Request $request)
    {
        
        $editor = DotenvEditor::setKeys([
    'MAIL_HOST' =>  $request->host,
    'MAIL_PORT' => $request->port,
    'MAIL_USERNAME' => $request->username,
    'MAIL_PASSWORD' => $request->password,
    'MAIL_ENCRYPTION' => $request->encryption,
    'MAIL_FROM_ADDRESS' => $request->from_address,
    
    'MAIL_FROM_NAME' =>$request->from_name,
    
    
]);
          $editor->save();
          
          
             
      
       
         $user=Auth::user();
        
                Mail::to($user)->send(new SakshMail("This is a test message as you just uploaded the SMTP information"));
                
                
                
                
                
                
        
        
        return redirect()->back()
            ->with('success', 'Updated successfully. and a test email was sent to '.$user->email);
            
        
    }
   
    
    
}
