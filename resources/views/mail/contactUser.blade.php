@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        @endcomponent
    @endslot

{{-- Body --}}
##¡Hola! {{ $request->name }}

**GabrielAttila:** gracias por contactarme con el siguiente mensaje:

{{ $request->message }}

Me comunicaré con usted lo mas pronto posible, saludos.


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            Copyright &copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.
        @endcomponent
    @endslot
@endcomponent