<?php $__env->startSection('template_title'); ?>
    Property
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


     
                            <span id="card_title">
                                <?php echo e(__('Property')); ?>

                            </span>

                           
                                <a href="<?php echo e(route('properties.create')); ?>" class="btn btn-primary  w-100"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                             
                  

                    
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    
                                    
                                    <tr>
                                        
                                        <th>
                                            
                                            ID
                                        </th>
                                        
                                        <th> Project Name</th>
                                             <th> Total View
                                        </th>
                                       
                                      <th> Location
                                        </th>
                                        <th> &nbsp;
                                        </th>
                                       
                                        <th>Created at</th>
                                        
                                        
                                        
                                        <th> Updated at </th>
                            
                                  
                                        <th> &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        	<td><?php echo e($property->id); ?></td>
                                            
											<td><?php echo e($property->project_name); ?></td>
											
											<td> <?php echo e(views($property)->count()); ?> </td>
											
											<td><?php echo e($property->location); ?></td>
										 
											<td><?php echo e($property->address); ?></td>
									 
								 
										 		<td><?php echo e($property->created_at); ?></td>
										 
										 		<td><?php echo e($property->updated_at); ?></td>
										 

                                            <td>
                                                
                                                
    
   
  

   
                                                <form action="<?php echo e(route('properties.destroy',$property->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('viewProperty',$property->id)); ?>"><i class="fa fa-fw fa-eye"></i>  </a>
                                                    
                                                  
                                                      
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('properties.edit',$property->id)); ?>"><i class="fa fa-fw fa-edit"></i> <?php echo e(__('Edit')); ?></a>
                                                    
                                                        <a class="btn btn-sm btn-primary " href="<?php echo e(route('duplicate_property',$property->id)); ?>"><i class="fa fa-fw fa-eye"></i> <?php echo e(__('Duplicate')); ?></a>
                                               
                                                  
                             <?php if($property->status =="Unpublished"): ?> 
                                                        <a class="btn btn-sm btn-primary " href="<?php echo e(route('publish_property',$property->id)); ?>"><i class="fa fa-fw fa-eye"></i> <?php echo e(__('Publish')); ?></a>
                                                    
                                                    <?php endif; ?>
                                                    
        <?php if($property->status =="Published"): ?>     
                                                    
                                                        <a class="btn btn-sm btn-primary " href="<?php echo e(route('unpublish_property',$property->id)); ?>"><i class="fa fa-fw fa-eye"></i> <?php echo e(__('Unpublish')); ?></a>
                                                      
                                                      
                                                         <?php endif; ?>
                                                      
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> <?php echo e(__('Delete')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                 
                <?php echo $properties->links(); ?>

                
                
                
                
          
<?php $__env->stopSection(); ?>





 
<?php $__env->startSection('style'); ?>
 
<?php $__env->stopSection(); ?>




<?php $__env->startSection('scripts'); ?>
 
          
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/property/index.blade.php ENDPATH**/ ?>