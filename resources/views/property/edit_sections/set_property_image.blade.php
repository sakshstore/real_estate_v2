 

brochure url
 
            <form action="{{ route('post_brochure' ,$property->id) }}"
      class="dropzone"
      id="post_brochure">
    
        @csrf
      
      
      
</form>




 Featured Image
 
            <form action="{{ route('post_set_thumbnail_image' ,$property->id) }}"
      class="dropzone"
      id="property_featured_image">
    
        @csrf
      
      
      
</form>


<?php


 $gallery_items =json_decode($property->gallery_url);
 
 if(!is_array($gallery_items))
 {
     $gallery_items =array("https://dummyimage.com/900x600" ); 
 }
 
 
 ?>

<hr />
Gallery
 
            <form action="{{ route('post_set_property_images' ,$property->id) }}"
      class="dropzone"
          id="property_images">
    
        @csrf
      
      
      
</form> 
 
 

<meta name="csrf-token" content="{{ csrf_token() }}">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
 

 
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

    
    
 <script>
 
 

 
 
 
 
 
 
 
 var options={
     
      addRemoveLinks: true,
      acceptedFiles: ".jpeg,.jpg,.png"
     
 };
 
 
 let myDropzone =new Dropzone("#property_images" ,options  );

 @foreach($gallery_items as    $image)
  mockFile = { name: '{{asset($image)}}'  };
  
    
  console.log(mockFile);
  
  
  
  
  
 myDropzone.displayExistingFile(mockFile, '{{asset($image)}}');
   @endforeach 


myDropzone.on("removedfile", function(file) {
    
       
  $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 
 var formData = {  name: file.name   };

    $.ajax({
      type: "POST",
      url: "{{ route('remove_image_from_gallery',$property->id) }}",
     data :formData,
      dataType: "json",
      encode: true 
    }).done(function (data) {
      console.log(data);
    });
    
    
  
});

  
      
  // $(".dropzone").dropzone( option);
      
    
 let myDropzone_feature_image=new Dropzone("#property_featured_image" ,options  );

 
 
  mockFile = { name: '{{$property->property_thumbnail_url}}'  };
  


 myDropzone_feature_image.displayExistingFile(mockFile, '{{asset($property->property_thumbnail_url)}}');
   


myDropzone_feature_image.on("removedfile", function(file) {
    
       
  $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 
 var formData = {  name: file.name   };

    $.ajax({
      type: "POST",
      url: "{{ route('remove_feature_image_from_gallery',$property->id) }}",
     data :formData,
      dataType: "json",
      encode: true 
    }).done(function (data) {
      console.log(data);
    });
    
    
  
});

  
      // for file
      
      
         options={
     
      addRemoveLinks: true,
      acceptedFiles: ".pdf"
     
 };
 let myDropzone_pdf =new Dropzone("#post_brochure" ,options  );
      
    
  
 
  mockFile = { name: '{{$property->brochure_url}}'  };
  


 myDropzone_pdf.displayExistingFile(mockFile, '{{asset($property->brochure_url)}}');
   


myDropzone_pdf.on("removedfile", function(file) {
    
       
  $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 
 var formData = {  name: file.name   };

    $.ajax({
      type: "POST",
      url: "{{ route('remove_brochure_url',$property->id) }}",
     data :formData,
      dataType: "json",
      encode: true 
    }).done(function (data) {
      console.log(data);
    });
    
    
  
});


                         </script> 