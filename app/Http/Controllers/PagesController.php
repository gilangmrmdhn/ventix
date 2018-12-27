<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Ticket;

class PagesController extends Controller
{
    public function home()
    {
        $events = Event::where('status', 1)->get();

		return view('home', compact('events'));
    }

    public function addEvent()
    {
        $tickets = Ticket::all();

		return view('add_event', compact('tickets'));
    }

    public function storeEvent(Request $request)
    {
        $input = $request->all();

        if(isset($input['ticket'])) {
            $namaTicket = str_random().'.'.$input['ticket']->getClientOriginalExtension();

            Ticket::create([
                'name' => $input['name'],
                'design' => $namaTicket
            ]);
        }else{
            $namaTicket = null;
        }

        if(isset($input['ticket'])) {
            $input['ticket']->move(public_path('ticket'), $namaTicket);
            $ticket = Ticket::where('design', $namaTicket)->first();
            $idTicket = $ticket->id;
        }else{
            $idTicket = $input['ticket_id'];
        }

        (isset($input['pamflet'])) ? $namaPamflet = str_random().'.'.$input['pamflet']->getClientOriginalExtension() : $namaPamflet = null;

        Event::create([
            'author' => $input['author'],
            'email' => $input['email'],
            'hp' => $input['hp'],
            'name' => $input['name'],
            'desc' => $input['desc'],
            'date' => $input['date'],
            'price' => $input['price'],
            'pamflet' => $namaPamflet,
            'ticket_id' => $idTicket
        ]);
        
        (isset($input['pamflet'])) ? $input['pamflet']->move(public_path('pamflet'), $namaPamflet) : null ;

		return redirect('/');
    }
}
