<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactUs;

class ContactController extends Controller
{
    public function contact(){
        return view("admin.contact");
    }

    public function contactUs(Request $request){
        $request->validate([
            'location' => 'required',
            'email' => 'required',
            'mobile' => 'required'
        ]);
        ContactUs::create([
            'location' => $request->location,
            'email' => $request->email,
            'mobile' => $request->mobile
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }

    public function store_contact(Request $request){
        // dd(111);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'message' => 'required'
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }
}
