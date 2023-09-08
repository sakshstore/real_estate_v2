 
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_label" class="form-label">label</label>
  
  
  <input type="text" class="form-control  ($errors->has('label') ? ' is-invalid' : '')  " id="saksh_label" name="label"   value="{{$block->label}}" placeholder="label">
  
    {!! $errors->first('label', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_content" class="form-label">content</label>
  
  
      <textarea  class="form-control  editor   ($errors->has('content') ? ' is-invalid' : '')  "   name="content"  id="saksh_content" rows="10">{{ $block->content }}   </textarea>
    
     
     
      
  
    {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
</div>


            

           
 
        
         

           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  