<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller
{
    // function theme()
    // {
    //     return view('administrator.theme');
    // }

    public function store(Request $request)
    {
        
        if(Auth::guard('admin')->attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redirect('/');
    }
    public function destroy()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
    function dash()
    {
        return view('administrator.dash');
    }
    function forgot_password()
    {
        return view('auth.forgot_password');
    }
    function admin()
    {
        return view('administrator.admin');
    }
    function mhs()
    {
        return view('administrator.mahasiswa');
    }

    
}