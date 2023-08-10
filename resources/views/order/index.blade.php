@extends('layouts.app-master')

@section('title')
    Order
@endsection

@section('content')
   
   
                 
                            <span id="header">
                                {{ __('Order') }}
                            </span>

                             
                                <a href="{{ route('orders.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                   	<th>Payment Reference Id</th>
										<th>Payment Status</th>
									
									 
										<th>Status</th>
									 
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                             
											<td>{{ $order->id }}</td>
										  	<td>{{ $order->subscription_id }}</td>
											<td>{{ $order->payment_reference_id }}</td>
										
									 
											<td>{{ $order->payment_status }}</td>
									 
											<td>{{ $order->amount }}</td>
									 
 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
                {!! $orders->links() !!}
             
@endsection
