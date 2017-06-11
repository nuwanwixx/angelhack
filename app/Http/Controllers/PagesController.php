<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Work;
use App\Men;
use App\Rating;

class PagesController extends Controller
{
    public function getJobView($id){
    	$work = Work::find($id);
    	$rating = Rating::where('receiver_id', $work->user_id)->get();
    	$ownrating = Rating::where('receiver_id', $work->user_id)->where('rator_id', Auth::id())->get();
    	$rated = 0;
    	foreach ($ownrating as $value) {
    		$rated = 1;
    		break;
    	}
    	$sum = 0;
    	$count = 0;
    	foreach ($rating as $value) {
    		$sum += $value->rate;
    		$count++;
    	}
    	if ($count!=0) {
    		$ratesum = $sum/$count;
    	}
    	else{
    		$ratesum = 0;
    	}

    	return view('jobview')->withWork($work)->withRatesum($ratesum*20)->withRated($rated);
    }

    public function getMenView($id){
        $men = Men::find($id);
        $rating = Rating::where('receiver_id', $men->user_id)->get();
        $ownrating = Rating::where('receiver_id', $men->user_id)->where('rator_id', Auth::id())->get();
        $rated = 0;
        foreach ($ownrating as $value) {
            $rated = 1;
            break;
        }
        $sum = 0;
        $count = 0;
        foreach ($rating as $value) {
            $sum += $value->rate;
            $count++;
        }
        if ($count!=0) {
            $ratesum = $sum/$count;
        }
        else{
            $ratesum = 0;
        }

        return view('menview')->withMen($men)->withRatesum($ratesum*20)->withRated($rated);
    }
}
