<?php

namespace DirectoryApp\Http\Controllers\Admins;

use Illuminate\Http\Request;

use DirectoryApp\Http\Requests;
use DirectoryApp\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{

	public function index()
	{
		return view('admins.dashboard');
	}

	public function getLogin()
	{
		return view('admins.login');
	}

    public function postLogin(Request $request)
    {
    	$admin = auth()->guard('admins');

    	$credentials = [
    		'email' => $request->input('email'),
    		'password' => $request->input('password')
    	];
    	
    	if ($admin->attempt($credentials)) {
    		return redirect()->intended('control');
    	} else {
    		return redirect()->route('admin.login');
    	}
    }

    public function logout()
    {
        Auth::guard('admins')->logout();
        return redirect()->route('admin.login');
    }
}
