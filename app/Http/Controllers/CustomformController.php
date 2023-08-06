<?php

namespace App\Http\Controllers;

use App\Models\Customform;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class CustomformController
 * @package App\Http\Controllers
 */
class CustomformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customforms = Customform::paginate();

        return view('customform.index', compact('customforms'))
            ->with('i', (request()->input('page', 1) - 1) * $customforms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customform = new Customform();
        return view('customform.create', compact('customform'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Customform::$rules);

      $customform = Customform::create($request->all());
        
        
        
        
        
         





        return redirect()->route('customforms.index')
            ->with('success', 'Customform created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Customform $customform 
     * @return \Illuminate\Http\Response
     */
    public function show(Customform $customform)
    {
        //$customform = Customform::find($id);

        return view('customform.show', compact('customform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Customform $customform 
     * @return \Illuminate\Http\Response
     */
    public function edit(Customform $customform)
    {
      //  $customform = Customform::find($id);

        return view('customform.edit', compact('customform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Customform $customform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customform $customform)
    {
       // request()->validate(Customform::$rules);

        $customform->update($request->all());

        return redirect()->route('customforms.index')
            ->with('success', 'Customform updated successfully');
    }
    
      public function set_form_fields(Request $request, Customform $customform)
    {
     
 $customform->form_json=$request->form_json;
 
 $customform->save();
 
 
        return  "successfully";
    }
    
    
    
    
    
    
    
    
    
    

    /**
     * @param Customform $customform 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Customform $customform  )
    {
        //$customform = Customform::find($id)->delete();


$customform ->delete();
        return redirect()->route('customforms.index')
            ->with('success', 'Customform deleted successfully');
    }
}
