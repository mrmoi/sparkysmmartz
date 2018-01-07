{{--<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="jumbotron custom_jumbotron">
                <h1>Welcome to Sparky's Coffee!</h1>
                <p></p>
            </div>
        </div>
    </div>
</div>--}}


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('images/coffeebeans.jpg') }}" alt="">
                        <div class="carousel-caption">
                            <div class="carouselCaption">Sparky's House Blend</div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/coffeemug.jpg') }}" alt="">
                        <div class="carousel-caption">
                            <div class="carouselCaption">Sparky's Devil Espresso</div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/coffeenumbers.jpg') }}" alt="">
                        <div class="carousel-caption">
                            <div class="carouselCaption">Mocha Java</div>
                        </div>
                    </div>
                </div>
            </div>



