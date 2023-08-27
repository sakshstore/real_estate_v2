 
             
              
    
                        <span class="header">Lead Master</span>
                
  <form method="POST" action="{{ route('settings_master') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            
 
        
        <div class="form-group  mb-3">
        
  <label for="lead_tags" class="form-label">lead_tags</label>
  
  
  <input type="text" class="form-control  ($errors->has('lead_tags') ? ' is-invalid' : '')  " id="lead_tags"  value="{{ $settings->lead_tags }}"    name="lead_tags"  >
  
    {!! $errors->first('lead_tags', '<div class="invalid-feedback">:message</div>') !!}
</div>
      
      
      
      
       <div class="form-group  mb-3">
        
  <label for="lead_status" class="form-label">lead_status</label>
  
  
  <input type="text" class="form-control  ($errors->has('lead_status') ? ' is-invalid' : '')  " id="lead_status"  value="{{ $settings->lead_status }}"    name="lead_status"  >
  
    {!! $errors->first('lead_status', '<div class="invalid-feedback">:message</div>') !!}
</div>





        <button type="submit" class="btn btn-primary w-100 mt-5 mb-5">Submit</button>
        
  
                        </form>
                         