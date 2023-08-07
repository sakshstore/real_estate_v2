@extends('layouts.app-master')

@section('content')
    
  
        <h1>Users</h1>
        <div class="title">
            Manage your users here.
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right w-100 mt-2">Add new user</a>
           
            
              


        </div>
        
      
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>    <th>status</th>
                <th>Roles</th>
                <th  colspan="3"></th>    
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th >{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}  </td>  
                        
                      
                              
                              <td>{{ $user->status }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge bg-primary">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">Show</a></td>
                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                          
                            <form method="delete" action="{{ route('users.destroy', $user->id) }}" >
                                
                                <input type="submit" class="btn btn-sm" value="Delete" />
                                
                                
                            </form>
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div >
            {!! $users->links() !!}
        </div>
 
 
 
 

 
  

@endsection
