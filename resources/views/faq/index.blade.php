@extends('layouts.app-master')

@section('title')
    Faq
@endsection

@section('content')
   
   
                 
                        
                             
                                <a href="{{ route('faqs.create') }}" class="btn btn-primary w-100"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  
 
    @include('faq.faqs')
             
@endsection
