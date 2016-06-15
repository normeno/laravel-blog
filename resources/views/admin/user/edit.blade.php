@extends('layouts.app')

@section('contentheader_title')
    {{trans('site.users')}}
@endsection

@section('htmlheader_title')
    {{trans('site.administrators')}}
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        {{ trans('site._edit', ['record' => trans('site.user')]) }}
                    </div>

                    <div class="panel-body">

                        @if(count($errors) > 0)
                            @include('alerts.error')
                        @endif

                        {!!Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT', 'files' => true])!!}

                            {!! Form::hidden('id', $user->id) !!}
                            @include('admin.user.form')

                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection