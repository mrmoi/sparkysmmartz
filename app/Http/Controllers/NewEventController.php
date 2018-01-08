<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Validator;
use Illuminate\Support\Facades\Auth;

class NewEventController extends Controller
{
    //
    public function index()
    {
        return view('newevent');

    }

    public function store_event(Request $request)
    {
        $this->validate($request, [
                    'event_name'        => 'required|min:5|max:25',
                    'event_description' => 'required|min:5|max:100',
                    'event_time'        => 'required|min:5|max:25',
                    'event_location_id' => 'required',
        ]);

        $event = new Event;

        $event->event_name          = $request->input('event_name');
        $event->event_description   = $request->input('event_description');
        $event->event_time          = $request->input('event_time');
        $event->event_location_id   = $request->input('event_location_id');

        // Get the authenticated user's ID
        $event->created_by_id       = Auth::id();

        $event->save();

        return redirect('events');
    }
}
