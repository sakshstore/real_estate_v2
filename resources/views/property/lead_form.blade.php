

       
 
       

        
        
        @if(isset($property->video_url))
       
<div class="card  ">
    <div class="card-body   text-center">
 
       
       <iframe width="100%" height="315" src="{{$property->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
           </div
       </div>
       
       @endif
   


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="accordion" id="accordionExample">
      
      <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
  Call back form
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      
       @include('property.call_back_form',['property_id' => $property->id])
				 
      </div>
    </div>
  </div>
  
  
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button  " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Book A Private Tour 
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
       @include('property.book_a_private_tour')
				 
      </div>
    </div>
  </div>
  
  
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    Download Brochure 
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse  " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      
       @include('property.download_brochure')
				 
      </div>
    </div>
  </div>
 
</div>




<div class="card  ">
    <div class="card-body   text-center">
       
  
  <img src="{{$property->broker->name}}" / >
 Broker Info
     
     
  
  
  <a href="{{ route('get_vendor',$property->broker->username) }}">
      
      
      {{$property->broker->name}}
       
       </a>
       
       <hr /> 
        
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
  