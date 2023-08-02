@extends('layouts.app-master')

@section('title')
    Create Subscription
@endsection

@section('content')
  
   
                  
                  
                        <form method="POST" action="{{ route('subscriptions.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('subscription.form')

                        </form>
                        
    </section>
@endsection
