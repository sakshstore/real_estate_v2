@extends('layouts.app-master')

@section('title')
    Update Post
@endsection

@section('content')
 
 
 
                   <form action="{{ route('update_post_thumbnail',$post->id ) }}"
      class="dropzone"
      id="thumbnail">
    
        @csrf
      
      
      
</form>
 
 
 
 <hr />
                
                
                        <form method="POST" action="{{ route('posts.update', $post->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('post.form')

                        </form>
                        
                        
    </section>
@endsection

@section('style')       
                    
               <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
                         
                 <meta name="csrf-token" content="{{ csrf_token() }}">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
                         
    
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
 
 
 let thumbnail=new Dropzone("#thumbnail" ,options  );


  mockFile = { name: '{{$post->thumbnail}}'  };
  
  
 thumbnail.displayExistingFile(mockFile, '{{asset($post->thumbnail)}}');
 
 
 
  
  </script>
        


@endsection