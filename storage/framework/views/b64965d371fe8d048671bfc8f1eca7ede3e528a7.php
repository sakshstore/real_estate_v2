 

<?php $__env->startSection('title'); ?>
    <?php echo e($page->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     
                        
               
               
                     
                     
                     
                            <?php echo $page->content; ?>

                     
                     


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/page/page_view.blade.php ENDPATH**/ ?>