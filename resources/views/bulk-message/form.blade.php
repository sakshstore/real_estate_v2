 
        
 
        
         
        
        <div class="form-group  mb-3">
        
  <label for="saksh_content" class="form-label">Content</label>
  
    <textarea  class="form-control  editor   ($errors->has('content') ? ' is-invalid' : '')  "   name="content"  id="saksh_content" rows="10">{{ $bulkMessage->content }}  </textarea>
    
     
     
      
  
    {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
</div>

           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_plateforms" class="form-label">Plateforms</label>
  
  
  <input type="text" class="form-control  tags  ($errors->has('plateforms') ? ' is-invalid' : '')  " value="{{ $bulkMessage->plateforms }}"  id="saksh_plateforms" name="plateforms" placeholder="Plateforms">
  
    {!! $errors->first('plateforms', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_scheduled_at" class="form-label">Scheduled at</label>
  
  
  <input type="datetime-local" class="form-control  ($errors->has('scheduled_at') ? ' is-invalid' : '')  " id="saksh_scheduled_at"  value="{{ $bulkMessage->scheduled_at }}"  name="scheduled_at" placeholder="Delivery Time">
  
    {!! $errors->first('scheduled_at', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
     


           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  