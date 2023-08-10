<form class="text-start" action="<?php echo e(route('call_me_back')); ?>" method="post">
              
              <?php echo csrf_field(); ?>
              <div class="row">
                  
                  
                  
                  <div class="col">
                      
                      
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name"  name="name"  required>
                        </div>
                      
                  </div>
                  <div class="col">
                      
                         <div class="form-group mt-2">
                            <label for="email">Email address</label>
                            
                              <?php if(auth()->guard()->guest()): ?>
                              
                            <input type="email"  class="form-control" id="email"  name="email"  required>
                           <?php else: ?>
                           
                               <input type="email" value="<?php echo e(auth()->user()->email); ?>" class="form-control" id="email"  name="email"  required>
                               
                               
                           <?php endif; ?>
                           
                           
                        </div> 
                      
                  </div>
              </div>
                  <div class="row">
                  
                  
                  
                  <div class="col">
                          <div class="form-group  mt-2">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone"  name="phone"   required>
                           
                        </div>
                        
                        </div>
                  
                  <div class="col">
                      
                        <div class="form-group  mt-2">
                            <label for="source">Where did you hear about us?</label>
<select name="refer"  class="form-control" required  >
                                    
                                        <option disable value="Please Select">Please Select</option>
                                        <option value="Search Engine">Search Engine</option>
                                        <option value="YouTube">YouTube</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                        <option value="Newspaper">Newspaper</option>
                                       
                                        </select>


</div> 
         
         
         
                           </div>
              </div>
              
              
              
              
              
              
              
              
              
                        <input type="hidden" name="service_id" value="<?php echo e($property_id); ?>"  > 
                     
                       <div class="row">
                  
                  
                  
                  <div class="col">       
                       
                   
                   
                   <div class="form-group mb-3">
  <label for="message" class="form-label">Message</label>
  <textarea class="form-control" id="message" rows="3"></textarea>
</div>



                                    
                        <button type="submit" class="btn btn-primary w-100  mt-2">Submit</button> 
                        
                        
                           </div>
              </div>
              
              
              
              
                    </form><?php /**PATH /home/saksbqic/services/resources/views/property/call_back_form.blade.php ENDPATH**/ ?>