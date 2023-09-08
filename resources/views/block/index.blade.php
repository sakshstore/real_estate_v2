@extends('layouts.app-master')

@section('title')
    Block
@endsection

@section('content')
   
   
                 
                            <span id="header">
                                {{ __('Block') }}
                            </span>

                             
                                <a href="{{ route('blocks.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Label</th>
								 
									 
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blocks as $block)
                                        <tr>
                                             
											<td>{{ $block->id }}</td>     
											<td>{{ $block->label }}</td>
											 
											<td>{{ $block->status }}</td>

                                            <td>
                                                <form action="{{ route('blocks.destroy',$block->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('blocks.show',$block->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('blocks.edit',$block->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                    
                {!! $blocks->links() !!}
             
@endsection
