<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class SearchProperties extends Component
{
    
    public $properties=array();
    
    
    public function render()
    {
        return view('livewire.search-properties');
    }
    
    
    public function search_now(Request $request)
    {
        
   
        
        
   $qr=array();
        
  $qr_ar=array("status ='published'");
  
            
            
            
            
         $qr_ar[]=$this->build_query_section( "location",$request->locations);
        
        
        
            
            
         $qr_ar[]=$this->build_query_section( "property_type",$request->rent_sell);
          
          
          $qr_ar[]=$this->build_query_section( "bedrooms",$request->bedrooms);
            
           
         $qr_ar[]=$this->build_query_section( "bathrooms",$request->bathrooms);
           
           
           
         
        // $qr_ar[]=$this->build_query_section( "type",$request->home_type);
            
            $where=implode(" and ",$qr_ar);
            
           $price= " and starting_price <= " .$request->maximum_price ." and starting_price >=".$request->minimum_price;
            
            
      
           
           $res =  " select * from properties where ".   $where .$price ;
    
      
           
           $res =  " select * from properties   ";
    
    
    
      $this->properties =DB::SELECT($res);
           
           
         
    //    return json_encode($qr_ar);
        
  // return $request->location;
       // $this->test=rand();
    }   
    function build_query_section( $type,$tags)
    {
       $array= get_value_array_from_tag($tags);
       
       
       $or_section=array();
         
        foreach($array as $ar)
        {
            
             
            $or_section[] = $type."  like '%".$ar."%'   ";
            
        }
        
        
           $where=implode(" or ",$or_section);
            
         
         $where="( ". $where . ")";
         
         
         
        
        return $where;
        
         
    }
}
