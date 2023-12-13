<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\UserDonation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function donation(){
        return view('front.donation');
    }

    public function store(Request $request){
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
            'amount' => 'required',


        ]);
        $donation = new UserDonation();
        $donation->name=$request->name;
        $donation->email=$request->email;
        $donation->contact_no=$request->contact_no;
        $donation->amount=$request->amount;


        $donation->save();


        return redirect()->route('donation')->with('message', 'Added Succesfully!');

    }

    public function index(){
        $donation = UserDonation::all();
        return view('admin.user_donation.index',compact('donation'));
    }

    public function delete($id){
        $donation = UserDonation::find($id);
        $donation->delete();
        return redirect()->route('user.donation.index')->with('message', 'Delete Succesfully!','alert-danger');

    }

}
