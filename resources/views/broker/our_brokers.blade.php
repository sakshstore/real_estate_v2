@extends('layouts.home')

@section('title')
    Vendor
@endsection

@section('content')
   
   

                        <div class="container">  
                 
                      
                           
                  


                        <div class="row">  
                        
                        <div class="title  mt-4">Our Brokers</div>
                                    @foreach ($brokers as $broker)
                                    
                                    
                                    
 
                                    
                                     <div class="col-md-3">
                                         
                                      
                            
                            
                            
                                    <div class="card mt-5 mb-5 ">
                                        
                                        
                                            <img class="card-img-top" src="{{ asset($broker->avatar) }}"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
                                            
                                            
                                            
                                <div class="card-body text-center mt-4">
                                
                                 <a href="{{ route('get_broker',$broker->email) }}" >
                                     
                                     
                                     
                                    <h4 class="card-title">{{ $broker->name }}</h4>        
                                 </a> 
                                 
                                 
                                    
                                    
                                </div>
                            </div>
                      </div>
                      
                 
                    
                     
                                    @endforeach 
                                    
                                    
                                    </div>
                      
                      
                      
                      
 
 
                       
                        
                {!! $brokers->links() !!}
                                    </div>
             
@endsection
