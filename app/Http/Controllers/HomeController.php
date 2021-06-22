<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function about()
    {
        $user = User::all();
        return view('profile.profile',compact('user'));
    }

    public function insert(Request $request)
    {
        $upload = new User;
        $upload->image = $request->image;
        $upload->save();

        return redirect('/profile');
    }

    
    public function rekening()
    {
        return view('profile.rekening');
    }
    public function keamanan()
    {
        return view('profile.keamanan');
    }
}
