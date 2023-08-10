 
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_title" class="form-label">title</label>
  
  
  <input type="text" class="form-control  ($errors->has('title') ? ' is-invalid' : '')  " name="title" id="saksh_title" placeholder="Title">
  
    {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_description" class="form-label">description</label>
  
  
  <input type="text" class="form-control  ($errors->has('description') ? ' is-invalid' : '')  "  name="description" id="saksh_description" placeholder="Description">
  
    {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_service_id" class="form-label">service_id</label>
  
  
  <input type="text" class="form-control  ($errors->has('service_id') ? ' is-invalid' : '')  "  name="service_id" id="saksh_service_id" placeholder="Service Id">
  
    {!! $errors->first('service_id', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_payment_status" class="form-label">payment_status</label>
  
  
  <input type="text" class="form-control  ($errors->has('payment_status') ? ' is-invalid' : '')  "  name="payment_status" id="saksh_payment_status" placeholder="Payment Status">
  
    {!! $errors->first('payment_status', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_payment_reference_id" class="form-label">payment_reference_id</label>
  
  
  <input type="text" class="form-control  ($errors->has('payment_reference_id') ? ' is-invalid' : '')  "  name="payment_reference_id" id="saksh_payment_reference_id" placeholder="Payment Reference Id">
  
    {!! $errors->first('payment_reference_id', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
         

           
 
        
         


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_status" class="form-label">status</label>
  
  
  <input type="text" class="form-control  ($errors->has('status') ? ' is-invalid' : '')  "  name="status" id="saksh_status" placeholder="Status">
  
    {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
     
           
 
         


           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  