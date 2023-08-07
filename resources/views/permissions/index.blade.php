@extends('layouts.app-master')

@section('content')
    
  
        <h2>Permissions</h2>
        <div class="title">
            Manage your permissions here.
            <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm float-right">Add permissions</a>
        </div>
        
    
    

        <table class="table table-striped">
            <thead>
            <tr>
                <th >Name</th>
                <th >Guard</th> 
                <th  ></th> 
            </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td><a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
 <form method="post" action="{{ route('permissions.destroy', $permission->id) }}" > @csrf
                           @method('DELETE')        
      <input type="submit" class="btn btn-sm" value="Delete" />
                                
                                
                            </form>
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
 
@endsection
