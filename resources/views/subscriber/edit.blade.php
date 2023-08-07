@extends('layouts.app-master')

@section('title')
    Update Subscriber
@endsection

@section('content')
 
 
  
         
                        <form method="POST" action="{{ route('subscribers.update', $subscriber->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('subscriber.form')

                        </form>
                        
                        
    </section>
@endsection


 