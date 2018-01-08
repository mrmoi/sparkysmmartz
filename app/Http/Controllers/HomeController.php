<?php

namespace App\Http\Controllers;
use App\Event;
// use Validator;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Input;

// This controller is actually for 'subhome'

class HomeController extends Controller
{
    //private $location_selection;

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
        return view('subhome');
    }


/*    // Get value (loc_id) from select location drop down
    public function new_event(Request $request, $id)
    {
        $location_selection = $request->session()->get('key', $id);

        return redirect('home');

    }*/

}
