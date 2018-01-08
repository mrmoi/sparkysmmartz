@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('layouts.submenu')
                <div class="panel panel-default">
                    <div class="panel-heading custom_panel_heading">Sparkys Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h4>Messages</h4>

                            <table class="table table-bordered">
                                <thead class="thead-dark customThead">
                                <tr>
                                    <th scope="col"><strong>Name</strong></th>
                                    <th scope="col"><strong>Email</strong></th>
                                    <th scope="col"><strong>Comment</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <th scope="row">{{ $message->name }}</th>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->comment }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        <h4>Locations</h4>
                            <table class="table table-bordered">
                                <thead class="thead-dark customThead">
                                <tr>
                                    <th scope="col"><strong>Location</strong></th>
                                    <th scope="col"><strong>Address</strong></th>
                                    <th scope="col"><strong>Created</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($locations as $location)
                                    <tr>
                                        <th scope="row">{{ $location->loc_name }}</th>
                                        <td>{{ $location->loc_address }}</td>
                                        <td>{{ $location->created_at->formatLocalized('%A %d %B %Y') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        <h4>Events</h4>
                            <table class="table table-bordered">
                                <thead class="thead-dark customThead">
                                <tr>
                                    <th scope="col"><strong>Event</strong></th>
                                    <th scope="col"><strong>Time</strong></th>
                                    <th scope="col"><strong>Description</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $event)
                                    <tr>
                                        <th scope="row">{{ $event->event_name }}</th>
                                        <td>{{ $event->event_time }}</td>
                                        <td>{{ $event->event_description }}</td>
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

