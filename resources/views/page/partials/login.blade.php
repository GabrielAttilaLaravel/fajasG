
        <div class="omb_login">
            <h3 class="omb_authTitle">{{ trans('fajasG.loginOr') }} <a href="{{ route('register') }}">{{ trans('fajasG.register') }}</a></h3>

            {{--
            <div class="row omb_row-sm-offset-3 omb_socialButtons">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                        <i class="fa fa-facebook visible-xs"></i>
                        <span class="hidden-xs">Facebook</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                        <i class="fa fa-twitter visible-xs"></i>
                        <span class="hidden-xs">Twitter</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="btn btn-lg btn-block omb_btn-google">
                        <i class="fa fa-google-plus visible-xs"></i>
                        <span class="hidden-xs">Google+</span>
                    </a>
                </div>
            </div>

            <div class="row omb_row-sm-offset-3 omb_loginOr">
                <div class="col-xs-12 col-sm-6">
                    <hr class="omb_hrOr">
                    <span class="omb_spanOr">or</span>
                </div>
            </div>
            --}}
            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-6">
                    @include('layouts.partials.form-errors')
                    {!! Form::open([
                        'method' => 'POST',
                         'class' => 'omb_loginForm',
                         'url' => 'login',
                          'autocomplete' => 'off'
                        ])
                    !!}
                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </span>
                        <input type="text" class="form-control" name="email" placeholder="{{ trans('fajasG.email') }}"  autofocus>
                    </div>

                    <br>
                    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                        <input  type="password" class="form-control" name="password" placeholder="{{ trans('fajasG.password') }}" >
                    </div>

                    <br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">{{ ucfirst(trans('fajasG.login')) }}</button>

                    {!! Form::close() !!}
                </div>
            </div>

            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-3">
                    <label class="checkbox">
                        <!-- TODO: recordar contraseña -->
                        {{--<input type="checkbox" value="remember-me">Remember Me--}}
                    </label>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <p class="omb_forgotPwd">
                        <!-- TODO: olvido contraseña -->
                        {{--<a href="#">Forgot password?</a>--}}
                    </p>
                </div>
            </div>
        </div>