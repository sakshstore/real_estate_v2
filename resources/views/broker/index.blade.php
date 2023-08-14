@extends('layouts.app-master')

@section('title')
    Brokers
@endsection

@section('content')
   
   
                 
                       
                  
  <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right w-100 mt-2">Add new user</a>
           
            

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
								 
								 
										<th>Phone</th>
										<th>Mobile</th>
									 
								 

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brokers as $broker)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $broker->name }}</td>
											<td>{{ $broker->email }}</td>
										 
										 
											<td>{{ $broker->phone }}</td>
											<td>{{ $broker->mobile }}</td> 
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
