<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.login');
    }
    public function login(request $request)
    {
        
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',

        ]);

        if (!auth()->attempt($request->only('email','password')))
        {
            return back()->with('status','invalid login deteals');
        }

        return redirect()->route('dashboard');





    }
}
