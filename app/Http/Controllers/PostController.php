<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

 use Illuminate\Support\Facades\Auth;
use App\Models\User;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate();

        return view('post.index', compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * $posts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        return view('post.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Post::$rules);

       


$post=new Post();

$post->title=$request->title;

$post->content=$request->content;



        $tags=array();
  $tags_arr=json_decode($request->tags);
 foreach ($tags_arr as $tags_ele) {
 	array_push($tags,$tags_ele->value);
}

 $tags_list=implode(",",$tags);




$post->tags=$tags_list;

        

 $user=Auth::user();
 
$post->user_id=$user->id;
 
 
      $post->save();
        
        
        
        
        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }


   public function get_create_ai_post()
    {
        $post = new Post();
        return view('post.get_create_ai_post', compact('post'));
    }

   public function post_create_ai_post(Request $request)
    {
        $post = new Post();
        
           $post->title=get_ai_contents($request->content_idea,"title");
           $post->content=get_ai_contents($request->content_idea,"content");
           $post->tags=get_ai_contents($request->content_idea,"tags");
           
           
           
            
        
        
        return view('post.get_create_ai_post', compact('post'));
    }




    /**
     * Display the specified resource.
     *
     * @param  Post $post 
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //$post = Post::find($id);
    views($post)->record();
    
    
        return view('post.show', compact('post'));
    }
   /**
     * Display the specified resource.
     *
     * @param  Post $post 
     * @return \Illuminate\Http\Response
     */
    public function get_post(Post $post)
    {
        //$post = Post::find($id);
    views($post)->record();
        return view('post.blog_view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post 
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
      //  $post = Post::find($id);

        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
       // request()->validate(Post::$rules);

        $post->update($request->all());



        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    /**
     * @param Post $post 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Post $post  )
    {
        //$post = Post::find($id)->delete();


$post ->delete();
        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
    
    
    
         public function update_post_thumbnail(Request $request, Post $post)
    {
        
  
     
         $thumbnail = $request->file('file');
         
         
      $imagefileName  = time().'__'.$thumbnail->getClientOriginalName();
      
      
   $thumbnail_url = $thumbnail->storeAs('thumbnail', $imagefileName, 'public');
            
 

   $post->thumbnail=$thumbnail_url;
 

 
      $post->save();
 

return "Uploaded succesfully";


    }
    
    
    
    
    
}
