@component('layouts.app')
    @if(Request::path() != 'home')
        @slot('css')
            <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        @endslot
    @endif


    @slot('content')
        @if(Request::path() == 'home')
            <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
                <ol class="carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox" style="position: absolute">
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
        @endif
        <div class="page">
            @component('page.index')@endcomponent
        </div>
    @endslot
@endcomponent
