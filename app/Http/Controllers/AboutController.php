<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Blog;

class AboutController extends Controller
{
    public function about(){
        return view("admin.about");
    }
    public function store_about(Request $request){
        $request->validate([
            'history' => 'required',
            'mission' => 'required',
            'vission' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,image',
        ]);
        $imageName = '';
        if($image = $request->file('image')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/', $imageName);
        }
        About::create([
            'history' => $request->history,
            'mission' => $request->mission,
            'vission' => $request->vission,
            'image' => $imageName,
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }

    public function manageAbout(){
        $contents = About::all();
        // dd($contents);
        return view('admin.manage-about', compact('contents'));
    }

    public function editAbout($id){
        $content = About::find($id);
        // dd($content);
        return view('admin.edit-about', compact('content'));  
    }

    public function updateAbout(Request $request, $id){

        $content = About::find($id);
        $request->validate([
            'history' => 'required',
            'mission' => 'required',
            'vission' => 'required',
            'image' => 'mimes:png,jpg,jpeg,image',
        ]);
        $imageName = '';
        $deleteOldImage = 'images/'.$content->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                unlink($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images', $imageName);
        }else{
            $imageName = $content->image;
        }
        About::where('id', $id)->update([
            'history' => $request->history,
            'mission' => $request->mission,
            'vission' => $request->vission,
            'image' => $imageName
        ]);
        return redirect('manage-about')->with('success', 'Content Update Successfully');
    }

    public function deleteAbout($id){
        $deleteImage = About::find($id);
        $deleteImage->delete();
        return redirect('admin/manage-about')->with('success', 'Content Delete Successfully');
    }

    public function blog(){
        return view("admin.blog");
    }
    public function store_blog(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,image',
        ]);
        $imageName = '';
        if($image = $request->file('image')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/', $imageName);
        }
        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }
    public function manageBlog(){
        $blogs = Blog::all();
        return view('admin.manage-blog', compact('blogs'));
    }

    public function editBlog($id){
        $blog = Blog::find($id);
        return view('admin.edit-blog', compact('blog'));  
    }
    public function updateBlog(Request $request, $id){

        $content = Blog::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg,jpeg,image',
        ]);
        $imageName = '';
        $deleteOldImage = 'images/'.$content->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                unlink($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images', $imageName);
        }else{
            $imageName = $content->image;
        }
        Blog::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName
        ]);
        return redirect('manage-blog')->with('success', 'Content Update Successfully');
    }
    public function deleteBlog($id){
        $deleteImage = Blog::find($id);
        $deleteImage->delete();
        return redirect('admin/manage-blog')->with('success', 'Content Delete Successfully');
    }
}
