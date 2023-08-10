<?php $__env->startSection('content'); ?>
 


 <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
     
   
    
     <?php $__currentLoopData = $carousel_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
  <div class="carousel-item  ">
      <img src="<?php echo e(asset($image)); ?>" class="d-block w-100"  alt="<?php echo e(asset($image)); ?>" >
    </div>
    
 
           
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
   
   
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
                        
                       
                       
                       
                       
                       
    
    <section class="unique_point">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="unique_point_box">

                        <div class="unique_point_img">
                            <img src="<?php echo e(asset('home/genuine-listing.png')); ?>">
                        </div>
                        <h3>Authentic Property
</h3>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="unique_point_box">
                        <div class="unique_point_img">
                            <img src="<?php echo e(asset('home/direct-from-developer.png')); ?>">
                        </div>
                        <h3>Straight from the Builder
</h3>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="unique_point_box">
                        <div class="unique_point_img">
                            <img src="<?php echo e(asset('home/zero-commission.png')); ?>">
                        </div>
                        <h3>No Extra Charges
</h3>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="unique_point_box">
                        <div class="unique_point_img">
                            <img src="<?php echo e(asset('home/zero-hidden-cost.png')); ?>">
                        </div>
                        <h3>No Surprises
</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<section class="about-us-section">
        <div class="container">
            <div class="row">
                

                <div class="col-md-6">
                    <div class="whoweare-pic"><img class="img-fluid" src="<?php echo e(asset('home/about-us-pic.png')); ?>"></div>
                </div>

                <div class="col-md-6">

                    <div class="text-heading">
                        <h2 class="title-text">About Us</h2>
                    </div>
                    <div class="whoweare-pera">
                      
                      
                        
                        <?php echo get_page("about-us")->content; ?>

                        


                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>
    
    
   
                       
        
<section class="popular-listing-section">
        <div class="container">
            <div class="row">
                

               

                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="title-text">  Popular listing</h2>
                    </div>
                    <div class="whoweare-pera">
                     
                  
       <?php echo $__env->make('property.property_section',['properties' => $popular_properties], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        


                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>
    
              
<section class="posts-subscription">
        <div class="container">
            <div class="row">
                

               

                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="title-text">Subscription</h2>
                    </div>
                    <div class="whoweare-pera">
                      
                    
       <?php echo $__env->make('subscription.subscription_sections',['subscriptions' => $subscriptions], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         

                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>                
        
<section class="posts-section">
        <div class="container">
            <div class="row">
                
                
                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="title-text">  Popular Posts</h2>
                    </div>
                    <div class="whoweare-pera">
                      
                      
                  
       <?php echo $__env->make('post.posts_section',['posts' => $posts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        


                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>
                       
        
<section class="team-section">
        <div class="container">
            <div class="row">
                

               

                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="title-text">  Our Team</h2>
                    </div>
                    <div class="whoweare-pera">
                      
                      
                        
                  
       <?php echo $__env->make('team.team_section',['teams' => $teams], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        


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
                      
                    
                  
       <?php echo $__env->make('testimonial.testimonials_section',['testimonials' => $testimonials], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        


                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>
    
    
    
<section class="faqs-section">
        <div class="container">
            <div class="row">
                
                
                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="title-text">  Popular faqs</h2>
                    </div>
                    <div class="whoweare-pera">
                      
                      
                        
                  
       <?php echo $__env->make('faq.faqs',['faqs' => $faqs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        


                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>
    
   <section id="contact-form"  >
        <div class="container">
            
            
             <div class="row">
                 
                 
                 
                <div class="text-heading">
                    <h2 class="title-text">INTERESTED TO KNOW MORE?</h2>
                </div>
                
                    </div>
                
                
            <div class="row">
                
                <div class="col-lg-6 col-md-6"   > 
                      
                  
                <div class="contact_form "   > 
                      
                   
                        <h3>To know more, schedule a meeting with us to discuss your investment.</h3>
              
 
    <?php echo $__env->make('layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    
       <?php echo $__env->make('property.call_back_form',['property_id'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         
                   
                     
                </div>

                    
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="contact-form-pic ">
                        <img src="<?php echo e(asset('home/contact-form-pic.jpg')); ?>">
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
            
 
 <?php $__currentLoopData = $logo_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
 
  
    
 <div class="owl-item developer_img">  
 
 <img src="<?php echo e(asset($image)); ?>" 
      class="img-fluid  ">
 
 </div>  
      
         
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                         
                   
        </div>
    </div>
    
</div>
      
                        
              
            </div>
        </div>
    </section>
      
<section class="subscriber-section">
        <div class="container">
            <div class="row">
 
                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="  title-text">  Subscribe new propertiy informations</h2>
                    </div>
                    <div class="whoweare-pera">
                      
               
                        
                  
       <?php echo $__env->make('subscriber.subscriber_section' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        


                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection("style"); ?>
 
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?> 


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"  ></script>

 
<script>
    

    
    
$(document).ready(function(){
    
 
    
    
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/welcome.blade.php ENDPATH**/ ?>