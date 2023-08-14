              		    
                                          		     <form method="POST" action="<?php echo e(route('properties.update', $property->id)); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>
                            
                            
                            
                             
  <textarea class="form-control  editor" id="project_details" name="project_details"  rows="9"> <?php echo e($property->project_details); ?></textarea>
  
  
                           <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
    
    
  </form><?php /**PATH /home/saksbqic/services/resources/views/property/edit_sections/project_details.blade.php ENDPATH**/ ?>