<?php $__env->startSection('content'); ?>

  <?php if(session()->has('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('success')); ?>

                </div>
            <?php endif; ?>

 
             
                                
                                               <?php echo e($user->name); ?> 
                                                     
                                              <br>Invoice #<?php echo e($user->id); ?>

                                              <br><?php echo e($user->created_at); ?>

                                                            
<section class="posts-subscription">
        <div class="container">
            <div class="row">
                

               

                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="title-text">Subscription</h2>
                    </div>
                    <div class="whoweare-pera">
                      
                    
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
         
            
                                   
             
  <form method="POST" target="_blank" action="<?php echo e(route('make.payment')); ?>"   enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
 
 <input type="hidden" name="broker_id" value="<?php echo e($user->id); ?>"  / >
 <input type="hidden" name="plan_id" value="<?php echo e($subscription->id); ?>" />
  
        <button type="submit" class="btn btn-primary w-100 mt-5 mb-5">Pay with PayPal</button>
 
 
 </form>
            
          </div>
        </div>
      </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      
      
      
       
       
    </div>
                         

                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>  
                                        

 
 




 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/paypal/index.blade.php ENDPATH**/ ?>