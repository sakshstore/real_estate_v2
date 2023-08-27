 


                        <div class="table-responsive">
                            <table class="table table-bordered " id="sakshdatatable">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Service ID</th>
										<th>User ID</th>
									 	<th>Request URL</th>
     
                                        <th></th>  
                                        <th></th>    
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leads_data as $lead)
                                        <tr>
                                            <td>{{  $lead->id }}</td>
                                            
											<td>{{ $lead->name }}</td>
											<td>{{ $lead->email }}</td>
											<td>{{ $lead->phone }}</td>
											<td>{{ $lead->property_id }}</td>
											<td>{{ $lead->user_id }}</td>
									 		<td>{{ $lead->request_url }}</td>
										 
                                            <td>
                            
                            
                 
  
        
        
    <form action="{{ route('set_lead_tags',$lead->id) }}" method="POST">
                                                    
                                                    @csrf
                                                   
                                                       <div class="mb-3">
            <label for="tags" class="col-form-label">Tags</label>
           
           
           <select   name="tags"  class="form-select" aria-label="Default select example"> 
  
  
  @foreach ($tags_array as $tag_element)
  
  
  @if($tag_element==$lead->tags) 
  <option value="{{$tag_element}}" selected>{{$tag_element}}</option>
  @else
  
  <option value="{{$tag_element}}"  >{{$tag_element}}</option>
  
  @endif
  
  @endforeach
 
</select>

        
          </div>
           
   
  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-fw fa-home"></i>Set</button>
  
 
                                                </form>
        
</td>


<td>
    <form action="{{ route('set_lead_status',$lead->id) }}" method="POST">
                                                    
                                                    @csrf
                                                
                                                       <div class="mb-3">
            <label for="status" class="col-form-label">Status</label>
           
     
     
     
 <select   name="status"  class="form-select" aria-label="Default select example"> 
  
  
  @foreach ($status_array as $status_element)
  
  
  @if($status_element==$lead->status) 
  <option value="{{$status_element}}" selected>{{$status_element}}</option>
  @else
  
  <option value="{{$status_element}}"  >{{$status_element}}</option>
  
  @endif
  
  @endforeach
 
</select>

        
        
        
        
              
          </div>
           
   
  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-fw fa-home"></i> Set</button>
                                                </form>
        
      </td>
      
      <td> 
        
                                                <form action="{{ route('leads.destroy',$lead->id) }}" method="POST">
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        