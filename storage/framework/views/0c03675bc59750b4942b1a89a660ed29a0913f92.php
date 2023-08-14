<?php $__env->startSection('content'); ?>
    
    
 
 
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
                                
                                                            
                         <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>     
                                <div class="col-3"> <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >  Last time Cron Run </h5>
                                                <h3 class="my-2 py-1">   <?php echo e($last_cron_run_time); ?>  </h3>
                                                 
                                            </div>
                                       
                                   
                                </div> 
                                </div> 
                                <?php endif; ?>
                                
                                         
                       
                                
                                
                                <div class="col-3">   <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >available_listing</h5>
                                                <h3 class="my-2 py-1"><?php echo e($available_listing); ?>   </h3>
                                                
                                            </div>
                                       
                                   
                                </div></div>
                                
                                <div class="col-3">   <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >System Time</h5>
                                                <h3 class="my-2 py-1"><?php echo e(current_time()); ?>   </h3>
                                                
                                            </div>
                                       
                                   
                                </div></div>
                                
                                
                                
                                
                                      </div>
        
 
 
 <div class="row">
     <div class="col-6">
                           

    <canvas id="myChart" height="100px"></canvas>
  </div>    
  
  
  
                         <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'Executive|admin')): ?>     
                                
  <div class="col-6">
      
    property_submission  <?php echo e($subscription->property_submission); ?>

      
   
 
                             </div>
                             
                             
                                
                                <?php endif; ?>
                                
                                
                             </div>
                        
    
    
<?php $__env->stopSection(); ?>






<?php $__env->startSection('scripts'); ?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  

<script type="text/javascript">

  

      var labels =  <?php echo e(Js::from($labels)); ?>;

      var users =  <?php echo e(Js::from($data)); ?>;

  

      const data = {

        labels: labels,

        datasets: [{

          label: 'New System Users',

          backgroundColor: 'rgb(255, 99, 132)',

          borderColor: 'rgb(255, 99, 132)',

          data: users,

        }]

      };

  

 

  const config = {
  type: 'bar',
  data: data,
  options: {
      
       
    animations: {
      tension: {
        duration: 2000,
        easing: 'linear',
        from: 1,
        to: 0,
        loop: true
      }
    },
    scales: {
      y: { // defining min and max so hiding the dataset does not change scale range
        min: 0,
        max: 100
      }
    }
  }
};

      const myChart = new Chart(

        document.getElementById('myChart'),

        config

      );

  

</script>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/user/home.blade.php ENDPATH**/ ?>