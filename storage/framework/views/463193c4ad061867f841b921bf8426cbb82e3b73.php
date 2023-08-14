<?php $__env->startSection('title'); ?>
    Subscriber
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
    

                             
                                <a href="<?php echo e(route('subscribers.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Whatsapp</th>
										<th>Calls</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $subscribers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        
                                            	<td><?php echo e($subscriber->id); ?></td>
											<td><?php echo e($subscriber->name); ?></td>
											<td><?php echo e($subscriber->email); ?></td>
											<td><?php echo e($subscriber->whatsapp); ?></td>
											<td><?php echo e($subscriber->calls); ?></td>
											<td><?php echo e($subscriber->status); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('subscribers.destroy',$subscriber->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('subscribers.show',$subscriber->id)); ?>"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('subscribers.edit',$subscriber->id)); ?>"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                    
                <?php echo $subscribers->links(); ?>

             
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/subscriber/index.blade.php ENDPATH**/ ?>