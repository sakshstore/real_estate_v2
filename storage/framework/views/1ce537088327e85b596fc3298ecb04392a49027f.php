<?php $__env->startSection('content'); ?>
    
  
        <h2>Permissions</h2>
        <div class="title">
            Manage your permissions here.
            <a href="<?php echo e(route('permissions.create')); ?>" class="btn btn-primary btn-sm float-right">Add permissions</a>
        </div>
        
    
    

        <table class="table table-striped">
            <thead>
            <tr>
                <th >Name</th>
                <th >Guard</th> 
                <th  ></th> 
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($permission->name); ?></td>
                        <td><?php echo e($permission->guard_name); ?></td>
                        <td><a href="<?php echo e(route('permissions.edit', $permission->id)); ?>" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
 <form method="post" action="<?php echo e(route('permissions.destroy', $permission->id)); ?>" > <?php echo csrf_field(); ?>
                           <?php echo method_field('DELETE'); ?>        
      <input type="submit" class="btn btn-sm" value="Delete" />
                                
                                
                            </form>
                           
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/permissions/index.blade.php ENDPATH**/ ?>