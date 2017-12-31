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
                            <tr>
                                <th scope="row">Acoustic Nights and Coffee</th>
                                <td>Thursdays and Saturdays at 7:00pm</td>
                            </tr>
                            <tr>
                                <th scope="row">Spelling Bee Contest</th>
                                <td>Monday Nights at 7:00pm</td>
                            </tr>
                            <tr>
                                <th scope="row">Trivia Night</th>
                                <td>Wednesday Nights at 7:30pm</td>
                            </tr>
                            <tr>
                                <th scope="row">Art Show</th>
                                <td>Sunday Mornings at 8:00am</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection





