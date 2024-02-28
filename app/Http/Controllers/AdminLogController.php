<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminLogController extends Controller
{
    public function register(){
        return view('admin.register');
    }
    public function adminRegister(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type'=> 2,
        ]);
        return redirect()->back()->with('success', 'Insert Completed Successfully!');
    }
    public function login(){
        return view('admin.login');
    }
    public function adminlogin(Request $request){
        $adminlog = [
            'email' => $request->email,
            'password' => $request->password,
            'type' => 2,
        ];
        if(Auth::attempt($adminlog)){
            return redirect('/dashboard')->with('msg', 'Login Success');
        }
        return back()->with('success', 'Email or Password Not Match');
    }
}
