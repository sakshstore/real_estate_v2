<?php $__env->startSection('title'); ?>
    Order
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   
                 
                            <span id="header">
                                <?php echo e(__('Order')); ?>

                            </span>

                             
                                <a href="<?php echo e(route('orders.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                   	<th>Payment Reference Id</th>
										<th>Payment Status</th>
									
									 
										<th>Status</th>
									 
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                             
											<td><?php echo e($order->id); ?></td>
										  	<td><?php echo e($order->subscription_id); ?></td>
											<td><?php echo e($order->payment_reference_id); ?></td>
										
									 
											<td><?php echo e($order->payment_status); ?></td>
									 
											<td><?php echo e($order->amount); ?></td>
									 
 
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    
                <?php echo $orders->links(); ?>

             
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/order/index.blade.php ENDPATH**/ ?>