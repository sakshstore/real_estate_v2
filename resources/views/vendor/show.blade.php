@extends('layouts.app-master')

@section('title')
    {{ $vendor->name ?? 'Show Vendors' }}
@endsection

@section('content')
     
                            <span class="header">Show Vendors</span>
                        
                         
 <a class="btn btn-primary" href="{{ route('vendors.index') }}"> Back</a>
 
 
 <a class="btn btn-primary" href="{{ route('process_vendor_request' ,$vendor->id) }}"> Accept Request</a>
                       
                <table class="table">
                
                
                        
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
                            <strong>Selected Plan:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->selected_plan }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Annual Earning:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->annual_earning }}
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
                       
                       
                       <td>
                            <strong>Avatar:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->avatar }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>User Id:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $vendor->user_id }}
                       </td>
                       
                       
                       </tr>

                  
                </table>
@endsection
