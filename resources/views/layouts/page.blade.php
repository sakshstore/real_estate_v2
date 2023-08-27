<!doctype html>
<html lang="en" >
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   
     


  {!! SEO::generate() !!}
    <!-- Bootstrap core CSS -->
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"  >
      
      
      
          <script src="https://www.google.com/recaptcha/api.js?render=6Lc5rhclAAAAADbrKwWHtywvsIW3V-WiqnvMqhSC"></script>
          
    
 <style>
     
     
 @yield('styles')
 </style>      
          
      
</head>
<body>
    
    @include('layouts.partials.navbar')

    <main class="container mt-5">
         
            


 
    
                   
                   
        @yield('content')
    </main>

 
  
    
     
 
 
 

 @yield('script')



  </body>
</html>
