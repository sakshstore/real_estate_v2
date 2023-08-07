
 
    
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="{{ route('home') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                                Dashboard
                            </a>
                            
                            
                            
                            
                            
                             


                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            
                            <a class="nav-link" href="{{ route('leads.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card"></i></div>
                                Leads
                            </a>
                              
                            
                            <a class="nav-link" href="{{ route('properties.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-building"></i></div>
                                Properties
                            </a>
                            
                            <a class="nav-link" href="{{ route('brokers.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-building"></i></div>
                                Brokers
                            </a>
                            
                             
                            <div class="sb-sidenav-menu-heading">Website </div>
                          
                             
              
                     
         
           
  
 
               
               

<li  > <a href="{{ route('pages.index') }}"   class="nav-link"   > <div class="sb-nav-link-icon">  <i class="fa-solid fa-file"></i>   </div>Manage Pages</a></li>


   
    

<li  > <a href="{{ route('posts.index') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div>Manage posts</a></li>



<li  > <a href="{{ route('auto_posts.index') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div>Manage Auto posts</a></li>



<li  > <a href="{{ route('testimonials.index') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div>Manage testimonials</a></li>



<li  > <a href="{{ route('bulk_messages.index') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div>Manage bulk_messages</a></li>



<li  > <a href="{{ route('teams.index') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div>Manage teams</a></li>



<li  > <a href="{{ route('faqs.index') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div>Manage Faq</a></li>



<li  > <a href="{{ route('subscriptions.index') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div>Manage subscription</a></li>


<li  > <a href="{{ route('subscribers.index') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div>Manage subscriber</a></li>


<li  > <a href="{{ route('customforms.index') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-question"></i></div>Manage customforms</a></li>



     
                            <div class="sb-sidenav-menu-heading">User Settings</div>
                          
                             
              

      

<li   ><a href="{{ route('users.index') }}"  class="nav-link" > <div class="sb-nav-link-icon"><i class="fa-solid fa-users-gear"></i></div>Users</a></li>

 <li ><a href="{{ route('roles.index') }}"   class="nav-link" > <div class="sb-nav-link-icon"><i class="fa-solid fa-person-walking-luggage"></i></div>Roles</a></li>
 
 <li  ><a href="{{ route('permissions.index') }}"   class="nav-link" > <div class="sb-nav-link-icon"><i class="fa-solid fa-person-circle-minus"></i></div>Permissions</a></li>
 
 
 
 
     
                            <div class="sb-sidenav-menu-heading">System Settings</div>
                          
                             
              
<li  > <a href="{{ route('section_settings') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-section"></i></div>Section settings </a></li>



<li  > <a href="{{ route('get_settings') }}"   class="nav-link"   > <div class="sb-nav-link-icon"><i class="fa-solid fa-gears"></i></div>System Settings </a></li>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                     {{ Auth::user()->name }}
                    </div>
                </nav>