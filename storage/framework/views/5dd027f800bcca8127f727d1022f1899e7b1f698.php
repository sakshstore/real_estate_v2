 
            <form action="<?php echo e(route('settings_logo' )); ?>"
      class="dropzone"
      id="logo_dropzone">
    
        <?php echo csrf_field(); ?>
      
      
      
</form>
 
 
<?php $__env->startSection('style'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
                         
 
        
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
 
 
 
 
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

 <script>
 var options={
     
       
      acceptedFiles: ".jpeg,.jpg,.png"
     
 };
 
 
 let myDropzone =new Dropzone("#logo_dropzone" ,options  );


  mockFile = { name: '<?php echo e($settings->app_logo); ?>'  };
  
    
    
  
  
  
  
  
 myDropzone.displayExistingFile(mockFile, '<?php echo e(asset($settings->app_logo)); ?>');
 
 
 
  
  </script>
        
<?php $__env->stopSection(); ?>

<?php /**PATH /home/saksbqic/services/resources/views/settings/logo.blade.php ENDPATH**/ ?>