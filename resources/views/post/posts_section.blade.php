 
   
   
                  

 <div class="row">
 
 
                 
                  
   @foreach ($posts as $post)
   
   
 <div class="col-md-3">
 
   
 <a href="{{ route('get_post',$post->id) }}">
    
     
 <div class="card mt-3">
    <img class="card-img-top" src="{{ asset($post->thumbnail) }}"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text"> 
       
       
     {!! $post->content !!} 
     </p>  
    </div>
   
  </div>
   </a>
    </div>
  
  @endforeach
                      
                    
               
    </div>