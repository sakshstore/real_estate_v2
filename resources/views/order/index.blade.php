@extends('layouts.app-master')

@section('title')
    Order
@endsection

@section('content')
   
   
   
                              
                              
                  


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
                                    @foreach ($orders as $order)
                                        <tr>
                                             
											<td>  {{ $order->id }}</td>
										  	<td>{{ $order->subscription_id }}</td>
											<td> {{ $order->payment_gateway }}  {{ $order->payment_id }} </td>
										
									 
											<td>{{ $order->payment_status }}</td>
									 
											<td>{{ $order->amount }} {{ $order->currency }}</td>
									 
 	<td>{{ $order->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
             
@endsection
