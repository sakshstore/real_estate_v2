@extends('layouts.app')

@section('title')
    {{ $post->name ?? 'Show Post' }}
@endsection

@section('content')
     
                            <span class="header">Show Post</span>
                        
                         
                            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                       
                    <div class="body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $post->title }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $post->content }}
                        </div>
                        <div class="form-group">
                            <strong>Thumbnail:</strong>
                            {{ $post->thumbnail }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $post->user_id }}
                        </div>

                    </div>
					
@endsection
