<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\JobCategory;

class AdminController extends Controller
{
    public function index(){
        return view("admin.dashboard");
    }
    
    public function home(){
        return view("admin.home");
    }
    
    public function store_banner(Request $request){
        $request->validate([
            'heading' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,image',
        ]);
        $imageName = '';
        if($image = $request->file('image')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/', $imageName);
        }
        Banner::create([
            'heading' => $request->heading,
            'image' => $imageName,
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }
    
    public function job_type(){
        return view("admin.job-type");
    }
    public function store_category(Request $request){
        $request->validate([
            'category' => 'required',
        ]);
        JobCategory::create([
            'category' => $request->category,
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }
}
