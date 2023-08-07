			  
                        <form method="POST" action="{{ route('post_set_update_other_fields', $property->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                  
                                
                                
                          <?php
$custom_field=json_decode( $property->overview_custom_fields);
                         
   
                        
                        $ar=json_decode( $customform->form_json  );
                        
                        foreach($ar as $a)
                        {
                        
                            
                            echo "<hr />";
                        //    echo $a->label;
                            
                       //     print_r($a);

if($a->type=="select")
{ 
      echo $a->label;
   
     $key=  $a->name;
  $value="";
   
   if(isset($custom_field->$key))
      $value=$custom_field->$key;
    
   
    
    
 echo "   <select class= '". $a->className."'   name= '". $a->name."' > ";
        
        
         foreach($a->values as $row)
                        {
                            
                            $selected="";
                        if($value==$row->value) $selected= "selected";
                      
                      
                      
                      
                            echo "<option value='".$row->value."' ".$selected.">";
                             echo  $row->label;
                            echo "</option >";
                            
                            
                        }
                        
                        
  echo "     </select> ";
  
  
    
  
    
    
}else if($a->type=="checkbox-group")
{
    
                      
   
      echo $a->label;
     
     
     $key=  $a->name;
       
       $value="";
       
       
       if(isset($custom_field->$key))
      $value=$custom_field->$key;
     
  
 echo "  <fieldset id='group2'>";
        
        
        
         foreach($a->values as $row)
                        {
                      $checked="";
                        if($value==$row->value) $checked= "checked";
                      
                      
     
     echo "   <input type='checkbox'   name= '". $a->name."'  value= '". $row->value."' ".$checked."  >";
   
     
 echo " <label for= '". $row->label."' > ". $row->label."</label><br>";



                        }
                        
                        

  echo "    </fieldset > ";
  
  
  
    
  
    
    
}



else if($a->type=="radio-group")
{
    
      echo $a->label;
     
     
     $key=  $a->name;
       
       $value="";
       
       
       if(isset($custom_field->$key))
      $value=$custom_field->$key;
     
 


 echo "  <div> ";
        
        
         foreach($a->values as $row)
                        {
                      $checked="";
                        if($value==$row->value) $checked= "checked";
                      
     
     echo "   <input type='radio'   name= '". $a->name."'  value= '". $row->value."' ".$checked."  >";
   
     
 echo " <label for= '". $row->label."' > ". $row->label."</label><br>";



                        }
                        
                        
  echo "     </div> ";
  
  
    
  
    
    
}
else if(  $a->type=="text"  )
 
 {
   
     
     
       $key=  $a->name;
       
       $value="";
       
       
       if(isset($custom_field->$key))
      $value=$custom_field->$key;
    
     
     
  
     echo $a->label;   
  echo "<input type='".$a->type."' value='".$value."'  class= '". $a->className."'  name= '". $a->name."'    />";
     
     
      

}


else if(  $a->type=="number"  )
 
 {
   
     
     
       $key=  $a->name;
       
       $value="";
       
       
       if(isset($custom_field->$key))
      $value=$custom_field->$key;
    
    
 
     echo $a->label;
  echo "<input type='".$a->type."' value='".$value."'  class= '". $a->className."'  name= '". $a->name."'    />";
     
      

}


else if(  $a->type=="date"  )
 
 {
    
     
     
       $key=  $a->name;
       
       $value="";
       
       
       if(isset($custom_field->$key))
      $value=$custom_field->$key;
     
  
     
     echo $a->label;
  echo "<input type='".$a->type."' value='".$value."'  class= '". $a->className."'  name= '". $a->name."'    />";
     
      

}
 
else if($a->type=="hidden" )
 
 {
   
     
 //  echo "<input type='".$a->type."' name= '". $a->name."'    />";
   echo "<input type='text' name= '". $a->name."' />";
     
     
     
  
//echo "<input type='". $a->type. "' class= '". $a->className."'   name= '". $a->name."'  /> ";

}

                            
                        
                        }
                  
                        
                        ?>
                             
		<div id="render-container">
								    
								  
								</div>	
									
  
                           <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
							
									
									
									
									</form>
									     
									