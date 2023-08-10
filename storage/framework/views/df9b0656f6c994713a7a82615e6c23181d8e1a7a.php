<?php $__env->startSection('title'); ?>
    Vendor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   

                        <div class="container">  
                 
                      
                           
                  


                        <div class="row">  
                        
                        <div class="title  mt-4">Our Brokers</div>
                                    <?php $__currentLoopData = $brokers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $broker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    
                                    
 
                                    
                                     <div class="col-md-3">
                                         
                                      
                            
                            
                            
                                    <div class="card ">
                                        
                                        
                                            <img class="card-img-top" src="<?php echo e(asset($broker->avatar)); ?>"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
                                            
                                            
                                            
                                <div class="card-body text-center mt-4">
                                
                                 <a href="<?php echo e(route('get_broker',$broker->email)); ?>" >
                                     
                                     
                                     
                                    <h4 class="card-title"><?php echo e($broker->name); ?></h4>        
                                 </a> 
                                 
                                 
                                    <p class="card-text">
                                        
                                        
                                    
                                        
                                        <?php echo e($broker->about); ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo e($broker->facebook_url); ?>">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo e($broker->linked_url); ?>">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo e($broker->whatsapp_number); ?>">
                                                <i class="fa fa-whatsapp"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo e($broker->instagram_url); ?>">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                      </div>
                      
                 
                    
                     
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    
                                    
                                    </div>
                      
                      
                      
                      
 
 
                       
                        
                <?php echo $brokers->links(); ?>

                                    </div>
             
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/broker/our_brokers.blade.php ENDPATH**/ ?>