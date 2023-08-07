@extends('layouts.app-master')

@section('title')
    Bulk Message
@endsection

@section('content')
   
   
                 
                            <span id="header">
                                {{ __('Bulk Message') }}
                            </span>

                             
                                <a href="{{ route('bulk_messages.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Content</th>
										<th>Plateforms</th>
										<th>Delivery Time</th>
										<th>Status</th>
									 

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bulkMessages as $bulkMessage)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{!! $bulkMessage->content !!}</td>
											<td>{{ $bulkMessage->plateforms }}</td>
											<td>{{ $bulkMessage->scheduled_at }}</td>
											<td>{{ $bulkMessage->status }}</td>
										 
                                            <td>
                                                <form action="{{ route('bulk_messages.destroy',$bulkMessage->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('bulk_messages.edit',$bulkMessage->id) }}"><i class="fa fa-fw fa-edit"></i> Edit / Show</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
                {!! $bulkMessages->links() !!}
             
@endsection
