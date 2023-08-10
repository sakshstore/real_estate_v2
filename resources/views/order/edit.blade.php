@extends('layouts.app-master')

@section('title')
    Update Order
@endsection

@section('content')
 
 

                @includeif('partials.errors')

             
             
                        <span class="header">Update Order</span>
                
                
                        <form method="POST" action="{{ route('orders.update', $order->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('order.form')

                        </form>
                        
                        
    </section>
@endsection
