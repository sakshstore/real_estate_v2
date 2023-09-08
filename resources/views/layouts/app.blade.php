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
          
          
          
      
</head>
<body>
    
    @include('layouts.partials.navbar')

    <main class="container mt-5">
         
            



    @include('layouts.partials.messages')
    
                   
                   
        @yield('content')
    </main>

 
  
    
    
    
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
  
 
 

  <script>
  
  
  $( "#submit_btn" ).click(function(e) {
  
     
      
   e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lc5rhclAAAAADbrKwWHtywvsIW3V-WiqnvMqhSC', {action: 'submit'}).then(function(token) {
               
               
                 $('input[name="grecaptcha_token"]').val(token);
                 
                 
            
             document.getElementById("saksh_recaptcha_form").submit(); 
              
              // Add your logic to submit to your backend server here.
          });
        });
});


 
  
 
          
      
   
  </script>
 

 @yield('script')



       
  </body>
</html>
