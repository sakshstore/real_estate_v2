@extends('layouts.app-master')


@section('title')
    Team
@endsection

@section('content')
   
   
                 
                            <span id="header">
                                {{ __('Team') }}
                            </span>

                             
                                <a href="{{ route('teams.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Full Name</th>
										<th>About</th>
										<th>Instagram Url</th>
										<th>Facebook Url</th>
										<th>Linked Url</th>
										<th>Whatsapp Number</th>
										<th>Avatar</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                        <tr>
                                          	<td>{{ $team->id }}</td>
                                            
											<td>{{ $team->full_name }}</td>
											<td>{{ $team->about }}</td>
											<td>{{ $team->instagram_url }}</td>
											<td>{{ $team->facebook_url }}</td>
											<td>{{ $team->linked_url }}</td>
							 	<td>{{ $team->whatsapp_number }}</td>
											<td>{{ $team->avatar }}</td>
											<td>{{ $team->user_id }}</td>

                                            <td>
                                                <form action="{{ route('teams.destroy',$team->id) }}" method="POST">
                                                 
                                                    <a class="btn btn-sm btn-success" href="{{ route('teams.edit',$team->id) }}"><i class="fa fa-fw fa-edit"></i> Edit / Show </a>
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
                    
          
             
@endsection
