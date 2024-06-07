<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
       return view('login'); 
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ], [
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin_goverment'){
                return redirect('admin/admin_goverment');
            } elseif (Auth::user()->role == 'admin_budaya'){
                return redirect('admin/admin_budaya');
            } elseif (Auth::user()->role == 'admin_ekonomi'){
                return redirect('admin/admin_ekonomi');
            } elseif (Auth::user()->role == 'admin_pendidikan'){
                return redirect('admin/admin_pendidikan');
            }    
        }else{
            return redirect('')->withErrors('username dan password yang dimasukan tidak sesuai')->withInput();
        }
    }
    
    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
