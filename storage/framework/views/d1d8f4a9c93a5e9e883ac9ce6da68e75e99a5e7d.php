 

<?php $__env->startSection('title'); ?>
    <?php echo e($post->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     
                        
               <div class="container">
               <div class="row">
                   
                   
               <div class="col-md-12">
                   
                   
                        <img src="<?php echo e(asset($post->thumbnail )); ?>" class="img-fluid " />
                     <h1 class="title">
                         
                                   <?php echo e($post->title); ?>

                     
                         
                     </h1>
                  
                  <div class="content">
                      
                        <?php echo $post->content; ?> 
                      
                      
                  </div>
                        
                  <div class="tags">
                      
                        <?php echo e($post->tags); ?> 
                      
                      
                  </div>
             <?php echo e(views($post)->count()); ?>;
                         
                     
                   
               </div>
               
                   
               </div>
               
                   
               </div>
               
                     
                
                     


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/post/blog_view.blade.php ENDPATH**/ ?>