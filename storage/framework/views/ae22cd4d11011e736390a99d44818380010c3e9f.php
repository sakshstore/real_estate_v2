  
  
  
  
  <footer class=" bg-dark text-white pt-5 ">
      
      
      
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-9">
                    
                
                <div class="brand-logo mb-2">
    
     <a    class="navbar-brand " href="<?php echo e(route('homepage')); ?>">
      <img src="<?php echo e(env('APP_LOGO')); ?>" alt=""  >  
    </a>
    
       </div>
                    <p class="mt-2 saksh_justify ">
                        
                        We are a real estate company that helps you find your dream home. Whether you are looking for a cozy apartment, a spacious villa, or a modern office, we have the right property for you. We have been in the business for over 10 years, and we have a network of trusted partners and clients across the country. We have a team of experienced and professional agents who will guide you through every step of the process. We value your time, budget, and preferences, and we work hard to meet your expectations.
                    </p>
                    
                    
                </div>
                
                
                
                   <div class="col-md-3">
                    
                    
                    
       
                   <div class="social_media_links">
 
        
    <?php if(saksh_isset(env('YOUTUBE_URL'))): ?>
         
<a href="<?php echo e(env('YOUTUBE_URL')); ?>" target="_blank" > 
<button class="btn btn-danger" type="button">
      <i class="fa-brands fa-youtube"></i>
    </button>
    
    </a>
    
    <?php endif; ?>
    
    
     <?php if(saksh_isset(env('TWITTER_URL'))): ?>
     
    <a href="<?php echo e(env('TWITTER_URL')); ?>" target="_blank" > 
    <button class="btn btn-info" type="button">
      <i class="fa-brands fa-twitter text-white"></i>
    </button>
    </a>
      <?php endif; ?>
    
    
     <?php if(saksh_isset(env('FACEBOOK_URL'))): ?>
    <a href="<?php echo e(env('FACEBOOK_URL')); ?>" target="_blank" > 
    <button class="btn btn-primary" type="button">
      <i class="fa-brands fa-facebook"></i>
    </button>
    </a>
      <?php endif; ?>
    
    
     <?php if(saksh_isset(env('INSTAGRAM_URL'))): ?>
    <a href="<?php echo e(env('INSTAGRAM_URL')); ?>" target="_blank" > 
    

    <button class="btn btn-danger" type="button">
      <i class="fa-brands fa-instagram"></i>
    </button>
    </a> 
      <?php endif; ?>
    
    
    
     <?php if(saksh_isset(env('WHATSAPP_URL'))): ?>
    <a href="<?php echo e(env('WHATSAPP_URL')); ?>" target="_blank" > 
    

    <button class="btn btn-info" type="button">
      <i class="fa-brands fa-whatsapp"></i>
    </button>
    </a>
      <?php endif; ?>
  
      </div>
				 
				   
                </div>
                
                
            </div>
   
                    
                    
      <div class="mt-5   pt-5 pb-5" >
          
          
   
    <p class="float-end"><a href="#">Back to top</a></p>
   <p>&copy; 2017–2022 <?php echo e(env('APP_NAME')); ?>. &middot; <a href="<?php echo e(route('get_page_by_slug' ,'privacy')); ?>">Privacy</a> &middot; <a href="<?php echo e(route('get_page_by_slug' ,'terms')); ?>">Terms</a></p>
    
       </div>
       
       
          </div>
  </footer>
  <?php /**PATH /home/saksbqic/services/resources/views/layouts/partials/footer.blade.php ENDPATH**/ ?>