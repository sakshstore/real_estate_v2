@extends('layouts.app-master')

@section('content')


  

 

        <h1>{{ $user->email }}</h1>
      
 
  
 
         
             
             @if( $user->status <> 'Banned')
   <a href="{{ route('susend_user', [ $user->id , 'Banned' ] ) }}" class="btn btn-info">Suspend User</a>
    
  @else

   <a href="{{ route('susend_user', [$user->id , 'Active']) }}" class="btn btn-info">Unsuspend User</a>

@endif

  
  
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profile</button>
  </li>
  
   
  
  
  
  
   
   <li class="nav-item" role="presentation">
    <button class="nav-link" id="notification-tab" data-bs-toggle="tab" data-bs-target="#notification-tab-pane" type="button" role="tab" aria-controls="notification-tab-pane" aria-selected="false">notification</button>
  </li>
   
   
   <li class="nav-item" role="presentation">
    <button class="nav-link" id="login_histories-tab" data-bs-toggle="tab" data-bs-target="#login_histories-tab-pane" type="button" role="tab" aria-controls="login_histories-tab-pane" aria-selected="false">login_histories</button>
  </li>
   
   
   
   
   <li class="nav-item" role="presentation">
    <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders-tab-pane" type="button" role="tab" aria-controls="orders-tab-pane" aria-selected="false">orders</button>
  </li>
   
   <li class="nav-item" role="presentation">
    <button class="nav-link" id="properties-tab" data-bs-toggle="tab" data-bs-target="#properties-tab-pane" type="button" role="tab" aria-controls="properties-tab-pane" aria-selected="false">properties</button>
  </li>
   
   
   
   
   <li class="nav-item" role="presentation">
    <button class="nav-link" id="leads-tab" data-bs-toggle="tab" data-bs-target="#leads-tab-pane" type="button" role="tab" aria-controls="leads-tab-pane" aria-selected="false">leads</button>
  </li>
   
 
   
</ul>
<div class="tab-content" id="myTabContent">
     
          
          
          
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"> <div class="mt-4">
            <div>
                Name: {{ $user->name }} <br /> Status {{ $user->status }} 
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
         
           
    
    
            @php
    print_form_json_data( $user->form_json);
    @endphp
    
    
    
        </div></div>
      
        
        
        
        
  <div class="tab-pane fade" id="$notification-tab-pane" role="tabpanel" aria-labelledby="$notification-tab" tabindex="0">   <table class="table table-striped">
            
            <tbody>
                @foreach( $user->notifications  as $notification)
                    <tr>
                        <th > @if(isset($notification->data['message']))         {{  $notification->data['message'] }}
                        @endif</th>
                         
                          <th >  {{ $notification->created_at    }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table></div>
        
        
        
  <div class="tab-pane fade" id="login_histories-tab-pane" role="tabpanel" aria-labelledby="login_histories-tab" tabindex="0">   <table class="table table-striped">
            
            <tbody>
                @foreach( $user->login_histories->take(15)  as $row)
                    <tr>
                        <th >     {{  $row->ip }} </th>
                         
                          <th >  {{ $row->created_at    }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table></div>
  
  
        
  <div class="tab-pane fade" id="orders-tab-pane" role="tabpanel" aria-labelledby="orders-tab" tabindex="0">  
        

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                   	<th>Subscription_id</th>
										<th>Payment ID</th>
									
									 
										<th>payment_status</th>
									 
								 
                                        <th>Amount</th>
                                        <th>created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $user->orders   as $order)
                                        <tr>
                                             
											<td>  {{ $order->id }}</td>
										  	<td>{{ $order->subscription_id }}</td>
											<td> {{ $order->payment_gateway }}  {{ $order->payment_id }} </td>
										
									 
											<td>{{ $order->payment_status }}</td>
									 
											<td>{{ $order->amount }}</td>
									 
 	<td>{{ $order->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>    </div>
        
          
        
  <div class="tab-pane fade" id="properties-tab-pane" role="tabpanel" aria-labelledby="properties-tab" tabindex="0">  
  
  
    
       
           <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    
                                    
                                    <tr>
                                        
                                        <th>
                                            
                                            ID
                                        </th>
                                        
                                        <th> Project Name</th>
                                             <th> Total View
                                        </th>
                                       
                                      <th> Location
                                        </th>
                                        <th> &nbsp;
                                        </th>
                                       
                                        <th>Created at</th>
                                        
                                        
                                        
                                        <th> Updated at </th>
                            
                                  
                                        <th> &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user->properties as $property)
                                        <tr>
                                        	<td>{{ $property->id }}</td>
                                            
											<td>{{ $property->project_name }}</td>
											
											<td> {{views($property)->count()}} </td>
											
											<td>{{ $property->location }}</td>
										 
											<td>{{ $property->address }}</td>
									 
								 
										 		<td>{{ $property->created_at }}</td>
										 
										 		<td>{{ $property->updated_at }}</td>
										 

 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
       
        
        
        
        
        
</div>



        
          
        
  <div class="tab-pane fade" id="leads-tab-pane" role="tabpanel" aria-labelledby="leads-tab" tabindex="0">  
  
  
 
   <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                   <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th> property ID</th>
									 
									 
									 
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                            
    @foreach ($user->properties as $property)
                                     
                                       
  
                                           
                                    @foreach ($property->leads as $lead)  <tr>
                                          <td>{{  $lead->id }}</td>
                                            
											<td>{{ $lead->name }}</td>
											<td>{{ $lead->email }}</td>
											<td>{{ $lead->phone }}</td>
											<td> 
											
						 <a target="_blank" href="{{ route('viewProperty', [  $lead->property_id  ] ) }}" class="btn btn-info w-100">{{ $lead->property_id }}</a>
											 
											 
											 
											 </td> 
										 
                                    @endforeach
                                    
                                     @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>


</div>

  
                        


</div>



        
    <div class="mt-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection


 
