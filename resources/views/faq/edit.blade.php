@extends('layouts.app-master')

@section('title')
    Update Faq
@endsection

@section('content')
 
 
 
              
                
                
  <form method="POST" action="{{ route('faqs.update', $faq->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                          
        
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_question" class="form-label">Question</label>
  
  
  <input type="text" class="form-control  ($errors->has('question') ? ' is-invalid' : '')  " id="saksh_question" name="question" value="{{ $faq->question  }}" placeholder="Question">
  
    {!! $errors->first('question', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        
        
        <div class="form-group  mb-3">
        
  <label for="saksh_answer" class="form-label">Answer</label>
  
  
  <textarea class="editor form-control  ($errors->has('answer') ? ' is-invalid' : '')  " id="saksh_answer" name="answer" placeholder="Answer">  
  {{ $faq->answer  }}
  </textarea>
  
    {!! $errors->first('answer', '<div class="invalid-feedback">:message</div>') !!}
</div>


            
        
        
        <div class="form-group  mb-3">
        
  <label for="tags" class="form-label">Tags</label>
  {{ $faq->tags }}
   <input name='tags' value="{{ $faq->tags }}" class="form-control"  >
   
   
 
  
    {!! $errors->first('tags', '<div class="invalid-feedback">:message</div>') !!}
</div>


 
 
        
  
    

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
  

                        </form>
                        
                        
    </section>
@endsection
