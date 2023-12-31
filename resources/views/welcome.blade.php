@extends('layouts.home')

@section('content')
 


 <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
     
   
    
     @foreach($carousel_images as    $image)
 
  <div class="carousel-item  ">
      <img src="{{asset($image)}}" class="d-block w-100"  alt="{{asset($image)}}" >
    </div>
    
 
           
   @endforeach 
   
   
  </div>
  
  
 
 
         
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                        
                       
                       
                       
                                        
           <livewire:search-properties />    
           
           
                        
 
    
              
             
        
<section class="posts-section">
        <div class="container">
            <div class="row">
                
                
                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="title-text">  Popular Posts</h2>
                    </div>
                    <div class="whoweare-pera">
                      
                      
                  
       @include('post.posts_section',['posts' => $posts])
                        


                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>
                       
 
    
    
    
<section class="testimonial-section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="title-text"> Testimonials</h2>
                    </div>
                    <div class="whoweare-pera">
                      
                    
                  
       @include('testimonial.testimonials_section',['testimonials' => $testimonials])
                        


                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>
      






    <!--POPULAR DEVELOPER SECTION END-->
     <section class="developer-bg  ">
        <div class="container-fluid">
            <div class="row">
         
         




<div class="logoslider  owl-carousel owl-theme owl-loaded">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            
 
 @foreach($logo_images as    $image)
 
 
  
    
 <div class="owl-item developer_img">  
 
 <img src="{{asset($image)}}" 
      class="img-fluid  ">
 
 </div>  
      
         
   @endforeach  
                         
                   
        </div>
    </div>
    
</div>
      
                        
              
            </div>
        </div>
    </section>
      
 
    
@endsection

@section("style")
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"   />
 
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
 
     
    <style>
      
        .card{
  
  
    box-shadow: 10px 10px 5px teal;
}



            .unique_point{
        
        text-align:center;
    }
     
 #carouselExample img{
     height:600px;
 }
     
    
.saksh_contents    section {
    color: black;
    
    padding:100px 0;
}



.saksh_contents  section:nth-child(odd) {
    color: #777;
}


.saksh_contents section:nth-child(even) {
       background-color:#dddddd4d; 
}
    



.unique_point_img img{
background: #000;
padding: 15px;
border-radius: 60px;
width: 60px;
height: 60px;
display: flex;
align-items: center;
justify-content: center;
margin: auto;
  margin-bottom: auto;
margin-bottom: 10px;
  
    }
    
    
.contact_form {
        padding:50px 0;
    } 
   
 
     
  .developer_img{
      
      border:1px solid #ddd; 
  
  margin:0px 10px; 
  
  display:flex; 
  
  align-items:center;
  
  justify-content: center;
  
  height:150px;
      
  }
  
  
  
        .developer_img img{width:150px; height:100px;}
      
      
      .owl-stage-outer{
          
          height:150px;
      }
     
    </style>
@endsection

@section("scripts") 


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"  ></script>

 
<script>
    

    
    
$(document).ready(function(){
    
 setTimeout(function() {    $('#subscriberModal').modal('show'); }, 5000);
   

 
      $(".carousel-item:first").addClass("active");
      
     $("#testimonial_carousel  .carousel-item:first").addClass("active");
      
   
   
   
   
	$(".logoslider").owlCarousel({
		items: 5,
	 
		loop: true,
		dots: false,
		autoplay: true,
		autoplayTimeout: 1000, smartSpeed: 300,
		paginationSpeed: 50,
		rewindSpeed: 400,
	 
		responsive: {
			0: {
				items: 2
			},
			768: {
				items: 2
			},
			1000: {
				items: 5
			}
		}

	});
	
	
	
     
}); 

 


 
</script>
@endsection

