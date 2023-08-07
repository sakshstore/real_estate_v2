@extends('layouts.app-master')

@section('title')
    Update Testimonial
@endsection

@section('content')
 
 
 
 
             
             
                        <span class="header">Update Testimonial</span>
                
                
                
                   <form action="{{ route('update_thumbnail',$testimonial->id ) }}"
      class="dropzone"
      id="thumbnail">
    
        @csrf
      
      
      
</form>
 
 
 
 <hr />
 
 
 
 
                        <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('testimonial.form')

                        </form>
                        
                        
    </section>
@endsection



  @section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
                         
 
        
@endsection
@section('scripts')
 
 
 
 
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

 <script>
 var options={
     
       
      acceptedFiles: ".jpeg,.jpg,.png"
     
 };
 
 
 let thumbnail=new Dropzone("#thumbnail" ,options  );


  mockFile = { name: '{{$testimonial->thumbnail}}'  };
  
  
 thumbnail.displayExistingFile(mockFile, '{{asset($testimonial->thumbnail)}}');
 
 
 
  
  </script>
        
 
         
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
 
<script> 
 


    ClassicEditor
        .create( document.querySelector( '.editor' ) )
        .catch( error => {
            console.error( error );
        } );
        
         
          
	
	
	

</script>




@endsection


