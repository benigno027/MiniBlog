<?php

namespace App\Http\Controllers;

use App\Publication;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::id();
        
        $publications = Publication::where('user_id', '=', $user_id)->orderBy('created_at', 'DESC')->get();
        
        return view('users/home', compact('publications'));
    }

    public function profile(){

        $user = Auth::user();

        return view('users/profile', compact('user'));

    }

    public function change_password(Request $request){

        if( count($request->password) >= 8 && count($request->password_confirmation) >= 8){
            if( $request->password === $request->password_confirmation){

                $user_id = Auth::id();
                User::where('id', $user_id)->update('password', $request->password);

            }
        }        

    }

    
}
