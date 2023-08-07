@extends('layouts.app-master')

@section('title')
    Post
@endsection

@section('content')
   
   
                 
                            
                             
                                <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                            
                             
                                <a href="{{ route('get_create_ai_post') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New Post by AI') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Title</th>
								 
										<th>Tags</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                     		<td>{{ $post->id }}</td>
											<td>{{ $post->title }}</td>
											<td> {{views($post)->count()}} </td>
										 
									 
                                            <td>
                                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                                   
                                                    <a class="btn btn-sm btn-success" href="{{ route('posts.edit',$post->id) }}"><i class="fa fa-fw fa-edit"></i> Edit / show </a>
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
                    
                {!! $posts->links() !!}
             
@endsection
