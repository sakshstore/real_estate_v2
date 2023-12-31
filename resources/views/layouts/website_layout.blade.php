<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
   

  {!! SEO::generate() !!}
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


   
   
       @yield('styles')
  
  
  </head>
  <body>
    
    
 
    @include('layouts.partials.navbar')
 

 

  <div class="container  ">

    <!-- Three columns of text below the carousel -->
    <div class="row">
   <div class="col-lg-12  ">
         @include('layouts.partials.messages')
      </div>      </div>
    </div>
 <section class="py-5 text-left container">
    <div class="row  ">
        
        
      <div class="col-lg-12 col-md-12 mx-auto">
        @yield('title')
       
      </div>
    </div>
  </section>

  <div class="container  ">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-12  "> 
   @yield('content')
          
          </div>
            
                    
          
          </div>
          
          
          
  
  

  </div><!-- /.container -->

 
    @include('layouts.partials.footer')
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


      
       
  </body>
</html>
