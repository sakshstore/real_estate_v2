<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
      
      
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      
      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      
      
        <meta name="description" content="" />
      
      
        <meta name="author" content="" />
        
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
      
      
        <link href="{{url('admin_theme/css/styles.css')}}" rel="stylesheet" />
      
      
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        
        

  {!! SEO::generate() !!}
  
       <script src="https://kit.fontawesome.com/57a36569a8.js" crossorigin="anonymous"></script>
       
  
            @yield('style')
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
            <a class="navbar-brand ps-3" href="{{ route('home') }}">{{ env('APP_NAME')}}</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
              <a class=" text-white nav-link  " > 
        
       Server Time {{  current_time( )  }}
        
                
                 </a>
            </div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>{{ Auth::user()->email }}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('get_settings') }}">Settings</a></li>
                        <li><a class="dropdown-item" href="{{ route('login_history') }}">Login history</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li> 
                        
                        <form action="{{ route('logout') }}" method="POST">
    @csrf
      
       <button class="  dropdown-item" type="submit" >
           
            {{ __('Logout') }}
            
            
       </button>
       
    
                                    
                                    
</form>
</li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
              
    @include('layouts.partials.admin_nav')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> @yield('title') </h1>
                       
                       
                       
                        <div class="messages mb-4">
                       
                               
                                      @include('layouts.partials.messages')
                                      
                                      
                             
                        </div>
                        <div class="  mb-4">
                            
                            
                            
                            
                             
                              @yield('content')
                             
                         
                        </div>
                    </div>
                </main>
             
             
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
        
        
  <script src="https://code.jquery.com/jquery-3.6.3.js" ></script>  
  
        <script src="{{ url('admin_theme/js/scripts.js') }}"></script>



        
        
        
     @yield("scripts") 
     
     
     
     
    </body>
</html>





     