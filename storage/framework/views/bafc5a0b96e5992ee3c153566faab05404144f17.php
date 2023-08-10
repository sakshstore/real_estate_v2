<?php $__env->startSection('title'); ?>
    Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   
                 
                            <span id="header">
                                <?php echo e(__('Page')); ?>

                            </span>

                             
                                <a href="<?php echo e(route('pages.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Page ID</th>
                                        
										<th>Title</th>
									 
										<th>Status</th>

                                        <th>Created at</th>
                                        <th> &nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($page->id); ?></td>
                                            
											<td><?php echo e($page->title); ?></td>
											 
											<td><?php echo e($page->status); ?></td>
											<td><?php echo e($page->created_at); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('pages.destroy',$page->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('pages.show',$page->id)); ?>"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('pages.edit',$page->id)); ?>"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                    
               
             
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/page/index.blade.php ENDPATH**/ ?>