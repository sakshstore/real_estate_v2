<?php $__env->startSection('title'); ?>
    Update Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 
 
 
                   <form action="<?php echo e(route('update_post_thumbnail',$post->id )); ?>"
      class="dropzone"
      id="thumbnail">
    
        <?php echo csrf_field(); ?>
      
      
      
</form>
 
 
 
 <hr />
                
                
                        <form method="POST" action="<?php echo e(route('posts.update', $post->id)); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('post.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </form>
                        
                        
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>       
                    
               <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
                         
                 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
                         
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
 
 
 
     
<script src="https://unpkg.com/@yaireo/tagify"></script>
  <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
 
 
         
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
 
<script> 
 


    ClassicEditor
        .create( document.querySelector( '.editor' ) )
        .catch( error => {
            console.error( error );
        } );
        
          
	

    
  var input = document.querySelector('.tags');
   
 
     var tags_values = [  ];
 
  
    // init Tagify script on the above inputs
    tagify = new Tagify(input, {
      whitelist: tags_values,
      
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })	


</script>


 
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

 <script>
 var options={
     
       
      acceptedFiles: ".jpeg,.jpg,.png"
     
 };
 
 
 let thumbnail=new Dropzone("#thumbnail" ,options  );


  mockFile = { name: '<?php echo e($post->thumbnail); ?>'  };
  
  
 thumbnail.displayExistingFile(mockFile, '<?php echo e(asset($post->thumbnail)); ?>');
 
 
 
  
  </script>
        


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/post/edit.blade.php ENDPATH**/ ?>