<form class="text-start" action="{{ route('call_me_back') }}" method="post">
              
              @csrf
              <div class="row">
                  
                  
                  
                  <div class="col">
                      
                      
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name"  name="name"  required>
                        </div>
                      
                  </div>
                  <div class="col">
                      
                         <div class="form-group mt-2">
                            <label for="email">Email address</label>
                            
                              @guest
                              
                            <input type="email"  class="form-control" id="email"  name="email"  required>
                           @else
                           
                               <input type="email" value="{{ auth()->user()->email }}" class="form-control" id="email"  name="email"  required>
                               
                               
                           @endguest
                           
                           
                        </div> 
                      
                  </div>
              </div>
                  <div class="row">
                  
                  
                  
                  <div class="col">
                          <div class="form-group  mt-2">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone"  name="phone"   required>
                           
                        </div>
                        
                        </div>
                  
                  <div class="col">
                      
                        <div class="form-group  mt-2">
                            <label for="source">Where did you hear about us?</label>
<select name="refer"  class="form-control" required  >
                                    
                                        <option disable value="Please Select">Please Select</option>
                                        <option value="Search Engine">Search Engine</option>
                                        <option value="YouTube">YouTube</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                        <option value="Newspaper">Newspaper</option>
                                       
                                        </select>


</div> 
         
         
         
                           </div>
              </div>
              
              
              
              
              
              
              
              
              
                        <input type="hidden" name="service_id" value="{{$property_id}}"  > 
                     
                       <div class="row">
                  
                  
                  
                  <div class="col">       
                       
                   
                   
                   <div class="form-group mb-3">
  <label for="message" class="form-label">Message</label>
  <textarea class="form-control" id="message" rows="3"></textarea>
</div>



                                    
                        <button type="submit" class="btn btn-primary w-100  mt-2">Submit</button> 
                        
                        
                           </div>
              </div>
              
              
              
              
                    </form>