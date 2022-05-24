<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // $users = User::paginate(20); para paginar la cantidad de usuarios que se desea ver
        return view('users.index')->with('users', $users);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->fullname = $request->fullname;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->birthday = $request->birthday;
        $user->gender   = $request->gender;
        $user->address  = $request->address;
        // $user->photo  = $request->photo;
        $user->role     = $request->role;
        $user->password = bcrypt($request->password);
        if($user->save()){
            return redirect('users')->with('message', 'The user: '.$user->fullname.' was successfully added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->fullname = $request->fullname;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->birthday = $request->birthday;
        $user->gender   = $request->gender;
        $user->address  = $request->address;
        // $user->photo  = $request->photo;
        $user->role     = $request->role;
        if($user->save()){
            return redirect('users')->with('message', 'The user: '.$user->fullname.' was successfully edited!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->delete()){
            return redirect('users')->with('message', 'The user: '.$user->fullname.' was successfully deleted!');
        }
    }
}
