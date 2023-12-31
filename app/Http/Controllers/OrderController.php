<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class OrderController
 * @package App\Http\Controllers
 */
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         
        $user=Auth::User();
        
         //if( $request->route()=="profile")    return $next($request);
         
        if($user && (   $user->hasRole([ 'admin'])   )  )   {
           
           
           
        $orders = Order::all();
        
        }
        
        
        else
        {
            
            
        $orders = Order::where("broker_id",$user->id)->get();
        }

        return view('order.index', compact('orders')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = new Order();
        return view('order.create', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Order::$rules);



	$user=	Auth::user();
		
		  $requestData['title']=$request->title;
       $requestData['description']=$request->description;
        
         $requestData['buyer_id']=$user->id;
        
            //   $requestData['status']= "Open"; 



		
        $order = Order::create($requestData);

        return redirect()->route('orders.index')
            ->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //$order = Order::find($id);

        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
       

        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
      //  request()->validate(Order::$rules);

        $order->update($request->all());

        return redirect()->route('orders.index')
            ->with('success', 'Order updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Order $order  )
    {
        


$order ->delete();
        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully');
    }
}
