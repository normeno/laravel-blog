@extends('layouts.app')

@section('contentheader_title')
    {{trans('site.profile')}}
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
                        {{trans('site.profile_of', ['profile' => $user->name])}}
                    </div>

                    <div class="panel-body">

                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>{{ trans('adminlte_lang::message.fullname') }}</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('adminlte_lang::message.email') }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('site.avatar')  }}</td>
                                    <td>{{ $user->avatar }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('site.role')  }}</td>
                                    <td>{{ $user->role }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('site.created_at') }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('site.updated_at') }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>

                        {{ link_to(URL::previous(), ' '.trans('site.back'), ['class'=>'btn btn-default fa fa-angle-left'])  }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection