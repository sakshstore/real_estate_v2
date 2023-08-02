@extends('layouts.home')

@section('title')
    {{ $vendor->name ?? 'Show Vendors' }}
@endsection

@section('content')
     
                        <div class="container">
            <div class="row">       
          <div class="col-md-3">       

        <img class="card-img-top" src="{{ asset($vendor->avatar) }}"  onerror="this.src='https://dummyimage.com/200x200'"   alt="Card image cap">
                <table class="table">
                   <tr>
                       
                       
                       <td>
                            <strong>Vendor ID:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->id }}
                       </td>
                       
                       
                       </tr>
                
                        
                       <tr>
                       
                       
                       <td>
                            <strong>Name:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->name }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Email:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->email }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Company Name:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->company_name }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Registeration Number:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->registeration_number }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Phone:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->phone }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Mobile:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->mobile }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Date Of Birth:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->date_of_birth }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Address:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->address }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>City:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->city }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>State:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->state }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Country:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->country }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Pin:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->pin }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Referral:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->referral }}
                       </td>
                       
                       
                       </tr>
                       
                      
                       <tr>
                       
                       
                       <td>
                            <strong>Total Experience:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->total_experience }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Timezone:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->timezone }}
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
