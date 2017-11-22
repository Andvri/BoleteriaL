<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class IndexController extends Controller
{
    function index() {
        $events = Event::all();
        return view('welcome', ["events" => $events]);
    }
}
