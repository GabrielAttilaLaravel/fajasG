@component('mail::layout')
{{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        @endcomponent
    @endslot

    {{-- Body --}}
    Bienvenido, {{ $user->fullname }} gracias por registrarte en nuestra pagina, ahora podrás dar tus opiniones
    en nuestro bog y si deseas recibir notificaciones de nuestras promociones de desarollo has click
    <a href="{{ url('promotions', [$user]) }}">aqui</a>.


@component('mail::button', [ 'url' => '/' ])
    Click para confirmar tu email
@endcomponent

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            Copyright &copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.
        @endcomponent
    @endslot
@endcomponent

