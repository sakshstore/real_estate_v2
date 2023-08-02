@extends('layouts.home')

@section('title')
    Create Vendor
@endsection

@section('content')
  
              
               <div class="container">
               <div class="mt-5">
                   <h2> Register as a vendor </h2>
                   </div>
                   
                   <div class="row">
                   
                   
               <div class="col-md-12">
                  
  <form method="POST" action="{{ route('register_as_vendor_post') }}"   enctype="multipart/form-data">
                            @csrf
 
        
 <div class="row">
     
     
   
      
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_name" class="form-label">Name</label>
  
  
  <input type="text" class="form-control  ($errors->has('name') ? ' is-invalid' : '')  " id="saksh_name" name="name"   value="{{$vendor->name}}" placeholder="name">
  
    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
</div>

</div>

           
 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_email" class="form-label">Email</label>
  
  
  <input type="text" class="form-control  ($errors->has('email') ? ' is-invalid' : '')  " id="saksh_email" name="email"   value="{{$vendor->email}}" placeholder="email">
  
    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
</div>


           </div>

 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_company_name" class="form-label">Company name</label>
  
  
  <input type="text" class="form-control  ($errors->has('company_name') ? ' is-invalid' : '')  " id="saksh_company_name" name="company_name"   value="{{$vendor->company_name}}" placeholder="company_name">
  
    {!! $errors->first('company_name', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 </div>

        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_registeration_number" class="form-label">Registeration number</label>
  
  
  <input type="text" class="form-control  ($errors->has('registeration_number') ? ' is-invalid' : '')  " id="saksh_registeration_number" name="registeration_number"   value="{{$vendor->registeration_number}}" placeholder="registeration_number">
  
    {!! $errors->first('registeration_number', '<div class="invalid-feedback">:message</div>') !!}
</div>

</div>

           
 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_phone" class="form-label">Phone</label>
  
  
  <input type="text" class="form-control  ($errors->has('phone') ? ' is-invalid' : '')  " id="saksh_phone" name="phone"   value="{{$vendor->phone}}" placeholder="phone">
  
    {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
</div>

</div>

           
 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_mobile" class="form-label">Mobile</label>
  
  
  <input type="text" class="form-control  ($errors->has('mobile') ? ' is-invalid' : '')  " id="saksh_mobile" name="mobile"   value="{{$vendor->mobile}}" placeholder="mobile">
  
    {!! $errors->first('mobile', '<div class="invalid-feedback">:message</div>') !!}
</div>


           </div>

 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_date_of_birth" class="form-label">Date of birth</label>
  
  
  <input type="date" class="form-control  ($errors->has('date_of_birth') ? ' is-invalid' : '')  " id="saksh_date_of_birth" name="date_of_birth"   value="{{$vendor->date_of_birth}}" placeholder="date_of_birth">
  
    {!! $errors->first('date_of_birth', '<div class="invalid-feedback">:message</div>') !!}
</div>


          </div>
 
 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_address" class="form-label">Address</label>
  
  
  <input type="text" class="form-control  ($errors->has('address') ? ' is-invalid' : '')  " id="saksh_address" name="address"   value="{{$vendor->address}}" placeholder="address">
  
    {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
</div>
</div>


           
 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_city" class="form-label">City</label>
  
  
  <input type="text" class="form-control  ($errors->has('city') ? ' is-invalid' : '')  " id="saksh_city" name="city"   value="{{$vendor->city}}" placeholder="city">
  
    {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
</div>

</div>

           
 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_state" class="form-label">State</label>
  
  
  <input type="text" class="form-control  ($errors->has('state') ? ' is-invalid' : '')  " id="saksh_state" name="state"   value="{{$vendor->state}}" placeholder="state">
  
    {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
</div>

</div>

           
 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_country" class="form-label">Country</label>
  
  
  <input type="text" class="form-control  ($errors->has('country') ? ' is-invalid' : '')  " id="saksh_country" name="country"   value="{{$vendor->country}}" placeholder="country">
  
    {!! $errors->first('country', '<div class="invalid-feedback">:message</div>') !!}
</div>


           </div>

 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_pin" class="form-label">Pin</label>
  
  
  <input type="text" class="form-control  ($errors->has('pin') ? ' is-invalid' : '')  " id="saksh_pin" name="pin"   value="{{$vendor->pin}}" placeholder="pin">
  
    {!! $errors->first('pin', '<div class="invalid-feedback">:message</div>') !!}
</div>


           </div>

 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_referral" class="form-label">How do you know about us</label>
  
  
  <input type="text" class="form-control  ($errors->has('referral') ? ' is-invalid' : '')  " id="saksh_referral" name="referral"   value="{{$vendor->referral}}" placeholder="referral">
  
    {!! $errors->first('referral', '<div class="invalid-feedback">:message</div>') !!}
</div>

</div>

           
 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_selected_plan" class="form-label">Selected plan</label>
  
  
  <input type="text" class="form-control  ($errors->has('selected_plan') ? ' is-invalid' : '')  " id="saksh_selected_plan" name="selected_plan"   value="{{$vendor->selected_plan}}" placeholder="selected_plan">
  
    {!! $errors->first('selected_plan', '<div class="invalid-feedback">:message</div>') !!}
</div>

</div>

           
 
          <div class="col-md-6">
        
        <div class="form-group  mb-3">
        
  <label for="saksh_annual_earning" class="form-label">Annual earning</label>
  
  
  <input type="text" class="form-control  ($errors->has('annual_earning') ? ' is-invalid' : '')  " id="saksh_annual_earning" name="annual_earning"   value="{{$vendor->annual_earning}}" placeholder="annual_earning">
  
    {!! $errors->first('annual_earning', '<div class="invalid-feedback">:message</div>') !!}
</div>
</div>


           
 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_total_experience" class="form-label">Total experience</label>
  
  
  <input type="text" class="form-control  ($errors->has('total_experience') ? ' is-invalid' : '')  " id="saksh_total_experience" name="total_experience"   value="{{$vendor->total_experience}}" placeholder="total_experience">
  
    {!! $errors->first('total_experience', '<div class="invalid-feedback">:message</div>') !!}
</div>
</div>


           
 
        
          <div class="col-md-6">
        <div class="form-group  mb-3">
        
  <label for="saksh_timezone" class="form-label">Timezone</label>
  
  
  <input type="text" class="form-control  ($errors->has('timezone') ? ' is-invalid' : '')  " id="saksh_timezone" name="timezone"   value="{{$vendor->timezone}}" placeholder="timezone">
  
    {!! $errors->first('timezone', '<div class="invalid-feedback">:message</div>') !!}
</div>


           
 
        </div>

         
           
 
        
         


           

  
        <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
        
        
        
        
                        </form>
                        
</div></div></div>
@endsection



  