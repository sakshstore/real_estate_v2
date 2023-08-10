<?php $__env->startSection('title'); ?>
    Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   
                 
                            
                             
                                <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              
                            
                             
                                <a href="<?php echo e(route('get_create_ai_post')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New Post by AI')); ?>

                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Title</th>
								 
										<th>Tags</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                     		<td><?php echo e($post->id); ?></td>
											<td><?php echo e($post->title); ?></td>
											<td> <?php echo e(views($post)->count()); ?> </td>
										 
									 
                                            <td>
                                                <form action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="POST">
                                                   
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('posts.edit',$post->id)); ?>"><i class="fa fa-fw fa-edit"></i> Edit / show </a>
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
                    
                <?php echo $posts->links(); ?>

             
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/post/index.blade.php ENDPATH**/ ?>