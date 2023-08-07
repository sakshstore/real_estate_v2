@extends('layouts.home')
 

@section('title')
    {{ $page->title  }}
@endsection

@section('content')
     
                        
               
               
                     
                      
                     
                     

<section class="testimonials-section">
        <div class="container">
            <div class="row">
                

       

                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="pt-5"> Testimonials</h2>
                    </div>
                    <div class="whoweare-pera">
                       
                  
       @include('testimonial.testimonials_section',['testimonials' => $testimonials])
                        


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
                      
                      
                        
                  
       @include('faq.faqs',['faqs' => $faqs])
                        


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
              
 
    @include('layouts.partials.messages')
  
    
       @include('property.call_back_form',['property_id'=>0])
                         
                   
                     
                </div>

                    
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="contact-form-pic mt-5">
                        <img src="{{asset('home/contact-form-pic.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </section> 
    

@endsection
