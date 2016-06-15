@extends('layouts.auth')

@section('htmlheader_title')
    Install
@endsection

<style>
    .login-box, .register-box {
        width: 600px!important;
        margin: 7% auto;
    }
</style>

@section('content')

    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><b>CHI</b>Blog</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">{{ trans('install.congrats') }}</p>
            <p class="login-box-msg">{{ trans('install.installed') }}</p>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
    </body>

@endsection
