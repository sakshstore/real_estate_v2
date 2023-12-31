@extends('layouts.app-master')

@section('title')
    Create Auto Post
@endsection

@section('content')
  
  
                        <span class="header">Create Auto Post</span>
                  
                  
                        <form method="POST" action="{{ route('auto_posts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('auto-post.form')

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
 
 

    
  var input = document.querySelector('.tags');
   
 console.log(input);
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

console.log(tagify);

</script>
  
        
@endsection

