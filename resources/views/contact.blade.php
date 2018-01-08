@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading custom_panel_heading">Contact Sparky's Coffee House</div>

                    <div class="panel-body custom_panel_body">



                        <p>Required information is marked with an asterisk (*)</p>

                        <form method="post" action="/post-message?utm=12345">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleFormControlInput1">*Name</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Joe Smith" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">*Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">*Comments</label>
                                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit now</button>
                        </form>


                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        @include('errors')

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection