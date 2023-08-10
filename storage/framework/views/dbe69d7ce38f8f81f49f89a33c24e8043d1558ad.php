 
   
   
                  

 <div class="row">
 
 
                 
                  
   <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
   
 <div class="col-md-3">
 
   
 <a href="<?php echo e(route('get_post',$post->id)); ?>">
    
     
 <div class="card mt-3">
    <img class="card-img-top" src="<?php echo e(asset($post->thumbnail)); ?>"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($post->title); ?></h5>
      <p class="card-text"> 
       
       
     <?php echo $post->content; ?> 
     </p>  
    </div>
   
  </div>
   </a>
    </div>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    
               
    </div><?php /**PATH /home/saksbqic/services/resources/views/post/posts_section.blade.php ENDPATH**/ ?>