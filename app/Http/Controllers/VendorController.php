<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Property;


/**
 * Class VendorController
 * @package App\Http\Controllers
 */
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::paginate();

        return view('vendor.index', compact('vendors'))
            ->with('i', (request()->input('page', 1) - 1) * $vendors->perPage());
    }
  public function our_brokers()
    {
        $vendors = Vendor::paginate();

        return view('vendor.our_brokers', compact('vendors'))
            ->with('i', (request()->input('page', 1) - 1) * $vendors->perPage());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register_as_vendor()
    {
         $vendor = new Vendor();
        return view('vendor.register_as_vendor', compact('vendor'));
    } 
    
     public function register_as_vendor_post(Request $request)
    {
  // $request()->validate(Vendor::$rules);

       
       
        
 $vendor=new Vendor();

 $vendor->name=$request->name;

 $vendor->email=$request->email;

 $vendor->company_name=$request->company_name;

 $vendor->registeration_number=$request->registeration_number;

 $vendor->phone=$request->phone;

 $vendor->mobile=$request->mobile;

 $vendor->date_of_birth=$request->date_of_birth;

 $vendor->address=$request->address;

 $vendor->city=$request->city;

 $vendor->state=$request->state;

 $vendor->country=$request->country;

 $vendor->pin=$request->pin;

 $vendor->referral=$request->referral;

 $vendor->selected_plan=$request->selected_plan;

 $vendor->annual_earning=$request->annual_earning;

 $vendor->total_experience=$request->total_experience;

 $vendor->timezone=$request->timezone;
  
 $user=Auth::user();
 
 $vendor->user_id=100;
 
 
       $vendor->save();
        





        return redirect()->back( )
            ->with('success', 'Vendor created successfully.');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendor = new Vendor();
        return view('vendor.create', compact('vendor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Vendor::$rules);

      //  $vendor = Vendor::create($request->all());
        
        
        
        
        
        
        
        
 $vendor=new Vendor();

 $vendor->name=$request->name;

 $vendor->email=$request->email;

 $vendor->company_name=$request->company_name;

 $vendor->registeration_number=$request->registeration_number;

 $vendor->phone=$request->phone;

 $vendor->mobile=$request->mobile;

 $vendor->date_of_birth=$request->date_of_birth;

 $vendor->address=$request->address;

 $vendor->city=$request->city;

 $vendor->state=$request->state;

 $vendor->country=$request->country;

 $vendor->pin=$request->pin;

 $vendor->referral=$request->referral;

 $vendor->selected_plan=$request->selected_plan;

 $vendor->annual_earning=$request->annual_earning;

 $vendor->total_experience=$request->total_experience;

 $vendor->timezone=$request->timezone;
 
 
 $user=Auth::user();
 
 $vendor->user_id=$user->id;
 
 
       $vendor->save();
        





        return redirect()->route('vendors.index')
            ->with('success', 'Vendor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Vendor $vendor 
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //$vendor = Vendor::find($id);

        return view('vendor.show', compact('vendor'));
    }



    public function get_vendor($email)
    {
        $vendor = Vendor::where( "email",$email)->first();
        
        
        
       $properties= Property::where('broker_id',$vendor->id)->where("status","Published")->get();
    
    
    

        return view('vendor.get_vendor', compact('vendor','properties'));
    }
    
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Vendor $vendor 
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
      //  $vendor = Vendor::find($id);

        return view('vendor.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vendor $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
       // request()->validate(Vendor::$rules);

        $vendor->update($request->all());

        return redirect()->route('vendors.index')
            ->with('success', 'Vendor updated successfully');
    }

    /**
     * @param Vendor $vendor 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Vendor $vendor  )
    {
        //$vendor = Vendor::find($id)->delete();


$vendor ->delete();
        return redirect()->route('vendors.index')
            ->with('success', 'Vendor deleted successfully');
    }
    
    
    
       public function process_vendor_request(Vendor $vendor  )
    {
       
$vendor ->status="accepted";
$vendor ->save(); 


$user=new User();
$user->email=$vendor->email;

$user->username=$vendor->email;

$user->save();




        return redirect()->route('vendors.index')
            ->with('success', 'Vendor deleted successfully');
    }
    
    
    
}
