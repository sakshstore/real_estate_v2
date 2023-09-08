<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Customform;

use App\Models\Property; 

use App\Models\Subscription;

/**
 * Class BrokerController
 * @package App\Http\Controllers
 */
class BrokerController extends Controller
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
      //  $brokers = User::paginate();
        
        $brokers = User::role('Executive')->paginate(); 
        
        

        return view('broker.index', compact('brokers'))
            ->with('i', (request()->input('page', 1) - 1) * $brokers->perPage());
    }
  public function our_brokers()
    {
         

    $brokers = User::role('Executive')->paginate(); 
        
        
        
        
        return view('broker.our_brokers', compact('brokers'))
            ->with('i', (request()->input('page', 1) - 1) * $brokers->perPage());
    }
 
    
    
    
  
    
 



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return "";
        $broker = new Broker();
        return view('broker.create', compact('broker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Broker::$rules);

      //  $broker = Broker::create($request->all());
        
        
        
        return "";
        
	$user=	Auth::user();
        
        
         

 $broker->name=$request->name;

 $broker->email=$request->email;

 $broker->company_name=$request->company_name;

 $broker->registeration_number=$request->registeration_number;

 $broker->phone=$request->phone;

 $broker->mobile=$request->mobile;

 $broker->date_of_birth=$request->date_of_birth;

 $broker->address=$request->address;

 $broker->city=$request->city;

 $broker->state=$request->state;

 $broker->country=$request->country;

 $broker->pin=$request->pin;

 $broker->referral=$request->referral;

 $broker->selected_plan=$request->selected_plan;

 $broker->annual_earning=$request->annual_earning;

 $broker->total_experience=$request->total_experience;

 $broker->timezone=$request->timezone;
 
 
 $user=Auth::user();
 
 $broker->user_id=$user->id;
 
 
       $broker->save();
        





        return redirect()->route('brokers.index')
            ->with('success', 'Broker created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Broker $broker 
     * @return \Illuminate\Http\Response
     */
    public function show(Broker $broker)
    {
         

        return view('broker.show', compact('broker'));
    }



    public function get_broker(User $user)
    {
      
        
       $broker=$user;
       
    
        
       $properties= Property::where('broker_id',$user->id)->where("status","Published")->get();
    
    
    

        return view('broker.get_broker', compact('broker','properties'));
    }
    
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Broker $broker 
     * @return \Illuminate\Http\Response
     */
    public function edit(Broker $broker)
    {
      return "";

        return view('broker.edit', compact('broker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Broker $broker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Broker $broker)
    {
       return "";
       // request()->validate(Broker::$rules);

        $broker->update($request->all());

        return redirect()->route('brokers.index')
            ->with('success', 'Broker updated successfully');
    }

    /**
     * @param Broker $broker 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Broker $broker  )
    {
        //$broker = Broker::find($id)->delete();

 return "";
$broker ->delete();
        return redirect()->route('brokers.index')
            ->with('success', 'Broker deleted successfully');
    }
    
    
    
       public function process_broker_request(Broker $broker  )
    {
        return "retquire to test ";
$broker ->status="accepted";
$broker ->save(); 

$user=User::where("email",$broker->email)->first();

if( !$user)
{
$user=new User();
$user->email=$broker->email;

$user->username=$broker->email;

$user->save();
}



        return redirect()->route('brokers.index')
            ->with('success', 'Broker deleted successfully');
    }
    
    
    
}
