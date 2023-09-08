@extends('layouts.app-master')

@section('title')
    Create Block
@endsection

@section('content')
  
  
                        <span class="header">Create Block</span>
                  
                  
                        <form method="POST" action="{{ route('blocks.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('block.form')

                        </form>
                        
    </section>
@endsection
