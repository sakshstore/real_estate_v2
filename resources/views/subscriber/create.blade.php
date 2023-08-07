@extends('layouts.app-master')

@section('title')
    Create Subscriber
@endsection

@section('content')
  
  
                        <span class="header">Create Subscriber</span>
                  
                  
                        <form method="POST" action="{{ route('subscribers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('subscriber.form')

                        </form>
                        
    </section>
@endsection
