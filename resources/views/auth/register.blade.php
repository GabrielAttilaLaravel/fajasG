@component('layouts.app')

    @slot('css')
        <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" media="all" >
    @endslot
    @slot('content')
        <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox" style="position: absolute;">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('/images/Slide-show-body-background.jpg');"></div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('/images/Slide-show-faja-background.jpg');"></div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('/images/Slide-show-jeans-backgorund.jpg');"></div>
                <!-- Slide Four - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('/images/Slide-show-reductores-background.jpg');"></div>

            </div>
        </div>
        <div class="main">
            @component('page.partials.manu-lateral')@endcomponent

            <section class="col-9"><!-- 75% -->
                <div class="col-md-6"></div>
                @component('page.partials.nav-sup')@endcomponent
                <section class="col-md-12 cuerpo">
                    @component('page.partials.register')@endcomponent
                </section>

            </section>
        </div>
    @endslot
@endcomponent
