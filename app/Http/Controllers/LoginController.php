<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $data=$request->only('email','password');
        if(Auth::attempt($data)){
            return redirect('welcome');
        }
        return redirect()->back();
    }
}