@extends('layouts.app-master')

@section('content')
    
  
        <h1>Roles</h1>
        <div class="title">
            Manage your roles here.
            <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right">Add role</a>
        </div>
        
       
       

        <table class="table table-bordered">
          <tr>
             <th  >No</th>
             <th>Name</th>
             <th  colspan="3">Action</th>
          </tr>
            @foreach ($roles as $key => $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                </td>
                <td>
                   
                    
                    <form method="delete" action="{{ route('roles.destroy', $role->id) }}" >
                                
                                <input type="submit" class="btn btn-sm" value="Delete" />
                                
                                
                            </form>
                            
                </td>
            </tr>
            @endforeach
        </table>

        
 
@endsection
