@extends('layouts.home')

@section('title')
    {{ $broker->name ?? 'Show Brokers' }}
@endsection

@section('content')
     
                        <div class="container">
            <div class="row">       
          <div class="col-md-3">       

        <img class="card-img-top" src="{{ asset($broker->avatar) }}"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
                <table class="table">
                   <tr>
                       
                       
                       <td>
                            <strong>Broker ID:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->id }}
                       </td>
                       
                       
                       </tr>
                
                        
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
                       <tr>
                       
                       
                       <td>
                            <strong>Date Of Birth:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->date_of_birth }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Address:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->address }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>City:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->city }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>State:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->state }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Country:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->country }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Pin:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->pin }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Referral:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->referral }}
                       </td>
                       
                       
                       </tr>
                       
                      
                       <tr>
                       
                       
                       <td>
                            <strong>Total Experience:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->total_experience }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Timezone:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->timezone }}
                       </td>
                       
                       
                       </tr>
                      
                       <tr>
                       
                       
                        
                       
                       
                       </tr>

                  
                </table>
                
                
                
                </div>
                
                
                
                <div class="col-md-9">
                    
                     
                       
                  
       @include('property.property_section',['properties' => $properties])
                        

                </div>
                
                </div>
                </div>
                
@endsection
