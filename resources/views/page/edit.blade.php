@extends('layouts.app-master')

@section('title')
      Page
@endsection

@section('content')
 
 

                @includeif('partials.errors')

             
             
                         
                
                
                        <form method="POST" action="{{ route('pages.update', $page->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_title" class="form-label">Title</label>
  
  
  <input type="text" class="form-control  ($errors->has('title') ? ' is-invalid' : '')  " id="saksh_title"  value="{{ $page->title }}"    name="title" placeholder="Title">
  
    {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
         


           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  

                        </form>
                        
                        
    </section>
@endsection

 