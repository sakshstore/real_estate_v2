			  
                        <form method="POST" action="{{ route('properties.update', $property->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            
           
  
                           <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
    
      
 
    
    
    
									   <div class="mb-3">
  <label for="project_name" class="form-label">Project Name</label>
  <input type="text" class="form-control" id="project_name" value="{{ $property->project_name }}" name="project_name"  >
  
  
  
</div>
							
					
									   <div class="mb-3">
  <label for="project_tags" class="form-label">Project Tags</label>
  <input type="text" class="form-control project_tags" id="project_tags" value="{{ $property->project_tags }}" name="project_tags"  >
  
  
  
</div>
							
							
		 
							
							
									   <div class="mb-3">
  <label for="location" class="form-label">Location</label>
  <input type="text" class="form-control" id="location" value="{{ $property->location }}" name="location"  >
</div>

@php

$price=json_decode($property->starting_price);
 
if(isset($price->aed))
{
$price_aed=$price->aed;
$price_usd=$price->usd;

}

else

{

$price_aed=0;
$price_usd=0;
}

 
@endphp
 
									   <div class="mb-3">
  <label for="starting_price" class="form-label">Starting Price (In AED ) </label>
  <input type="text" class="form-control" id="starting_price"  value="{{ $price_aed }}" name="starting_price[aed]"  >
</div>
 
									    
							 
									  
 
									   <div class="mb-3">
  <label for="starting_price" class="form-label">Starting Price (In USD ) </label>
  <input type="text" class="form-control" id="starting_price"  value="{{ $price_usd }}" name="starting_price[usd]"  >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="tenure" class="form-label">Tenure</label>
  <input type="text" class="form-control" id="tenure" name="tenure"   value="{{ $property->tenure }}" >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="completion" class="form-label">Completion</label>
  <input type="text" class="form-control" id="completion" name="completion"   value="{{ $property->completion }}"   >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="property_type" class="form-label">Property type</label>
  <input type="text" class="form-control property_type_tags" id="property_type" name="property_type"   value="{{ $property->property_type }}"  >
</div>
 
									  
									   <div class="mb-3">
  <label for="garage" class="form-label">Garage</label>
  <input type="text" class="form-control" id="garage" name="garage"   value="{{ $property->garage }}"  >
</div>
 
								
									  
									   <div class="mb-3">
  <label for="bathrooms" class="form-label">Bathrooms</label>
  <input type="text" class="form-control" id="bathrooms" name="bathrooms"   value="{{ $property->bathrooms }}"  >
</div>
									    
							 
									  
									   <div class="mb-3">
  <label for="interiors" class="form-label">Interiors</label>
  <input type="text" class="form-control" id="interiors" name="interiors"   value="{{ $property->interiors }}"  >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="unit_details" class="form-label">Unit details</label>
  <input type="text" class="form-control" id="unit_details" name="unit_details"   value="{{ $property->unit_details }}"  >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="payment_plan_short" class="form-label">Payment plan short</label>
  <input type="text" class="form-control" id="payment_plan_short" name="payment_plan_short"   value="{{ $property->payment_plan_short }}"  >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="size_from" class="form-label">Size from</label>
  <input type="text" class="form-control" id="size_from" name="size_from"  value="{{ $property->size_from }}"   >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="latitude" class="form-label">Latitude</label>
  <input type="text" class="form-control" id="latitude" name="latitude"  value="{{ $property->latitude }}"   >
</div>
 
								 
									   <div class="mb-3">
  <label for="longitude" class="form-label">Longitude</label>
  <input type="text" class="form-control" id="longitude" name="longitude"  value="{{ $property->longitude }}"   >
</div>
  
									    
							 
							  <div class="mb-3">
  <label for="developer" class="form-label">Developer</label>
 
    <input type="text" class="form-control" id="size_from" name="developer_id"  value="{{ $property->developer_id }}"   >
 
 
 
</div>   
                                        
                                    
                                    
                                    
                                    
                                         <div class="mb-3">
  <label for="broker" class="form-label">Broker</label>
  
   <input type="text" class="form-control" id="size_from" name="broker_id"  value="{{ $property->broker_id }}"   >
 
</div>   
                              
                            
                            
  <label for="floor_details" class="form-label">Floor details</label>
  <textarea class="form-control  editor" id="floor_details" name="floor_details"  rows="9"> {{ $property->floor_details }}</textarea>
            		   
   
									   <div class="mb-3">
  <label for="video_url" class="form-label">Set Video (youtube video ID) </label>
  <input type="text" class="form-control" id="video_url" value="{{ $property->video_url }}" name="video_url"  >
</div>
 
 
									
									</form>
									    
									