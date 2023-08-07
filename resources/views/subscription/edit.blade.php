@extends('layouts.app-master')

@section('title')
    Update Subscription
@endsection

@section('content')
 
 
   
                        <form method="POST" action="{{ route('subscriptions.update', $subscription->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('subscription.form')

                        </form>
                        
                        
    </section>
@endsection

 