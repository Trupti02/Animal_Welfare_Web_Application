<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(){
        return view('admin.event.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'place' => 'required',
            'date' => 'required',

        ]);
        $event = new Event();
        $event->title=$request->title;
        $event->description=$request->description;
        $event->place=$request->place;
        $event->date=$request->date;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $event->image=$filename;

        }

        $event->save();


        return redirect()->route('event.index')->with('message', 'Added Succesfully!');

    }

    public function index(){
        $event = Event::all();
        return view('admin.event.index',compact('event'));
    }

    public function edit($id){
        $event = Event::find($id);
        return view('admin.event.edit',compact('event'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'place' => 'required',
            'date' => 'required',

        ]);
        $event = Event::find($id);
        $event->title=$request->title;
        $event->description=$request->description;
        $event->place=$request->place;
        $event->date=$request->date;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $event->image=$filename;

        }

        $event->update();


        return redirect()->route('event.index')->with('message', 'Update Succesfully!');

    }

    public function delete($id){
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('event.index')->with('message', 'Delete Succesfully!','alert-danger');

    }

}
