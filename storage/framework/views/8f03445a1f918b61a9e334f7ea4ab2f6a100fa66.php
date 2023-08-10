<!doctype html>
<html lang="en"   >
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
     


  <?php echo SEO::generate(); ?>

 

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"  > 
 
     
         <script src="https://kit.fontawesome.com/57a36569a8.js" crossorigin="anonymous"></script>
         
         
            <?php echo $__env->yieldContent('style'); ?>
            
              <style>
 
  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Roboto+Condensed&display=swap');
 
 
            .ck-editor__editable[role="textbox"] {
                 
                min-height: 200px;
            }
            
            
            body{
                
                font-family: 'Nunito', sans-serif;
font-family: 'Roboto Condensed', sans-serif;
            }
            
            
            .social_media_links{
                text-align:right;
            }
            
            .saksh_justify{
                
          
             text-align: justify;
  text-justify: inter-word;
  
            }
            
        </style>
     
            
</head>
<body>
 
 
 
    <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
                                                                                                       
                                                                                                                                                                
                                                                                                                                                                                                                
                                                                                                            
    
    <main  class="saksh_contents">
 
    <?php echo $__env->make('layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
  
 
    </main  >
 

      <div class="footer_section">
 
  
  
    <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</div> 


<script src="https://code.jquery.com/jquery-3.6.3.js" ></script>  
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>

 


 
     <?php echo $__env->yieldContent("scripts"); ?> 
          <script> /*
    var url = '//sakshamapp.com/js/wati.js';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var options = {
                "enabled":true,
                "chatButtonSetting":{
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "marginLeft": "0",
                    "marginRight": "20",
                    "marginBottom": "20",
                    "ctaIconWATI":false,
                    "position":"right"
                },
                "brandSetting":{
                    "brandName":"Wati",
                    "brandSubTitle":"undefined",
                    "brandImg":"https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
                    "welcomeText":"Hi there!\nHow can I help you?",
                    "messageText":"Hello, %0A I have a question ",
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "autoShow":false,
                    "phoneNumber":"+918840574997"
                }
                };
                s.onload = function() {
                    CreateWhatsappChatWidget(options);
                };
               // var x = document.getElementsByTagName('script')[0];
               // x.parentNode.insertBefore(s, x);
                
                */
                </script>  
  
 
  </body>
</html>
<?php /**PATH /home/saksbqic/services/resources/views/layouts/home.blade.php ENDPATH**/ ?>