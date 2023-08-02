

 
                                      <div class="row">  
        
                                    @foreach ($teams as $team)
                                    
                                     <div class="col-md-3">
                                         
                                      
                            
                            
                            
                                    <div class="card">
                                        
                                            <img class="card-img-top" src="{{ asset($team->avatar) }}"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
                                            
                                            
                                <div class="card-body text-center mt-4">
                                     
                                      
                                      
                                    <h4 class="card-title">{{ $team->full_name }}</h4>
                                    <p class="card-text">
                                        
                                        
                            
                                        
                                        {{ $team->about }}</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{ $team->facebook_url }}">
                                                <i class="fa fa-beat fa-lg   fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{ $team->linked_url }}">
                                                <i class="fa  fa-lg  fa-beat fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{ $team->whatsapp_number }}">
                                                <i class="fa fa-lg fa-beat fa-whatsapp"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{ $team->instagram_url }}">
                                                <i class="fa fa-lg fa-beat fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                      </div>
                      
                 
                    
                     
                                    @endforeach 
                                    
                                    
                                    </div>
                      
                      
                      
                      
 
 
                       