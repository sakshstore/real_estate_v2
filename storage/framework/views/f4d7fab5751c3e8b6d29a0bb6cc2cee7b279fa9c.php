 
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_keywords" class="form-label">keywords</label>
  
  
  <input type="text" class="form-control  ($errors->has('keywords') ? ' is-invalid' : '')  " id="saksh_keywords" name="keywords"   value="<?php echo e($autoPost->keywords); ?>" placeholder="keywords">
  
    <?php echo $errors->first('keywords', '<div class="invalid-feedback">:message</div>'); ?>

</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_category" class="form-label">category</label>
  
  
  <input type="text" class="form-control  ($errors->has('category') ? ' is-invalid' : '')  " id="saksh_category" name="category"   value="<?php echo e($autoPost->category); ?>" placeholder="category">
  
    <?php echo $errors->first('category', '<div class="invalid-feedback">:message</div>'); ?>

</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_tags" class="form-label">tags</label>
  
  
  <input type="text" class="form-control  ($errors->has('tags') ? ' is-invalid' : '')  tags " id="saksh_tags" name="tags"   value="<?php echo e($autoPost->tags); ?>" placeholder="tags">
  
    <?php echo $errors->first('tags', '<div class="invalid-feedback">:message</div>'); ?>

</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_scheduled_at" class="form-label">Scheduled at</label>
  
  
  <input type="datetime-local" class="form-control  ($errors->has('scheduled_at') ? ' is-invalid' : '')  " id="saksh_scheduled_at" name="scheduled_at"   value="<?php echo e($autoPost->scheduled_at); ?>" placeholder="scheduled_at">
  
    <?php echo $errors->first('scheduled_at', '<div class="invalid-feedback">:message</div>'); ?>

</div>


           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  <?php /**PATH /home/saksbqic/services/resources/views/auto-post/form.blade.php ENDPATH**/ ?>