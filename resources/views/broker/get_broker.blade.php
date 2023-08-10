@extends('layouts.home')

@section('title')
    {{ $broker->name ?? 'Show Brokers' }}
@endsection

@section('content')
     
                        <div class="container">
            <div class="row">       
          <div class="col-md-3">       

        <img class="card-img-top" src="{{ asset($broker->avatar) }}"  onerror="this.src='https://dummyimage.com/150x200'"   alt="Card image cap">
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
                        

                  
                </table>
                
                
                
                </div>
                
                
                
                <div class="col-md-9">
                    
                     
                       
                  
       @include('property.property_section',['properties' => $properties])
                        

                </div>
                
                </div>
                </div>
                
@endsection
