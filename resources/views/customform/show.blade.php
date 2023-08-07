@extends('layouts.app-master')

@section('title')
    {{ $customform->name ?? 'Show Customform' }}
@endsection

@section('content')
     
                            <span class="header">Show Customform</span>
                        
                         
                            <a class="btn btn-primary" href="{{ route('customforms.index') }}"> Back</a>
                       
                <table>
                
                
                        
                       <tr>
                       
                       
                       <td>
                            <strong>Form Name:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                 {{ $customform->id }}        {{ $customform->form_name }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Form Type:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $customform->form_type }}
                       </td>
                       
                       
                       </tr>
                      
                  
                </table>
        
                
                
                <div id="fbeditor"></div>
                
                
                <div id="myDiv" class="btn btn-success w-100 mb-2">save </div>
                
                <div id="setData" class="btn btn-success w-100">Load Form </div>
               
  
 
  
  
  
@endsection

@section('style')        
                 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />        
                 
                 
                 
                    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection


@section('scripts')
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
  
  
  <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

  <script>
  jQuery(function($) {
 

   var formData=  <?php echo  $customform->form_json ; ?>  ;
 
var options = {
      defaultFields:  formData 
    };

console.log(options);
var fields = [{
  label: "Email",
  type: "text",
  subtype: "email",
  icon: "✉"
}];
// inside the tinymce control class this is available as this.classConfig.paste_data_images

var options = {
      disableFields: ['autocomplete','file',"header","paragraph"],
      showActionButtons:false,
        defaultFields:  formData ,
     roles: {
    1: 'Administrator',
  } 
    };

   var formData=  <?php echo  $customform->form_json ; ?>  ;
var fbEditor = document.getElementById('fbeditor');
var formBuilder = $(fbEditor).formBuilder(options);



 
document.getElementById('setData').addEventListener('click', function() {
    formBuilder.actions.setData(formData);
});
    
    

$( "#myDiv" ).on( "click", function() {
    
     
 //  var form_data= formBuilder.actions.getData('json',true );
 
   var formData= formBuilder.actions.getData('json' );
 
  
  
     
//var formRenderInstance = $('#render-container').formRender({ formData });

 
 save_custom_form({{ $customform->id }},formData );
 

   
} );



  });
  
  
  
  
  
  
  
 
function save_custom_form(form_id,form_data )
{
    
 
   $.ajaxSetup(
   {
      headers:
      {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   });
   
   
   
   
     var data = {
        form_id: form_id,
        form_json: form_data
    };
    
    
    
    
    
    
   $.ajax(
   {
      url: '{{ route('set_form_fields',$customform->id) }}',
      type: "post",
      data: data,
      dataType: 'json',
      success: function(res)
      {
          
          
          console.log(res);
          console.log(res.contents);
          $('#ajax_response').val(res.message) ;
          
     
     
          
          
      },
      error: function(data)
      {
         console.log('Error:', data);
      }
   });
   
 
}

  </script>
  
  
@endsection

  
