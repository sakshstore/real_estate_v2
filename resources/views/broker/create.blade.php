@extends('layouts.app-master')

@section('title')
    Create Broker
@endsection

@section('content')
  
   
                  
                        <form method="POST" action="{{ route('brokers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('broker.form')

                        </form>
                        
    </section>
@endsection
