 
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_name" class="form-label">name</label>
  
  
  <input type="text" class="form-control  ($errors->has('name') ? ' is-invalid' : '')  " id="saksh_name" name="name"   value="{{$subscriber->name}}" placeholder="name">
  
    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_email" class="form-label">email</label>
  
  
  <input type="text" class="form-control  ($errors->has('email') ? ' is-invalid' : '')  " id="saksh_email" name="email"   value="{{$subscriber->email}}" placeholder="email">
  
    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_whatsapp" class="form-label">whatsapp</label>
  
  
  <input type="text" class="form-control  ($errors->has('whatsapp') ? ' is-invalid' : '')  " id="saksh_whatsapp" name="whatsapp"   value="{{$subscriber->whatsapp}}" placeholder="whatsapp">
  
    {!! $errors->first('whatsapp', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_calls" class="form-label">calls</label>
  
  
  <input type="text" class="form-control  ($errors->has('calls') ? ' is-invalid' : '')  " id="saksh_calls" name="calls"   value="{{$subscriber->calls}}" placeholder="calls">
  
    {!! $errors->first('calls', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
         


           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  