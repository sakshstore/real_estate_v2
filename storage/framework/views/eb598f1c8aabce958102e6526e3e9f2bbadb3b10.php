 

<?php $__env->startSection('title'); ?>
    <?php echo e($page->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     
                        
               
               
                     
                      
                     
                     

<section class="testimonials-section">
        <div class="container">
            <div class="row">
                

       

                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="pt-5"> Testimonials</h2>
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
                        <h2 class="pt-5">  Popular faqs</h2>
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
                    <h2 class="text-center pt-5">INTERESTED TO KNOW MORE?</h2>
                </div>
                
                    </div>
                
                
            <div class="row">
                
                <div class="col-lg-6 col-md-6"   > 
                      
                  
                <div class="contact_form"   > 
                      
                   
                        <h3>To know more, schedule a meeting with us to discuss your investment.</h3>
              
 
    <?php echo $__env->make('layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    
       <?php echo $__env->make('property.call_back_form',['property_id'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         
                   
                     
                </div>

                    
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="contact-form-pic mt-5">
                        <img src="<?php echo e(asset('home/contact-form-pic.jpg')); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section> 
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/page/contact_us.blade.php ENDPATH**/ ?>