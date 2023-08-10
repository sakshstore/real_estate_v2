<?php $__env->startSection('content'); ?>
    
    
<?php

 $user=\Auth()->user();
 
 
 
 ?>
 
 
 <div class="row">
     <div class="col-3">
                                
                                <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Total Listing</h5>
                                                <h3 class="my-2 py-1"><?php echo e(count($properties)); ?>   </h3>
                                                 
                                                </p>
                                            </div>
                                       
                                   
                                </div>
                                </div > 
     
     <div class="col-3">
         
         
         
    
 <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Last Login</h5>
                                                <h3 class="my-2 py-1"><?php echo e($user->last_login_at); ?>   </h3>
                                               
                                            </div>
                                       
                                   
                                </div> 
                                
                                </div >   <div class="col-3"> <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Last Login  from IP</h5>
                                                <h3 class="my-2 py-1"><?php echo e($user->last_login_ip); ?>   </h3>
                                                 
                                            </div>
                                       
                                   
                                </div> 
                                </div> 
                                
                                
                                <div class="col-3"> <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >  Last time Cron Run </h5>
                                                <h3 class="my-2 py-1">   <?php echo e($last_cron_run_time); ?>  </h3>
                                                 
                                            </div>
                                       
                                   
                                </div> 
                                </div > 
                                
                                
                                
                                
                                <div class="col-3">   <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Tatal Call back requests</h5>
                                                <h3 class="my-2 py-1"><?php echo e(count($leads)); ?>   </h3>
                                                
                                            </div>
                                       
                                   
                                </div></div>
                                
                                
                                
                                
                                <div class="col-3">   <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >System Time</h5>
                                                <h3 class="my-2 py-1"><?php echo e(current_time()); ?>   </h3>
                                                
                                            </div>
                                       
                                   
                                </div></div>
                                
                                
                                
                                
                                
                                </div>
        
    
 
     <h3>Recent Leads</h3>
   

                        <div class="table-responsive">
                            <table class="table table-bordered ">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
									 
										<th>IP Address</th>
										<th>Request URL</th>
<th> Time zone</th>
                                         
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($lead->id); ?></td>
                                            
											<td><?php echo e($lead->name); ?></td>
											<td><?php echo e($lead->email); ?></td>
											<td><?php echo e($lead->phone); ?></td>
										 
										 
											<td><?php echo e($lead->ip_address); ?></td>
											<td><?php echo e($lead->request_url); ?></td>
											<td><?php echo e($lead->timezone); ?></td>
 
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/user/home.blade.php ENDPATH**/ ?>