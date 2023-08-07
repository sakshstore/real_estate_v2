 
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_full_name" class="form-label">Full name</label>
  
  
  <input type="text" class="form-control  ($errors->has('full_name') ? ' is-invalid' : '')  " id="saksh_full_name" value="{{$team->full_name}}"   name="full_name" placeholder="Full Name">
  
    {!! $errors->first('full_name', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_about" class="form-label">About</label>
  
  
  <input type="text" class="form-control  ($errors->has('about') ? ' is-invalid' : '')  " id="saksh_about" value="{{$team->about}}"   name="about" placeholder="About">
  
    {!! $errors->first('about', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_instagram_url" class="form-label">Instagram url</label>
  
  
  <input type="text" class="form-control  ($errors->has('instagram_url') ? ' is-invalid' : '')  "  value="{{$team->instagram_url}}"  id="saksh_instagram_url" name="instagram_url" placeholder="Instagram Url">
  
    {!! $errors->first('instagram_url', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_facebook_url" class="form-label">Facebook url</label>
  
  
  <input type="text" class="form-control  ($errors->has('facebook_url') ? ' is-invalid' : '')  "  value="{{$team->facebook_url}}"  id="saksh_facebook_url" name="facebook_url" value="{{$team->facebook_url}}"  placeholder="Facebook Url">
  
    {!! $errors->first('facebook_url', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_linked_url" class="form-label">Linked url</label>
  
  
  <input type="text" class="form-control  ($errors->has('linked_url') ? ' is-invalid' : '')  " value="{{$team->linked_url}}"   id="saksh_linked_url" name="linked_url" placeholder="Linked Url">
  
    {!! $errors->first('linked_url', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_whatsapp_number" class="form-label">Whatsapp number</label>
  
  
  <input type="text" class="form-control  ($errors->has('whatsapp_number') ? ' is-invalid' : '')  " value="{{$team->whatsapp_number}}"   id="saksh_whatsapp_number" name="whatsapp_number" placeholder="Whatsapp Number">
  
    {!! $errors->first('whatsapp_number', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
         
 
         
           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  