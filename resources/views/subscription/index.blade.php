@extends('layouts.app-master')

@section('title')
    Subscription
@endsection

@section('content')
   
   
                 
                          

                             
                                <a href="{{ route('subscriptions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Amount</th>
										<th>Currency</th>
										<th>Property Submission</th>
										<th>Featured Property</th>
										<th>Top Property</th>
										<th>Urgent Property</th>
										<th>Line 1</th>
										<th>Line 2</th>
										<th>Line 3</th>
										<th>Line 4</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscriptions as $subscription)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subscription->name }}</td>
											<td>{{ $subscription->amount }}</td>
											<td>{{ $subscription->currency }}</td>
											<td>{{ $subscription->property_submission }}</td>
											<td>{{ $subscription->featured_property }}</td>
											<td>{{ $subscription->top_property }}</td>
											<td>{{ $subscription->urgent_property }}</td>
											<td>{{ $subscription->line_1 }}</td>
											<td>{{ $subscription->line_2 }}</td>
											<td>{{ $subscription->line_3 }}</td>
											<td>{{ $subscription->line_4 }}</td>
											<td>{{ $subscription->user_id }}</td>

                                            <td>
                                                <form action="{{ route('subscriptions.destroy',$subscription->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subscriptions.show',$subscription->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subscriptions.edit',$subscription->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
                {!! $subscriptions->links() !!}
             
@endsection
