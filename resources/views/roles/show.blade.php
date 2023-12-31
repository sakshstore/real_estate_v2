@extends('layouts.app-master')

@section('content')
    
        
        <h1>{{ ucfirst($role->name) }} Role</h1>
     
     
        
        <div class=" mt-4">

            <h3>Assigned permissions</h3>

            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Guard</th> 
                </thead>

                @foreach($rolePermissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection
