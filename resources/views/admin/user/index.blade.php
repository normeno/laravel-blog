@extends('layouts.app')

@section('contentheader_title')
    {{trans('site.administrators')}}
@endsection

@section('htmlheader_title')
    {{trans('site.list_of', ['section' => trans('site.administrators')])}}
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        {{trans('site.list_of', ['section' => trans('site.administrators')])}}
                    </div>

                    <div class="panel-body">

                        {{
                            link_to('user/create',
                            trans('site.add_new', ['record' => trans('site.user')]),
                            ['class' => 'btn btn-default add_record'])
                        }}

                        <table class="table">
                            <thead>
                                <th>{{ trans('adminlte_lang::message.fullname') }}</th>
                                <th>{{ trans('adminlte_lang::message.email') }}</th>
                                <th>{{ trans('site.role') }}</th>
                                <th>{{ trans('site.created_at') }}</th>
                                <th>{{ trans('site.updated_at')  }}</th>
                                <th>Actions</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('/bower_resources/datatables.net-bs/css/dataTables.bootstrap.min.css')  }}">
<link rel="stylesheet" href="{{ asset('/bower_resources/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')  }}">
@endpush

@push('scripts')

    @include('layouts.partials.datatable')

    <script>
        $(function() {

            var table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                ajax: '/user/datatable/',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'role', name: 'role' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'operations', name: 'operations' },
                ]
            });
        });

        function btnActions() {
            var btnView, btnEdit, btnDelete, btnMore;

            btnView =   '<button class="btn btn-default btn-xs btnView">' +
                            '<i class="fa fa-eye"></i> View' +
                        '</button>';

            btnEdit = '<li class="btnEdit"><a href="#">Edit</a></li>';

            btnDelete = '<li class="btnDelete"><a href="#">Delete</a></li>';

            btnMore = '<div class="btn-group">' +
                        '<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                            'More  <i class="fa fa-angle-down"></i>'+
                        '</button>'+
                        '<ul class="dropdown-menu">'+
                            btnEdit +
                            btnDelete +
                        '</ul>'+
                      '</div>';

            return btnView + ' ' + btnMore;
        }
    </script>

@endpush