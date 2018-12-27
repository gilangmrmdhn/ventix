<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	$keyword = $request->get('q'); 
    	
    	if ($keyword) {
    		$events = Event::search($keyword)->orderBy('id', 'DESC')->paginate(5);
    	}else{
    		$events = Event::paginate(5);
    	}

    	return view('search', compact('events'));
    }
}
