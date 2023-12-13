<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::with('category')->get();
        return view('admin.blog.index',compact('blog'));
    }

    public function create(){
        $category = Category::all();
        return view('admin.blog.create',compact('category'));
    }

    public function store(Request $request){
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'blog_image' => 'required',

        ]);
        $blog = new Blog();
        $blog->name=$request->name;
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->category_id=$request->category_id;
        $blog->status=$request->status;
        if($request->hasFile('blog_image'))
        {
            $file = $request->file('blog_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $blog->blog_image=$filename;
        }


        $blog->save();


        return redirect()->route('blog.index')->with('message', 'Added Succesfully!');

    }

    public function edit($id){
        $category = Category::all();
        $blog = Blog::with('category')->find($id);

        return view('admin.blog.edit',compact('blog','category'));
    }

    public function update(Request $request, $id){
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'blog_image' => 'required',

        ]);
        $blog = Blog::find($id);
        $blog->name=$request->name;
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->category_id=$request->category_id;

        $blog->status=$request->status;
        if($request->hasFile('blog_image'))
        {
            $file = $request->file('blog_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $blog->blog_image=$filename;
        }


        $blog->update();


        return redirect()->route('blog.index')->with('message', 'Added Succesfully!');

    }

    public function delete($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blog.index')->with('message', 'Delete Succesfully!','alert-danger');

    }


}
