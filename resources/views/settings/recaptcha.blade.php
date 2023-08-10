 
             
             
                        <span class="header">Recaptcha</span>
                
  <form method="POST" action="{{ route('settings_recaptcha') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            
 
        
        <div class="form-group  mb-3">
        
  <label for="recaptcha_key" class="form-label">Recaptcha Key</label>
  
  
  <input type="text" class="form-control  ($errors->has('recaptcha_key') ? ' is-invalid' : '')  " id="recaptcha_key"  value="{{ $settings->recaptcha_key }}"    name="recaptcha_key"  >
  
    {!! $errors->first('recaptcha_key', '<div class="invalid-feedback">:message</div>') !!}
</div>
      
      
      
      
       <div class="form-group  mb-3">
        
  <label for="recaptcha_secret" class="form-label">Recaptcha Secret</label>
  
  
  <input type="text" class="form-control  ($errors->has('recaptcha_secret') ? ' is-invalid' : '')  " id="recaptcha_secret"  value="{{ $settings->recaptcha_secret }}"    name="recaptcha_secret"  >
  
    {!! $errors->first('recaptcha_secret', '<div class="invalid-feedback">:message</div>') !!}
</div>





        <button type="submit" class="btn btn-primary w-100 mt-5 mb-5">Submit</button>
        
       <p>
           
           
        Google reCAPTCHA v3 is a free service that protects your website from spam and abuse by using advanced risk analysis techniques to tell humans and bots apart https://developers.google.com/recaptcha/docs/v3.
        Unlike previous versions of reCAPTCHA, v3 does not require any user interaction, such as clicking a checkbox or solving a puzzle. 
        Instead, it returns a score for each request, ranging from 0.0 (very likely a bot) to 1.0 (very likely a human), 
        based on the interactions with your site https://developers.google.com/recaptcha/docs/v3.
        
 

 
           
           
       </p> 
       
           <p>
               
               
To use reCAPTCHA v3 on your website, you need to register your site on the reCAPTCHA Admin console and get a site key and a secret key

https://developers.google.com/recaptcha/docs/v3. 

 </p> 




  <p> To get Keys plz visit https://www.google.com/recaptcha/admin  </p>

                        </form>
                         