 
  
  
  <footer class=" bg-dark text-white pt-5 ">
      
      
      
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-9">
            
 
                <div class="brand-logo mb-2">
    
     <a    class="navbar-brand " href="{{ route('homepage') }}">
      <img src="{{ env('APP_LOGO')}}" alt=""  >  
    </a>
    
       </div>
                    <p class="mt-2 saksh_justify ">
                        
                        We are a real estate company that helps you find your dream home. Whether you are looking for a cozy apartment, a spacious villa, or a modern office, we have the right property for you. We have been in the business for over 10 years, and we have a network of trusted partners and clients across the country. We have a team of experienced and professional agents who will guide you through every step of the process. We value your time, budget, and preferences, and we work hard to meet your expectations.
                    </p>
                    
                    
                </div>
                
                
                
                   <div class="col-md-3">
                    
                    
                    
       
                   <div class="social_media_links">
 
        
    @if(saksh_isset(env('YOUTUBE_URL')))
         
<a href="{{ env('YOUTUBE_URL')}}" target="_blank" > 
<button class="btn btn-danger" type="button">
      <i class="fa-brands fa-youtube"></i>
    </button>
    
    </a>
    
    @endif
    
    
     @if(saksh_isset(env('TWITTER_URL')))
     
    <a href="{{ env('TWITTER_URL')}}" target="_blank" > 
    <button class="btn btn-info" type="button">
      <i class="fa-brands fa-twitter text-white"></i>
    </button>
    </a>
      @endif
    
    
     @if(saksh_isset(env('FACEBOOK_URL')))
    <a href="{{ env('FACEBOOK_URL')}}" target="_blank" > 
    <button class="btn btn-primary" type="button">
      <i class="fa-brands fa-facebook"></i>
    </button>
    </a>
      @endif
    
    
     @if(saksh_isset(env('INSTAGRAM_URL')))
    <a href="{{ env('INSTAGRAM_URL')}}" target="_blank" > 
    

    <button class="btn btn-danger" type="button">
      <i class="fa-brands fa-instagram"></i>
    </button>
    </a> 
      @endif
    
    
    
     @if(saksh_isset(env('WHATSAPP_URL')))
    <a href="{{ env('WHATSAPP_URL')}}" target="_blank" > 
    

    <button class="btn btn-info" type="button">
      <i class="fa-brands fa-whatsapp"></i>
    </button>
    </a>
      @endif
  
      </div>
				 
				   
                </div>
                
                
            </div>
   
                    
                    
      <div class="mt-5   pt-5 pb-5" >
          
          
   
    <p class="float-end"><a href="#">Back to top</a></p>
   <p>&copy; 2017–2022 {{ env('APP_NAME')}}. &middot; <a href="/">Privacy</a> &middot; <a href="/">Terms</a> This is a dummy project made to sell real estate script </p>
    
       </div>
       
       
          </div>
  </footer>
  