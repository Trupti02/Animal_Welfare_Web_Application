<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function create(){
        return view('admin.volunteer.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'address' => 'required',
            'mob_number' => 'required',
            'birth_date' => 'required'

        ]);
        $volunteer = new Volunteer();
        $volunteer->fname=$request->fname;
        $volunteer->lname=$request->lname;
        $volunteer->email=$request->email;
        $volunteer->mob_number=$request->mob_number;
        $volunteer->address=$request->address;
        $volunteer->birth_date=$request->birth_date;
        if($request->hasFile('volunteer_image'))
        {
            $file = $request->file('volunteer_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $volunteer->volunteer_image=$filename;
        }

        $volunteer->save();


        return redirect()->route('volunteer.index')->with('message', 'Added Succesfully!');

    }

    public function index(){
        $volunteer = Volunteer::all();
        return view('admin.volunteer.index',compact('volunteer'));
    }

    public function edit($id){
        $volunteer = Volunteer::find($id);
        return view('admin.volunteer.edit',compact('volunteer'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'address' => 'required',
            'mob_number' => 'required',
            'birth_date' => 'required'

        ]);
        $volunteer = Volunteer::find($id);
        $volunteer->fname=$request->fname;
        $volunteer->lname=$request->lname;
        $volunteer->email=$request->email;
        $volunteer->mob_number=$request->mob_number;
        $volunteer->address=$request->address;
        $volunteer->birth_date=$request->birth_date;
        if($request->hasFile('volunteer_image'))
        {
            $file = $request->file('volunteer_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $volunteer->volunteer_image=$filename;
        }

        $volunteer->save();


        return redirect()->route('volunteer.index')->with('message', 'Added Succesfully!');

    }

    public function delete($id){
        $volunteer = Volunteer::find($id);
        $volunteer->delete();
        return redirect()->route('volunteer.index')->with('message', 'Delete Succesfully!','alert-danger');

    }



}
