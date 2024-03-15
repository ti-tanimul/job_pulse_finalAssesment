<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\About;
use App\Models\ContactUs;
use App\Models\Blog;
use App\Models\Circular;
use App\Models\JobCategory;


class HomeController extends Controller
{
    public function index(){
        $banner = Banner::first();
        $about = About::first();
        $contact = ContactUs::first();
        $blogs = Blog::all();
        $dataWithDuplicateCNames = Circular::latest()->take(5)->get();
        $jobCategory = JobCategory::get();
        return view("home", compact('banner', 'about', 'contact', 'blogs', 'dataWithDuplicateCNames',
                                    'jobCategory'));
    }
}
