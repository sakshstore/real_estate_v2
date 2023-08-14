 

brochure url
 
            <form action="<?php echo e(route('post_brochure' ,$property->id)); ?>"
      class="dropzone"
      id="post_brochure">
    
        <?php echo csrf_field(); ?>
      
      
      
</form>




 Featured Image
 
            <form action="<?php echo e(route('post_set_thumbnail_image' ,$property->id)); ?>"
      class="dropzone"
      id="property_featured_image">
    
        <?php echo csrf_field(); ?>
      
      
      
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
 
            <form action="<?php echo e(route('post_set_property_images' ,$property->id)); ?>"
      class="dropzone"
          id="property_images">
    
        <?php echo csrf_field(); ?>
      
      
      
</form> 
 
 

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
 

 
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

    
    
 <script>
 
 

 
 
 
 
 
 
 
 var options={
     
      addRemoveLinks: true,
      acceptedFiles: ".jpeg,.jpg,.png"
     
 };
 
 
 let myDropzone =new Dropzone("#property_images" ,options  );

 <?php $__currentLoopData = $gallery_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  mockFile = { name: '<?php echo e(asset($image)); ?>'  };
  
    
  console.log(mockFile);
  
  
  
  
  
 myDropzone.displayExistingFile(mockFile, '<?php echo e(asset($image)); ?>');
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


myDropzone.on("removedfile", function(file) {
    
       
  $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 
 var formData = {  name: file.name   };

    $.ajax({
      type: "POST",
      url: "<?php echo e(route('remove_image_from_gallery',$property->id)); ?>",
     data :formData,
      dataType: "json",
      encode: true 
    }).done(function (data) {
      console.log(data);
    });
    
    
  
});

  
      
  // $(".dropzone").dropzone( option);
      
    
 let myDropzone_feature_image=new Dropzone("#property_featured_image" ,options  );

 
 
  mockFile = { name: '<?php echo e($property->property_thumbnail_url); ?>'  };
  


 myDropzone_feature_image.displayExistingFile(mockFile, '<?php echo e(asset($property->property_thumbnail_url)); ?>');
   


myDropzone_feature_image.on("removedfile", function(file) {
    
       
  $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 
 var formData = {  name: file.name   };

    $.ajax({
      type: "POST",
      url: "<?php echo e(route('remove_feature_image_from_gallery',$property->id)); ?>",
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
      
    
  
 
  mockFile = { name: '<?php echo e($property->brochure_url); ?>'  };
  


 myDropzone_pdf.displayExistingFile(mockFile, '<?php echo e(asset($property->brochure_url)); ?>');
   


myDropzone_pdf.on("removedfile", function(file) {
    
       
  $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 
 var formData = {  name: file.name   };

    $.ajax({
      type: "POST",
      url: "<?php echo e(route('remove_brochure_url',$property->id)); ?>",
     data :formData,
      dataType: "json",
      encode: true 
    }).done(function (data) {
      console.log(data);
    });
    
    
  
});


                         </script> <?php /**PATH /home/saksbqic/services/resources/views/property/edit_sections/set_property_image.blade.php ENDPATH**/ ?>