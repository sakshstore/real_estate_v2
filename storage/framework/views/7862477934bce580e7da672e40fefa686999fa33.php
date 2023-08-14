<?php $__env->startSection('title'); ?>
    Create Subscription
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
  
   
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      
      
       <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
       
       <div class="col">
      
              
              
                 <div class="card mb-4 rounded-3 text-white bg-dark ">
          <div class="card-header py-3    ">
              
              
              
            <h4 class="my-0 fw-normal"><?php echo e($subscription->name); ?></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo e($subscription->currency); ?> <?php echo e($subscription->amount); ?><small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            
          
          
          		<li><?php echo e($subscription->property_submission); ?> Property submission</li>
			 	<li><?php echo e($subscription->featured_property); ?> Featured property</li>
			 <li><?php echo e($subscription->top_property); ?> Top property</li>
											<li><?php echo e($subscription->urgent_property); ?> Urgent property </li>
											<li><?php echo e($subscription->line_1); ?></li>
											<li><?php echo e($subscription->line_2); ?></li>
											<li><?php echo e($subscription->line_3); ?></li>
											<li><?php echo e($subscription->line_4); ?></li>
   		
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
          <a href="<?php echo e(route('make_payment')); ?>"   class="nav-link" >     <button type="button" class="w-100 btn btn-lg btn-outline-primary">Register as Broker</button></a>
            
            
          
            
            
          </div>
        </div>
      </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      
      
      
       
       
    </div>
    
    
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/subscription/subscriptions_plan.blade.php ENDPATH**/ ?>