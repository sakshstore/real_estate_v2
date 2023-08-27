 

 <div class="row">
 
 
                 
                  
   @foreach ($properties as $property)
   
   
 <div class="col-md-3">
 
  
 <a href="{{ route('viewProperty',$property->id) }}">
    
     
 <div class="card mt-3">
    <img class="card-img-top" src="{{ asset($property->property_thumbnail_url) }}"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $property->project_name }}</h5>
      <p class="card-text"> 
      
      
    
      
   {{ $property->property_type }} in {{ $property->address }} <br />
     {{ $property->unit_details }} 
     </p>  
    </div>
    <div class="card-footer">
      <small class="text-muted">Starting Price 
      
      
      {{ get_price($property )}} 
      
      
      </small>
    </div>
  </div>
  
 </a>
    </div>
  
  @endforeach
                      
                    
               
    </div>
    
               