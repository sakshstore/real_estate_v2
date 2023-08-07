@extends('layouts.app')

@section('title')
    {{ $testimonial->name ?? 'Show Testimonial' }}
@endsection

@section('content')
     
                            <span class="header">Show Testimonial</span>
                        
                         
                            <a class="btn btn-primary" href="{{ route('testimonials.index') }}"> Back</a>
                       
                    <div class="body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $testimonial->title }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $testimonial->content }}
                        </div>
                        <div class="form-group">
                            <strong>Thumbnail:</strong>
                            {{ $testimonial->thumbnail }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $testimonial->user_id }}
                        </div>

                    </div>
					
@endsection
