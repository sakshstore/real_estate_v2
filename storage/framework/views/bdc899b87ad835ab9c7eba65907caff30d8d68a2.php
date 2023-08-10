<?php $__env->startSection('title'); ?>
    Customform
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   
                 
                            <span id="header">
                                <?php echo e(__('Customform')); ?>

                            </span>

                             
                                <a href="<?php echo e(route('customforms.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Form Name</th>
									 
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $customforms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                          
                                            
											<td><?php echo e($customform->id); ?></td>
									 		<td><?php echo e($customform->form_name); ?></td>
									 

                                            <td>
                                                <form action="<?php echo e(route('customforms.destroy',$customform->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('customforms.show',$customform->id)); ?>"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('customforms.edit',$customform->id)); ?>"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    
                <?php echo $customforms->links(); ?>

             
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/customform/index.blade.php ENDPATH**/ ?>