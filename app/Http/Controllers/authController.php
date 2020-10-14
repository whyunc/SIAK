<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;

class authController extends Controller
{
    public function login() {
    	return view('login');
    }
    public function postlogin(Request $request) {
    	if (Auth::attempt($request->only('email', 'password'))) {
    		return redirect('/');
    	}
    	return redirect('/login');
    }
}
