 


                        <div class="table-responsive">
                            <table class="table table-bordered " id="sakshdatatable">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Service ID</th>
										<th>User ID</th>
										<th>IP Address</th>
										<th>Request URL</th>
<th> Time zone</th><th>Refer</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $leads_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($lead->id); ?></td>
                                            
											<td><?php echo e($lead->name); ?></td>
											<td><?php echo e($lead->email); ?></td>
											<td><?php echo e($lead->phone); ?></td>
											<td><?php echo e($lead->service_id); ?></td>
											<td><?php echo e($lead->user_id); ?></td>
											<td><?php echo e($lead->ip_address); ?></td>
											<td><?php echo e($lead->request_url); ?></td>
											<td><?php echo e($lead->timezone); ?></td>
											<td><?php echo e($lead->refer); ?></td>

                                            <td>
                            
        
        
    <form action="<?php echo e(route('set_lead_tags',$lead->id)); ?>" method="POST">
                                                    
                                                    <?php echo csrf_field(); ?>
                                                    
                                                       <div class="mb-3">
            <label for="status" class="col-form-label">Tags</label>
           
        <input type="text" class="form-control status_tags" value="<?php echo e($lead->tags); ?>" name="tags" >
              
          </div>
           
   
  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-fw fa-home"></i> Update Tags</button>
  
  <hr />
                                                </form>
        
        
    <form action="<?php echo e(route('set_lead_status',$lead->id)); ?>" method="POST">
                                                    
                                                    <?php echo csrf_field(); ?>
                                                    
                                                       <div class="mb-3">
            <label for="status" class="col-form-label">Status</label>
           
        <input type="text" class="form-control status_tags" value="<?php echo e($lead->status); ?>" name="status" >
              
          </div>
           
   
  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-fw fa-home"></i> update_status</button>
                                                </form>
        
          <hr />
        
                                                <form action="<?php echo e(route('leads.destroy',$lead->id)); ?>" method="POST">
                                                    
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
                        <?php /**PATH /home/saksbqic/services/resources/views/lead/table.blade.php ENDPATH**/ ?>