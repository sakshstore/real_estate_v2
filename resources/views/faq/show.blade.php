@extends('layouts.app-master')

@section('title')
    {{ $faq->name ?? 'Show Faq' }}
@endsection

@section('content')
     
                            <span class="header">Show Faq</span>
                        
                         
                            <a class="btn btn-primary" href="{{ route('faqs.index') }}"> Back</a>
                       
                    <div class="body">
                        
                        <div class="form-group">
                            <strong>Question:</strong>
                            {{ $faq->question }}
                        </div>
                        <div class="form-group">
                            <strong>Answer:</strong>
                            {{ $faq->answer }}
                        </div>
                        <div class="form-group">
                            <strong>Category:</strong>
                            {{ $faq->category }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $faq->user_id }}
                        </div>

                    </div>
					
@endsection
