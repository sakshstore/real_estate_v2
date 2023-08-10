 
<?php $__env->startSection('template_title'); ?>
    <?php echo e(__('Update')); ?> Property
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>





Logo slider images
            <form action="<?php echo e(route('post_logo_slider_images' )); ?>"
      class="dropzone"
      id="post_logo_slider_images">
    
        <?php echo csrf_field(); ?>
      
      
      
</form>




Carousel images
 
            <form action="<?php echo e(route('post_carousel_images'  )); ?>"
      class="dropzone"
      id="post_carousel_images">
    
        <?php echo csrf_field(); ?>
      
      
      
</form>




<hr />
 
 <?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>  

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
                     
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


 
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

    
    
 <script>
 
 

 
 
 
 
 
 
 
 var options={
     
      addRemoveLinks: true,
      acceptedFiles: ".jpeg,.jpg,.png"
     
 };
 
 
 let post_logo_slider_imagesDropzone =new Dropzone("#post_logo_slider_images" ,options  );

 <?php $__currentLoopData = $logo_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  mockFile = { name: '<?php echo e(asset($image)); ?>'  };
  
   
  
 post_logo_slider_imagesDropzone.displayExistingFile(mockFile, '<?php echo e(asset($image)); ?>');
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

 

post_logo_slider_imagesDropzone.on("removedfile", function(file) {
    
       
  $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 
 var formData = {  name: file.name   };

    $.ajax({
      type: "POST",
      url: "<?php echo e(route('remove_logo_sliders_image' )); ?>",
     data :formData,
      dataType: "json",
      encode: true 
    }).done(function (data) {
      console.log(data);
    });
    
    
  
});








  
       
 let post_carousel_imagesDropzone =new Dropzone("#post_carousel_images" ,options  );
 
 
 
 <?php $__currentLoopData = $carousel_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  mockFile = { name: '<?php echo e(asset($image)); ?>'  };
  
     
   
 post_carousel_imagesDropzone.displayExistingFile(mockFile, '<?php echo e(asset($image)); ?>');
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
   
   
   
post_carousel_imagesDropzone.on("removedfile", function(file) {
    
       
  $.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

 
 var formData = {  name: file.name   };

    $.ajax({
      type: "POST",
      url: "<?php echo e(route('remove_carousel_image' )); ?>",
     data :formData,
      dataType: "json",
      encode: true 
    }).done(function (data) {
      console.log(data);
    });
    
    
  
});

   
    

                         </script> 
                         
                         
                         
                                 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/sections/set_sections_image.blade.php ENDPATH**/ ?>