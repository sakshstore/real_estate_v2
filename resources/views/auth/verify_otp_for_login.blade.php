@extends('layouts.app')

@section('content')
   
   
                    <div class="title">{{ __('Login With OTP') }}</div>

                  
                        
                        <form id="saksh_recaptcha_form"  method="POST" action="{{ route('verify_login_with_otp') }}">
                            @csrf

                            <div class="form-group ">
                                <label for="otp"
                                       class="col-form-label text-md-right">{{ __('OTP') }}</label>

                                  
       <input   type="hidden" name="email"  value="{{$email}}" >

 <input type="hidden" name="grecaptcha_token" />
                                    
                                    <input id="otp" type="text"
                                           class="form-control " name="otp"
                                           value="" required  autofocus>

                                   
                                </div>
                           
                           
 
                            
                            

                           
                           

                            <div class="form-group mb-0">
                             
                                    
                                   
                             
                           <button id="submit_btn"  class="btn btn-primary">
                                        {{ __('Verify') }}
                                    </button>
                          
                            </div>
                        </form>
                        
@endsection
