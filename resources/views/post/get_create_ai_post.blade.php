@extends('layouts.app-master')

@section('title')
    Create Post
@endsection

@section('content')
  
         
                  
    <form method="POST" action="{{ route('post_create_ai_post') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                       
         
        
        <div class="form-group  mb-3">
        
  <label for="content_idea" class="form-label">Content Idea </label>
  
  
  <input type="text" class="form-control  ($errors->has('content_idea') ? ' is-invalid' : '')  " id="content_idea"  value="{{old( 'content_idea') }}"  name="content_idea"  >
  
    {!! $errors->first('content_idea', '<div class="invalid-feedback">:message</div>') !!}
</div>


        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  
</form>

                     <hr />
                  
    <form method="POST" action="{{ route('posts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                       
         
        
       
        <div class="form-group  mb-3">
        
  <label for="saksh_title" class="form-label">Title</label>
  
  
  <input type="text" class="form-control  ($errors->has('title') ? ' is-invalid' : '')  " id="saksh_title" value="{{ $post->title }}"  name="title" placeholder="Title">
  
    {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
</div>    
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_content" class="form-label">content</label>
  
 
  
  
  <textarea  class="form-control  editor   ($errors->has('content') ? ' is-invalid' : '')  "   name="content"  id="saksh_content" rows="10">{{ $post->content }}  </textarea>
    
     
     
     
    {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
</div>
 


        <div class="form-group  mb-3">
        
  <label for="saksh_tags" class="form-label">Tags</label>
  
  
  <input type="text" class="form-control  tags ($errors->has('tags') ? ' is-invalid' : '')  " id="saksh_tags" value="{{ $post->tags }}"  name="tags" placeholder="tags">
  
    {!! $errors->first('tags', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
           
 
         

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  

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




@endsection