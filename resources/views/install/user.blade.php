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
                <b>CHI</b>Blog
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">{{ trans('install.create_admin') }}</p>

                @if(count($errors) > 0)
                    @include('alerts.error')
                @endif

                {!!Form::open(['route' => 'install.storeuser', 'method' => 'POST'])!!}

                {!! csrf_field() !!}

                {!! bfSimpleInput('text', 'name', trans('adminlte_lang::message.fullname')) !!}

                {!! bfSimpleInput('email', 'email', trans('adminlte_lang::message.email')) !!}

                {!! bfPassword('password', trans('adminlte_lang::message.password'))  !!}

                {!! bfPassword('password_confirmation', trans('site.password_confirm'))  !!}

                {!! bfFile('avatar', trans('site.avatar'))  !!}

                {!! bfWithPre('web', trans('site.webpage'), 'http://')  !!}

                {!! bfWithPre('twitter', trans('site.twitter'), '<i class="fa fa-twitter"></i>')  !!}

                {!! bfWithPre('facebook', trans('site.facebook'), '<i class="fa fa-facebook"></i>')  !!}

                {!! bfSimpleInput('textArea', 'biography', trans('site.bio'), 'tinymce') !!}

                {!! bfSubmit(trans('site.register')) !!}

                {!!Form::close()!!}

            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </body>

@endsection
