<?php

namespace App\Http\Controllers;
use App\Event;

class EventController extends Controller
{
    //
    public function index ()
    {
        $events = Event::all()->sortByDesc('created_at');

        return view('events', compact('events'));
    }
}
