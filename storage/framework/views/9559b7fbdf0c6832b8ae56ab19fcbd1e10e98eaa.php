 
   <form method="POST" action="<?php echo e(route('subscribers.store')); ?>"  role="form" enctype="multipart/form-data"   class="row gx-3 gy-2 align-items-center">
                            <?php echo csrf_field(); ?>
                            
                            
                            
                            
  <div class="col-sm-3">
    
    <input type="text" class="form-control"  name="full_name" id="specificSizeInputName" placeholder="full name">
  </div>
  <div class="col-sm-3">
    
    <div class="input-group">
        
        
        
       
         
         
         
         
      <div class="input-group-text">&#128241; </div>
      <input type="text" class="form-control  ($errors->has('whatsapp') ? ' is-invalid' : '') " id="saksh_whatsapp" name="whatsapp" placeholder="whatsapp">
      
       <?php echo $errors->first('whatsapp', '<div class="invalid-feedback">:message</div>'); ?>

      
      
    </div>
  </div>
  <div class="col-sm-3">
         <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" class="form-control  ($errors->has('email') ? ' is-invalid' : '') " id="saksh_whatsapp" name="email" placeholder="whatsapp">
      
        </div>
  </div>
  
   
  
  
  <div class="col-sm-3">
    <button type="submit" class="btn btn-primary ">Subscribe</button> 
 
  </div>
  
  
  
</form>

 <?php /**PATH /home/saksbqic/services/resources/views/subscriber/subscriber_section.blade.php ENDPATH**/ ?>