<?php $__env->startSection('title'); ?>
    Create Broker
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  
              
               <div class="container">
               <div class="mt-5">
                   <h2> Register as a broker </h2>
                   </div>
                   
                   <div class="row">
                   
                
                   
               <div class="col-md-6">
                  
  <form method="POST" target="_blank" action="<?php echo e(route('register_as_broker_post')); ?>"   enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
 
        

 
                <div id="validation_results">validation_results</div>

<div id="render-container"></div>
           

  
        <button type="submit" class="btn btn-primary w-100 mt-5 mb-5">Submit</button>
 
        
        
        
                        </form>
                        
</div></div></div>
<?php $__env->stopSection(); ?>



  

<?php $__env->startSection('style'); ?>        
                 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />        
                 
                 
                 
                    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
  
  
  <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/rxjs/2.5.3/rx.lite.js"></script>
  <script>
  jQuery(function($) {
 

   var formData= <?php echo $customform->form_json; ?>;
    
     
 var formRenderInstance = $('#render-container').formRender({ formData });
 
  });







$(function () {


var $input = $("[name='email']");

 
 
        $results = $('#validation_results');

    //Rx.Observable.getJSON()

    /* Only get the value from each key up */
    Rx.Observable.fromEvent($input, 'keyup')
        .map(function (events) {
            return events.target.value;
        })
        .debounce(50 /*ms*/)
        .distinctUntilChanged()
        .filter(function (text) {
            
            return text.length > 2;
        
            
        })
        
        .flatMapLatest(function (query) {
            
            return searchWikipedia(query)
        
            
        })
        
        
        .subscribe(function (data) {
             
             
             console.log(data.message );
             
               $($results).text(data.message);
         //   $( "sddsfsd"+ data.message  ).text($results);
            
        //    $( "sddsfsd"+ data.message  ).text($results);
            
            
        });

});

function searchWikipedia(email) {
    
    
   $.ajaxSetup(
   {
      headers:
      {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   });
   
   
    return  $.ajax({
        url: '<?php echo e(route("validate_broker_registeration")); ?>',
 
 
            method: 'post',
        data: {
           
            email: email
        }
    }).promise();
     
    
    
}





  </script>

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/broker/register_as_broker.blade.php ENDPATH**/ ?>