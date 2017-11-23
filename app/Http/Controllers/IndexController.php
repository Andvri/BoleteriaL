<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Ticket;
use App\User;
class IndexController extends Controller
{
    function index() {
        $events = Event::all();
        return view('welcome', ["events" => $events]);
    }

    //Tickets Routes

    function dTicket($id){
        $ticket = Ticket::find($id);
        Ticket::destroy($id);
        return redirect('/');
    }

    function aTicket(){
        $events = Event::all();
        return view('ticket.add', ["events" => $events]);
    }

    function eTicket($id){
        $ticket = Ticket::find($id);
        return view('ticket.edit');
    }

    function createTicket(Request $request){
        //dd($request->event_id);
        $nTicket =Ticket::create([
            "location" => $request->location,
            "serial" => $request->serial,
            "event_id" => $request->event_id,
            "user_id" => $request->user_id
        ]);
        return redirect('/');
    }
    //Events Routes
    function dEvent($id){
        $event = Event::find($id);
        Event::destroy($id);
        return redirect('/');
    }

    function aEvent(){
        $events = Event::all();
        return view('event.add');
    }

    function eEvent($id){
        dd(User::find(1));
        $ticket = Ticket::find($id);
        return view('event.edit');
    }

    function createEvent(Request $request){
        //$this->validate()
        $this->validate($request, [
            "name" => "required",
            "vip" => "required",
            "platinium" => "required",
            "altos" => "required",
            "medios" => "required",
            "date" => "required"
        ]);
        $nEvent = Event::create([
            "name" => $request->name,
            "vip" => $request->vip,
            "platinium" => $request->platinium,
            "altos" => $request->altos,
            "medios" => $request->medios,
            "date" => $request->date
        ]);
        return redirect('/');
    }
}
