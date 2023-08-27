@extends('layouts.app-master')

@section('template_title')
    Property
@endsection

@section('content')

 
                           
                                <a href="{{ route('properties.create') }}" class="btn btn-primary  w-100"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                             
                  

                   
                
                
                
            
          
                        
                        
                        
                        
                        
                        
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            
                            
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Properties</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Trashed</button>
  </li>
 
</ul>
<div class="tab-content" id="myTabContent">
    
    
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"> 
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    
                                    
                                    <tr>
                                        
                                        <th>
                                            
                                            ID
                                        </th>
                                        
                                        <th> Project Name</th>
                                            
                                        <th> Status
                                        </th> <th> Total View
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
	 	<td>{{ $property->status }}</td>
									 
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
                 
                {!! $properties->links() !!}</div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          
          
          
                    
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    
                                    
                                    <tr>
                                        
                                        <th>
                                            
                                            ID
                                        </th>
                                        
                                        <th> Project Name</th>
                                            
                                       
                                      <th> Location
                                        </th>
                                     
                                       
                                       
                                        <th> Created at </th>
                                       
                                        <th> Updated at </th>
                            
                                  
                                        <th> &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($thrashed_properties as $thrashed_property)
                                        <tr>
                                        	<td>{{ $thrashed_property->id }}</td>
                                            
											<td>{{ $thrashed_property->project_name }}</td>
	  
									 
										 
											
											<td>{{ $thrashed_property->location }}</td>
										 
									 
										 		<td>{{ $thrashed_property->created_at }}</td>
										 
										 		<td>{{ $thrashed_property->updated_at }}</td>
										 

                                            <td>
                                                
                                                
    
   
  
 
                                                    <a class="btn btn-sm btn-primary " href="{{ route('restore_property',$thrashed_property->id) }}"><i class="fa fa-fw fa-eye"></i>  </a>
                                                    
                                                    
                                                    
                                                    
                                                    
   
                                                <form action="{{ route('forced_destroy',$thrashed_property->id) }}" method="POST">
                                                  
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete Permanently ') }}</button>
                                                </form>
                                                
                                                
                                                
                                                    
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
  
</div>





@endsection





 
@section('style')
 
@endsection




@section('scripts')
 
          
@endsection





