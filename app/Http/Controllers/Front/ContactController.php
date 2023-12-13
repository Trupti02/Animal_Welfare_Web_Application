<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('front.contact');
    }

    public function store(Request $request){
        // dd($request);
        // $this->validate($request, [
        //     'message' => 'required',
        //     'name' => 'required',
        //     'email' => 'required',
        //     'subject' => 'required',

        // ]);
        $contact = new Contact();
        $contact->message=$request->message;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->contact_no=$request->contact_no;

        $contact->save();


        return redirect()->route('contact')->with('message', 'Added Succesfully!');

    }

    public function index(){
        $contact = Contact::all();
        return view('admin.contact.index',compact('contact'));
    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contact.index')->with('message', 'Delete Succesfully!','alert-danger');

    }
}
