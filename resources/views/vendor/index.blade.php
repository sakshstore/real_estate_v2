@extends('layouts.app-master')

@section('title')
    Vendor
@endsection

@section('content')
   
   
                 
                      
                             
                                <a href="{{ route('vendors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @foreach ($vendors as $vendor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vendor->name }}</td>
											<td>{{ $vendor->email }}</td>
											<td>{{ $vendor->company_name }}</td>
											<td>{{ $vendor->registeration_number }}</td>
											<td>{{ $vendor->phone }}</td>
											<td>{{ $vendor->mobile }}</td>
											<td>{{ $vendor->date_of_birth }}</td>
											<td>{{ $vendor->address }}</td>
											<td>{{ $vendor->city }}</td>
											<td>{{ $vendor->state }}</td>
											<td>{{ $vendor->country }}</td>
											<td>{{ $vendor->pin }}</td>
											<td>{{ $vendor->referral }}</td>
											<td>{{ $vendor->selected_plan }}</td>
											<td>{{ $vendor->annual_earning }}</td>
											<td>{{ $vendor->total_experience }}</td>
											<td>{{ $vendor->timezone }}</td>
											<td>{{ $vendor->avatar }}</td>
											<td>{{ $vendor->user_id }}</td>

                                            <td>
                                                <form action="{{ route('vendors.destroy',$vendor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vendors.show',$vendor->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vendors.edit',$vendor->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                    
                {!! $vendors->links() !!}
             
@endsection
