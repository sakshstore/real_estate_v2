 	     <form method="POST" action="{{ route('properties.update', $property->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            
 
  <textarea class="form-control  editor" id="payment_plan_details" name="payment_plan_details"  rows="9">  {{ $property->payment_plan_details }} </textarea>
  
  
                           <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
    
    
  </form>