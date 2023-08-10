 
        <nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
  <div class="container">
  
    
     <a class="navbar-brand" href="<?php echo e(route('homepage')); ?>">
      <img src="<?php echo e(env('APP_LOGO')); ?>" alt="" class="img-fluid" > <?php echo e(env('APP_NAME')); ?>

    </a>
    
    
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(route('homepage')); ?>">Home</a>
        </li>
        
         
          
          
      
    
  
  
  
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo e(route('propertyarchive')); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Properties
          </a>
          <ul class="dropdown-menu">
     
            
            
            
                <li  >    <a class="dropdown-item" href="<?php echo e(route('query_property',
  'top_property')); ?>"  >Top property</a></li>
  
  
     <li  > <a class="dropdown-item" href="<?php echo e(route('query_property',
  'urgent_property')); ?>"  >Urgent property</a></li>
  
  
     <li  > <a class="dropdown-item" href="<?php echo e(route('query_property',
  'featured_property')); ?>"  >Featured property</a></li>
  
  
  
  
          </ul>
        </li>



       <li class="nav-item"><a href="<?php echo e(route('login')); ?>"   class="nav-link" >Register as broker</a></li>
      
      
             <li class="nav-item"><a href="<?php echo e(route('our_brokers')); ?>"   class="nav-link" >Our brokers</a></li>
      
      
      
             <li class="nav-item"><a href="<?php echo e(route('contact_us')); ?>"   class="nav-link" >Contact Us</a></li>
             
             
      
      
  
      </ul>
    
    
    </div>
  </div>
</nav>
<?php /**PATH /home/saksbqic/services/resources/views/layouts/partials/navbar.blade.php ENDPATH**/ ?>