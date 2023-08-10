<?php $__env->startSection('title'); ?>
    Auto Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   
                 
                            <span id="header">
                                <?php echo e(__('Auto Post')); ?>

                            </span>

                             
                                <a href="<?php echo e(route('auto_posts.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Keywords</th>
										<th>Category</th>
										<th>Tags</th>
                                        <th>status</th>
                                        <th>post_id</th>
										<th>Schedule At</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $autoPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autoPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                          	<td><?php echo e($autoPost->id); ?></td>
                                            
											<td><?php echo e($autoPost->keywords); ?></td>
											<td><?php echo e($autoPost->category); ?></td>
											<td><?php echo e($autoPost->tags); ?></td>
											<td><?php echo e($autoPost->status); ?></td>
											<td><?php echo e($autoPost->post_id); ?></td>
	<td><?php echo e($autoPost->scheduled_at); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('auto_posts.destroy',$autoPost->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('auto_posts.show',$autoPost->id)); ?>"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('auto_posts.edit',$autoPost->id)); ?>"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    
                <?php echo $autoPosts->links(); ?>

             
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/auto-post/index.blade.php ENDPATH**/ ?>