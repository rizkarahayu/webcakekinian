@extends('layout.admin_template')
@section('title', 'Title')
@section('page_title', 'Judul')
@section('page_description', 'Deskripsi')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
@endsection

@section('custom_css')
    <style>

    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    {{--Title--}}
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <div class="box-body">
                    {{--Content--}}
                </div>
            </div>
        </div>
    </div>
@endsection


@section('custom_js')
    <script>
        $(function () {
            $('#example1').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });
        })
    </script>
@endsection