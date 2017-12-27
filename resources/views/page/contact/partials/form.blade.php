<div class="omb_login">
    <h3 class="omb_authTitle">@lang('fajasG.contactUs')</h3>

    <div class="row omb_row-sm-offset-3">
        <div class="col-xs-12 col-sm-6">
            @include('layouts.partials.form-errors')
            {!! Form::open([
                'method' => 'post',
                'class' => 'omb_loginForm',
                'url' => 'contacForm',
                ])
            !!}
            <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => Lang::get('fajasG.enterName') ]) !!}
            </div>
            <br>
            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i class="fa fa-envelope-o"></i>
                                            </span>
                {!! Form::email('email', null, ['class' => 'form-control' , 'placeholder' => Lang::get('fajasG.email')]) !!}
            </div>
            <br>
            <div class="input-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </span>
                {!! Form::textarea('message', null, ['class' => 'form-control', 'cols' => 30, 'rows' => 10, 'placeholder' => Lang::get('fajasG.message') ]) !!}
            </div>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>

            {!! Form::close() !!}
        </div>
    </div>
</div>
