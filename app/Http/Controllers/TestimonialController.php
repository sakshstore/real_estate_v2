<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class TestimonialController
 * @package App\Http\Controllers
 */
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate();

        return view('testimonial.index', compact('testimonials'))
            ->with('i', (request()->input('page', 1) - 1) * $testimonials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimonial = new Testimonial();
        return view('testimonial.create', compact('testimonial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Testimonial::$rules);

     
        
        
$testimonial=new Testimonial();

$testimonial->title=$request->title;
$testimonial->content=$request->content; 
 $user=Auth::user();
 
$testimonial->user_id=$user->id;
 
 
      $testimonial->save();
        
        
        
        

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Testimonial $testimonial 
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //$testimonial = Testimonial::find($id);

        return view('testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Testimonial $testimonial 
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
      //  $testimonial = Testimonial::find($id);

        return view('testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
       // request()->validate(Testimonial::$rules);

        $testimonial->update($request->all());

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial updated successfully');
    }

    /**
     * @param Testimonial $testimonial 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Testimonial $testimonial  )
    {
        //$testimonial = Testimonial::find($id)->delete();


$testimonial ->delete();
        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial deleted successfully');
    }
    
    
    
    
    
    
      public function update_thumbnail(Request $request,Testimonial $testimonial)
    {
        
  
     
         $thumbnail = $request->file('file');
         
         
      $imagefileName  = time().'__'.$thumbnail->getClientOriginalName();
      
      
   $thumbnail_url = $thumbnail->storeAs('thumbnail', $imagefileName, 'public');
            
 

   $testimonial->thumbnail=$thumbnail_url;
 

 
      $testimonial->save();
 

return "Uploaded succesfully";


    }
    
    
    
    
}
