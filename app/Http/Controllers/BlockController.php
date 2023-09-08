<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class BlockController
 * @package App\Http\Controllers
 */
class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocks = Block::paginate();

        return view('block.index', compact('blocks'))
            ->with('i', (request()->input('page', 1) - 1) * $blocks->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $block = new Block();
        return view('block.create', compact('block'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Block::$rules);

      //  $block = Block::create($request->all());
        
        
        
        
        
        
        
        
 $block=new Block();
 

 $block->content=$request->content;
 
 
 
 $block->label=$request->label;

 $block->thumbnail=$request->thumbnail;

  

        
        

 $user=Auth::user();
 
 $block->user_id=$user->id;
 
 
       $block->save();
        





        return redirect()->route('blocks.index')
            ->with('success', 'Block created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Block $block 
     * @return \Illuminate\Http\Response
     */
    public function show(Block $block)
    {
        //$block = Block::find($id);

        return view('block.show', compact('block'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Block $block 
     * @return \Illuminate\Http\Response
     */
    public function edit(Block $block)
    {
      //  $block = Block::find($id);

        return view('block.edit', compact('block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Block $block
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Block $block)
    {
       // request()->validate(Block::$rules);

        $block->update($request->all());

        return redirect()->route('blocks.index')
            ->with('success', 'Block updated successfully');
    }

    /**
     * @param Block $block 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Block $block  )
    {
        //$block = Block::find($id)->delete();


$block ->delete();
        return redirect()->route('blocks.index')
            ->with('success', 'Block deleted successfully');
    }
    
    
    
    
    
    
    
    
      public function update_avatar_block(Request $request,Block $block)
    {
        
  
     
         $avatar = $request->file('file');
         
         
      $imagefileName  = time().'__'.$avatar->getClientOriginalName();
      
      
   $avatar_url = $avatar->storeAs('block_thumbail', $imagefileName, 'public');
            
 

   $block->thumbnail=$avatar_url;
 

 
      $block->save();
 

return "Uploaded succesfully";


    }
    
    
    
    
}
