 
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_keywords" class="form-label">keywords</label>
  
  
  <input type="text" class="form-control  ($errors->has('keywords') ? ' is-invalid' : '')  " id="saksh_keywords" name="keywords"   value="{{$autoPost->keywords}}" placeholder="keywords">
  
    {!! $errors->first('keywords', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_category" class="form-label">category</label>
  
  
  <input type="text" class="form-control  ($errors->has('category') ? ' is-invalid' : '')  " id="saksh_category" name="category"   value="{{$autoPost->category}}" placeholder="category">
  
    {!! $errors->first('category', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_tags" class="form-label">tags</label>
  
  
  <input type="text" class="form-control  ($errors->has('tags') ? ' is-invalid' : '')  " id="saksh_tags" name="tags"   value="{{$autoPost->tags}}" placeholder="tags">
  
    {!! $errors->first('tags', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_schedule_at" class="form-label">schedule_at</label>
  
  
  <input type="text" class="form-control  ($errors->has('schedule_at') ? ' is-invalid' : '')  " id="saksh_schedule_at" name="schedule_at"   value="{{$autoPost->schedule_at}}" placeholder="schedule_at">
  
    {!! $errors->first('schedule_at', '<div class="invalid-feedback">:message</div>') !!}
</div>


           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  