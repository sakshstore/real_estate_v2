     ddd<form method="POST" action="{{ route('aminities_update', $property->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            
                            
                            
  <label for="aminities" class="form-label">Aminities</label>
  
  
   <input type="text" class="form-control tags" id="aminities" name="aminities"  value="{{ $property->aminities }}"   >
   
 

  
                           <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
    
    
 </form>ddddd