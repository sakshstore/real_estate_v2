<?php $__env->startSection('content'); ?>
    
  
        <h1>Users</h1>
        <div class="title">
            Manage your users here.
            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary btn-sm float-right w-100 mt-2">Add new user</a>
           
            
              


        </div>
        
      
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>    <th>status</th>
                <th>Roles</th>
                <th  colspan="3"></th>    
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th ><?php echo e($user->id); ?></th>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->username); ?>  </td>  
                        
                      
                              
                              <td><?php echo e($user->status); ?></td>
                        <td>
                            <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="badge bg-primary"><?php echo e($role->name); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td><a href="<?php echo e(route('users.show', $user->id)); ?>" class="btn btn-warning btn-sm">Show</a></td>
                        <td><a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                          
                            <form method="delete" action="<?php echo e(route('users.destroy', $user->id)); ?>" >
                                
                                <input type="submit" class="btn btn-sm" value="Delete" />
                                
                                
                            </form>
                           
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div >
            <?php echo $users->links(); ?>

        </div>
 
 
 
 

 
  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/users/index.blade.php ENDPATH**/ ?>