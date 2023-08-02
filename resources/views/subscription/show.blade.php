@extends('layouts.app-master')

@section('title')
    {{ $subscription->name ?? 'Show Subscription' }}
@endsection

@section('content')
     
                            <span class="header">Show Subscription</span>
                        
                         
                            <a class="btn btn-primary" href="{{ route('subscriptions.index') }}"> Back</a>
                       
                <table>
                
                
                        
                       <tr>
                       
                       
                       <td>
                            <strong>Name:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->name }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Amount:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->amount }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Currency:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->currency }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Property Submission:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->property_submission }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Featured Property:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->featured_property }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Top Property:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->top_property }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Urgent Property:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->urgent_property }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Line 1:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->line_1 }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Line 2:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->line_2 }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Line 3:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->line_3 }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Line 4:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->line_4 }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>User Id:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscription->user_id }}
                       </td>
                       
                       
                       </tr>

                  
                </table>
@endsection
