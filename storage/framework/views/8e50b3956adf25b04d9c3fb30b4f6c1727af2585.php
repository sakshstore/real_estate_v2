
 

 


<form method="POST" action="<?php echo e(route('update_connectivity', $property->id)); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>

                                   <div class="col-md-12   mb-5">
  <label for="aminities" class="form-label">Connectivity</label>
  
  
   <input type="text" class="form-control connectivity_tags tags" id="connectivity" name="connectivity_name"    >  
   
   
   <label for="aminities" class="form-label">Distance</label>
  
  
   <input type="text" class="form-control  " id="connectivity_distance" name="connectivity_distance"    >
   
 
   <input type="submit" class=" btn w-100  btn-primary" id="connectivity" value="save" >
   
   </div></form>
   <table class="table table-bordered">
      
<?php

$connectivities=json_decode($property->connectivities);

if(is_array($connectivities))
{
foreach( $connectivities as $connectivity)

if(isset($connectivity->name))
{

?>


 <tr>
     
     <td> <?php echo e($connectivity->name); ?>  </td>
 
 
 <td><?php echo e($connectivity->distance); ?></td>
 
 
 <td>     


<form  target="_blank" action="<?php echo e(route('remove_connectivity',$property->id)); ?>" method="POST">    <?php echo csrf_field(); ?>

<input type="hidden"  name="connectivity_name"  value="<?php echo e($connectivity->name); ?>" /> 
                                                    
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> <?php echo e(__('Delete')); ?></button>
                                                </form> 
                                                
                                                
                                                </td></tr>
                                                
                                                
                                                <?php

}
}
?>
             
   </table>           
   
   
   
   
   
   
 
                                                
                                                
                                                
   
   
   
 <?php /**PATH /home/saksbqic/services/resources/views/property/edit_sections/set_connectivity.blade.php ENDPATH**/ ?>