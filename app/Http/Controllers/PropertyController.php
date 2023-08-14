<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;



use App\Models\Property;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
 
 
 
use App\Models\Customform;


use App\Models\User;
use App\Models\Order;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
/**
 * Class PropertyController
 * @package App\Http\Controllers
 */
class PropertyController extends Controller
{
    /**
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
        
        
         
     
        
      return view('property.index', compact('properties'))
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
         
         
          
    return redirect()->route('properties.edit_property', [$new_property]);
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



public function remove_connectivity(Request $request,Property $property){
    
    
   $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
    
    
  $connectivities= json_decode( $property->connectivities);
  
  $new_connectivities=array();
  
  
 
  foreach($connectivities  as $element)
  {
   
     
      if( $request->connectivity_name ==  $element->name    )
      {
        
         
          
      }
      else
      {
          
          
          
        
           
      array_push($new_connectivities,$element);
      }
  }
  
  
  $property->connectivities=json_encode($new_connectivities);
  
   $property->save();
    
   
  return   $property->connectivities. "Removed";
    
    
    
}



public function update_connectivity(Request $request,Property $property){
    
      $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
    $connectivity=array();
    
    
    
         $connectivity['name']=get_value_array_from_tag(   $request->connectivity_name)[0];
         
         $connectivity['distance']= $request->connectivity_distance;
         
          
       
      
         $connectivities=json_decode(  $property->connectivities );
          
      
          $connectivities[]=$connectivity;
          
          
          
 $property->connectivities= json_encode( $connectivities);
 
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
            
$connectivity_array=get_connectivity_tags(); 

$amminities_array=get_amminities_tags(); 
 
 
        return view('property.edit_property', compact('property','connectivity_array','amminities_array', 'customform'));
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
            
            
             return $request->aminities;
             
 
       
       $property->aminities=implode(",",get_value_array_from_tag( $request->aminities));
       
 return  $property->aminities;
       
       
       
       
        $property->save();
        
    
 return redirect()->route('properties.edit',$property->id)
          ->with('success', 'Property created successfully.');
    }
    
    
       public function update(Request $request, Property $property)
    {
    //   return 868;
       
            $user=Auth::user();
 
$permission=$user->can('update' ,$property);
 if(!$permission)
            abort(403);
            
            
            
  
            
            request()->validate(Property::$rules);

        
      //  $property->update($request->all());
 
       
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
    public function destroy($id)
    {
        
                 
  $user=Auth::user();
 
$permission=$user->can('delete' ,$property);
 if(!$permission)
            abort(403);
            
            
            
            
            
            
        $property = Property::find($id)->delete();

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
