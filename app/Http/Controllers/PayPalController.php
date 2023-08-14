<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Log;
use Srmklive\PayPal\Services\PayPal as PayPalClient;




 use Illuminate\Support\Facades\Auth;
use App\Models\Broker;
 
use App\Models\Subscription;
use App\Models\Order;
use App\Models\User;


class PayPalController extends Controller
{
 
    public function make_payment(Request $request)
    {
                
  
   
	$user=	Auth::user();
  
         
        
       $subscriptions = Subscription::all();
       
        
      

        return  view('paypal.index',compact('user','subscriptions' ))
            ->with('success', 'Broker created successfully.');
        
    }
    
    
    
    
    public function handlePayment(Request $request)
    {
      
      
        
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        
        
        $subscription = Subscription::find($request->plan_id);

       
       
       
       
        $response = $provider->createOrder([
        
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('success.payment'),
                "cancel_url" => route('cancel.payment'),
            ],
            "purchase_units" => [
                
                0 => [
                        "reference_id"=>$request->broker_id ,
                      
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $subscription->amount
                    ]
                ]
            ]
        ]);
        
        
        

       
       
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    
                             
                            
                             $order = new Order(); 
 
    $order->payment_id=$response['id'] ;
    $order->payment_gateway= "PayPal" ;
    $order->broker_id= $request->broker_id;
    $order->amount= $subscription->amount;
   
    $order->subscription_id= $subscription->id;
    
   $order->pg_request_dump= json_encode($response);
     
       $order->save();
       
       
 Log::debug("response_log".print_r($response,true));
 
 
 
               return redirect()->away($links['href']);
                }
            }
            
           
            
            return redirect()
              ->route('status')
             ->with('error', 'Something went wrong.');
        } else {
            
            
           return redirect()
                 ->route('status')
                 ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function paymentCancel()
    {
        return redirect()
            ->route('status')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }

    public function paymentSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        
        
    
 
 
 
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
             
         
            
            $order=Order::where("payment_id",$response['id'] )->first();
   $order->payment_status="COMPLETED";
   
 
   $order->pg_response_dump= json_encode($response);
   
   
   
       $order->save();
   
   
   
   
 $user=User::where("id", $order->broker_id)->first();
 
 $user->assignRole('Executive');
 $user->save();
               
            return redirect()
                ->route('home')
                ->with('success', 'Transaction complete.');
               
        } else {
            return redirect()
                ->route('status')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
}