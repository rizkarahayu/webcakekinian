@extends('layout.admin_template')

@section('title', 'Data Users')
@section('page_title', 'Data Users')
@section('page_description', 'Berisi tentang semua data users')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Data Master</a></li>
    <li class="active">Users</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <a href="{{ url('/') }}" class="btn btn-primary">Tambah users</a>
        </div>
    </div>
@endsection