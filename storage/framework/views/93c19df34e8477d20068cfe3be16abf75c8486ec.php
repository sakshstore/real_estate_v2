			  
                        <form method="POST" action="<?php echo e(route('properties.update', $property->id)); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>

                            
           
  
                           <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
    
      
 
    
    
    
									   <div class="mb-3">
  <label for="project_name" class="form-label">Project Name</label>
  <input type="text" class="form-control" id="project_name" value="<?php echo e($property->project_name); ?>" name="project_name"  >
  
  
  
</div>
							
					
									   <div class="mb-3">
  <label for="project_tags" class="form-label">Project Tags</label>
  <input type="text" class="form-control project_tags" id="project_tags" value="<?php echo e($property->project_tags); ?>" name="project_tags"  >
  
  
  
</div>
							
							
		 
							
							
									   <div class="mb-3">
  <label for="location" class="form-label">Location</label>
  <input type="text" class="form-control" id="location" value="<?php echo e($property->location); ?>" name="location"  >
</div>

<?php

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

 
?>
 
									   <div class="mb-3">
  <label for="starting_price" class="form-label">Starting Price (In AED ) </label>
  <input type="text" class="form-control" id="starting_price"  value="<?php echo e($price_aed); ?>" name="starting_price[aed]"  >
</div>
 
									    
							 
									  
 
									   <div class="mb-3">
  <label for="starting_price" class="form-label">Starting Price (In USD ) </label>
  <input type="text" class="form-control" id="starting_price"  value="<?php echo e($price_usd); ?>" name="starting_price[usd]"  >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="tenure" class="form-label">Tenure</label>
  <input type="text" class="form-control" id="tenure" name="tenure"   value="<?php echo e($property->tenure); ?>" >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="completion" class="form-label">Completion</label>
  <input type="text" class="form-control" id="completion" name="completion"   value="<?php echo e($property->completion); ?>"   >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="property_type" class="form-label">Property type</label>
  <input type="text" class="form-control property_type_tags" id="property_type" name="property_type"   value="<?php echo e($property->property_type); ?>"  >
</div>
 
									  
								
								
							 
									  
									   <div class="mb-3">
  <label for="interiors" class="form-label">Interiors</label>
  <input type="text" class="form-control" id="interiors" name="interiors"   value="<?php echo e($property->interiors); ?>"  >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="unit_details" class="form-label">Unit details</label>
  <input type="text" class="form-control" id="unit_details" name="unit_details"   value="<?php echo e($property->unit_details); ?>"  >
</div>
 
									    
									    
									    
							 
									  
									   <div class="mb-3">
  <label for="size_from" class="form-label">Size from</label>
  <input type="text" class="form-control" id="size_from" name="size_from"  value="<?php echo e($property->size_from); ?>"   >
</div>
 
									    
							 
									  
									   <div class="mb-3">
  <label for="latitude" class="form-label">Latitude</label>
  <input type="text" class="form-control" id="latitude" name="latitude"  value="<?php echo e($property->latitude); ?>"   >
</div>
 
								 
									   <div class="mb-3">
  <label for="longitude" class="form-label">Longitude</label>
  <input type="text" class="form-control" id="longitude" name="longitude"  value="<?php echo e($property->longitude); ?>"   >
</div>
  
									    
							 
							  <div class="mb-3">
  <label for="developer" class="form-label">Developer</label>
 
    <input type="text" class="form-control" id="size_from" name="developer_id"  value="<?php echo e($property->developer_id); ?>"   >
 
 
 
</div>   
                                        
                                    
                                    
                                    
                                    
                                         <div class="mb-3">
  <label for="broker" class="form-label">Broker</label>
  
   <input type="text" class="form-control" id="size_from" name="broker_id"  value="<?php echo e($property->broker_id); ?>"   >
 
</div>   
                              
                            
                            
  <label for="floor_details" class="form-label">Floor details</label>
  <textarea class="form-control  editor" id="floor_details" name="floor_details"  rows="9"> <?php echo e($property->floor_details); ?></textarea>
            		   
   
									   <div class="mb-3">
  <label for="video_url" class="form-label">Set Video (youtube video ID) </label>
  <input type="text" class="form-control" id="video_url" value="<?php echo e($property->video_url); ?>" name="video_url"  >
</div>
 
 
							 
							
									
									
									
									</form>
									     
									<?php /**PATH /home/saksbqic/services/resources/views/property/edit_sections/overview.blade.php ENDPATH**/ ?>