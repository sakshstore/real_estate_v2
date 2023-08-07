@extends('layouts.app-master')

@section('title')
    {{ $autoPost->name ?? 'Show Auto Post' }}
@endsection

@section('content')
     
                            <span class="header">Show Auto Post</span>
                        
                         
                            <a class="btn btn-primary" href="{{ route('auto_posts.index') }}"> Back</a>
                       
                <table class="table">
                
                
                        
                       <tr>
                       
                       
                       <td>
                            <strong>Keywords:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $autoPost->keywords }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Category:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $autoPost->category }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Tags:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $autoPost->tags }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Schedule At:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $autoPost->schedule_at }}
                       </td>
                       
                       
                       </tr>

                  
                </table>
@endsection
