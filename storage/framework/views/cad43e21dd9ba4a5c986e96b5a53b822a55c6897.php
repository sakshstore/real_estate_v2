<?php $__env->startSection('template_title'); ?>
    <?php echo e(__('Update')); ?> Property
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


					<div class="col-md-8">
					    
					   


                        <?php echo e(__('Update')); ?> Property 
                   
                        
                        
					    
   <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
      
      
      
    <button class="nav-link active" id="nav-overview-tab" data-bs-toggle="tab" data-bs-target="#nav-overview" type="button" role="tab" aria-controls="nav-overview" aria-selected="true">Overview</button>
    
    
     
    <button class="nav-link" id="nav-other-tab" data-bs-toggle="tab" data-bs-target="#nav-other" type="button" role="tab" aria-controls="nav-other" aria-selected="false">Other Options</button>
     
    <button class="nav-link" id="nav-amenities-tab" data-bs-toggle="tab" data-bs-target="#nav-amenities" type="button" role="tab" aria-controls="nav-amenities" aria-selected="false">Amenities</button>
    
    
    <button class="nav-link" id="nav-connectivities-tab" data-bs-toggle="tab" data-bs-target="#nav-connectivities" type="button" role="tab" aria-controls="nav-connectivities" aria-selected="false">Connectivities</button>
    
    
    <button class="nav-link" id="nav-set_property_image-tab" data-bs-toggle="tab" data-bs-target="#nav-set_property_image" type="button" role="tab" aria-controls="nav-set_property_image" aria-selected="false">Set property image</button>
    
    
    <button class="nav-link" id="nav-masterplan-tab" data-bs-toggle="tab" data-bs-target="#nav-masterplan" type="button" role="tab" aria-controls="nav-masterplan" aria-selected="false">Master plan</button>
    
    
    <button class="nav-link" id="nav-paymentplan-tab" data-bs-toggle="tab" data-bs-target="#nav-paymentplan" type="button" role="tab" aria-controls="nav-paymentplan" aria-selected="false">Payment plan</button>
    
    
    
    
    
    
     
     
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab" tabindex="0"><?php echo $__env->make('property.edit_sections.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
  
  
   
  
  <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab" tabindex="0"> <?php echo $__env->make('property.edit_sections.other', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </div>
  
  
  
  <div class="tab-pane fade" id="nav-amenities" role="tabpanel" aria-labelledby="nav-amenities-tab" tabindex="0"> <?php echo $__env->make('property.edit_sections.aminities', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </div>
  
  
  <div class="tab-pane fade" id="nav-connectivities" role="tabpanel" aria-labelledby="nav-connectivities-tab" tabindex="0"><?php echo $__env->make('property.edit_sections.set_connectivity', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
  
  
  <div class="tab-pane fade" id="nav-set_property_image" role="tabpanel" aria-labelledby="nav-set_property_image-tab" tabindex="0"><?php echo $__env->make('property.edit_sections.set_property_image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
  
  
  <div class="tab-pane fade" id="nav-masterplan" role="masterplan" aria-labelledby="nav-masterplan-tab" tabindex="0"><?php echo $__env->make('property.edit_sections.project_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  </div>
  
  
  <div class="tab-pane fade" id="nav-paymentplan" role="tabpanel" aria-labelledby="nav-paymentplan-tab" tabindex="0"> <?php echo $__env->make('property.edit_sections.payment_plan_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </div>
  
   
   
  
   
</div>

</div>


 

   	 
                    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>       
                    
               <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />              
                    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

   
<script src="https://unpkg.com/@yaireo/tagify"></script>
  <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
 
 
     
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
  
  
  <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

                        
                        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
                        
                 
                          <script>
                            
                          /*  
                            jQuery(function($) {
									        
   var formData=  <?php  // echo  $customform->form_json ; ?>  ;
   
var formRenderInstance = $('#render-container').formRender( {  formData});

  
 
									          });    
                            */
                            
                                                    
  var connectivity_tags = document.querySelector('.connectivity_tags');
  
console.log(connectivity_tags);

 
     var connectivity_tags_values = [<?php echo '"'.implode('","', $connectivity_array).'"' ?>];
 
    // init Tagify script on the above inputs
    connectivity_tagify = new Tagify(connectivity_tags, {
      whitelist: connectivity_tags_values,
        maxTags             :1, mode : "select",
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: true    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })
    
    
    
    
  var input = document.querySelector('.tags');
  
 
     var tags_values = [<?php echo '"'.implode('","', $amminities_array).'"' ?>];
 
  
    // init Tagify script on the above inputs
    tagify = new Tagify(input, {
      whitelist: tags_values,
      
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })
    
    
    
    /////
    
    
    
     
    
  var project_tags_input = document.querySelector('.project_tags');
  
 
     var project_tags_values = ["Urgent Property","Top Property","Featured Property" ];
 
  
    // init Tagify script on the above inputs
    tagify = new Tagify(project_tags_input, {
      whitelist: project_tags_values,
      
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })
    
    
    ////
    
    
        /////
    
    
 
     
    
  var property_type_tags_input = document.querySelector('.property_type_tags');
  
 
     var property_type_tags_values = ["Apartment", "Penthouse","Villas", "Sky Villas",
     "Duplex",
     "Mansion","Townhouses",
     "Signature Villa",
     "Residential","Commercial","Industrial" ,"Investing in Land"];
 
  
    // init Tagify script on the above inputs
    tagify = new Tagify(property_type_tags_input, {
      whitelist: property_type_tags_values,
      
      dropdown: {
               
        classname: "tags-look",  
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
      }
    })
    
    
    ////
    
    
    
 var allEditors = document.querySelectorAll('.editor');
                           
                           
        for (var i = 0; i < allEditors.length; ++i) {
          ClassicEditor.create(allEditors[i]);
        }
        
         
                </script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saksbqic/services/resources/views/property/edit_property.blade.php ENDPATH**/ ?>