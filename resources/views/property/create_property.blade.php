@extends('layouts.app-master')
@section('template_title')
    {{ __('Create') }} Property
@endsection

@section('content')


					<div class="col-md-8">
			 
                        
                       			  
                        <form method="POST" action="{{ route('properties.store' ) }}"  role="form" enctype="multipart/form-data">
                       
                            @csrf

                            
           
      
 
    
    
    
									   <div class="mb-3">
  <label for="project_name" class="form-label">Project Name</label>
  <input type="text" class="form-control" id="project_name" value="{{ $property->project_name }}" name="project_name"  >
  
  
  
</div>
							
					 				   <div class="mb-3">
  <label for="location" class="form-label">Location</label>
  <input type="text" class="form-control" id="location" value="{{ $property->location }}" name="location"  >
</div>

		 
							
							 
									    	    
							 
									  
									   <div class="mb-3">
  <label for="completion" class="form-label">Completion</label>
  <input type="text" class="form-control" id="completion" name="completion"   value="{{ $property->completion }}"   >
</div>
 
								 		    
							 
			 
  
									    
							 
							  <div class="mb-3">
  <label for="developer" class="form-label">Developer</label>
 
    <input type="text" class="form-control" id="size_from" name="developer_id"  value="{{ $property->developer_id }}"   >
 
 
 
</div>   
                                        
                                    
                                    
                                    
                                    
                                         <div class="mb-3">
  <label for="broker" class="form-label">Broker</label>
  
   <input type="text" class="form-control" id="size_from" name="broker_id"  value="{{ $property->broker_id }}"   >
 
</div>   
                              
                             
 
 
								
  
                           <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
    	
									</form>
									    
									
</div>


 

   	 
                    
@endsection

@section('style')       
                    
               <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
                         
                    
@endsection

@section('scripts')

   
<script src="https://unpkg.com/@yaireo/tagify"></script>
  <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
 
 
    
                        
                        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
                        
                        
                          <script>
                            
                            
                            
                            
                            
                                                    
  var connectivity_tags = document.querySelector('.connectivity_tags');
  
console.log(connectivity_tags);

 
     var connectivity_tags_values = [@php echo '"'.implode('","', $connectivity_array).'"' @endphp];
 
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
  
 
     var tags_values = [@php echo '"'.implode('","', $amminities_array).'"' @endphp];
 
  
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
@endsection