 
<div class="accordion" id="accordionExample">
 

     
     
     
                                    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       
                                         <div class="accordion-item">
    <h2 class="accordion-header" id="heading<?php echo e($faq->id); ?>">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($faq->id); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($faq->id); ?>">
       <?php echo e($faq->question); ?> 

         
            
       
      </button>
    </h2>
    <div id="collapse<?php echo e($faq->id); ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo e($faq->id); ?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php echo $faq->answer; ?>

        
        
        
        
        
         <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
        
          <?php
       
       $faq_tags = explode(",", $faq->tags);
         ?>
         
         
       <?php $__currentLoopData = $faq_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq_tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
       <span class="badge rounded-pill text-bg-info"><?php echo e($faq_tag); ?></span>
       
       
       
       
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <form action="<?php echo e(route('faqs.destroy',$faq->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('faqs.show',$faq->id)); ?>"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('faqs.edit',$faq->id)); ?>"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                                
                            
           
          <?php endif; ?>                      
                                                
                                                
                                                
                                                
      </div>
    </div>
  </div>
                                             
 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    
                                    
</div><?php /**PATH /home/saksbqic/services/resources/views/faq/faqs.blade.php ENDPATH**/ ?>