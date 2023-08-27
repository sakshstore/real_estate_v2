@extends('layouts.page')
 

@section('title')
    {{ $page->title  }}
@endsection

@section('content')
     
  {!! $page->html !!}
                     
               

@endsection
 


@section('styles')
     <style>
     
     
     {!! $page->css !!} 
     
     
     </style> 
@endsection
 