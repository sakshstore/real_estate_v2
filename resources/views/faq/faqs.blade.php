 
<div class="accordion" id="accordionExample">
 

     
     
     
                                    @foreach ($faqs as $faq)
                                       
                                         <div class="accordion-item">
    <h2 class="accordion-header" id="heading{{ $faq->id }}">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
       {{ $faq->question }} 

         
            
       
      </button>
    </h2>
    <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        {!! $faq->answer !!}
        
        
        
        
        
         @role('admin')
        
          @php
       
       $faq_tags = explode(",", $faq->tags);
         @endphp
         
         
       @foreach($faq_tags as $faq_tag)
       
       <span class="badge rounded-pill text-bg-info">{{$faq_tag}}</span>
       
       
       
       
     @endforeach
          <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('faqs.show',$faq->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('faqs.edit',$faq->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                                
                            
           
          @endrole                      
                                                
                                                
                                                
                                                
      </div>
    </div>
  </div>
                                             
 
                                    @endforeach 
                                    
                                    
</div>