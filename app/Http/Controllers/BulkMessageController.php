<?php

namespace App\Http\Controllers;

use App\Models\BulkMessage;
use Illuminate\Http\Request;

 use Illuminate\Support\Facades\Auth;
use App\Models\User;



/**
 * Class BulkMessageController
 * @package App\Http\Controllers
 */
class BulkMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulkMessages = BulkMessage::paginate();

        return view('bulk-message.index', compact('bulkMessages'))
            ->with('i', (request()->input('page', 1) - 1) * $bulkMessages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bulkMessage = new BulkMessage();
        return view('bulk-message.create', compact('bulkMessage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(BulkMessage::$rules);

      

$bulkMessage=new BulkMessage();

$bulkMessage->content=$request->content;



        $plateforms=array();
  $plateforms_arr=json_decode($request->plateforms);
 foreach ($plateforms_arr as $plateforms_ele) {
 	array_push($plateforms,$plateforms_ele->value);
}

 $plateforms_list=implode(",",$plateforms);




$bulkMessage->plateforms=$plateforms_list;

       
       
       
       
$bulkMessage->scheduled_at=$request->scheduled_at; 

 $user=Auth::user();
 
$bulkMessage->user_id=$user->id;
 
 
      $bulkMessage->save();
        
        
        
        
        
        
        return redirect()->route('bulk_messages.index')
            ->with('success', 'BulkMessage created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  BulkMessage $bulkMessage 
     * @return \Illuminate\Http\Response
     */
    public function show(BulkMessage $bulkMessage)
    {
        //$bulkMessage = BulkMessage::find($id);

        return view('bulk-message.show', compact('bulkMessage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  BulkMessage $bulkMessage 
     * @return \Illuminate\Http\Response
     */
    public function edit(BulkMessage $bulkMessage)
    {
      //  $bulkMessage = BulkMessage::find($id);

        return view('bulk-message.edit', compact('bulkMessage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  BulkMessage $bulkMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BulkMessage $bulkMessage)
    {
       // request()->validate(BulkMessage::$rules);

     
 
$bulkMessage->content=$request->content;



        $plateforms=array();
  $plateforms_arr=json_decode($request->plateforms);
 foreach ($plateforms_arr as $plateforms_ele) {
 	array_push($plateforms,$plateforms_ele->value);
}

 $plateforms_list=implode(",",$plateforms);




$bulkMessage->plateforms=$plateforms_list;

       
       
       
       
$bulkMessage->scheduled_at=$request->scheduled_at; 

 $user=Auth::user();
 
$bulkMessage->user_id=$user->id;
 
 
      $bulkMessage->save();
        
        
        

        return redirect()->route('bulk_messages.index')
            ->with('success', 'BulkMessage updated successfully');
    }

    /**
     * @param BulkMessage $bulkMessage 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(BulkMessage $bulkMessage  )
    {
        //$bulkMessage = BulkMessage::find($id)->delete();


$bulkMessage ->delete();
        return redirect()->back()
            ->with('success', 'BulkMessage deleted successfully');
    }
}
