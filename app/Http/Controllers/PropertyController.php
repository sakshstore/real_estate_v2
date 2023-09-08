<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;



use App\Models\Property;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
 
 
 
use App\Models\Customform;
use App\Models\Subscription;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Faq;
use App\Models\Order;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
/**
 * Class PropertyController
 * @package App\Http\Controllers
 */
class PropertyController extends Controller
{
    
    
    
    function search_property(Request $request){
  
  
  
  
        //$properties = Property::where("user_id",$user_id)->orderBy("id","desc")->paginate();
        
        
        
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
    
    
    $property=DB::SELECT($res);
    
    return $property;
           
           
         
        return json_encode($qr_ar);
        
   return $request->location;
 
        
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
    
    function test1(){
  
  $user=User::find(109);
 
        Auth::login($user);
    
    
 return redirect()->route('properties.index' )
          ->with('success', 'Property created successfully.');
 
        
    }
    /*
     * *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
     
  $user=Auth::user();
 
 $user_id=$user->id;
 
  
        $property = new Property();
        
 
$permission=$user->can ('viewAny' ,$property);


 if($permission)
            
        
        
      $properties = Property::orderByViews('desc')->paginate();
       // $properties = Property::orderBy("id","desc")->paginate();
        
        else
        
        
        $properties = Property::where("user_id",$user_id)->orderBy("id","desc")->paginate();
        
        
        
        
        
 //if($permission)
            
        
    //  $thrashed_properties = Property::trashed();
      
        
       // else
        
    //    
    //    $thrashed_properties = Property::where("user_id",$user_id)->orderBy("id","desc")->trashed();
         
         
        
        
   $thrashed_properties = Property::onlyTrashed()->get();
      
    //  return $thrashed_properties;
      
      
     // $thrashed_properties = Property::withTrashed()->get();
                
                
                
        
      return view('property.index', compact('properties','thrashed_properties'))
            ->with('i', (request()->input('page', 1) - 1) * $properties->perPage());
    
        
        
        
    }
    
    
    
    
    public function section_settings()
    {
        
  $logo_sliders_images=DotenvEditor::getValue('LOGO_SLIDERS_IMAGE') ;
        
  $logo_images= explode(',',  $logo_sliders_images); 
        
        
        
  $carousel_images=DotenvEditor::getValue('CAROUSEL_IMAGES') ;
  
     $carousel_images= explode(',',  $carousel_images); 
    
 
 
 
 
 
        return view('sections.set_sections_image', compact('logo_images','carousel_images'));
        
 
    }
    
    
    public function post_logo_slider_images(Request $request)
    {
        
  
         $file = $request->file('file');
         
         
      $imagefileName  = time().'__'.$file->getClientOriginalName();
      
      $gallery=array();
      
   $logo_slider = $file->storeAs('logo_slider', $imagefileName, 'public');
        
        
   //     if(!$this->validate_gallery_image(  $file))         abort(401);;
        
          $logo_sliders_images=DotenvEditor::getValue('LOGO_SLIDERS_IMAGE') ;
        
  $logo_sliders_images_ar= explode(',',  $logo_sliders_images); 
        
        
         
          
      
          $logo_sliders_images_ar[]=$logo_slider;
          
          
          
 $logo_sliders_images_str=implode(',',  $logo_sliders_images_ar);    
 
 

           $editor = DotenvEditor::setKeys([
    
    'LOGO_SLIDERS_IMAGE' =>$logo_sliders_images_str  
    
    
]);


$editor->save();

return "Uploaded succesfully";

  

    }
    
    
    public function post_carousel_images(Request $request)
    {
        
  
         $file = $request->file('file');
         
         
      $imagefileName  = time().'__'.$file->getClientOriginalName();
      
   
      
   $carousel_slider = $file->storeAs('carousel_slider', $imagefileName, 'public');
        
        
        $carousel_sliders_images=DotenvEditor::getValue('CAROUSEL_IMAGES') ;
        
  $carousel_sliders_images_ar= explode(',',  $carousel_sliders_images); 
        
        
   $carousel_sliders_images_ar[]=$carousel_slider;
          
          
          
 $carousel_sliders_images_str=implode(',',  $carousel_sliders_images_ar);    
 
  
    echo $carousel_sliders_images_str;

           $editor = DotenvEditor::setKeys([
    
    'CAROUSEL_IMAGES' =>$carousel_sliders_images_str  
    
    
]);


$editor->save();

return "Uploaded succesfully";

  

    }
    

public function remove_carousel_image(Request $request ){
    
        $carousel_sliders_images=DotenvEditor::getValue('CAROUSEL_IMAGES') ;
        
        
  $carousel_sliders_images_array= explode("," ,$carousel_sliders_images);
  
  $carousel_sliders_images_new_ar=array();
  
  
 
  foreach($carousel_sliders_images_array as $image)
  {
     
      if( asset(   $image ) ==  $request->name    )
      {
        
         
          
      }
      else
      {
          
          
          
        
           
      array_push($carousel_sliders_images_new_ar,$image);
      }
  }
  
  
  
  
  $carousel_sliders_images_new_str= implode("," ,$carousel_sliders_images_new_ar);
  
  
  
  
     $editor = DotenvEditor::setKeys([
    
    'CAROUSEL_IMAGES' =>$carousel_sliders_images_new_str  
    
    
]);


$editor->save();
 
  return  "Removed";
    
    
    
}



public function remove_logo_sliders_image(Request $request ){
     $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
            
             
        $logo_sliders_images=DotenvEditor::getValue('LOGO_SLIDERS_IMAGE') ;
        
        
  $logo_sliders_images_array= explode("," ,$logo_sliders_images);
  
  $logo_sliders_images_new_ar=array();
  
  
 
  foreach($logo_sliders_images_array as $image)
  {
     
      if( asset(   $image ) ==  $request->name    )
      {
        
         
          
      }
      else
      {
          
          
          
        
           
      array_push($logo_sliders_images_new_ar,$image);
      }
  }
  
  $logo_sliders_images_new_str= implode("," ,$logo_sliders_images_new_ar);
  
  
     $editor = DotenvEditor::setKeys([
    
    'LOGO_SLIDERS_IMAGE' =>$logo_sliders_images_new_str  
    
    
]);


$editor->save();
 
  return  "Removed";
    
    
    
}


  public function restore_property(Request $request,  $id )
    {
        
        Property::withTrashed()
        ->where('id', $id)
        ->restore();
        
        
        
    
  return redirect()->back( )
          ->with('success', 'Property restored successfully.');
 
    }  

  public function forced_destroy(Request $request,  $id )
    {
        
        Property::withTrashed()
        ->where('id', $id)
        ->forceDelete();
        
        
        
    
  return redirect()->back( )
          ->with('success', 'Property permanently successfully.');
 
    }  
    

    public function propertyarchive(Request $request)
    {
        
       

        $properties = Property::where("status","Published")->paginate();

        return view('property.property_archive', compact('properties'))
            ->with('i', (request()->input('page', 1) - 1) * $properties->perPage());
    }  
    
    
    public function query_property($query)
    {
        
      
         if($query=="all")
         
        $properties = Property::paginate();
        
        else
        
        
       $properties= Property::where('tags', 'like', '%' . $query . '%')->where("status","Published")->paginate();
    

    

        return view('property.property_archive', compact('properties'))
            ->with('i', (request()->input('page', 1) - 1) * $properties->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
        
        
          $property = new Property();
         
  $user=Auth::user();
 
$permission=$user->can('create' ,$property);
 if(!$permission)
            abort(403);
            
        
     
        
    
       $connectivity_array=get_connectivity_tags(); 

$amminities_array=get_amminities_tags(); 

 
        return view('property.create_property', compact('property','connectivity_array','amminities_array'));
        
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
       
        $property=new Property();
        
        
                 
  $user=Auth::user();
 
$permission=$user->can('create' ,$property);
 if(!$permission)
            abort(403);
            
            
            
       
       $property->project_name=$request->project_name;
       
       $property->location=$request->location; //
       
       
       $property->completion=$request->completion;//  
    
     
       $property->developer=$request->developer;//
       
       $property->broker_id=$user->id;//
       
       
         
            $order=Order::where("broker_id",$user->id )->where("payment_status","COMPLETED")->first();
        
        
        
       $property->payment_id=$order->payment_id;//
       
       
       
       
        
    
    
    $property->save();
  
      

 return redirect()->route('properties.edit',$property->id)
          ->with('success', 'Property created successfully.');
    }
    public function duplicate_property(Property $property)
    
    {
        
                 
  $user=Auth::user();
 
$permission=$user->can('create' ,$property);
 if(!$permission)
            abort(403);
            
            
            
            
        $new_property = $property->replicate();
        
        $new_property->save();
         
         
          
    return redirect()->route('properties.edit', [$new_property]);
    }

  public function publish_property(Property $property)
    
    {
        
          $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
        
        $property->status="Published";
        
        $property->save();
         
         
          return redirect()->route('properties.index')
          ->with('success', 'Property updated successfully.');
    }
  public function unpublish_property(Property $property)
    
    {
        $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
            
            
             $property->status="Unpublished";
        
        $property->save();
         
         
          return redirect()->route('properties.index')
          ->with('success', 'Property updated successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);

        return view('property.show', compact('property'));
    }


public function set_property_image(Property $property){
    
      $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
 return view('property.set_property_image', compact('property'));
    
    
}





public function remove_brochure_url(Request $request,Property $property){
      $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
  $property->brochure_url= "";
    
  
   $property->save();
   
   return "Removed!!!";
    
}




public function remove_feature_image_from_gallery(Request $request,Property $property){
    
   
  $property->property_thumbnail_url= "";
  
   $property->save();
   
   return "Removed!!!";
    
}






public function remove_image_from_gallery(Request $request,Property $property){
      $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
  $original_gallery_url= json_decode( $property->gallery_url);
  
  $new_gallery_url=array();
  
  
 
  foreach($original_gallery_url as $image)
  {
     
      if( asset(   $image ) ==  $request->name    )
      {
        
         
          
      }
      else
      {
          
          
          
        
           
      array_push($new_gallery_url,$image);
      }
  }
  
  
  $property->gallery_url=json_encode($new_gallery_url);
  
   $property->save();
    
   
  return  "Removed";
    
    
    
}



      public function post_set_property_images(Request $request,Property $property){
    
     $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
         $file = $request->file('file');
         
         
      $imagefileName  = time().'__'.$file->getClientOriginalName();
      
      $gallery=array();
   $property_gallery_url = $file->storeAs('property_gallery', $imagefileName, 'public');
        
        
        if(!$this->validate_gallery_image(  $file))         abort(401);;
        
        
        
          $gallery=json_decode(  $property->gallery_url );
          
      
          $gallery[]=$property_gallery_url;
          
          
          
 $property->gallery_url= json_encode( $gallery);
 
 if(is_null($property->property_thumbnail_url))
 $property->property_thumbnail_url= $property_gallery_url;
 
 
 
 
 $property->save();
 
 
return "Uploaded succesfully";



 
}
  public function post_brochure(Request $request,Property $property){
    
     $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
         $file = $request->file('file');
         
         
      $imagefileName  = time().'__'.$file->getClientOriginalName();
      
       
   $property_brochure_url = $file->storeAs('property_brochure', $imagefileName, 'public');
        
      
 $property->brochure_url= $property_brochure_url;
 
 $property->save();
 
 
return "Uploaded succesfully";



 
}


      public function post_set_thumbnail_image(Request $request,Property $property){
      $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
   
         $file = $request->file('file');
         
         
      $imagefileName  = time().'__'.$file->getClientOriginalName();
      
       
   $property_thumbnail_url = $file->storeAs('property_thumbnail', $imagefileName, 'public');
        
      
 $property->property_thumbnail_url= $property_thumbnail_url;
 
 $property->save();
 
 
return "Uploaded succesfully";



 
}


 



public function update_connectivity(Request $request,Property $property){
    
      $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
   
          
 $property->connectivities= json_encode( $request->connectivity_distance);
 
    $property->save();
    
    
  return redirect()->back( )
          ->with('success', 'Property updated successfully.');
}


public function update_video(Request $request,Property $property){
    
    
      $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
          
          
 $property->video_url= $request->video_url;
 
    $property->save();
    
    
return "connectivity updated succesfully";
}


public function viewProperty(Property $property){
    
        views($property)->record();
    
 return view('property.view_property', compact('property'));
    
    
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    
    
    public function edit($id)
    {
         
        $property = Property::find($id);
        
        
          $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
            
            
            
         
            
            
            		$customform = Customform::first();
            
            
            $connectivities_values=array();
            
            
            
$connectivity_array=array("one","two","three","five","six","seven");


$currency_array=getCurrency();



$amminities_array=get_amminities_tags(); 
 
 
        return view('property.edit_property', compact('property','connectivity_array','amminities_array', 'customform','currency_array'));
    }
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Property $property
     * @return \Illuminate\Http\Response
     */
    public function aminities_update(Request $request, Property $property)
    {
    //   return 868;
       
            $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
             
 
       
       $property->aminities=implode(",",get_value_array_from_tag( $request->aminities));
       
 
       
       
       
       
        $property->save();
        
    
 return redirect()->route('properties.edit',$property->id)
          ->with('success', 'Property created successfully.');
    }
    
    
       public function update(Request $request, Property $property)
    {
     
       
            $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
            
            
       
     $property->update($request->all());
      
       $property->starting_price=json_encode($request->starting_price);
            
            
             
 
       
       $property->project_tags=implode(",",get_value_array_from_tag( $request->project_tags));
       
 
       
        $property->save();
        
    
 return redirect()->route('properties.edit',$property->id)
         ->with('success', 'Property created successfully.');
    
    
    }
    
 public function post_set_update_other_fields(Request $request, Property $property)
    {
       
       
            $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
            
            
      $request_data=$request->except('_method', '_token')  ;
       
       
       $property->overview_custom_fields=json_encode($request_data);
              
              
               $property->save();
        
   
 return redirect()->route('properties.edit',$property->id)
          ->with('success', 'Property created successfully.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Property $property)
    {
        
                 
  $user=Auth::user();
 
$permission=$user->can('delete' ,$property);
 if(!$permission)
            abort(403);
            
            
            
            
            
            
        $property = $property->delete();

        return redirect()->route('properties.index')
            ->with('success', 'Property deleted successfully');
    }
    
    public function validate_gallery_image($image)
    { 
  
 
list($width, $height, $type, $attr) = getimagesize($image);



   if($width < 600)
   return false;
   else
   return true;
   
   
    }
}
