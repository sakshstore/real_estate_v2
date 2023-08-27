@extends('layouts.app-master')

@section('content')
    
    
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-brand-tab" data-bs-toggle="pill" data-bs-target="#pills-brand" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Branding Setting</button>
  </li>  
 
 
 <li class="nav-item" role="presentation">
    <button class="nav-link  " id="pills-logo-tab" data-bs-toggle="pill" data-bs-target="#pills-logo" type="button" role="tab" aria-controls="pills-logo" aria-selected="true">Logo Setting</button>
  </li>
  
  
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-notification-tab" data-bs-toggle="pill" data-bs-target="#pills-notification" type="button" role="tab" aria-controls="pills-notification" aria-selected="false">Notification Settings</button>
  </li>  
  
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-recaptcha-tab" data-bs-toggle="pill" data-bs-target="#pills-recaptcha" type="button" role="tab" aria-controls="pills-recaptcha" aria-selected="false">Recaptcha Settings </button>
  </li>
   <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-master-tab" data-bs-toggle="pill" data-bs-target="#pills-master" type="button" role="tab" aria-controls="pills-master" aria-selected="false">Master </button>
  </li>
  
  
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-cron-tab" data-bs-toggle="pill" data-bs-target="#pills-cron" type="button" role="tab" aria-controls="pills-cron" aria-selected="false">Cron Job Settings</button>
  </li>
  
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-brand" role="tabpanel" aria-labelledby="pills-brand-tab" tabindex="0">  @include('settings.branding')</div>



  <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab" tabindex="0">
    @include('settings.logo')</div>
    


  <div class="tab-pane fade" id="pills-notification" role="tabpanel" aria-labelledby="pills-notification-tab" tabindex="0">
    @include('settings.notification')</div>
    

  <div class="tab-pane fade" id="pills-recaptcha" role="tabpanel" aria-labelledby="pills-recaptcha-tab" tabindex="0">
    @include('settings.recaptcha')</div>
    

  <div class="tab-pane fade" id="pills-master" role="tabpanel" aria-labelledby="pills-master-tab" tabindex="0">
    @include('settings.master')</div>
    
    
    
  <div class="tab-pane fade" id="pills-cron" role="tabpanel" aria-labelledby="pills-cron-tab" tabindex="0">
    @include('settings.cron_job')</div>
    
    
     
 
</div>
 
 
@endsection
