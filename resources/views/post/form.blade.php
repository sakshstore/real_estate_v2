 
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_title" class="form-label">Title</label>
  
  
  <input type="text" class="form-control  ($errors->has('title') ? ' is-invalid' : '')  " id="saksh_title" value="{{ $post->title }}"  name="title" placeholder="Title">
  
    {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_content" class="form-label">content</label>
  
 
  
  
  <textarea  class="form-control  editor   ($errors->has('content') ? ' is-invalid' : '')  "   name="content"  id="saksh_content" rows="10">{{ $post->content }}  </textarea>
    
     
     
     
    {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
</div>
 


        <div class="form-group  mb-3">
        
  <label for="saksh_tags" class="form-label">Tags</label>
  
  
  <input type="text" class="form-control  tags ($errors->has('tags') ? ' is-invalid' : '')  " id="saksh_tags" value="{{ $post->tags }}"  name="tags" placeholder="tags">
  
    {!! $errors->first('tags', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
           
 
         

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  