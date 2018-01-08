<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Message;
use App\Event;
use App\Location;

class SubHomeController extends Controller
{
    //
    public function index()
    {

        $messages = Message::all()->sortByDesc('created_at');

        $events = Event::all()->sortByDesc('created_at');

        $locations = Location::all()->sortByDesc('created_at');

        return view('subhome')->with(compact('messages', 'locations', 'events'));

    }

}
