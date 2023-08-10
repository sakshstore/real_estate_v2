 
             
              
                
  <form method="POST" action="<?php echo e(route('settings_branding')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
 
        <div class="form-group  mb-3">
        
  <label for="app_name" class="form-label">App Name</label>
  
  
  <input type="text" class="form-control  ($errors->has('app_name') ? ' is-invalid' : '')  " id="app_name"  value="<?php echo e($settings->app_name); ?>"    name="app_name"  >
  
    <?php echo $errors->first('app_name', '<div class="invalid-feedback">:message</div>'); ?>

</div>
      
      
      
   
   
        <div class="form-group  mb-3">
        
  <label for="app_url" class="form-label">App URL</label>
  
  
  <input type="text" class="form-control  ($errors->has('app_url') ? ' is-invalid' : '')  " id="app_url"  value="<?php echo e($settings->app_url); ?>"    name="app_url"  >
  
    <?php echo $errors->first('app_url', '<div class="invalid-feedback">:message</div>'); ?>

</div>
   
   
        <div class="form-group  mb-3">
        
  <label for="instagram_url" class="form-label">Instagram URL</label>
  
  
  <input type="text" class="form-control  ($errors->has('instagram_url') ? ' is-invalid' : '')  " id="instagram_url"  value="<?php echo e($settings->instagram_url); ?>"    name="instagram_url"  >
  
    <?php echo $errors->first('instagram_url', '<div class="invalid-feedback">:message</div>'); ?>

</div>

   
        <div class="form-group  mb-3">
        
  <label for="whatsapp_url" class="form-label">Whatsapp chat start link</label>
  
  
  <input type="text" class="form-control  ($errors->has('whatsapp_url') ? ' is-invalid' : '')  " id="whatsapp_url"  value="<?php echo e($settings->whatsapp_url); ?>"    name="whatsapp_url"  >
  
    <?php echo $errors->first('whatsapp_url', '<div class="invalid-feedback">:message</div>'); ?>

</div>

   
        <div class="form-group  mb-3">
        
  <label for="twitter_url" class="form-label">Twitter URL</label>
  
  
  <input type="text" class="form-control  ($errors->has('twitter_url') ? ' is-invalid' : '')  " id="twitter_url"  value="<?php echo e($settings->twitter_url); ?>"    name="twitter_url"  >
  
    <?php echo $errors->first('twitter_url', '<div class="invalid-feedback">:message</div>'); ?>

</div>

   
        <div class="form-group  mb-3">
        
  <label for="facebook_url" class="form-label">Facebook URL</label>
  
  
  <input type="text" class="form-control  ($errors->has('facebook_url') ? ' is-invalid' : '')  " id="facebook_url"  value="<?php echo e($settings->facebook_url); ?>"    name="facebook_url"  >
  
    <?php echo $errors->first('facebook_url', '<div class="invalid-feedback">:message</div>'); ?>

</div>

   
        <div class="form-group  mb-3">
        
  <label for="youtube_url" class="form-label">Youtube URL</label>
  
  
  <input type="text" class="form-control  ($errors->has('youtube_url') ? ' is-invalid' : '')  " id="youtube_url"  value="<?php echo e($settings->youtube_url); ?>"    name="youtube_url"  >
  
    <?php echo $errors->first('youtube_url', '<div class="invalid-feedback">:message</div>'); ?>

</div>



<p>System will log out once you save this </p>

        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  

                        </form>
                         <?php /**PATH /home/saksbqic/services/resources/views/settings/branding.blade.php ENDPATH**/ ?>