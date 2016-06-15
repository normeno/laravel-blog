@extends('layouts.auth')

@section('htmlheader_title')
    Install
@endsection

@section('content')

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <b>CHI</b>Blog
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">{{ trans('install.db_config') }}</p>

                @if(!$db)
                    <div class="alert alert-warning" role="alert">
                        {!! trans('install.db_error') !!}
                    </div>
                    {!! link_to_route('install.index', trans('install.prev'), null, ['class' => 'btn btn-success']) !!}
                @else
                    <div class="alert alert-success" role="alert">
                        {!! trans('install.db_success') !!}
                    </div>
                    {!! link_to_route('install.user', trans('install.next'), null, ['class' => 'btn btn-default']) !!}
                @endif
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </body>

@endsection
