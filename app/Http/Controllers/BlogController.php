<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class BlogController
 * @package App\Http\Controllers
 */
class BlogController extends Controller
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


        $blogs = Blog::where("user_id",$user_id)->paginate();

        return view('blog.index', compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * $blogs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new Blog();
        return view('blog.create', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Blog::$rules);

       
        
        
$blog=new Blog();

$blog->title=$request->title;
$blog->content=$request->content;
$blog->thumbnail=$request->thumbnail;


 $user=Auth::user();
 
$blog->user_id=$user->id;
 
 
      $blog->save();
      
      
      

        return redirect()->route('blogs.index')
            ->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Blog $blog 
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        

        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog 
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
      //  $blog = Blog::find($id);

        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
       // request()->validate(Blog::$rules);

      

$blog->title=$request->title;
$blog->content=$request->content;
$blog->thumbnail=$request->thumbnail;


 $user=Auth::user();
 
$blog->user_id=$user->id;
 
 
      $blog->save();

        return redirect()->route('blogs.index')
            ->with('success', 'Blog updated successfully');
    }

    /**
     * @param Blog $blog 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Blog $blog  )
    {
       

$blog ->delete();
        return redirect()->route('blogs.index')
            ->with('success', 'Blog deleted successfully');
    }
}
