@extends('layouts.app-master')

@section('title')
    {{ $order->title }}     Dated {{ $order->created_at }}  
       
       
@endsection

@section('content')
     
           
           
              <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    
    
        <button class="nav-link" id="nav-services-tab" data-bs-toggle="tab" data-bs-target="#nav-services" type="button" role="tab" aria-controls="nav-services" aria-selected="false">services</button>
    
    
    
    
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
    <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>Disabled</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"> 
  
  
  <table class="table ">
      
      
      
      <tr>
          
          
          <td>
           Description   
          </td>
          <td>
            {{ $order->description }}   
          </td>
      </tr>
      
      
      
          
      <tr>
          
          
          <td>
        Service Id
          </td>
          <td>
            {{ $order->service_id }}   
          </td>
      </tr>
      
      
          
             <tr> <td>
      Payment Status
          </td>
          <td>
            {{ $order->payment_status }}   
          </td>
      </tr>
      
      
      
      
          
              <tr><td>
      Payment Reference Id
          </td>
          <td>
            {{ $order->payment_reference_id }}   
          </td>
      </tr>
      
      
              <tr><td>
      Payment Reference Id
          </td>
          <td>
            {{ $order->payment_reference_id }}   
          </td>
      </tr>
      
      
  </table>
 
                         
                     
                  
 
 
 
 </div>
 
 
   <div class="tab-pane fade show  " id="nav-services" role="tabpanel" aria-labelledby="nav-services-tab" tabindex="0"> 
  
  <div class="form-group">
                           
               
              <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>title</th>
										<th>description</th>
										<th>selling price</th>
									 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->OrderServices as $orderMessage)
                                        <tr>
                                            <td>{{ $orderMessage->service_id }}</td>
                                            
											<td>{{ $orderMessage->title }}</td>
											<td>{{ $orderMessage->description }}</td>
											<td>{{ $orderMessage->selling_price }}</td>
											
											
											 
 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>    
 
 
 </div>
 
 </div>
 
 
 
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
           
             <button class="btn btn-primary w-100  mt-4" type="button" data-bs-toggle="collapse" data-bs-target="#add_answer" aria-expanded="false" aria-controls="add_answer">
 Add answer
  </button>
 
<div class="collapse" id="add_answer">
 
   
   
   
   
     <form  method="POST" action="{{ url('submit_order_message' . '/' . $order->id) }}" accept-charset="UTF-8" class="form-horizontal  mt-2" enctype="multipart/form-data">
                            {{ csrf_field() }}


<input type="hidden" name="ticket_id" value="{{$order->id}}" />
 
  <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($order->content) ? $order->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group {{ $errors->has('attachment') ? 'has-error' : ''}}">
    <label for="attachment" class="control-label">{{ 'Attachment' }}</label>
    <input class="form-control" name="attachment" type="file" id="attachment" value="{{ isset($order->attachment) ? $order->attachment : ''}}" >
    {!! $errors->first('attachment', '<p class="help-block">:message</p>') !!}
</div>


 



<div class="form-group">
    <input class="btn btn-primary" type="submit" value=" Add ">
</div>


                        </form>
    
   
   </div>
                    
                    
                    
                    
                    <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Content</th>
										<th>Attachment</th>
										<th>Category</th>
										<th>User Id</th>
									 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->OrderMessages as $orderMessage)
                                        <tr>
                                            <td>{{ $orderMessage->id }}</td>
                                            
											<td>{{ $orderMessage->content }}</td>
											<td>{{ $orderMessage->attachment }}</td>
											<td>{{ $orderMessage->category }}</td>
											<td>{{ $orderMessage->user->email }}</td>
											 
 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                        
                        
                         
  
  
</div>







 
                         
                    
                    
                                                   
                                        
           
                        
					
@endsection
