<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;use Response;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

 
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;
use App\Models\LoginHistory;

use  App\Notifications\AdminNotification;

use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
      
    
        public function __construct()
    {
      $this->middleware('auth');
 
       // $this->middleware('log', ['only' => ['fooAction', 'barAction']]);
 
       // $this->middleware('subscribed', ['except' => ['fooAction', 'barAction']]);
    }
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $users = User::latest()->paginate(10);

        return view('users.index', compact('users'));
    }



 
    
     
    
    
    
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
           $user=new User();
           
      
        
        
         $user->create(array_merge($request->validated(), [
            'password' => "test"
        ]));

        return redirect()->route('users.index')
            ->withSuccess(__('User created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    { 
    
    
     // $login_history = LoginHistory::where("user_id",$user->id)->latest()->take(10)->get( );
      
      
        return view('users.show', [
            'user' => $user  
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       return view('users.edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
       $user->update($request->validated());

        $user->syncRoles($request->get('role'));

        return redirect()->route('users.index')
            ->withSuccess(__('User updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }
    
    
    
     public function susend_user(User $user,$status)
    {
        $user->status=$status;
        
        $user->save();

        return redirect()->back() ->withSuccess(__('User Suspended/Unsuspended successfully.'));
    }
    
    
    
    
     
     
    
    
}
