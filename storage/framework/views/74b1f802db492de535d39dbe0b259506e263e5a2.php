<?php $__env->startSection('content'); ?>
   
   
                    <div class="title"><?php echo e(__('Login With OTP')); ?></div>

                  
                        
                        <form id="saksh_recaptcha_form"  method="POST" action="<?php echo e(route('verify_login_with_otp')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group ">
                                <label for="otp"
                                       class="col-form-label text-md-right"><?php echo e(__('OTP')); ?></label>

                                  
       <input   type="hidden" name="email"  value="<?php echo e($email); ?>" >

 <input type="hidden" name="grecaptcha_token" />
                                    
                                    <input id="otp" type="text"
                                           class="form-control " name="otp"
                                           value="" required  autofocus>

                                   
                                </div>
                           
                           
 
                            
                            

                           
                           

                            <div class="form-group mb-0">
                             
                                    
                                   
                             
                           <button id="submit_btn"  class="btn btn-primary">
                                        <?php echo e(__('Verify')); ?>

                                    </button>
                          
                            </div>
                        </form>
                        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/auth/verify_otp_for_login.blade.php ENDPATH**/ ?>