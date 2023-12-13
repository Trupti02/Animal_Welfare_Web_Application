<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    public function create(){
        return view('admin.adoption.create');

    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'place' => 'required',
            'adoption_image' => 'required'

        ]);
        $adoption = new Adoption();
        $adoption->name=$request->name;
        $adoption->place=$request->place;

        if($request->hasFile('adoption_image'))
        {
            $file = $request->file('adoption_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $adoption->adoption_image=$filename;

        }

        $adoption->save();


        return redirect()->route('adoption.index')->with('message', 'Added Succesfully!');

    }

    public function index(){
        $adoption = Adoption::all();
        return view('admin.adoption.index',compact('adoption'));
    }

    public function edit($id){
        $adoption = Adoption::find($id);
        return view('admin.adoption.edit',compact('adoption'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'place' => 'required',
            'adoption_image' => 'required'

        ]);
        $adoption = Adoption::find($id);
        $adoption->name=$request->name;

        if($request->hasFile('adoption_image'))
        {
            $file = $request->file('adoption_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $adoption->adoption_image=$filename;

        }

        $adoption->update();


        return redirect()->route('adoption.index')->with('message', 'Update Succesfully!');

    }

    public function delete($id){
        $adoption = Adoption::find($id);
        $adoption->delete();
        return redirect()->route('adoption.index')->with('message', 'Delete Succesfully!','alert-danger');

    }
}
