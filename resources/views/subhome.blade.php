@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('layouts.submenu')
                <div class="panel panel-default">
                    <div class="panel-heading">Sparkys Home Menu</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        Menu used to enter events and other things....

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection