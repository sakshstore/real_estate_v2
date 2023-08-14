<?php $__env->startSection('title'); ?>
    Update Customform
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 
 
 
              
         
                        <form method="POST" action="<?php echo e(route('customforms.update', $customform->id)); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('customform.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </form>
                        
                        
    </section>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/customform/edit.blade.php ENDPATH**/ ?>