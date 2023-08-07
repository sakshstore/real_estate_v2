@extends('layouts.app-master')
@section('template_title')
    {{ __('Update') }} Property
@endsection

@section('content')
   
                        {{ __('Update') }} Property 
                   
                        
                                         
   <a  href="{{ route('set_property_image',$property->id) }}">{{ __('Set Gallery Images') }}</a>
                        
                        
   
 
 

                        <form method="POST" action="{{ route('properties.update', $property->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('property.form')

                        </form>
                    
                    
                    
                
                    
@endsection

@section('style')       
                    
               <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
                         
                    
@endsection

@section('scripts')

   
<script src="https://unpkg.com/@yaireo/tagify"></script>
  <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
 
 
    
                        
                        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
                        
                        
                          <script>
                            
  var input = document.querySelector('.tags');
 
  
  

 



   var  tags_values= ["Children's Playground","Swimming Pool" ,"24-hr Security","Barbecue Area","Yoga Area","Sports Court","Sauna Room","EV Station","Organic Green Houses", "Daycare Center","Elite Family Seating","Open Air Cinema","Elite Business Center","Elite Cafe","Prayer Hall","Kids Play Zone","Kids Splash Pad","BBQ Area","Cigar Lounge","Rain Shower","Recreational Zone","Library","Cabana Seating","Multi-Purpose Hall","Cricket Pitch","Mini Golf","Table Tennis","Chess Board","Mini Basketball","Water Feature","Smart Mart","Swimming Pool","Kids Swimming Pool","SPA & Therapy","Jacuzzi","Lazy Lounge","Jogging Track","Beauty Salon","Doctor On Call","Open air Yoga platform","Health Club","Health Bar","Indoor & Outdoor Gym","Aquatic Gym","Trampoline Area","Wall Climbing","Dance Studio","Snooker Zone","Badminton Court"];


  
  

 
    // init Tagify script on the above inputs
    tagify = new Tagify(input, {
      whitelist: tags_values,
      
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })
    
    
    
    
    
 var allEditors = document.querySelectorAll('.editor');
                           
                           
        for (var i = 0; i < allEditors.length; ++i) {
          ClassicEditor.create(allEditors[i]);
        }
        
         
                </script> 
@endsection