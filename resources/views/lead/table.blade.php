 


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
										<th>IP Address</th>
										<th>Request URL</th>
<th> Time zone</th><th>Refer</th>
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
											<td>{{ $lead->service_id }}</td>
											<td>{{ $lead->user_id }}</td>
											<td>{{ $lead->ip_address }}</td>
											<td>{{ $lead->request_url }}</td>
											<td>{{ $lead->timezone }}</td>
											<td>{{ $lead->refer }}</td>

                                            <td>
                            
        
        
    <form action="{{ route('set_lead_tags',$lead->id) }}" method="POST">
                                                    
                                                    @csrf
                                                    
                                                       <div class="mb-3">
            <label for="status" class="col-form-label">Tags</label>
           
        <input type="text" class="form-control status_tags" value="{{ $lead->tags }}" name="tags" >
              
          </div>
           
   
  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-fw fa-home"></i> Update Tags</button>
  
  <hr />
                                                </form>
        
        
    <form action="{{ route('set_lead_status',$lead->id) }}" method="POST">
                                                    
                                                    @csrf
                                                    
                                                       <div class="mb-3">
            <label for="status" class="col-form-label">Status</label>
           
        <input type="text" class="form-control status_tags" value="{{ $lead->status }}" name="status" >
              
          </div>
           
   
  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-fw fa-home"></i> update_status</button>
                                                </form>
        
          <hr />
        
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
                        