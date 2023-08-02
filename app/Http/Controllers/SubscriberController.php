<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class SubscriberController
 * @package App\Http\Controllers
 */
class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscriber::paginate();

        return view('subscriber.index', compact('subscribers'))
            ->with('i', (request()->input('page', 1) - 1) * $subscribers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subscriber = new Subscriber();
        return view('subscriber.create', compact('subscriber'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
                                             
        
        
 $subscriber=new Subscriber();

 $subscriber->name=$request->name;

 $subscriber->email=$request->email;

 $subscriber->whatsapp=$request->whatsapp;

 $subscriber->calls=$request->calls;
 
 
         
 
       $subscriber->save();
        



        return redirect()->back( )
            ->with('success', 'Subscriber updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  Subscriber $subscriber 
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        //$subscriber = Subscriber::find($id);

        return view('subscriber.show', compact('subscriber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Subscriber $subscriber 
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
      //  $subscriber = Subscriber::find($id);
      
      

        return view('subscriber.edit', compact('subscriber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subscriber $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscriber)
    {
       // request()->validate(Subscriber::$rules);

 $subscriber->name=$request->name;

 $subscriber->email=$request->email;

 $subscriber->whatsapp=$request->whatsapp;

 $subscriber->calls=$request->calls;
 
 
         
 
       $subscriber->save();
        

        return redirect()->back( )
            ->with('success', 'Subscriber updated successfully');
    }

    /**
     * @param Subscriber $subscriber 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Subscriber $subscriber  )
    {
        //$subscriber = Subscriber::find($id)->delete();


$subscriber ->delete();
        return redirect()->route('subscribers.index')
            ->with('success', 'Subscriber deleted successfully');
    }
}
