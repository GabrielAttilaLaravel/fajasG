@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        @endcomponent
    @endslot

{{-- Body --}}
##¡Hola! Gabriel

Te a contactado **{{ $request->name }}** - **{{ $request->email }}** con el siguiente mensaje:

{{ $request->message }}


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            Copyright &copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.
        @endcomponent
    @endslot
@endcomponent