@extends('layouts.app-master')

@section('template_title')
    Property
@endsection

@section('content')


     
                            <span id="card_title">
                                {{ __('Property') }}
                            </span>

                           
                                <a href="{{ route('properties.create') }}" class="btn btn-primary  w-100"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                             
                  

                    
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    
                                    
                                    <tr>
                                        
                                        <th>
                                            
                                            ID
                                        </th>
                                        
                                        <th> Project Name</th>
                                             <th> Total View
                                        </th>
                                       
                                      <th> Location
                                        </th>
                                        <th> &nbsp;
                                        </th>
                                       
                                        <th>Created at</th>
                                        
                                        
                                        
                                        <th> Updated at </th>
                            
                                  
                                        <th> &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($properties as $property)
                                        <tr>
                                        	<td>{{ $property->id }}</td>
                                            
											<td>{{ $property->project_name }}</td>
											
											<td> {{views($property)->count()}} </td>
											
											<td>{{ $property->location }}</td>
										 
											<td>{{ $property->address }}</td>
									 
								 
										 		<td>{{ $property->created_at }}</td>
										 
										 		<td>{{ $property->updated_at }}</td>
										 

                                            <td>
                                                
                                                
    
   
  

   
                                                <form action="{{ route('properties.destroy',$property->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('viewProperty',$property->id) }}"><i class="fa fa-fw fa-eye"></i>  </a>
                                                    
                                                  
                                                      
                                                    <a class="btn btn-sm btn-success" href="{{ route('properties.edit',$property->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    
                                                        <a class="btn btn-sm btn-primary " href="{{ route('duplicate_property',$property->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Duplicate') }}</a>
                                               
                                                  
                             @if($property->status =="Unpublished") 
                                                        <a class="btn btn-sm btn-primary " href="{{ route('publish_property',$property->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Publish') }}</a>
                                                    
                                                    @endif
                                                    
        @if($property->status =="Published")     
                                                    
                                                        <a class="btn btn-sm btn-primary " href="{{ route('unpublish_property',$property->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Unpublish') }}</a>
                                                      
                                                      
                                                         @endif
                                                      
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                 
                {!! $properties->links() !!}
                
                
                
                
          
@endsection





 
@section('style')
 
@endsection




@section('scripts')
 
          
@endsection





