
 
    
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="<?php echo e(route('home')); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                                Dashboard
                            </a>
                            
                            
                            
                            
                            
                            <a class="nav-link" href="<?php echo e(route('subscriptions_plan')); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-building"></i></div>
                                Subscriptions plans
                            </a>
                    

                         <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'Executive|admin')): ?>  
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                             
                            <a class="nav-link" href="<?php echo e(route('leads.index')); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card"></i></div>
                                Leads
                            </a>
                              
                            
                            <a class="nav-link" href="<?php echo e(route('properties.index')); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-building"></i></div>
                                Properties
                            </a>
                                
                            <a class="nav-link" href="<?php echo e(route('orders.index')); ?>"> 
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-shop"></i></div>
                                orders
                            </a>
                            <?php endif; ?>

                           
                            
                         <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>     
                            <a class="nav-link" href="<?php echo e(route('brokers.index')); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-person"></i></div>
                                Brokers
                            </a>
                              
                            <div class="sb-sidenav-menu-heading">Manage Sections </div>
                          
                              
               
               

<li  > <a href="<?php echo e(route('pages.index')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon">  <i class="fa-solid fa-file"></i>   </div> Pages</a></li>


   
    

<li  > <a href="<?php echo e(route('posts.index')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-file"></i></div> posts</a></li>



<li  > <a href="<?php echo e(route('auto_posts.index')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-pen"></i></div> Auto posts</a></li>



<li  > <a href="<?php echo e(route('testimonials.index')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-comment"></i></div> testimonials</a></li>



<li  > <a href="<?php echo e(route('teams.index')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div> teams</a></li>



<li  > <a href="<?php echo e(route('faqs.index')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div> Faq</a></li>


                            <div class="sb-sidenav-menu-heading">Manage Tools </div>
                          




<li  > <a href="<?php echo e(route('bulk_messages.index')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div> Bulk messages</a></li>



<li  > <a href="<?php echo e(route('subscriptions.index')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-cart-plus"></i></div>Subscription</a></li>


<li  > <a href="<?php echo e(route('subscribers.index')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-envelope"></i></div> Subscriber</a></li>


<li  > <a href="<?php echo e(route('customforms.index')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-wpform"></i></div> Custom forms</a></li>

                 <?php endif; ?> 
               
                 

   <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
     
                            <div class="sb-sidenav-menu-heading">User Settings</div>
                          
                             
              

      

<li   ><a href="<?php echo e(route('users.index')); ?>"  class="nav-link" > <div class="sb-nav-link-icon"><i class="fa-solid fa-users-gear"></i></div>Users</a></li>

 <li ><a href="<?php echo e(route('roles.index')); ?>"   class="nav-link" > <div class="sb-nav-link-icon"><i class="fa-solid fa-person-walking-luggage"></i></div>Roles</a></li>
 
 <li  ><a href="<?php echo e(route('permissions.index')); ?>"   class="nav-link" > <div class="sb-nav-link-icon"><i class="fa-solid fa-person-circle-minus"></i></div>Permissions</a></li>
 
 
 
 
  
                            <div class="sb-sidenav-menu-heading">System Settings</div>
                          
                             
              
<li  > <a href="<?php echo e(route('section_settings')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-section"></i></div>Section settings </a></li>



<li  > <a href="<?php echo e(route('get_settings')); ?>"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-gears"></i></div>System Settings </a></li>
                 
                 <?php endif; ?>
                 
                  <a class="nav-link" href="<?php echo e(route('login_history')); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-building"></i></div>
                                Login History
                            </a>      <a class="nav-link" href="<?php echo e(route('profile')); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-building"></i></div>
                               Profile
                            </a>
                            
                            
                            
                            
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                     <?php echo e(Auth::user()->email); ?>

                    </div>
                </nav><?php /**PATH /home/saksbqic/services/resources/views/layouts/partials/admin_nav.blade.php ENDPATH**/ ?>