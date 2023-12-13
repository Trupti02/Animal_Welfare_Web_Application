<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function create(){
        return view('admin.donation.create');
    }


    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'contact_no' => 'required',
            'address' => 'required',
            'amount' => 'required',
            'goal_amount' => 'required',
            'donation_image' => 'required'

        ]);
        $donation = new Donation();
        $donation->name=$request->name;

        $donation->contact_no=$request->contact_no;
        $donation->address=$request->address;
        $donation->amount=$request->amount;
        $donation->goal_amount=$request->goal_amount;
        if($request->hasFile('donation_image'))
        {
            $file = $request->file('donation_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $donation->donation_image=$filename;
        }

        $donation->save();


        return redirect()->route('donation.index')->with('message', 'Added Succesfully!');

    }

    public function index(){
        $donation = Donation::all();
        return view('admin.donation.index',compact('donation'));
    }

    public function edit($id){
        $donation = Donation::find($id);
        return view('admin.donation.edit',compact('donation'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'contact_no' => 'required',
            'address' => 'required',
            'amount' => 'required',
            'goal_amount' => 'required',
            'donation_image' => 'required'

        ]);
        $donation =  Donation::find($id);
        $donation->name=$request->name;
        $donation->contact_no=$request->contact_no;
        $donation->address=$request->address;
        $donation->amount=$request->amount;
        $donation->goal_amount=$request->goal_amount;

        if($request->hasFile('donation_image'))
        {
            $file = $request->file('donation_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $donation->donation_image=$filename;

        }

        $donation->save();


        return redirect()->route('donation.index')->with('message', 'update Succesfully!');

    }

    public function delete($id){
        $donation = Donation::find($id);
        $donation->delete();
        return redirect()->route('donation.index')->with('message', 'Delete Succesfully!','alert-danger');

    }

}
