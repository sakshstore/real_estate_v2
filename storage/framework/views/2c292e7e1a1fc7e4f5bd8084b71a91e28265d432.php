     ddd<form method="POST" action="<?php echo e(route('aminities_update', $property->id)); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>
                            
                            
                            
  <label for="aminities" class="form-label">Aminities</label>
  
  
   <input type="text" class="form-control tags" id="aminities" name="aminities"  value="<?php echo e($property->aminities); ?>"   >
   
 

  
                           <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
    
    
 </form>ddddd<?php /**PATH /home/saksbqic/services/resources/views/property/edit_sections/aminities.blade.php ENDPATH**/ ?>