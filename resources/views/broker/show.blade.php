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
                            <strong>Selected Plan:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->selected_plan }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Annual Earning:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->annual_earning }}
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
                       
                       
                       <td>
                            <strong>Avatar:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->avatar }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>User Id:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $broker->user_id }}
                       </td>
                       
                       
                       </tr>

                  
                </table>
@endsection
