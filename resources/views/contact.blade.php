@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Sparky's Coffee House</div>

                    <div class="panel-body">

                        <p>Required information is marked with an asterisk (*)</p>
                        <form method="post" action="http://webdevbasics.net/scripts/demo.php">
                            <label for="myName">*Name:</label>
                            <input type="text" name="myName" id="myName" required>

                            <label for="myEmail">*Email:</label>
                            <input type="email" name="myEmail" id="myEmail" required>

                            <label for="myComments">*Comments:</label>
                            <textarea name="myComments" rows="2" cols="30" id="myComments" required></textarea>

                            <input type="submit" id="mySubmit" value="Send Now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection