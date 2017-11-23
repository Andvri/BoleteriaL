<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Ticket;
use App\User;
use Auth;
use App\Http\Requests\EventRequest;
use App\Http\Requests\TicketRequest;
class IndexController extends Controller
{
    function index() {
        $events = Event::all();
        $tickets = Ticket::all();
        return view('welcome', ["events" => $events, "tickets" => $tickets]);
    }

    //Tickets Routes

    function dTicket($id){
        $ticket = Ticket::find($id);
        $user= Auth::user();
        if(($ticket->user_id == $user->id) ||  ($user->access == "Administrador")){
            Ticket::destroy($id);
        }

        return redirect('/');
    }

    function aTicket(){
        $events = Event::all();
        return view('ticket.add', ["events" => $events]);
    }

    function vTicket($id){

        $ticket = Ticket::find($id);
        $user= Auth::user();
        if(($ticket->user_id == $user->id) ||  ($user->access == "Administrador")){
            return view('ticket.view', ['ticket' => $ticket]);
        }
        else{
            return redirect('/');
        }
    }
    function eTicket($id){
        $events = Event::all();
        $ticket = Ticket::find($id);
        $user= Auth::user();
        if(($ticket->user_id == $user->id) ||  ($user->access == "Administrador")){
            return view('ticket.edit', ['element' => $ticket, "events" => $events]);
        }
        else{
            return redirect('/');
        }
       
    }
    function eTicketpost($id, TicketRequest $request){

        $eTicket = Ticket::find($id);

        $eTicket->location = $request->location;
        $eTicket->serial = $request->serial;
        $eTicket->event_id = $request->event_id;
        $eTicket->user_id = $request->user_id;
        $eTicket->save();
        return redirect('/');
    }

    function createTicket(TicketRequest $request){
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
    function vEvent($id){
        $event = Event::find($id);
        return view('event.view', ['event' => $event]);
    }

    function eEvent($id){
        $event = Event::find($id);
        return view('event.edit', ['element' => $event]);
    }
    function eEventpost($id, EventRequest $request){
        $eEvent = Event::find($id);
        $eEvent->name = $request->name; 
        $eEvent->vip = $request->vip;
        $eEvent->platinium =$request->platinium;
        $eEvent->altos = $request->altos;
        $eEvent->medios = $request->medios;
        $eEvent->date = $request->date;
        $eEvent->save();
        return redirect('/');
    }

    function createEvent(EventRequest $request){
        //$this->validate()

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
