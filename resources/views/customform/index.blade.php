@extends('layouts.app-master')

@section('title')
    Customform
@endsection

@section('content')
   
   
                 
                            <span id="header">
                                {{ __('Customform') }}
                            </span>

                             
                                <a href="{{ route('customforms.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Form Name</th>
									 
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customforms as $customform)
                                        <tr>
                                          
                                            
											<td>{{ $customform->id }}</td>
									 		<td>{{ $customform->form_name }}</td>
									 

                                            <td>
                                                <form action="{{ route('customforms.destroy',$customform->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('customforms.show',$customform->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('customforms.edit',$customform->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                    
                {!! $customforms->links() !!}
             
@endsection
