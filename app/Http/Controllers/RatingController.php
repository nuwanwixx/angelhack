<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rating;
use Session;

class RatingController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function postClicked(Request $request){
    	$rating = new Rating;

    	$rating->rator_id = Auth::id();
        $rating->receiver_id = $request->job_owner;
        $rating->rate = $request->rate;

        $rating->save();

        Session::flash('success', 'You have rated for this user successfully!');

        //redirect to another page
        return redirect()->route('view.jobview', $request->job_id);
    }

    public function postMenClicked(Request $request){
    	$rating = new Rating;

    	$rating->rator_id = Auth::id();
        $rating->receiver_id = $request->job_owner;
        $rating->rate = $request->rate;

        $rating->save();

        Session::flash('success', 'You have rated for this user successfully!');

        //redirect to another page
        return redirect()->route('view.menview', $request->job_id);
    }
}
