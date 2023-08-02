@extends('layouts.home')
 

@section('title')
    {{ $post->title  }}
@endsection

@section('content')
     
                        
               <div class="container">
               <div class="row">
                   
                   
               <div class="col-md-12">
                   
                   
                        <img src="{{ asset($post->thumbnail ) }}" class="img-fluid " />
                     <h1 class="title">
                         
                                   {{ $post->title  }}
                     
                         
                     </h1>
                  
                  <div class="content">
                      
                        {!! $post->content !!} 
                      
                      
                  </div>
                        
                  <div class="tags">
                      
                        {{ $post->tags }} 
                      
                      
                  </div>
             {{views($post)->count()}};
                         
                     
                   
               </div>
               
                   
               </div>
               
                   
               </div>
               
                     
                
                     


@endsection
