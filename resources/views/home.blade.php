@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Store Management</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Create Event

                        <form method="post" action="/post-route?utm=12345">
                            {{ csrf_field() }}

{{--                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Select a Sparkys location
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                                    @foreach($locations as $location)
                                        <li><a href="/home/newevent/{{ $location->loc_id }}">{{ $location->loc_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>--}}

                            <div class="form-group">
                                <label for="exampleFormControlInput1">*Name</label>
                                <input type="text" class="form-control" name="event_name" id="exampleFormControlInput1" placeholder="Acoustic Nights and Coffee">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">*Description</label>
                                <input type="text" class="form-control" name="event_description" id="exampleFormControlInput1" placeholder="What the event is about...">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">*Event Time</label>
                                <input type="text" class="form-control" name="event_time" id="exampleFormControlTextarea1" placeholder="Date Time description">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">*Event Location Id</label>
                                <input type="text" class="form-control" name="event_location_id" id="exampleFormControlTextarea1" placeholder="Date Time description">
                            </div>

                     {{--       <div class="form-group">
                                <label for="exampleFormControlTextarea1">User</label>
                                <input type="text" class="form-control" name="created_by_id" id="exampleFormControlTextarea1" placeholder="Date Time description">
                            </div>--}}

                            <br>

                            <button type="submit" class="btn btn-primary">Send now</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



