@component('layouts.app')

    @slot('css')
        <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" media="all" >
        <link href="{{ asset('css/contact.css') }}" rel="stylesheet" type="text/css" media="all" >
    @endslot
    @slot('content')
        @component('layouts.partials.slide')@endcomponent
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
