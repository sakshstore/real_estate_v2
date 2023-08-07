 
 
     
   
 <div   class="carousel slide   " id="testimonial_carousel">
  <div class="carousel-inner">
     
   
    
   @foreach ($testimonials as $testimonial)
                               
                              
  <div class="carousel-item   ">
   
           <div class="row  ">
  
  
  
  <div class="col "><img src="{{asset($testimonial->thumbnail)}}" class="  w-100 img-fluid  rounded-3"   ></div>
  
  
  
  <div class="col  ">
      
      
      <div class="text-center p-5"> 
      
      
      
      <h2 class="mt-5" >
      {{ $testimonial->title }} </h2>
 {!! $testimonial->content !!} </div>
   
</div>
 

    
    
    
    

									  
       
											
											
											
    </div>							
											
    </div>
    
 
           
   @endforeach 
   
   
  </div>
  
  
 
 
         
  <button class="carousel-control-prev" type="button" data-bs-target="#testimonial_carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#testimonial_carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

 