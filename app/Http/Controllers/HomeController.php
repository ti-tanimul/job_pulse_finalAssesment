<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index(){
        $banner = Banner::first();
        return view("home", compact("banner"));
    }
}
