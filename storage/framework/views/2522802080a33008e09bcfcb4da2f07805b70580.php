<?php $__env->startSection('template_title'); ?>
    <?php echo e(__('Create')); ?> Property
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


					<div class="col-md-8">
			 
                        
                       			  
                        <form method="POST" action="<?php echo e(route('properties.store' )); ?>"  role="form" enctype="multipart/form-data">
                       
                            <?php echo csrf_field(); ?>

                            
           
      
 
    
    
    
									   <div class="mb-3">
  <label for="project_name" class="form-label">Project Name</label>
  <input type="text" class="form-control" id="project_name" value="<?php echo e($property->project_name); ?>" name="project_name"  >
  
  
  
</div>
							
					 				   <div class="mb-3">
  <label for="location" class="form-label">Location</label>
  <input type="text" class="form-control" id="location" value="<?php echo e($property->location); ?>" name="location"  >
</div>

		 
							
							 
									    	    
							 
									  
									   <div class="mb-3">
  <label for="completion" class="form-label">Completion</label>
  <input type="text" class="form-control" id="completion" name="completion"   value="<?php echo e($property->completion); ?>"   >
</div>
 
								 		    
							 
			 
  
									    
							 
							  <div class="mb-3">
  <label for="developer" class="form-label">Developer</label>
 
    <input type="text" class="form-control" id="size_from" name="developer_id"  value="<?php echo e($property->developer_id); ?>"   >
 
 
 
</div>   
                                        
                                    
                                    
                                    
                                    
                                         <div class="mb-3">
  <label for="broker" class="form-label">Broker</label>
  
   <input type="text" class="form-control" id="size_from" name="broker_id"  value="<?php echo e($property->broker_id); ?>"   >
 
</div>   
                              
                             
 
 
								
  
                           <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
    	
									</form>
									    
									
</div>


 

   	 
                    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>       
                    
               <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
                         
                    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

   
<script src="https://unpkg.com/@yaireo/tagify"></script>
  <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
 
 
    
                        
                        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
                        
                        
                          <script>
                            
                            
                            
                            
                            
                                                    
  var connectivity_tags = document.querySelector('.connectivity_tags');
  
console.log(connectivity_tags);

 
     var connectivity_tags_values = [<?php echo '"'.implode('","', $connectivity_array).'"' ?>];
 
    // init Tagify script on the above inputs
    connectivity_tagify = new Tagify(connectivity_tags, {
      whitelist: connectivity_tags_values,
        maxTags             :1, mode : "select",
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: true    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })
    
    
    
    
  var input = document.querySelector('.tags');
  
 
     var tags_values = [<?php echo '"'.implode('","', $amminities_array).'"' ?>];
 
  
    // init Tagify script on the above inputs
    tagify = new Tagify(input, {
      whitelist: tags_values,
      
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })
    
    
    
    /////
    
    
    
     
    
  var project_tags_input = document.querySelector('.project_tags');
  
 
     var project_tags_values = ["Urgent Property","Top Property","Featured Property" ];
 
  
    // init Tagify script on the above inputs
    tagify = new Tagify(project_tags_input, {
      whitelist: project_tags_values,
      
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })
    
    
    ////
    
    
        /////
    
    
 
     
    
  var property_type_tags_input = document.querySelector('.property_type_tags');
  
 
     var property_type_tags_values = ["Apartment", "Penthouse","Villas", "Sky Villas",
     "Duplex",
     "Mansion","Townhouses",
     "Signature Villa",
     "Residential","Commercial","Industrial" ,"Investing in Land"];
 
  
    // init Tagify script on the above inputs
    tagify = new Tagify(property_type_tags_input, {
      whitelist: property_type_tags_values,
      
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })
    
    
    ////
    
    
    
 var allEditors = document.querySelectorAll('.editor');
                           
                           
        for (var i = 0; i < allEditors.length; ++i) {
          ClassicEditor.create(allEditors[i]);
        }
        
         
                </script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/property/create_property.blade.php ENDPATH**/ ?>