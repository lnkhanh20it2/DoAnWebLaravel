<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{   
    public function dashboard()
    {
        return view('admin.index');
    }
    public function file()
    {
        return view('admin.file');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function post_login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',
        ],[
            'email.required'=>'Email not null',
            'email.email'=>'Email not form',
            'password.required'=>'Password not null',
        ]);
        if(Auth::attempt($request->only('email','password'),$request->has('rmb'))){
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back(); 
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
