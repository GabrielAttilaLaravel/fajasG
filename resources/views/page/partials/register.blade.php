
        <div class="omb_login">
            <h3 class="omb_authTitle">@lang('fajasG.registerOr') <a href="{{ route('login') }}">@lang('fajasG.login')</a></h3>

            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-6">
                    @include('layouts.partials.form-errors')
                    {!! Form::open([
                        'method' => 'POST',
                         'class' => 'omb_loginForm',
                         'url' => 'register',
                          'autocomplete' => 'on'
                        ])
                    !!}
                    <div class="input-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                        {!! Form::text('first_name', null, ['class' => 'form-control' , 'placeholder' => Lang::get('fajasG.enterName')]) !!}
                    </div>
                    <br>

                    <div class="input-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                        <input type="text" class="form-control" name="last_name" placeholder="@lang('fajasG.enterLastName')" >
                    </div>
                    <br>

                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                        <input type="text" class="form-control" name="email" placeholder="@lang('fajasG.email')">
                    </div>
                    <br>
                    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                        <input  type="password" class="form-control" name="password" placeholder="@lang('fajasG.password')" >
                    </div>
                    <br>
                    <div class="input-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                        <input  type="password" class="form-control" name="password_confirmation" placeholder="@lang('fajasG.confirmPassword')" >
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">@lang('fajasG.register')</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>