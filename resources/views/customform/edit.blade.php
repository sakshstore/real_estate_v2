@extends('layouts.app-master')

@section('title')
    Update Customform
@endsection

@section('content')
 
 
 
              
         
                        <form method="POST" action="{{ route('customforms.update', $customform->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('customform.form')

                        </form>
                        
                        
    </section>
@endsection
 