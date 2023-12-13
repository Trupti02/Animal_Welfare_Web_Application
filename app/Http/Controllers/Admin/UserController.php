<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create(){
        return view('admin.user.create');
    }

    public function index(){
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',


        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();


        return redirect()->route('user.index')->with('message', 'Added Succesfully!');

    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',


        ]);
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->update();


        return redirect()->route('user.index')->with('message', 'Update Succesfully!');

    }



    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('message', 'Delete Succesfully!');

    }
}
