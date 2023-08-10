<?php $__env->startSection('content'); ?>
    
    
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-brand-tab" data-bs-toggle="pill" data-bs-target="#pills-brand" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Branding Setting</button>
  </li>  
 
 
 <li class="nav-item" role="presentation">
    <button class="nav-link  " id="pills-logo-tab" data-bs-toggle="pill" data-bs-target="#pills-logo" type="button" role="tab" aria-controls="pills-logo" aria-selected="true">Logo Setting</button>
  </li>
  
  
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-notification-tab" data-bs-toggle="pill" data-bs-target="#pills-notification" type="button" role="tab" aria-controls="pills-notification" aria-selected="false">Notification Settings</button>
  </li>  
  
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-recaptcha-tab" data-bs-toggle="pill" data-bs-target="#pills-recaptcha" type="button" role="tab" aria-controls="pills-recaptcha" aria-selected="false">Recaptcha Settings </button>
  </li>
  
  
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-cron-tab" data-bs-toggle="pill" data-bs-target="#pills-cron" type="button" role="tab" aria-controls="pills-cron" aria-selected="false">Cron Job Settings</button>
  </li>
  
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-brand" role="tabpanel" aria-labelledby="pills-brand-tab" tabindex="0">  <?php echo $__env->make('settings.branding', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>



  <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab" tabindex="0">
    <?php echo $__env->make('settings.logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
    


  <div class="tab-pane fade" id="pills-notification" role="tabpanel" aria-labelledby="pills-notification-tab" tabindex="0">
    <?php echo $__env->make('settings.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
    

  <div class="tab-pane fade" id="pills-recaptcha" role="tabpanel" aria-labelledby="pills-recaptcha-tab" tabindex="0">
    <?php echo $__env->make('settings.recaptcha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
    
    
    
  <div class="tab-pane fade" id="pills-cron" role="tabpanel" aria-labelledby="pills-cron-tab" tabindex="0">
    <?php echo $__env->make('settings.cron_job', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
    
    
     
 
</div>
 
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/settings/form.blade.php ENDPATH**/ ?>