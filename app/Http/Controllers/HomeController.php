<?php

namespace App\Http\Controllers;
use App\Event;
use Validator;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Input;



class HomeController extends Controller
{
    private $location_selection;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$locations = Location::all();
        //return view('home', compact('locations'));

        return view('home');

    }

    public function index2()
    {
        //$locations = Location::all();
        //return view('home', compact('locations'));

        return view('newevent');

    }

    public function index3()
    {
        //$locations = Location::all();
        //return view('home', compact('locations'));

        return view('subhome');

    }


    // Get value (loc_id) from select location drop down
    public function new_event(Request $request, $id)
    {
        $location_selection = $request->session()->get('key', $id);

        return redirect('home');

    }


    public function store_event(Request $request)
    {
/*        $this->validate($request, [
            'event_name'        => 'required',
            'event_description' => 'required',
            'event_time'        => 'required',
            'event_location_id' => 'required',
            'created_by_id'     => 'required'
        ]);*/

        $event = new Event;

        $event->event_name          = $request->input('event_name');
        $event->event_description   = $request->input('event_description');
        $event->event_time          = $request->input('event_time');
        $event->event_location_id   = $request->input('event_location_id');

        // Get the authenticated user's ID
        $event->created_by_id       = Auth::id();

        $event->save();

        return redirect('home');
    }

}
