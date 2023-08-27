@extends('layouts.app-master')

@section('title')
    Page
@endsection

@section('content')
   
   
                 
                            <span id="header">
                                {{ __('Page') }}
                            </span>

                             
                                <a href="{{ route('pages.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Page ID</th>
                                        
										<th>Title</th>
									 
										<th>Status</th>

                                        <th>Created at</th>
                                        <th> &nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $page)
                                        <tr>
                                            <td>{{$page->id}}</td>
                                            
											<td>{{ $page->title }}</td>
											 
											<td>{{ $page->status }}</td>
											<td>{{ $page->created_at }}</td>

                                            <td>
                                                <form action="{{ route('pages.destroy',$page->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('get_page_by_id',$page->id) }}"><i class="fa fa-fw fa-eye"></i>   Public View</a>
                                                    
                                                           <a class="btn btn-sm btn-primary " href="{{ route('pages.show',$page->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                           
                                                           
                                                           
                                                    <a class="btn btn-sm btn-success" href="{{ route('pages.edit',$page->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('load_editor',$page->id) }}"><i class="fa fa-fw fa-edit"></i> Edit Contents</a>
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
                    
               
             
@endsection
