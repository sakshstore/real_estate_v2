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
                                         
                                      
                            
                            
                            
                                    <div class="card ">
                                        
                                        
                                            <img class="card-img-top" src="{{ asset($broker->avatar) }}"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
                                            
                                            
                                            
                                <div class="card-body text-center mt-4">
                                
                                 <a href="{{ route('get_broker',$broker->email) }}" >
                                     
                                     
                                     
                                    <h4 class="card-title">{{ $broker->name }}</h4>        
                                 </a> 
                                 
                                 
                                    <p class="card-text">
                                        
                                        
                                    
                                        
                                        {{ $broker->about }}</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{ $broker->facebook_url }}">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{ $broker->linked_url }}">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{ $broker->whatsapp_number }}">
                                                <i class="fa fa-whatsapp"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{ $broker->instagram_url }}">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                      </div>
                      
                 
                    
                     
                                    @endforeach 
                                    
                                    
                                    </div>
                      
                      
                      
                      
 
 
                       
                        
                {!! $brokers->links() !!}
                                    </div>
             
@endsection
