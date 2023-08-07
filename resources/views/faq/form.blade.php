 
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_question" class="form-label">question</label>
  
  
  <input type="text" class="form-control  ($errors->has('question') ? ' is-invalid' : '')  " id="saksh_question" name="question" placeholder="Question">
  
    {!! $errors->first('question', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_answer" class="form-label">answer</label>
  
  
  <input type="text" class="form-control  ($errors->has('answer') ? ' is-invalid' : '')  " id="saksh_answer" name="answer" placeholder="Answer">
  
    {!! $errors->first('answer', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_category" class="form-label">category</label>
  
  
  <input type="text" class="form-control  ($errors->has('category') ? ' is-invalid' : '')  " id="saksh_category" name="category" placeholder="Category">
  
    {!! $errors->first('category', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_user_id" class="form-label">user_id</label>
  
  
  <input type="text" class="form-control  ($errors->has('user_id') ? ' is-invalid' : '')  " id="saksh_user_id" name="user_id" placeholder="User Id">
  
    {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
</div>


           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  