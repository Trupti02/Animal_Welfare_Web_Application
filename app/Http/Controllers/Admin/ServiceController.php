<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        return view('admin.service.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',


        ]);
        $service = new Service();
        $service->title=$request->title;
        $service->description=$request->description;


        if($request->hasFile('service_image'))
        {
            $file = $request->file('service_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $service->service_image=$filename;

        }

        $service->save();


        return redirect()->route('service.index')->with('message', 'Added Succesfully!');

    }

    public function index(){
        $service = Service::all();
        return view('admin.service.index',compact('service'));
    }

    public function edit($id){
        $service = Service::find($id);
        return view('admin.service.edit',compact('service'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',


        ]);
        $service = Service::find($id);
        $service->title=$request->title;
        $service->description=$request->description;


        if($request->hasFile('service_image'))
        {
            $file = $request->file('service_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $service->service_image=$filename;

        }

        $service->update();


        return redirect()->route('service.index')->with('message', 'Update Succesfully!');

    }

    public function delete($id){
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service.index')->with('message', 'Delete Succesfully!','alert-danger');

    }
}
