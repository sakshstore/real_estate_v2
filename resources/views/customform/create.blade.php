@extends('layouts.app-master')

@section('title')
    Create Customform
@endsection

@section('content')
  
  
                        <span class="header">Create Customform</span>
                  
                  
                        <form method="POST" action="{{ route('customforms.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('customform.form')

                        </form>
                        
    </section>
@endsection
