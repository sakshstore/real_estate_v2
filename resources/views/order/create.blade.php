@extends('layouts.app')

@section('title')
    Create Order
@endsection

@section('content')
  
  
                        <span class="header">Create Order</span>
                  
                  
                        <form method="POST" action="{{ route('orders.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('order.form')

                        </form>
                        
    </section>
@endsection
