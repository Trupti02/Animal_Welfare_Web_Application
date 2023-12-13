<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Service;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $event = Event::latest()->first()->get();
        $service = Service::latest()->first()->get();
        $donation = Donation::latest()->first()->get();
        $volunteer = Volunteer::latest()->first()->get();
        $blog = Blog::latest()->first()->get();
        return view('front.index',compact('event','service','donation','volunteer','blog'));

    }

    public function about(){
        $service = Service::latest()->first()->get();
        return view('front.about',compact('service'));
    }

    public function program(){
        $donation = Donation::latest()->first()->get();
        return view('front.program',compact('donation'));
    }

    public function event(){
        $event = Event::latest()->get();
        return view('front.event',compact('event'));
    }

    public function blog(){
        $blog = Blog::latest()->get();
        $category = Category::latest()->first()->get();
        return view('front.blog',compact('blog','category'));
    }

    public function category(Request $request,$id){
        $category = Category::all();
        $blog = Blog::where('status',1)->latest();
        return view('front.category',compact('blog','category'));
    }

    public function volunteer(){
        return view('front.volunteer');
    }

    public function store(Request $request){

        $volunteer = new volunteer();
        $volunteer->fname=$request->fname;
        $volunteer->lname=$request->lname;
        $volunteer->email=$request->email;
        $volunteer->address=$request->address;
        $volunteer->mob_number=$request->mob_number;
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


        return redirect()->route('index')->with('message', 'Added Succesfully!');

    }





}
