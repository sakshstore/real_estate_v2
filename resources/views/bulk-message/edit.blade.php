@extends('layouts.app-master')

@section('title')
    Update Bulk Message
@endsection

@section('content')
 
 

                @includeif('partials.errors')

             
             
                        <span class="header">Update Bulk Message</span>
                
                
                        <form method="POST" action="{{ route('bulk_messages.update', $bulkMessage->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('bulk-message.form')

                        </form>
                        
                        
    </section>
@endsection


@section('style')       
                    
               <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
                         
                    
@endsection
@section('scripts')
 
 
 
     
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
  

  

  
  
 
     var tags_values = [ "telegram","email","whatsapp","sms"];
 
  
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







@endsection