<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');

    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',



        ]);
        $category = new Category();
        $category->name=$request->name;
        $category->status=$request->status;
        $category->save();


        return redirect()->route('category.index')->with('message', 'Added Succesfully!');

    }

    public function index(){
        $category = Category::all();
        return view('admin.category.index',compact('category'));

    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',



        ]);
        $category = Category::find($id);
        $category->name=$request->name;
        $category->status=$request->status;
        $category->update();


        return redirect()->route('category.index')->with('message', 'Update Succesfully!');

    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('message', 'Delete Succesfully!','alert-danger');

    }


}
