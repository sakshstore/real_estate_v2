
 

 


<form method="POST" action="{{ route('update_connectivity', $property->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                                   <div class="col-md-12   mb-5">
  <label for="aminities" class="form-label">Connectivity</label>
  
  
   <input type="text" class="form-control connectivity_tags tags" id="connectivity" name="connectivity_name"    >  
   
   
   <label for="aminities" class="form-label">Distance</label>
  
  
   <input type="text" class="form-control  " id="connectivity_distance" name="connectivity_distance"    >
   
 
   <input type="submit" class=" btn w-100  btn-primary" id="connectivity" value="save" >
   
   </div></form>
   <table class="table table-bordered">
      
@php

$connectivities=json_decode($property->connectivities);

if(is_array($connectivities))
{
foreach( $connectivities as $connectivity)

if(isset($connectivity->name))
{

@endphp


 <tr>
     
     <td> {{ $connectivity->name}}  </td>
 
 
 <td>{{ $connectivity->distance}}</td>
 
 
 <td>     


<form  target="_blank" action="{{ route('remove_connectivity',$property->id) }}" method="POST">    @csrf

<input type="hidden"  name="connectivity_name"  value="{{ $connectivity->name}}" /> 
                                                    
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form> 
                                                
                                                
                                                </td></tr>
                                                
                                                
                                                @php

}
}
@endphp
             
   </table>           
   
   
   
   
   
   
 
                                                
                                                
                                                
   
   
   
 