<?php $__env->startSection('title'); ?>
Profile

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row">




        <div class="col-md-6">

           
           <table  class="table ">
    
    
    <tr> <td> Full Name </td><td><?php echo e($user->name); ?>  </td></tr>
    
    
    <tr> <td> Email </td><td><?php echo e($user->email); ?></td></tr>
    
        <tr> <td> Phone </td><td><?php echo e($user->phone); ?></td></tr>
     
    
        <tr> <td> Address </td><td><?php echo e($user->address); ?></td></tr>
    
        <tr> <td> Email </td><td><?php echo e($user->email); ?></td></tr>
    
      
    
    
    <tr> <td> Created At </td><td><?php echo e($user->created_at); ?></td></tr>
    <tr> <td> Updated At </td><td><?php echo e($user->updated_at); ?></td></tr>
    
    
    
    
</table>
<?php

    print_form_json_data( $user->form_json);
    ?>
    
    
 <a class="btn btn-primary" href="<?php echo e(route('profile.edit')); ?>"> Edit</a>


        </div>

    </div>
 






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/user/profile.blade.php ENDPATH**/ ?>