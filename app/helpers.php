<?php

use App\Models\Property;

use App\Models\Page;

 






if (! function_exists('plural_from_model')) {
    function plural_from_model($model)
    {
        $plural = Str::plural(class_basename($model));
 
        return Str::kebab($plural);
    }
}

if (! function_exists('get_price')) {
    function get_price($property  )
    {
      
         $price_array=json_decode($property->starting_price );
 
          
           
  return    $price_array->usd  ." USD  or " .  $price_array->aed  ." AED" ;
  
  
  
//  return  number_format($price_array->usd) ." USD " . number_format($price_array->aed )." AED" ;
  
  
  
  
    }
}



if (! function_exists('get_value_array_from_tag')) {
    function get_value_array_from_tag($tag_str  )
    {
       
       
   $tags=array();
   
   
  $tag_array=json_decode($tag_str);
  
  if(is_array($tag_array))
  {
 foreach ($tag_array as $tag_element) {
 	array_push($tags,$tag_element->value);
}
  }
 return  $tags;
 
 
  
    }
}

/*
[{"name":"International Airport","distance":"26 Minute"},{"name":"burj khalifa","distance":"27 Minute"},{"name":"palm jumeirah","distance":"37 Minute"},{"name":"School","distance":"21 Minute"},{"name":"Doctor","distance":"20 Minute"}]


*/


if (! function_exists('get_connectivity_tags')) {
    function get_connectivity_tags(   )
    {
       
          $connectivity_array=array("School","Hospital","Airport","Metro Station");
   
      
   
   

        $properties = Property::select("connectivities")->whereNotNull("connectivities")->get();
        
        
        foreach(  $properties as $property )
        {
            $connectivities_array=json_decode($property->connectivities );
            
             foreach ($connectivities_array as $connectivity_element) {
 	array_push($connectivity_array,$connectivity_element->name);
}
 
             
            
        }
          
 
 return  array_unique( $connectivity_array);
 
 
  
    }
}

if (! function_exists('get_amminities_tags')) {
    function get_amminities_tags(   )
    {
       
          $amminities_array=array("Day Care Centers" ,"Children's Playground",
"Fitness Center", 
"Swimming Pool",
"Yoga Area",
"24-hr Security");
   
      
  

        $properties = Property::select("aminities")->whereNotNull("aminities")->get();
        
        
        foreach(  $properties as $amminity )
        {
       
 	array_push($amminities_array,$amminity->aminities);
 
 
             
            
        }
        
   
        $str= implode(",", $amminities_array) ;
 

$ar=  array_unique(  explode(",", $str) ) ;
 

  
    
 return   $ar;
 
 
  
    }
}








if (! function_exists('get_page')) {
    function get_page (   $slug)
    { 

        $page = Page::where ("slug",  $slug)->first();
        
        
 return   $page;
 
 
  
    }
}



if (! function_exists('saksh_isset')) {
    function saksh_isset (   $str)
    { 

   if( !empty($str))
     return true;
     
     else
   return  false ;
 
 
  
    }
}







if (! function_exists('get_ai_contents')) {
    function get_ai_contents (   $str,$type)
    { 
return $str.$type;


   
 
 
  
    }
}


if (! function_exists('get_customer_list_by_tags')) {

  function get_customer_list_by_tags()
    {
        
        

   
   
  
   $tags="tag1,tag2";
   $tag_array=explode(",",$tags);
   
   
         
           
           
           $query=" select * from chat_requests   where   ";
           
           
   $i=0;
   $query  .=" ( " ;
                foreach($tag_array as $tag)
                
                { 
                    if($i==0)
  $query=  $query . "  (  customer_tags like  '%".$tag."%' ) "  ;
  
  else
  {
      
      
  
  
  $query=  $query . " OR   (  customer_tags like  '%".$tag."%'  )"  ;
  
  }
  $i++;
  
                }
                
                
                 $query  .=" )  " ; 
            
             
            
             $chat_requests = DB::select($query);
 
        
        
      
    }
    
    
    }
    



