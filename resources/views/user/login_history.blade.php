@extends('layouts.app-master')

@section('content')
    
    

 
        
        <h1>Login History</h1>
   
        

        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                
                <th>IP</th>
                <th>Created at</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach($login_histories as $login_history)
                    <tr>
                        <th>{{ $login_history->id }}</th>
                        <td>{{ $login_history->ip }}</td>
                        <td>{{ $login_history->created_at }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>


    
    
@endsection
