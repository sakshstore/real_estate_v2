@extends('layouts.app-master')

@section('content')

  @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

 
             
                                
                                               {{ $user->name}} 
                                                     
                                              <br>Invoice #{{ $user->id}}
                                              <br>{{ $user->created_at}}
                                                            
<section class="posts-subscription">
        <div class="container">
            <div class="row">
                

               

                <div class="col-md-12">

                    <div class="text-heading">
                        <h2 class="title-text">Subscription</h2>
                    </div>
                    <div class="whoweare-pera">
                      
                    
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      
      
       @foreach ($subscriptions as $subscription)
       
       
       <div class="col">
      
              
              
                 <div class="card mb-4 rounded-3 text-white bg-dark ">
          <div class="card-header py-3    ">
              
              
              
            <h4 class="my-0 fw-normal">{{ $subscription->name }}</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">{{ $subscription->currency }} {{ $subscription->amount }}<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            
          
          
          		<li>{{ $subscription->property_submission }} Property submission</li>
			 	<li>{{ $subscription->featured_property }} Featured property</li>
			 <li>{{ $subscription->top_property }} Top property</li>
											<li>{{ $subscription->urgent_property }} Urgent property </li>
											<li>{{ $subscription->line_1 }}</li>
											<li>{{ $subscription->line_2 }}</li>
											<li>{{ $subscription->line_3 }}</li>
											<li>{{ $subscription->line_4 }}</li>
   		
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
         
            
                                   
             
  <form method="POST" target="_blank" action="{{ route('make.payment') }}"   enctype="multipart/form-data">
                            @csrf
 
 <input type="hidden" name="broker_id" value="{{$user->id}}"  / >
 <input type="hidden" name="plan_id" value="{{$subscription->id}}" />
  
        <button type="submit" class="btn btn-primary w-100 mt-5 mb-5">Pay with PayPal</button>
 
 
 </form>
            
          </div>
        </div>
      </div>
        @endforeach 
      
      
      
       
       
    </div>
                         

                    </div>
                    
 
                </div>
            </div>
        </div>
    </section>  
                                        

 
 




 
@endsection