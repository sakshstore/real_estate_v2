<?php

namespace App\Http\Controllers;

use App\Models\AutoPost;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class AutoPostController
 * @package App\Http\Controllers
 */
class AutoPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autoPosts = AutoPost::paginate();

        return view('auto-post.index', compact('autoPosts'))
            ->with('i', (request()->input('page', 1) - 1) * $autoPosts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autoPost = new AutoPost();
        return view('auto-post.create', compact('autoPost'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(AutoPost::$rules);

    $autoPost = AutoPost::create($request->all());
        
        
        
        
        
        /*
        
        
 $autoPost=new AutoPost();

 $autoPost->title=$request->title;

 $autoPost->content=$request->content;


        $tags=array();
  $tags_arr=json_decode($request->tags);
 foreach ($tags_arr as $tags_ele) {
 	array_push($tags,$tags_ele->value);
}

 $tags_list=implode(",",$tags);




 $autoPost->tags=$tags_list;

        
        

 $user=Auth::user();
 
 $autoPost->user_id=$user->id;
 
 
       $autoPost->save();
        
*/




        return redirect()->route('auto_posts.index')
            ->with('success', 'AutoPost created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  AutoPost $autoPost 
     * @return \Illuminate\Http\Response
     */
    public function show(AutoPost $autoPost)
    {
        //$autoPost = AutoPost::find($id);

        return view('auto-post.show', compact('autoPost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  AutoPost $autoPost 
     * @return \Illuminate\Http\Response
     */
    public function edit(AutoPost $autoPost)
    {
      //  $autoPost = AutoPost::find($id);

        return view('auto-post.edit', compact('autoPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AutoPost $autoPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AutoPost $autoPost)
    {
       // request()->validate(AutoPost::$rules);

        $autoPost->update($request->all());

        return redirect()->route('auto_posts.index')
            ->with('success', 'AutoPost updated successfully');
    }

    /**
     * @param AutoPost $autoPost 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(AutoPost $autoPost  )
    {
        //$autoPost = AutoPost::find($id)->delete();


$autoPost ->delete();
        return redirect()->route('auto_posts.index')
            ->with('success', 'AutoPost deleted successfully');
    }
}
