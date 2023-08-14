 
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_form_name" class="form-label">form_name</label>
  
  
  <input type="text" class="form-control  ($errors->has('form_name') ? ' is-invalid' : '')  " id="saksh_form_name" name="form_name"   value="<?php echo e($customform->form_name); ?>" placeholder="form_name">
  
    <?php echo $errors->first('form_name', '<div class="invalid-feedback">:message</div>'); ?>

</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_form_type" class="form-label">form_type</label>
  
  
  <input type="text" class="form-control  ($errors->has('form_type') ? ' is-invalid' : '')  " id="saksh_form_type" name="form_type"   value="<?php echo e($customform->form_type); ?>" placeholder="form_type">
  
    <?php echo $errors->first('form_type', '<div class="invalid-feedback">:message</div>'); ?>

</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_form_submits" class="form-label">form_submits</label>
  
  
  <input type="text" class="form-control  ($errors->has('form_submits') ? ' is-invalid' : '')  " id="saksh_form_submits" name="form_submits"   value="<?php echo e($customform->form_submits); ?>" placeholder="form_submits">
  
    <?php echo $errors->first('form_submits', '<div class="invalid-feedback">:message</div>'); ?>

</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_form_json" class="form-label">form_json</label>
  
  
  <input type="text" class="form-control  ($errors->has('form_json') ? ' is-invalid' : '')  " id="saksh_form_json" name="form_json"   value="<?php echo e($customform->form_json); ?>" placeholder="form_json">
  
    <?php echo $errors->first('form_json', '<div class="invalid-feedback">:message</div>'); ?>

</div>


           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  <?php /**PATH /home/saksbqic/services/resources/views/customform/form.blade.php ENDPATH**/ ?>