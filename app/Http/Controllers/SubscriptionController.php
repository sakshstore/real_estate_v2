<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class SubscriptionController
 * @package App\Http\Controllers
 */
class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = Subscription::paginate();

        return view('subscription.index', compact('subscriptions'))
            ->with('i', (request()->input('page', 1) - 1) * $subscriptions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subscription = new Subscription();
        return view('subscription.create', compact('subscription'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 //   $request()->validate(Subscription::$rules);

  
 $subscription=new Subscription();

 $subscription->name=$request->name;
 $subscription->amount=$request->amount;
 $subscription->currency=$request->currency;
 $subscription->property_submission=$request->property_submission;
 $subscription->featured_property=$request->featured_property;
 $subscription->top_property=$request->top_property;
 $subscription->urgent_property=$request->urgent_property;
 $subscription->line_1=$request->line_1;
 $subscription->line_2=$request->line_2;

 $subscription->line_3=$request->line_3;

 $subscription->line_4=$request->line_4;

 

 
        
        

 $user=Auth::user();
 
 $subscription->user_id=$user->id;
 
 
       $subscription->save();
        





        return redirect()->route('subscriptions.index')
            ->with('success', 'Subscription created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Subscription $subscription 
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //$subscription = Subscription::find($id);

        return view('subscription.show', compact('subscription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Subscription $subscription 
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
      //  $subscription = Subscription::find($id);

        return view('subscription.edit', compact('subscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
       // request()->validate(Subscription::$rules);

 $subscription->name=$request->name;
 $subscription->amount=$request->amount;
 $subscription->currency=$request->currency;
 $subscription->property_submission=$request->property_submission;
 $subscription->featured_property=$request->featured_property;
 $subscription->top_property=$request->top_property;
 $subscription->urgent_property=$request->urgent_property;
 $subscription->line_1=$request->line_1;
 $subscription->line_2=$request->line_2;

 $subscription->line_3=$request->line_3;

 $subscription->line_4=$request->line_4;

  $subscription->save();
        


        return redirect()->route('subscriptions.index')
            ->with('success', 'Subscription updated successfully');
    }

    /**
     * @param Subscription $subscription 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Subscription $subscription  )
    {
        //$subscription = Subscription::find($id)->delete();


$subscription ->delete();
        return redirect()->route('subscriptions.index')
            ->with('success', 'Subscription deleted successfully');
    }
}
