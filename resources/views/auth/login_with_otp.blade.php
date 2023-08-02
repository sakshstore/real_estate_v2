@extends('layouts.app')

@section('content')
   
   
                    <div class="title">{{ __('Login With OTP') }}</div>

                  
                         
                        <form id="saksh_recaptcha_form"    method="POST" action="{{ route('login_with_otp') }}">
                            @csrf

                            <div class="form-group ">
                                <label for="email"
                                       class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                
                                    
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                           
                           
 
 <input type="hidden" name="grecaptcha_token" />
                            
                            

                            <div class="form-group ">
                              
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                              
                              
                            </div>

                            <div class="form-group mb-0">
                             
                                    
                                 
                           <button id="submit_btn"  class="btn btn-primary">
                                        {{ __('Send OTP') }}
                                    </button>
                          
                            </div>
                        </form>
                        
@endsection
