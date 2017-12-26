@component('layouts.app')

    @slot('css')
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    @endslot

    @slot('content')
        <div class="fondo-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 logo-welcome">
                        <img src="{{ asset('/images/logo-welcome.png') }}" alt="Logo">
                    </div>
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 pills">
                            <img src="{{ asset('/images/pills.png') }}" alt="Logo">
                        </div>
                        <div class="col-md-4 idiomas">
                            <a href="{{ url('lang', ['en']) }}">
                                <figure>
                                    <img src="{{ asset('/images/usa-flag.png') }}" alt="Logo">
                                    <figcaption>English</figcaption>
                                </figure>
                            </a>
                            <a href="{{ url('lang', ['es']) }}">
                                <figure>
                                    <img src="{{ asset('/images/spanish-flag.png') }}" alt="Logo">
                                    <figcaption>Español</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    @endslot
@endcomponent
