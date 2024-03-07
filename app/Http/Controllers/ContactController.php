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

    public function contactList(){
        $contactsList = Contact::all();
        return view('admin.manage-contact-list', compact('contactsList'));
    }
    public function contactListDelete($id){
        $deleteImage = Contact::find($id);
        $deleteImage->delete();
        return redirect('admin/manage-contact')->with('success', 'Content Delete Successfully');
    }

    public function manageContact(){
        $contacts = ContactUs::all();
        return view('admin.manage-contact', compact('contacts'));
    }
    public function editContact($id){
        $content = ContactUs::find($id);
        return view('admin.edit-contact', compact('content'));  
    }

    public function updateContact(Request $request, $id){

        $content = ContactUs::find($id);
        $request->validate([
            'location' => 'required',
            'email' => 'required',
            'mobile' => 'required'
        ]);
        ContactUs::where('id', $id)->update([
            'location' => $request->location,
            'email' => $request->email,
            'mobile' => $request->mobile
        ]);
        return redirect('manage-contact')->with('success', 'Content Update Successfully');
    }
    public function deleteContact($id){
        $deleteImage = ContactUs::find($id);
        $deleteImage->delete();
        return redirect('admin/manage-contact')->with('success', 'Content Delete Successfully');
    }
}
