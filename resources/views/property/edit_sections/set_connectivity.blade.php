 
   
   <form  target="_blank" action="{{ route('update_connectivity',$property->id) }}" method="POST">    @csrf
         {{ method_field('PATCH') }}
 
   
   
   @php
   $con= json_decode($property->connectivities );
   
   @endphp
   <table class="table table-bordered">
      
@php

 
foreach( $connectivity_array as $connectivity)
 
{
@endphp


 <tr>
     
     <td> {{ $connectivity}}  </td>
 
  
 
 <td>     

<?php


if(isset($con->$connectivity))
{
$value=$con->$connectivity;
}
else
{
    
    $value=0;
}
 

?>
 
 
<input type="text"  name="connectivity_distance[{{ $connectivity}}]" 
value="{{$value}}" /> 
                                                    
                                                  
                                                </form> 
                                                
                                                
                                                </td></tr>
                                                
                                                
                                                @php
 
}
@endphp
             
   </table>           
     <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-fw fa-home"></i> {{ __('submit') }}</button>
   
   
   
   
   
 
                                                
                        
   
 
                                                
                                                
                                                
   
   
   
 