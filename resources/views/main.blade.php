@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading custom_panel_heading">Experience the difference</div>
                    <div class="panel-body custom_panel_body">

                        <img class="pull-left" src="{{ asset('images/cafecounter.jpg') }}" alt="Cafe Counter">

                        <p class="text-justify"><span>Sparky's Coffee House</span> provides the experience of consuming
                            a high-quality specialty coffee. More than a beverage, our
                            delicious coffee begins with 100% brutte arabica coffee
                            beans that are grown in India at an altitude of 1500m above
                            sea level, which helps to produce a more desired coffee
                            flavor. Come experience the difference at <span>Sparky's Coffee House</span>
                            House.</p>

                        <ul>
                            <li>Small batch roasting to ensure unparalleled quality and freshness</li>
                            <li>Flavored coffees for sale</li>
                            <li>Live acoustic music on Thursday and Saturday nights</li>
                            <li>Showcase your artwork to sell in our cafe</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection