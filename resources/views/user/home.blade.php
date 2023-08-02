@extends('layouts.app-master')

@section('content')
    
    
<?php

 $user=\Auth()->user();
 
 
 
 ?>
 
 
 <div class="row">
     <div class="col-3">
                                
                                <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Total Listing</h5>
                                                <h3 class="my-2 py-1">{{ count($properties) }}   </h3>
                                                 
                                                </p>
                                            </div>
                                       
                                   
                                </div>
                                </div > 
     
     <div class="col-3">
         
         
         
    
 <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Last Login</h5>
                                                <h3 class="my-2 py-1">{{ $user->last_login_at }}   </h3>
                                               
                                            </div>
                                       
                                   
                                </div> 
                                
                                </div >   <div class="col-3"> <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Last Login  from IP</h5>
                                                <h3 class="my-2 py-1">{{ $user->last_login_ip }}   </h3>
                                                 
                                            </div>
                                       
                                   
                                </div> 
                                </div > 
                                
                                
                                
                                
                                <div class="col-3">   <div class="card text-bg-dark">
                                    <div class="card-body">
                                     
                                                <h5 class="text-muted  "  >Tatal Call back requests</h5>
                                                <h3 class="my-2 py-1">{{ count($leads) }}   </h3>
                                                
                                            </div>
                                       
                                   
                                </div></div>
                                
                                
                                
                                </div>
        
    
 
     <h3>Recent Leads</h3>
   

                        <div class="table-responsive">
                            <table class="table table-bordered ">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
									 
										<th>IP Address</th>
										<th>Request URL</th>
<th> Time zone</th>
                                         
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leads  as $lead)
                                        <tr>
                                            <td>{{  $lead->id }}</td>
                                            
											<td>{{ $lead->name }}</td>
											<td>{{ $lead->email }}</td>
											<td>{{ $lead->phone }}</td>
										 
										 
											<td>{{ $lead->ip_address }}</td>
											<td>{{ $lead->request_url }}</td>
											<td>{{ $lead->timezone }}</td>
 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
    
    
@endsection
