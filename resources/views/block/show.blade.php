@extends('layouts.app')

@section('title')
    {{ $block->name ?? 'Show Block' }}
@endsection

@section('content')
     
                            <span class="header">Show Block</span>
                        
                         
                            <a class="btn btn-primary" href="{{ route('blocks.index') }}"> Back</a>
                       
                <table>
                
                
                        
                       <tr>
                       
                       
                       <td>
                            <strong>Label:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $block->label }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Content:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $block->content }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Thumbainl:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $block->thumbainl }}
                       </td>
                       
                       
                       </tr>
                       <tr>
                       
                       
                       <td>
                            <strong>Status:</strong>
                          
                       
                       </td>
                       
                       
                       <td>
                       
                         {{ $block->status }}
                       </td>
                       
                       
                       </tr>

                  
                </table>
@endsection
