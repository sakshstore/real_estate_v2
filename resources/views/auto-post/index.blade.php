@extends('layouts.app-master')

@section('title')
    Auto Post
@endsection

@section('content')
   
   
                 
                            <span id="header">
                                {{ __('Auto Post') }}
                            </span>

                             
                                <a href="{{ route('auto_posts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Keywords</th>
										<th>Category</th>
										<th>Tags</th>
                                        <th>status</th>
                                        <th>post_id</th>
										<th>Schedule At</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autoPosts as $autoPost)
                                        <tr>
                                          	<td>{{ $autoPost->id }}</td>
                                            
											<td>{{ $autoPost->keywords }}</td>
											<td>{{ $autoPost->category }}</td>
											<td>{{ $autoPost->tags }}</td>
											<td>{{ $autoPost->status }}</td>
											<td>{{ $autoPost->post_id }}</td>
	<td>{{ $autoPost->schedule_at }}</td>

                                            <td>
                                                <form action="{{ route('auto_posts.destroy',$autoPost->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('auto_posts.show',$autoPost->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('auto_posts.edit',$autoPost->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                    
                {!! $autoPosts->links() !!}
             
@endsection
