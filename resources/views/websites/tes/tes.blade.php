@extends('layout.admin_template')
@section('title','Halaman Tes')
@section('page_title','Halaman Tes')
@section('page_description','Ini adalah halaman tes')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    {{--Title--}}
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <div class="box-body">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>Kelas</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection