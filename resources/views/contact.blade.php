@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading custom_panel_heading">Contact Sparky's Coffee House</div>

                    <div class="panel-body custom_panel_body">



                        <p>Required information is marked with an asterisk (*)</p>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">*Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Joe Smith">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">*Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">*Comments</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Send now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection