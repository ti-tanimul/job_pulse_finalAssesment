<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register(){
        return view('user.register');
    }
    public function userRegister(Request $request){
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'type' => $request->type,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);
        return redirect()->back()->with('success', 'Insert completed successfully!');
    }

    public function login(){
        return view('user.login');
    }
    
    public function userlogin(Request $request){
        $userType = $request->type;
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        if(Auth::attempt($credentials)){
            if(Auth::user()->type == $userType){
                if($userType == 2){
                    return redirect('/company-circular')->with('msg', 'Login Success');
                } elseif($userType == 3){
                    return redirect('/dashboard')->with('msg', 'Login Success');
                }
            } else {
                Auth::logout(); // Logout the user
                return back()->with('error', 'Invalid User Type');
            }
        }
    
        return back()->with('error', 'Email or Password Not Match');
    }

}
