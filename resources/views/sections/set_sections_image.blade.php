 @extends('layouts.app-master')
@section('template_title')
    {{ __('Update') }} Property
@endsection

@section('content')





Logo slider images
            <form action="{{ route('post_logo_slider_images' ) }}"
      class="dropzone"
      id="post_logo_slider_images">
    
        @csrf
      
      
      
</form>




Carousel images
 
            <form action="{{ route('post_carousel_images'  ) }}"
      class="dropzone"
      id="post_carousel_images">
    
        @csrf
      
      
      
</form>




<hr />
 
 @endsection

@section('style')  

<meta name="csrf-token" content="{{ csrf_token() }}">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
                     
@endsection

@section('scripts')


 
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

    
    
 <script>
 
 

 
 
 
 
 
 
 
 var options={
     
      addRemoveLinks: true,
      acceptedFiles: ".jpeg,.jpg,.png"
     
 };
 
 
 let post_logo_slider_imagesDropzone =new Dropzone("#post_logo_slider_images" ,options  );

 @foreach($logo_images as    $image)
  mockFile = { name: '{{asset($image)}}'  };
  
   
  
 post_logo_slider_imagesDropzone.displayExistingFile(mockFile, '{{asset($image)}}');
   @endforeach 

 

post_logo_slider_imagesDropzone.on("removedfile", function(file) {
    
       
  $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 
 var formData = {  name: file.name   };

    $.ajax({
      type: "POST",
      url: "{{ route('remove_logo_sliders_image' ) }}",
     data :formData,
      dataType: "json",
      encode: true 
    }).done(function (data) {
      console.log(data);
    });
    
    
  
});








  
       
 let post_carousel_imagesDropzone =new Dropzone("#post_carousel_images" ,options  );
 
 
 
 @foreach($carousel_images as    $image)
  mockFile = { name: '{{asset($image)}}'  };
  
     
   
 post_carousel_imagesDropzone.displayExistingFile(mockFile, '{{asset($image)}}');
   @endforeach 
   
   
   
post_carousel_imagesDropzone.on("removedfile", function(file) {
    
       
  $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 
 var formData = {  name: file.name   };

    $.ajax({
      type: "POST",
      url: "{{ route('remove_carousel_image' ) }}",
     data :formData,
      dataType: "json",
      encode: true 
    }).done(function (data) {
      console.log(data);
    });
    
    
  
});

   
    

                         </script> 
                         
                         
                         
                                 
@endsection
