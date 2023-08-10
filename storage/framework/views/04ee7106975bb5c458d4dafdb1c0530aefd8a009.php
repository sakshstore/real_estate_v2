<?php $__env->startSection('title'); ?>
    <?php echo e($broker->name ?? 'Show Brokers'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     
                            <span class="header">Show Brokers</span>
                        
                         
 <a class="btn btn-primary" href="<?php echo e(route('brokers.index')); ?>"> Back</a>
 
 
 <a class="btn btn-primary" href="<?php echo e(route('process_broker_request' ,$broker->id)); ?>"> Accept Request</a>
                       
                <table class="table">
                
                
                        
                       <tr>
                       
                       
                       <td>
                            <strong>Name:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         <?php echo e($broker->name); ?>

                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Email:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         <?php echo e($broker->email); ?>

                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Company Name:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         <?php echo e($broker->company_name); ?>

                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Registeration Number:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         <?php echo e($broker->registeration_number); ?>

                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Phone:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         <?php echo e($broker->phone); ?>

                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Mobile:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         <?php echo e($broker->mobile); ?>

                       </td>
                       
                       
                       </tr>
                     

                  
                </table>
                
                
                
                
								<div class="card mt-2">
								    
								      	<div class="card-body">
									    
									     <h5 class="text-heading mb-4">Additional Details</h5>
									     
									               
                <table class="table"> 
			 	     
									     <?php
									     
									     
				  $data= json_decode( $broker->form_json );
		 if(is_array($data))
		 {
				  foreach($data as  $x => $val)
				  {
				      
				  echo "  <tr> <td>   ";    
				     echo $x;
			 
				    
                     echo "  </td>   <td> ";
                       
				  if(is_string($val)) echo $val;
		 
				     echo "  </td> </tr> ";
				  }
		 
		 }
				  ?>
				           </table>
				   	      
							    
									    </div>
								 
									   	</div>
									  			     
									  			     
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/broker/show.blade.php ENDPATH**/ ?>