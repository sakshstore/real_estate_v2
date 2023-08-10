

 
                                      <div class="row">  
        
                                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                     <div class="col-md-3">
                                         
                                      
                            
                            
                            
                                    <div class="card">
                                        
                                            <img class="card-img-top" src="<?php echo e(asset($team->avatar)); ?>"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
                                            
                                            
                                <div class="card-body text-center mt-4">
                                     
                                      
                                      
                                    <h4 class="card-title"><?php echo e($team->full_name); ?></h4>
                                    <p class="card-text">
                                        
                                        
                            
                                        
                                        <?php echo e($team->about); ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo e($team->facebook_url); ?>">
                                                <i class="fa fa-beat fa-lg   fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo e($team->linked_url); ?>">
                                                <i class="fa  fa-lg  fa-beat fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo e($team->whatsapp_number); ?>">
                                                <i class="fa fa-lg fa-beat fa-whatsapp"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo e($team->instagram_url); ?>">
                                                <i class="fa fa-lg fa-beat fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                      </div>
                      
                 
                    
                     
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    
                                    
                                    </div>
                      
                      
                      
                      
 
 
                       <?php /**PATH /home/saksbqic/services/resources/views/team/team_section.blade.php ENDPATH**/ ?>