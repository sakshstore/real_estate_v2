@extends('layouts.app-master')

@section('title')
    Brokers
@endsection

@section('content')
   
   
                 
                      
                             
                                <a href="{{ route('brokers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Company Name</th>
										<th>Registeration Number</th>
										<th>Phone</th>
										<th>Mobile</th>
										<th>Date Of Birth</th>
										<th>Address</th>
										<th>City</th>
										<th>State</th>
										<th>Country</th>
										<th>Pin</th>
										<th>Referral</th>
										<th>Selected Plan</th>
										<th>Annual Earning</th>
										<th>Total Experience</th>
										<th>Timezone</th>
										<th>Avatar</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brokers as $broker)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $broker->name }}</td>
											<td>{{ $broker->email }}</td>
											<td>{{ $broker->company_name }}</td>
											<td>{{ $broker->registeration_number }}</td>
											<td>{{ $broker->phone }}</td>
											<td>{{ $broker->mobile }}</td>
											<td>{{ $broker->date_of_birth }}</td>
											<td>{{ $broker->address }}</td>
											<td>{{ $broker->city }}</td>
											<td>{{ $broker->state }}</td>
											<td>{{ $broker->country }}</td>
											<td>{{ $broker->pin }}</td>
											<td>{{ $broker->referral }}</td>
											<td>{{ $broker->selected_plan }}</td>
											<td>{{ $broker->annual_earning }}</td>
											<td>{{ $broker->total_experience }}</td>
											<td>{{ $broker->timezone }}</td>
											<td>{{ $broker->avatar }}</td>
											<td>{{ $broker->user_id }}</td>

                                            <td>
                                                <form action="{{ route('brokers.destroy',$broker->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('brokers.show',$broker->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('brokers.edit',$broker->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                    
                {!! $brokers->links() !!}
             
@endsection
