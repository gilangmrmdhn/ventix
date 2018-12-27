<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function all() {
    	
    }

    public function show($id) {
    	$event = Event::where('id', $id)->first();

    	return view('detail_event', compact('event'));
    }
}
