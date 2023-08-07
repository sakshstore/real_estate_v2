@extends('layouts.app')

@section('title')
    {{ $bulkMessage->name ?? 'Show Bulk Message' }}
@endsection

@section('content')
     
                            <span class="header">Show Bulk Message</span>
                        
                         
                            <a class="btn btn-primary" href="{{ route('bulk-messages.index') }}"> Back</a>
                       
                    <div class="body">
                        
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $bulkMessage->content }}
                        </div>
                        <div class="form-group">
                            <strong>Plateforms:</strong>
                            {{ $bulkMessage->plateforms }}
                        </div>
                        <div class="form-group">
                            <strong>Delivery Time:</strong>
                            {{ $bulkMessage->delivery_time }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $bulkMessage->status }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $bulkMessage->user_id }}
                        </div>

                    </div>
					
@endsection
