@extends('layouts.app-master')

@section('title')
    Create Vendor
@endsection

@section('content')
  
   
                  
                        <form method="POST" action="{{ route('vendors.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('vendor.form')

                        </form>
                        
    </section>
@endsection
