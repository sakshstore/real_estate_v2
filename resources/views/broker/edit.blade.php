@extends('layouts.app-master')

@section('title')
    Update broker
@endsection

@section('content')
 
 
 
             
              
                     <span class="header">Update broker</span>
                
                
            <form action="{{ route('update_avatar_broker',$broker->id ) }}"
      class="dropzone"
      id="avatar_vendor">
    
        @csrf
      
      
      
</form>



 
 
 
 <hr />
         
                        <form method="POST" action="{{ route('brokers.update', $broker->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('broker.form')

                        </form>
                        
                        
    </section>
@endsection



  @section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
                         
                
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
 
 
 let myavatar=new Dropzone("#avatar_vendor" ,options  );


  mockFile = { name: '{{ $broker->avatar_vendor}}'  };
  
  
 myavatar.displayExistingFile(mockFile, '{{asset(  $broker->avatar_vendor)}}');
 
 
 
  
  </script>
        
@endsection

