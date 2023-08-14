<?php $__env->startSection('title'); ?>
    Order
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   
   
                              
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                   	<th>Subscription_id</th>
										<th>Payment ID</th>
									
									 
										<th>payment_status</th>
									 
								 
                                        <th>Amount</th>
                                        <th>created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                             
											<td>  <?php echo e($order->id); ?></td>
										  	<td><?php echo e($order->subscription_id); ?></td>
											<td> <?php echo e($order->payment_gateway); ?>  <?php echo e($order->payment_id); ?> </td>
										
									 
											<td><?php echo e($order->payment_status); ?></td>
									 
											<td><?php echo e($order->amount); ?></td>
									 
 	<td><?php echo e($order->created_at); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    
             
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/order/index.blade.php ENDPATH**/ ?>