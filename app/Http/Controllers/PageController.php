<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;


use App\Models\Faq;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use Artesaos\SEOTools\Facades\SEOTools;

use Illuminate\Support\Str;
use App\Models\Property;
use App\Models\Post;
use App\Models\Team;

use App\Models\Testimonial;
use App\Models\Subscription;


/**
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
 

        $pages = Page::get(); 
 
        return view('page.index', compact('pages') );
    }




  public function homepage()
    {
     
  $logo_sliders_images=DotenvEditor::getValue('LOGO_SLIDERS_IMAGE') ;
        
  $logo_images= explode(',',  $logo_sliders_images); 
        
        
        
  $carousel_images=DotenvEditor::getValue('CAROUSEL_IMAGES') ;
  
     $carousel_images= explode(',',  $carousel_images); 
     
 
 
 
        
      // $popular_properties= Property::where('tags', 'like', '%popular%')->where("status","Published")->get();
    
 
        
      $popular_properties= Property::where("status","Published")->get();
    
        
       $posts= Post::where("status","Published")->get();
    
    
    

        $faqs = Faq::all();
        $teams = Team::all();
    
        $testimonials = Testimonial::all();
        
        $subscriptions=Subscription::all();
    
        return view('welcome', compact('logo_images','carousel_images','popular_properties','faqs','posts','teams','testimonials','subscriptions'));
  
 
    }

 public function contact_us()
    {
          
        
        $faqs = Faq::all();
        
    
        $testimonials = Testimonial::all();
 
    
    
        
        $page = new Page();
        return view('page.contact_us', compact('page','faqs','testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $user=Auth::User();
           if ($user->cannot('create' )) {
               //  abort(403); 
           
        }
        
        
        $page = new Page();
        return view('page.create', compact('page'));
    }
    
    
    
    
    
    
    
 public function save_editor()
    {
        return "1";
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $user=Auth::User();
         if ($user->cannot('create' )) {
          // abort(403); 
           
        }
        
        
        
     //  request()->validate(Page::$rules);

$page=new Page();

$page->title=$request->title;
//$page->content=$request->content;
//$page->thumbnail=$request->thumbnail;

$page->slug=Str::slug( $request->title);


 $user=Auth::user();
 
$page->user_id=$user->id;
 
 
      $page->save();

        return redirect()->route('pages.index')
            ->with('success', 'Page created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Page $page 
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
       
       
        SEOTools::setTitle($page->title);
        
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@susheelhbti');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        
        
        
        
        
        return view('page.edit', compact('page'));
    }

 public function get_page_by_slug(Page $page)
    {
     
  
        SEOTools::setTitle($page->title);
        
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@susheelhbti');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        
        
        
        
        
  //$json= file_get_contents(storage_path()."page_data/data.json" );
  
 $file = storage_path("page_data/".$page->id."_data.json");

  $json= file_get_contents($file);
  
   
  $obj=json_decode($json);
  
 
  
  $page->css= $obj->pagesHtml->css;
  $page->html= $obj->pagesHtml->html;
  
  
  return $page;
  
  
        
        return view('page.page_view', compact('page'));

       
    }
 public function get_page_by_id(Page $page)
    {
     
  
        SEOTools::setTitle($page->title);
        
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@susheelhbti');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        
        
        
        
        
  //$json= file_get_contents(storage_path()."page_data/data.json" );
  
 $file = storage_path("page_data/".$page->id."_data.json");

  $json= file_get_contents($file);
  
   
  $obj=json_decode($json);
  
 $page->obj=$obj->pagesHtml[0];
  
 $page->css= $obj->pagesHtml[0]->css;
 $page->html= $obj->pagesHtml[0]->html;
  
   
  
  
        
        return view('page.page_view', compact('page'));

       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Page $page 
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
       

   $user=Auth::User();
   if ($user->cannot('update', $page)) {
           abort(403); 
    }
        return view('page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
       // request()->validate(Page::$rules);
 
          $user=Auth::User();
           if ($user->cannot('update', $page)) {
           abort(403); 
    }
          
 

$page->title=$request->title;
//$page->content=$request->content;
//$page->thumbnail=$request->thumbnail;

$page->slug=str_slug( $request->title);

 $user=Auth::user();
 
$page->user_id=$user->id;
 
 
      $page->save();


        return redirect()->route('pages.index')
            ->with('success', 'Page updated successfully');
    }

    /**
     * @param Page $page 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Page $page  )
    {
   
     $user=Auth::User();
      if ($user->cannot('delete', $page)) {
           abort(403); 
    }
    
     


$page ->delete();
        return redirect()->route('pages.index')
            ->with('success', 'Page deleted successfully');
    }
    
    
    
    
    
    
    
      public function load_editor(Page $page)
    {
           $user=Auth::User();
           if ($user->cannot('create' )) {
               //  abort(403); 
           
        }
        
         
        return view('page.load_editor', compact('page'));
    }
    
    
    
    
    public function store_grapejs(Page $page  )
    {
   
    
$json = file_get_contents('php://input');


 $file = storage_path("page_data/".$page->id."_data.json");


   file_put_contents($file,$json);
  
    }
    
    
  
    public function load_grapejs(Page $page  )
    {
   
    
  //$json= file_get_contents(storage_path()."page_data/data.json" );
  
 $file = storage_path("page_data/".$page->id."_data.json");

  $json= file_get_contents($file);
  
   
  $obj=json_decode($json);
  
  $data=$obj->data;
  
  return json_encode($data);
  
   
          
          
          
    }
    
    
    
    
}
