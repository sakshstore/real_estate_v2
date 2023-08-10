<?php $__env->startSection('template_title'); ?>
    Property
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



                  

 

                 
 <div class="container">
     
     
     
 <div class="filter_button mt-5">

  <a class="btn btn-primary" href="<?php echo e(route('query_property',
  'all')); ?>" role="button">All</a>
  <a class="btn btn-primary" href="<?php echo e(route('query_property',
  'Apartment')); ?>" role="button">Apartment</a>
  <a class="btn btn-primary" href="<?php echo e(route('query_property',
  'Duplexes')); ?>" role="button">Duplexes</a>
  <a class="btn btn-primary" href="<?php echo e(route('query_property',
  'Loft Apartments')); ?>" role="button">Loft Apartments</a>
  <a class="btn btn-primary" href="<?php echo e(route('query_property',
  'Hotel Apartments')); ?>" role="button">Hotel Apartments</a>
  <a class="btn btn-primary" href="<?php echo e(route('query_property',
  'Penthouses')); ?>" role="button">Penthouses</a>
  <a class="btn btn-primary" href="<?php echo e(route('query_property',
  'Villas')); ?>" role="button">Villas</a>
  <a class="btn btn-primary" href="<?php echo e(route('query_property',
  'Townhouses')); ?>" role="button">Townhouses</a>


  
   

</div> 
                 
 <div class="row">
          
                 
                  
   <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
   
 <div class="col-md-3">
 
  
 <a href="<?php echo e(route('viewProperty',$property->id)); ?>">
    
     
 <div class="card mt-3">
    <img class="card-img-top" src="<?php echo e(asset($property->property_thumbnail_url)); ?>"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($property->project_name); ?></h5>
      <p class="card-text"> 
      
      
     
      
   <?php echo e($property->property_type); ?> in <?php echo e($property->address); ?> <br />
     <?php echo e($property->unit_details); ?> 
     </p>  
    </div>
    <div class="card-footer">
      <small class="text-muted">Starting Price <?php echo e(get_price($property )); ?></small>
    </div>
  </div>
  
 </a>
    </div>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php echo $properties->links(); ?>   
          </div>              
                 
              
          </div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/property/property_archive.blade.php ENDPATH**/ ?>