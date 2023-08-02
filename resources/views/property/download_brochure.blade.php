<form class="text-start" target="_blank"  action="{{ route('download_brochure') }}" method="post">
              
              @csrf
              
               
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name"  name="name"  required>
                        </div>
                        
                        <input type="hidden" name="property_id" value="{{$property->id}}"  > 
                        <div class="form-group mt-2">
                            <label for="email">Email address</label>
                            
                              @guest
                              
                            <input type="email"  class="form-control" id="email"  name="email"  required>
                           @else
                           
                               <input type="email" value="{{ auth()->user()->email }}" class="form-control" id="email"  name="email"  required>
                               
                               
                           @endguest
                           
                           
                        </div> 
                        
                        <div class="form-group  mt-2">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone"  name="phone"   required>
                           
                        </div>
                   
                   
                       
                        <button type="submit" class="btn btn-primary w-100  mt-2">Submit</button> 
                    </form>