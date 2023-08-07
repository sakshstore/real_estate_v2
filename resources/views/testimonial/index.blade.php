@extends('layouts.app-master')

@section('title')
    Testimonial
@endsection

@section('content')
   
   
                 
                            <span id="header">
                                {{ __('Testimonial') }}
                            </span>

                             
                                <a href="{{ route('testimonials.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              
                  


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Title</th>
										<th>Content</th>
									 

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $testimonial)
                                        <tr>
                                           
                                            	<td>{{ $testimonial->id }}</td>
											<td>{{ $testimonial->title }}</td>
									 
											<td>{{ $testimonial->user_id }}</td>

                                            <td>
                                                <form action="{{ route('testimonials.destroy',$testimonial->id) }}" method="POST">
                                                     
                                                    <a class="btn btn-sm btn-success" href="{{ route('testimonials.edit',$testimonial->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
