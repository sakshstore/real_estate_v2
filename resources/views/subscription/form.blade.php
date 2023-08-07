 
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_name" class="form-label">name</label>
  
  
  <input type="text" class="form-control  ($errors->has('name') ? ' is-invalid' : '')  " id="saksh_name" name="name"   value="{{$subscription->name}}" placeholder="name">
  
    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_amount" class="form-label">amount</label>
  
  
  <input type="text" class="form-control  ($errors->has('amount') ? ' is-invalid' : '')  " id="saksh_amount" name="amount"   value="{{$subscription->amount}}" placeholder="amount">
  
    {!! $errors->first('amount', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_currency" class="form-label">currency</label>
  
  
  <input type="text" class="form-control  ($errors->has('currency') ? ' is-invalid' : '')  " id="saksh_currency" name="currency"   value="{{$subscription->currency}}" placeholder="currency">
  
    {!! $errors->first('currency', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_property_submission" class="form-label">property_submission</label>
  
  
  <input type="text" class="form-control  ($errors->has('property_submission') ? ' is-invalid' : '')  " id="saksh_property_submission" name="property_submission"   value="{{$subscription->property_submission}}" placeholder="property_submission">
  
    {!! $errors->first('property_submission', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_featured_property" class="form-label">featured_property</label>
  
  
  <input type="text" class="form-control  ($errors->has('featured_property') ? ' is-invalid' : '')  " id="saksh_featured_property" name="featured_property"   value="{{$subscription->featured_property}}" placeholder="featured_property">
  
    {!! $errors->first('featured_property', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_top_property" class="form-label">top_property</label>
  
  
  <input type="text" class="form-control  ($errors->has('top_property') ? ' is-invalid' : '')  " id="saksh_top_property" name="top_property"   value="{{$subscription->top_property}}" placeholder="top_property">
  
    {!! $errors->first('top_property', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_urgent_property" class="form-label">urgent_property</label>
  
  
  <input type="text" class="form-control  ($errors->has('urgent_property') ? ' is-invalid' : '')  " id="saksh_urgent_property" name="urgent_property"   value="{{$subscription->urgent_property}}" placeholder="urgent_property">
  
    {!! $errors->first('urgent_property', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_line_1" class="form-label">line_1</label>
  
  
  <input type="text" class="form-control  ($errors->has('line_1') ? ' is-invalid' : '')  " id="saksh_line_1" name="line_1"   value="{{$subscription->line_1}}" placeholder="line_1">
  
    {!! $errors->first('line_1', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_line_2" class="form-label">line_2</label>
  
  
  <input type="text" class="form-control  ($errors->has('line_2') ? ' is-invalid' : '')  " id="saksh_line_2" name="line_2"   value="{{$subscription->line_2}}" placeholder="line_2">
  
    {!! $errors->first('line_2', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_line_3" class="form-label">line_3</label>
  
  
  <input type="text" class="form-control  ($errors->has('line_3') ? ' is-invalid' : '')  " id="saksh_line_3" name="line_3"   value="{{$subscription->line_3}}" placeholder="line_3">
  
    {!! $errors->first('line_3', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_line_4" class="form-label">line_4</label>
  
  
  <input type="text" class="form-control  ($errors->has('line_4') ? ' is-invalid' : '')  " id="saksh_line_4" name="line_4"   value="{{$subscription->line_4}}" placeholder="line_4">
  
    {!! $errors->first('line_4', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_user_id" class="form-label">user_id</label>
  
  
  <input type="text" class="form-control  ($errors->has('user_id') ? ' is-invalid' : '')  " id="saksh_user_id" name="user_id"   value="{{$subscription->user_id}}" placeholder="user_id">
  
    {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
</div>


           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  