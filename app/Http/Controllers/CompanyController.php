<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\JobCategory;
use App\Models\Circular;

class CompanyController extends Controller
{
    public function company_circular(){
        $categorys = JobCategory::all();
        return view("company.home", compact('categorys'));
    }
    public function store_circular(Request $request){
        $request->validate([
            'c_name' => 'required',
            'category' => 'required',
            'requirment' => 'required',
            'vacency' => 'required',
            'job_type' => 'required',
            'address' => 'required'
        ]);
        Circular::create([
            'c_name' => $request->c_name,
            'category' => $request->category,
            'requirment' => $request->requirment,
            'vacency' => $request->vacency,
            'job_type' => $request->job_type,
            'address' => $request->address,
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }
}
