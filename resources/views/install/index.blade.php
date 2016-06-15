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
                <p class="login-box-msg">{{ trans('install.welcome') }}</p>
                <p class="login-box-msg">{{ trans('install.first_step') }}</p>

                {!!Form::open(['route' => 'install.storebasic', 'method' => 'POST'])!!}

                    {!! bfDropDown('role', ['es' => 'Spanish'], trans('install.language'))  !!}

                    {!! bfSimpleInput(
                            'textArea',
                            'envfile',
                            trans('install.env_file'),
                            null,
                            $file) !!}

                    {!! bfSubmit(trans('install.next')) !!}

                {!!Form::close()!!}
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </body>

@endsection
