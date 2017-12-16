@extends('layout.admin_template')
@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('page_description', 'Dashboard Administrator')

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

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
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