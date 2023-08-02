<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
/**
 * Class TeamController
 * @package App\Http\Controllers
 */
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();

        return view('team.index', compact('teams')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = new Team();
        return view('team.create', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Team::$rules);



$team=new Team();

$team->full_name=$request->full_name;
$team->about=$request->about;
$team->instagram_url=$request->instagram_url;
$team->facebook_url=$request->facebook_url;
$team->linked_url=$request->linked_url;
$team->whatsapp_number=$request->whatsapp_number;
$team->avatar=$request->avatar;
 

 $user=Auth::user();
 
$team->user_id=$user->id;
 
 
      $team->save();
        
        return redirect()->route('teams.index')
            ->with('success', 'Team created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Team $team 
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        
        
        //$team = Team::find($id);

        return view('team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Team $team 
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
 
        return view('team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
       // request()->validate(Team::$rules);


 
 
$team->full_name=$request->full_name;
$team->about=$request->about;
$team->instagram_url=$request->instagram_url;
$team->facebook_url=$request->facebook_url;
$team->linked_url=$request->linked_url;
$team->whatsapp_number=$request->whatsapp_number;
$team->avatar=$request->avatar;
 

 
      $team->save();
      
       
        return redirect()->route('teams.index')
            ->with('success', 'Team updated successfully');
    }

    /**
     * @param Team $team 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Team $team  )
    {
        //$team = Team::find($id)->delete();


$team ->delete();
        return redirect()->route('teams.index')
            ->with('success', 'Team deleted successfully');
    }
    
    
    
    
    
    
    
      public function update_avatar(Request $request,Team $team)
    {
        
  
     
         $avatar = $request->file('file');
         
         
      $imagefileName  = time().'__'.$avatar->getClientOriginalName();
      
      
   $avatar_url = $avatar->storeAs('avatar', $imagefileName, 'public');
            
 

   $team->avatar=$avatar_url;
 

 
      $team->save();
 

return "Uploaded succesfully";


    }
    
    
    
    
}
