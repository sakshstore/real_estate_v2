@extends('layouts.app-master')

@section('title')
    Create Auto Post
@endsection

@section('content')
  
  
                        <span class="header">Create Auto Post</span>
                  
                  
                        <form method="POST" action="{{ route('auto_posts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('auto-post.form')

                        </form>
                        
    </section>
@endsection
