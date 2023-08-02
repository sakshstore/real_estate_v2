<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      
      
       @foreach ($subscriptions as $subscription)
       
       
       <div class="col">
      
              
              
                 <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
              
              
              
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
          <a href="{{ route('register_as_vendor') }}"   class="nav-link" >     <button type="button" class="w-100 btn btn-lg btn-outline-primary">Register as vendor</button></a>
            
            
          
            
            
          </div>
        </div>
      </div>
        @endforeach 
      
      
      
       
       
    </div>