@extends('layouts.app-master')

@section('title')
    Create Testimonial
@endsection

@section('content')
  
  
                        <span class="header">Create Testimonial</span>
                  
                  
                        <form method="POST" action="{{ route('testimonials.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('testimonial.form')

                        </form>
                        
    </section>
@endsection


@section('scripts')
    
 

         
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
 
<script> 
 


    ClassicEditor
        .create( document.querySelector( '.editor' ) )
        .catch( error => {
            console.error( error );
        } );
        
         
          
	
	
	

</script>




@endsection