


@extends('layouts.app-master')




@section('title')
Profile

@endsection

@section('content')


<div class="row">




        <div class="col-md-6">

           
           <table  class="table ">
    
    
    <tr> <td> Full Name </td><td>{{$user->name}}  </td></tr>
    
    
    <tr> <td> Email </td><td>{{$user->email}}</td></tr>
    
        <tr> <td> Phone </td><td>{{$user->phone}}</td></tr>
     
    
        <tr> <td> Address </td><td>{{$user->address}}</td></tr>
    
        <tr> <td> Email </td><td>{{$user->email}}</td></tr>
    
      
    
    
    <tr> <td> Created At </td><td>{{$user->created_at}}</td></tr>
    <tr> <td> Updated At </td><td>{{$user->updated_at}}</td></tr>
    
    
    
    
</table>
 <a class="btn btn-primary" href="/profile/edit"> Edit</a>


        </div>

    </div>
 






@endsection