<?php $__env->startSection('content'); ?>
   
   
                    <div class="title"><?php echo e(__('Login With OTP')); ?></div>

                  
                         
                        <form id="saksh_recaptcha_form"    method="POST" action="<?php echo e(route('login_with_otp')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group ">
                                <label for="email"
                                       class="col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                                
                                    
                                    <input id="email" type="email"
                                           class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                           value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                           
                           
 
 <input type="hidden" name="grecaptcha_token" />
                            
                            

                            <div class="form-group ">
                              
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                        <label class="form-check-label" for="remember">
                                            <?php echo e(__('Remember Me')); ?>

                                        </label>
                                    </div>
                              
                              
                            </div>

                            <div class="form-group mb-0">
                             
                                    
                                 
                           <button id="submit_btn"  class="btn btn-primary">
                                        <?php echo e(__('Send OTP')); ?>

                                    </button>
                          
                            </div>
                        </form>
                        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/auth/login_with_otp.blade.php ENDPATH**/ ?>