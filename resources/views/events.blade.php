@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading custom_panel_heading">Coffee House Events Schedule</div>
                    <div class="panel-body custom_panel_body">

                        <img src="{{ asset('images/cafeevents.jpg') }}" class="img-responsive">

                        <p><strong>Join us</strong> on our patio for our Acoustic Nights &amp; Coffee every Thursday and Saturday nights.
                            We also host trivia nights, spelling bees, and art shows.</p>

                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col"><strong>Event</strong></th>
                                <th scope="col"><strong>Time</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                            <tr>
                                <th scope="row">{{ $event->event_name }}</th>
                                <td>{{ $event->event_time }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection





