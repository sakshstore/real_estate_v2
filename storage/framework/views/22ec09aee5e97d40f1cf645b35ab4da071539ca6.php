<?php $__env->startSection('content'); ?>
    
    

 
        
        <h1>Login History</h1>
   
        

        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                
                <th>IP</th>
                <th>Created at</th>
                
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $login_histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $login_history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($login_history->id); ?></th>
                        <td><?php echo e($login_history->ip); ?></td>
                        <td><?php echo e($login_history->created_at); ?></td>
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>


    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/user/login_history.blade.php ENDPATH**/ ?>