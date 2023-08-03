<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Property;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class LeadController
 * @package App\Http\Controllers
 */
class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        
     $user=Auth::user();
 
 $user_id=$user->id;
 
  
 $lead = new Lead();
        
 
$permission=$user->can('viewAny' ,$lead);

 

 if($permission)
 
 {
     
     
    
       
        
         
        
        $leads['book_a_private_tour'] = Lead::where("purpose","book_a_private_tour")->orderBy('created_at', 'desc')->get();
        
    
    
    
        $leads['call_me_back'] = Lead::where("purpose","call_me_back")->orderBy('created_at', 'desc')->get();
        
        
        
        $leads['download_brochure'] = Lead::where("purpose","download_brochure")->orderBy('created_at', 'desc')->get();
        
        
 }
 
 else
 
 {
     
         
        
        $leads['book_a_private_tour'] = Lead::where("purpose","book_a_private_tour")->where("user_id",$user_id)->orderBy('created_at', 'desc')->get();
        
    
    
    
        $leads['call_me_back'] = Lead::where("purpose","call_me_back")->where("user_id",$user_id)->orderBy('created_at', 'desc')->get();
        
        
        
        $leads['download_brochure'] = Lead::where("purpose","download_brochure")->where("user_id",$user_id)->orderBy('created_at', 'desc')->get();
     
     
 }

        return view('lead.index', compact('leads')) ; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lead = new Lead();
        return view('lead.create', compact('lead'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }
    
    public function call_me_back(Request $request)
    {
        
      
         
         
                           
        $lead=new Lead();
        
        
        $user=Auth::User();
        
        if($user)
        $lead->user_id=$user->id;
        else
        $lead->user_id=0;
        
        
        $lead->name=$request->name;
      
        $lead->email=$request->email;
        $lead->phone=$request->phone;
        $lead->service_id=$request->service_id;
        $lead->request_url= $request->path(); 
        $lead->ip_address=$request->ip();
        
        $lead->purpose= "call_me_back";
        
        
        $lead->refer=$request->refer;
        
        
           $lead->save();
           
           
           return redirect()->back( )
            ->with('success', 'Thanks Our service agent will contact you.');
            
        
    }
  public function download_brochure(Request $request)
    {
        
      
         
         
                           
        $lead=new Lead();
        
        
        $user=Auth::User();
        
        if($user)
        $lead->user_id=$user->id;
        else
        $lead->user_id=0;
        
        
        $lead->name=$request->name;
      
        $lead->email=$request->email;
        $lead->phone=$request->phone;
        $lead->service_id=$request->property_id;
        $lead->request_url= $request->path(); 
        $lead->ip_address=$request->ip();
        
        $lead->purpose= "download_brochure";
        
        
        $lead->refer=$request->refer;
        
           $lead->save();
           
        $property = Property::find($request->property_id);
           
           
           $pdf_url= $property-> brochure_url;
           
        
           
           
           return redirect(asset ( $pdf_url) ); 
            
        
    }  
    
    
    public function book_a_private_tour(Request $request)
    {
        
      
         
         
                           
        $lead=new Lead();
        
        
        $user=Auth::User();
        
        if($user)
        $lead->user_id=$user->id;
        else
        $lead->user_id=0;
        
        
        $lead->name=$request->name;
      
        $lead->email=$request->email;
      
        $lead->datetime_local=$request->datetime_local;
      
        $lead->timezone=$request->timezone;
        
        
        $lead->phone=$request->phone;
        $lead->service_id=$request->property_id;
        $lead->request_url= $request->path(); 
        $lead->ip_address=$request->ip();
        
        
        $lead->refer=$request->refer;
        
        $lead->purpose= "book_a_private_tour";
        
           $lead->save();
           
           
           return redirect()->back( )
            ->with('success', 'Thanks Our service agent will contact you.');
            
        
    }
    /**
     * Display the specified resource.
     *
     * @param  Lead $lead 
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        //$lead = Lead::find($id);

        return view('lead.show', compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Lead $lead 
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
      //  $lead = Lead::find($id);

        return view('lead.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lead $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
       // request()->validate(Lead::$rules);


 $user=Auth::user(); 
$permission=$user->can('update' ,$lead);
 
 if(!$permission) 
abort(403);



        $lead->update($request->all());

        return redirect()->route('leads.index')
            ->with('success', 'Lead updated successfully');
    }










 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lead $lead
     * @return \Illuminate\Http\Response
     */
    public function set_lead_tags(Request $request, Lead $lead)
    {
       // request()->validate(Lead::$rules);


 $user=Auth::user(); 
$permission=$user->can('update' ,$lead);
 
 if(!$permission) 
abort(403);



        $lead->tags=$request->tags;
        
        $lead->save();
        
        

        return redirect()->route('leads.index')
            ->with('success', 'Lead updated successfully');
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lead $lead
     * @return \Illuminate\Http\Response
     */
    public function set_lead_status(Request $request, Lead $lead)
    {
       // request()->validate(Lead::$rules);


 $user=Auth::user(); 
$permission=$user->can('update' ,$lead);
 
 if(!$permission) 
abort(403);



        $lead->status=$request->status;
        
        $lead->save();
        
        

        return redirect()->route('leads.index')
            ->with('success', 'Lead updated successfully');
    }
    /**
     * @param Lead $lead 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Lead $lead  )
    {
        //$lead = Lead::find($id)->delete();

 $user=Auth::user(); 
$permission=$user->can('delete' ,$lead);
 
 if(!$permission) 
abort(403);


     
$lead ->delete();
        return redirect()->route('leads.index')
            ->with('success', 'Lead deleted successfully');
    }
}
