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
                                        
										<th>Date  </th>
									 
										<th>Title</th>
									 
									 
									 
									 
										<th>Status</th>
									 
									 

                                        <th>.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->id   }}</td>
                                            	<td>{{ $order->created_at->diffForHumans() }}</td>
											<td>{{ $order->title }}</td>
										 
									 
										 
											<td>{{ $order->status }}</td>
										 
										 
 
										 
										 

                                            <td>
                                                 <a class="btn btn-sm btn-primary " href="{{ route('order_details',$order->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                   
                                                   
                                                   
                                                    
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
             
             
@endsection
