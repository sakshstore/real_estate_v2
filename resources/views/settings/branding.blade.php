 
             
              
                
  <form method="POST" action="{{ route('settings_branding') }}"  role="form" enctype="multipart/form-data">
                            @csrf
 
        <div class="form-group  mb-3">
        
  <label for="app_name" class="form-label">App Name</label>
  
  
  <input type="text" class="form-control  ($errors->has('app_name') ? ' is-invalid' : '')  " id="app_name"  value="{{ $settings->app_name }}"    name="app_name"  >
  
    {!! $errors->first('app_name', '<div class="invalid-feedback">:message</div>') !!}
</div>
      
      
      
   
   
        <div class="form-group  mb-3">
        
  <label for="app_url" class="form-label">App URL</label>
  
  
  <input type="text" class="form-control  ($errors->has('app_url') ? ' is-invalid' : '')  " id="app_url"  value="{{ $settings->app_url }}"    name="app_url"  >
  
    {!! $errors->first('app_url', '<div class="invalid-feedback">:message</div>') !!}
</div>
   
   
        <div class="form-group  mb-3">
        
  <label for="instagram_url" class="form-label">Instagram URL</label>
  
  
  <input type="text" class="form-control  ($errors->has('instagram_url') ? ' is-invalid' : '')  " id="instagram_url"  value="{{ $settings->instagram_url }}"    name="instagram_url"  >
  
    {!! $errors->first('instagram_url', '<div class="invalid-feedback">:message</div>') !!}
</div>

   
        <div class="form-group  mb-3">
        
  <label for="whatsapp_url" class="form-label">Whatsapp chat start link</label>
  
  
  <input type="text" class="form-control  ($errors->has('whatsapp_url') ? ' is-invalid' : '')  " id="whatsapp_url"  value="{{ $settings->whatsapp_url }}"    name="whatsapp_url"  >
  
    {!! $errors->first('whatsapp_url', '<div class="invalid-feedback">:message</div>') !!}
</div>

   
        <div class="form-group  mb-3">
        
  <label for="twitter_url" class="form-label">Twitter URL</label>
  
  
  <input type="text" class="form-control  ($errors->has('twitter_url') ? ' is-invalid' : '')  " id="twitter_url"  value="{{ $settings->twitter_url }}"    name="twitter_url"  >
  
    {!! $errors->first('twitter_url', '<div class="invalid-feedback">:message</div>') !!}
</div>

   
        <div class="form-group  mb-3">
        
  <label for="facebook_url" class="form-label">Facebook URL</label>
  
  
  <input type="text" class="form-control  ($errors->has('facebook_url') ? ' is-invalid' : '')  " id="facebook_url"  value="{{ $settings->facebook_url }}"    name="facebook_url"  >
  
    {!! $errors->first('facebook_url', '<div class="invalid-feedback">:message</div>') !!}
</div>

   
        <div class="form-group  mb-3">
        
  <label for="youtube_url" class="form-label">Youtube URL</label>
  
  
  <input type="text" class="form-control  ($errors->has('youtube_url') ? ' is-invalid' : '')  " id="youtube_url"  value="{{ $settings->youtube_url }}"    name="youtube_url"  >
  
    {!! $errors->first('youtube_url', '<div class="invalid-feedback">:message</div>') !!}
</div>



<p>System will log out once you save this </p>

        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  

                        </form>
                         