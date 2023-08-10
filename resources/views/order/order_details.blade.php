@extends('layouts.app-master')

@section('title')
   {{ $order->title }}
    
      
@endsection

@section('content')
     
              
             <p>Order Id {{ $order->id}} Service ID {{ $order->service_id }} Payment Status  {{ $order->payment_status }} </p>   
               
               
               <a class="btn btn-primary w-100 mt-1 mb-5" target="_blank" href="https://services.sakshstore.com/getInvoiceLink/{{ $order->id }}">Get pdf Invoice</a>
               
               
               
              <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-notes-tab" data-bs-toggle="tab" data-bs-target="#nav-notes" type="button" role="tab" aria-controls="nav-notes" aria-selected="false">Notes</button>
    
    
       
    
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"> 
  
 <div class="pt-3">
         
            {!! $order->description !!}   
           
                  </div>     
 
 </div>
 
 
 
 
  <div class="tab-pane fade" id="nav-notes" role="tabpanel" aria-labelledby="nav-notes-tab" tabindex="0">
           
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
                              
                                <tbody>
                                    @foreach ($order->OrderMessages as $orderMessage)
                                        <tr>
                                           	<td>{{ $orderMessage->created_at->diffForHumans() }}</td>
											 
                                            
											<td>{{ $orderMessage->content }}</td>
											<td><a href="/{{ $orderMessage->attachment }}" target="_blank"> Attachment </a></td>
									 
											<td>{{ $orderMessage->user->email }}</td>
											 
 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                        
                        
                         
  
  
  
  
 
 
 
</div>







 
                         
                    
                    
                                                   
                                        
           
                        
					
@endsection
