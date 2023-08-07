 
   <form method="POST" action="{{ route('subscribers.store') }}"  role="form" enctype="multipart/form-data"   class="row gx-3 gy-2 align-items-center">
                            @csrf
                            
                            
                            
                            
  <div class="col-sm-3">
    
    <input type="text" class="form-control"  name="full_name" id="specificSizeInputName" placeholder="full name">
  </div>
  <div class="col-sm-3">
    
    <div class="input-group">
        
        
        
       
         
         
         
         
      <div class="input-group-text">&#128241; </div>
      <input type="text" class="form-control  ($errors->has('whatsapp') ? ' is-invalid' : '') " id="saksh_whatsapp" name="whatsapp" placeholder="whatsapp">
      
       {!! $errors->first('whatsapp', '<div class="invalid-feedback">:message</div>') !!}
      
      
    </div>
  </div>
  <div class="col-sm-3">
         <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" class="form-control  ($errors->has('email') ? ' is-invalid' : '') " id="saksh_whatsapp" name="email" placeholder="whatsapp">
      
        </div>
  </div>
  
   
  
  
  <div class="col-sm-3">
    <button type="submit" class="btn shadow-lg p-3 mb-5 bg-body rounded">Subscriber</button><div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
<div class="shadow-sm p-3 mb-5 bg-body rounded">Small shadow</div>
<div class="shadow p-3 mb-5 bg-body rounded">Regular shadow</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">Larger shadow</div>
  </div>
  
  
  
</form>

 