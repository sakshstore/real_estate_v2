@extends('layouts.app-master')

@section('title')
    {{ $subscriber->name ?? 'Show Subscriber' }}
@endsection

@section('content')
     
                        
                         
                            <a class="btn btn-primary" href="{{ route('subscribers.index') }}"> Back</a>
                       
                <table>
                
                
                        
                       <tr>
                       
                       
                       <td>
                            <strong>Name:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscriber->name }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Email:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscriber->email }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Whatsapp:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscriber->whatsapp }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Calls:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscriber->calls }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Status:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $subscriber->status }}
                       </td>
                       
                       
                       </tr>

                  
                </table>
@endsection
