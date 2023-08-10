<?php if(Session::get('success', false)): ?>
    <?php $data = Session::get('success'); ?>
    <?php if(is_array($data)): ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-success" role="alert">
                <i class="fa fa-check"></i>
                <?php echo e($msg); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <div class="alert alert-success" role="alert">
            <i class="fa fa-check"></i>
            <?php echo e($data); ?>

        </div>
    <?php endif; ?>
<?php endif; ?>

 
                        
 <?php if(session('flash_message')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('flash_message')); ?>

            </div>
        <?php endif; ?>
           
           
                        
 <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
        
        
         
          <?php if(session('error')): ?>
        
    
            <div class="alert alert-warning" role="alert">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

            
            
            <?php /**PATH /home/saksbqic/services/resources/views/layouts/partials/messages.blade.php ENDPATH**/ ?>