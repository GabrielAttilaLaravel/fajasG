<section class="col-md-6 nav-sup">

    <header>
        @if(Auth::user())
            <div class="col-md-5 login_user" >
                <div class="col-md-12">
                    <a href="#"><label>{{ Auth::user()->full_name }}</label></a>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <label style="cursor: pointer">Logout</label>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        @else
            <a href="{{ url('/login') }}"><div class="col-md-5 login" ><label>{{ trans('fajasG.login') }}</label></div></a>
        @endif

        <a href="#"><div class="col-md-5 contactenos" ><label>{{ trans('fajasG.contacts') }}</label></div></a>
        <a href="#"><div class="col-md-2 car-icon"></div></a>
    </header>
    <div class="col-md-12 search">
        <input type="text" name="search">
    </div>
</section>