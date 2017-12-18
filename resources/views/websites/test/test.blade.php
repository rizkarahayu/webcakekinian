@extends('layout.admin_template')

@section('title', 'Halaman Test')
@section('page_title', 'Halaman Test')
@section('page_description', 'Ini adalah halaman test')

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
                    <table border="1">
                        <tr>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                        </tr>
                        <tr>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                        </tr>
                        <tr>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection