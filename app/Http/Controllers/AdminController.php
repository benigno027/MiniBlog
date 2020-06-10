<?php

namespace App\Http\Controllers;

use App\User;

class AdminController extends Controller
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
        
        return view('admins.index');
    }

    public function blog_users()
    {
        $users = User::all();
        return view('admins.users', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return redirect( route('admins.users') );
    }
}
