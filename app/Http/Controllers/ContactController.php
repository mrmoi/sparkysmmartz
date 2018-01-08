<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index ()
    {
        return view('contact');
    }

    public function store_message(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required|min:5|max:25',
            'email'       => 'required|email',
            'comment'     => 'required|min:5|max:300',
        ]);

        $event = new Message;

        $event->name    = $request->input('name');
        $event->email   = $request->input('email');
        $event->comment = $request->input('comment');

        $event->save();

        return redirect('contact')->with('status', 'Message Saved!');
    }
}
