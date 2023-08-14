<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
      
      
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      
      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      
      
        <meta name="description" content="" />
      
      
        <meta name="author" content="" />
        
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
      
      
        <link href="<?php echo e(url('admin_theme/css/styles.css')); ?>" rel="stylesheet" />
      
      
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        
        

  <?php echo SEO::generate(); ?>

  
       <script src="https://kit.fontawesome.com/57a36569a8.js" crossorigin="anonymous"></script>
       
  
            <?php echo $__env->yieldContent('style'); ?>
            <style>
  @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
  
  body{
      
      font-family: 'Ubuntu', sans-serif;
       color:rgb(10, 37, 64); 
       
    
     
  }
  
.table tbody td  
      {
          
           color:rgb(10, 37, 64); 
      }
      
      .sb-sidenav-dark{
          
          color:#fff;
            
       
       
      } 
      
  .sb-sidenav .sb-sidenav-menu .nav .nav-link {
          
          color:#fff;
            
        
      }
      
 .sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-nav-link-icon{
          
             
          color:#fff; 
      }
      
      
     
</style>
           
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?php echo e(route('home')); ?>"><?php echo e(env('APP_NAME')); ?></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
              <a class=" text-white nav-link  " > 
        
       Server Time <?php echo e(current_time( )); ?>

        
                
                 </a>
            </div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php echo e(Auth::user()->email); ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo e(route('get_settings')); ?>">Settings</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('login_history')); ?>">Login history</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li> 
                        
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
    <?php echo csrf_field(); ?>
      
       <button class="  dropdown-item" type="submit" >
           
            <?php echo e(__('Logout')); ?>

            
            
       </button>
       
    
                                    
                                    
</form>
</li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
              
    <?php echo $__env->make('layouts.partials.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> <?php echo $__env->yieldContent('title'); ?> </h1>
                       
                       
                       
                        <div class="messages mb-4">
                       
                               
                                      <?php echo $__env->make('layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                      
                                      
                             
                        </div>
                        <div class="  mb-4">
                            
                            
                            
                            
                             
                              <?php echo $__env->yieldContent('content'); ?>
                             
                         
                        </div>
                    </div>
                </main>
             
             
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
        
        
  <script src="https://code.jquery.com/jquery-3.6.3.js" ></script>  
  
        <script src="<?php echo e(url('admin_theme/js/scripts.js')); ?>"></script>



        
        
        
     <?php echo $__env->yieldContent("scripts"); ?> 
     
     
     
     
    </body>
</html>





     <?php /**PATH /home/saksbqic/services/resources/views/layouts/app-master.blade.php ENDPATH**/ ?>