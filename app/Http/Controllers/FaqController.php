<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class FaqController
 * @package App\Http\Controllers
 */
class FaqController extends Controller
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


        $faqs = Faq::where("user_id",$user_id)->paginate();
        
         

        return view('faq.index', compact('faqs'))
            ->with('i', (request()->input('page', 1) - 1) * $faqs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq = new Faq();
        return view('faq.create', compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Faq::$rules);

    
        $faq=new Faq();

$faq->question=$request->question;
$faq->answer=$request->answer;


 $tags=array();
  $tags_array=json_decode($request->tags);
  
  if(is_array($tags_array))

{
    
    foreach ($tags_array as $tag_element) {
 	array_push($tags,$tag_element->value);
}

$tags_list=implode(",",$tags);




$faq->tags=$tags_list;
}

 $user=Auth::user();
 
$faq->user_id=$user->id;
 
 
      $faq->save();
      
      

        return redirect()->route('faqs.index')
            ->with('success', 'Faq created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Faq $faq 
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //$faq = Faq::find($id);

        return view('faq.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Faq $faq 
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
      //  $faq = Faq::find($id);

        return view('faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Faq $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $tags=array();

     $tags_array=json_decode($request->tags);
    
    
  
    
    foreach ($tags_array as $tag_element) {
 
	
	array_push($tags,$tag_element->value);
}

$tags_list=implode(",",$tags);

 

 

$faq->question=$request->question;
$faq->answer=$request->answer;
$faq->tags=$tags_list;


 $user=Auth::user();
 
$faq->user_id=$user->id;
 
 
      $faq->save();
      
      
      
        return redirect()->route('faqs.index')
            ->with('success', 'Faq updated successfully');
    }

    /**
     * @param Faq $faq 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Faq $faq  )
    {
        //$faq = Faq::find($id)->delete();


$faq ->delete();
        return redirect()->route('faqs.index')
            ->with('success', 'Faq deleted successfully');
    }
}
