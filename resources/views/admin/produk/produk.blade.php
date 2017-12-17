@extends('layout.admin_template')

@section('title', 'Data Produk')
@section('page_title', 'Data Produk')
@section('page_description', 'adalah data yang berisi tentang produk.')


@section('content')
    <div class="row">
@section('title','halaman test')
@section('page_title','halaman test')
@section('page_description','Ini adalah halaman test')
@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    {{--Title--}}
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <div class="box-body">

                   <table><th>Nama</th></table>
                </div>
            </div>
        </div>
    </div>
@endsection