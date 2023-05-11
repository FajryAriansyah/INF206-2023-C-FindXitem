<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('login',[
            'title' => 'Login'
        ]);
    }
    
    public function store(Request $request){
        // dd(request('pass'));
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email'=> 'required|unique:users|email',
            'password' => ' required|max:255|min:3'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/login');
    }


    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/landing-page');
        }
       
        return back()->with('loginError','Maaf login gagal');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        return redirect('/');
    }

}
