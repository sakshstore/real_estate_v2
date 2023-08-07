

@extends('layouts.app')





@section('title')
Update Profile

@endsection

@section('content')





<form action="/profile/edit" method="POST">

 @csrf

  


  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name"  name="name" aria-describedby="Name"  value="{{$user->name}}" >
 
  </div>
  
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone"  id="phone" aria-describedby="Phone Number"  value="{{$user->phone}}" >
 
  </div>
  
    <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address"  name="address" aria-describedby="Address"  value="{{$user->address}}" >
 
  </div>
      <div class="mb-3">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city"  name="city" aria-describedby="city"  value="{{$user->city}}" >
 
  </div>
  
  
  
      <div class="mb-3">
    <label for="state" class="form-label">State</label>
    <input type="text" class="form-control" id="state"  name="state" aria-describedby="State"  value="{{$user->state}}" >
 
  </div>
  
  
      <div class="mb-3">
    <label for="country" class="form-label">Country</label>
    <input type="text" class="form-control" id="country"  name="country" aria-describedby="country"  value="{{$user->country}}" >
 
  </div>
  
      <div class="mb-3">
    <label for="pin" class="form-label">PIN</label>
    <input type="text" class="form-control" id="pin"  name="pin" aria-describedby="pin"  value="{{$user->pin}}" >
 
  </div>
  
  
     <div class="mb-3">
    <label for="cin" class="form-label">CIN number of company </label>
    <input type="text" class="form-control" id="cin"  name="cin" aria-describedby="cin"  value="{{$user->cin}}" >
 
  </div>
  
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>





@endsection
