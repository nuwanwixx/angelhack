<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Men;

class SearchController extends Controller
{
    public function postSearch(Request $request){
    	$name = $request->searchbox;

    	if ($request->jobtype == 'job') {
    		$result = Work::where('description', 'LIKE', '%'.$name.'%')->orwhere('title', 'LIKE', '%'.$name.'%')->get();
    		return view('searchview')->withResult($result)->withJobtype(0);
    	}
    	else if ($request->jobtype == 'men'){
    		$result = Men::where('description', 'LIKE', '%'.$name.'%')->orwhere('title', 'LIKE', '%'.$name.'%')->get();
    		return view('searchview')->withResult($result)->withJobtype(1);
    	}
    }

    public function getSearchJob(){
        $result = Work::orderBy('created_at', 'desc')->get();
        return view('searchview')->withResult($result)->withJobtype(0);
    }

    public function getSearchWork(){
        $result = Men::orderBy('created_at', 'desc')->get();
        return view('searchview')->withResult($result)->withJobtype(1);
    }
}
