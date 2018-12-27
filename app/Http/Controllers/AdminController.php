<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Ticket;

class AdminController extends Controller
{
    public function index() {
    	return view('admin.index', compact('events'));
    }
    public function events() {
    	$events = Event::where('status', 1)->get();

    	return view('admin.events', compact('events'));
    }
    public function tickets() {
    	$tickets = Ticket::all();

    	return view('admin.tickets', compact('tickets'));
    }
    public function uploadTicket(Request $request) {
    	$input = $request->all();

    	(isset($input['design'])) ? $namaDesign = str_random().'.'.$input['design']->getClientOriginalExtension() : $namaDesign = null;

    	Ticket::create([
    		'name' => $input['name'],
    		'design' => $namaDesign
    	]);

        (isset($input['design'])) ? $input['design']->move(public_path('ticket'), $namaDesign) : null ;

    	return back();
    }
    public function verif() {
    	$events = Event::where('status', null)->get();

    	return view('admin.verif', compact('events'));
    }
    public function verified($id) {
    	$event = Event::where('id', $id)->first();
    	$event->update([
    		'status' => 1
    	]);

    	return back();
    }
    public function notVerif($id) {
    	Event::destroy($id);

    	return back();
    }
    public function delTickets($id) {
    	Ticket::destroy($id);

    	return back();
    }
    public function delEvents($id) {
    	Event::destroy($id);

    	return back();
    }
}
