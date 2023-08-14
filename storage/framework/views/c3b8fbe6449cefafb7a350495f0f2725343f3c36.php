<?php $__env->startSection('title'); ?>
    Team
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   
                 
                            <span id="header">
                                <?php echo e(__('Team')); ?>

                            </span>

                             
                                <a href="<?php echo e(route('teams.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Full Name</th>
										<th>About</th>
										<th>Instagram Url</th>
										<th>Facebook Url</th>
										<th>Linked Url</th>
										<th>Whatsapp Number</th>
										<th>Avatar</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                          	<td><?php echo e($team->id); ?></td>
                                            
											<td><?php echo e($team->full_name); ?></td>
											<td><?php echo e($team->about); ?></td>
											<td><?php echo e($team->instagram_url); ?></td>
											<td><?php echo e($team->facebook_url); ?></td>
											<td><?php echo e($team->linked_url); ?></td>
							 	<td><?php echo e($team->whatsapp_number); ?></td>
											<td><?php echo e($team->avatar); ?></td>
											<td><?php echo e($team->user_id); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('teams.destroy',$team->id)); ?>" method="POST">
                                                 
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('teams.edit',$team->id)); ?>"><i class="fa fa-fw fa-edit"></i> Edit / Show </a>
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
                    
          
             
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/team/index.blade.php ENDPATH**/ ?>