@extends('layouts.app-master')

@section('title')
    {{ $broker->name ?? 'Show Brokers' }}
@endsection

@section('content')
     
                            <span class="header">Show Brokers</span>
                        
                         
 <a class="btn btn-primary" href="{{ route('brokers.index') }}"> Back</a>
 
 
 <a class="btn btn-primary" href="{{ route('process_broker_request' ,$broker->id) }}"> Accept Request</a>
                       
                <table class="table">
                
                
                        
                       <tr>
                       
                       
                       <td>
                            <strong>Name:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->name }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Email:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->email }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Company Name:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->company_name }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Registeration Number:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->registeration_number }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Phone:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->phone }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Mobile:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->mobile }}
                       </td>
                       
                       
                       </tr>
                     

                  
                </table>
                
                
                
                
								<div class="card mt-2">
								    
								      	<div class="card-body">
									    
									     <h5 class="text-heading mb-4">Additional Details</h5>
									     
									               
                <table class="table"> 
			 	     
									     <?php
									     
									     
				  $data= json_decode( $broker->form_json );
		 if(is_array($data))
		 {
				  foreach($data as  $x => $val)
				  {
				      
				  echo "  <tr> <td>   ";    
				     echo $x;
			 
				    
                     echo "  </td>   <td> ";
                       
				  if(is_string($val)) echo $val;
		 
				     echo "  </td> </tr> ";
				  }
		 
		 }
				  ?>
				           </table>
				   	      
							    
									    </div>
								 
									   	</div>
									  			     
									  			     
@endsection
