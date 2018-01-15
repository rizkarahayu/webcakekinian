@extends('layout.website_template')

@section('title', 'Produk')
@section('page_title', 'Produk')
@section('custom_css')
<style>
          * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    *:before, *:after {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    body {
      font-family: "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
      color: #5e5d52;
    }

    a {
      color: #D83192;
    }
    a:hover, a:focus {
      color: #D83192;
    }

    .container {
      margin: 5% 3%;
    }
    @media (min-width: 48em) {
      .container {
        margin: 2%;
      }
    }
    @media (min-width: 75em) {
      .container {
        margin: 2em auto;
        max-width: 75em;
      }
    }

    .responsive-table {
      width: 100%;
      margin-bottom: 1.5em;
    }
    @media (min-width: 48em) {
      .responsive-table {
        font-size: .9em;
      }
    }
    @media (min-width: 62em) {
      .responsive-table {
        font-size: 1em;
      }
    }
    .responsive-table thead {
      position: absolute;
      clip: rect(1px 1px 1px 1px);
      /* IE6, IE7 */
      clip: rect(1px, 1px, 1px, 1px);
      padding: 0;
      border: 0;
      height: 1px;
      width: 1px;
      overflow: hidden;
    }
    @media (min-width: 48em) {
      .responsive-table thead {
        position: relative;
        clip: auto;
        height: auto;
        width: auto;
        overflow: auto;
      }
    }
    .responsive-table thead th {
      background-color: #D83192;
      border: 1px solid #D83192;
      font-weight: normal;
      text-align: center;
      color: white;
    }
    .responsive-table thead th:first-of-type {
      text-align: left;
    }
    .responsive-table tbody,
    .responsive-table tr,
    .responsive-table th,
    .responsive-table td {
      display: block;
      padding: 0;
      text-align: left;
      white-space: normal;
    }
    @media (min-width: 48em) {
      .responsive-table tr {
        display: table-row;
      }
    }
    .responsive-table th,
    .responsive-table td {
      padding: .5em;
      vertical-align: middle;
    }
    @media (min-width: 30em) {
      .responsive-table th,
      .responsive-table td {
        padding: .75em .5em;
      }
    }
    @media (min-width: 48em) {
      .responsive-table th,
      .responsive-table td {
        display: table-cell;
        padding: .5em;
      }
    }
    @media (min-width: 62em) {
      .responsive-table th,
      .responsive-table td {
        padding: .75em .5em;
      }
    }
    @media (min-width: 75em) {
      .responsive-table th,
      .responsive-table td {
        padding: .75em;
      }
    }
    .responsive-table caption {
      margin-bottom: 1em;
      font-size: 1em;
      font-weight: bold;
      text-align: center;
    }
    @media (min-width: 48em) {
      .responsive-table caption {
        font-size: 1.5em;
      }
    }
    .responsive-table tfoot {
      font-size: .8em;
      font-style: italic;
    }
    @media (min-width: 62em) {
      .responsive-table tfoot {
        font-size: .9em;
      }
    }
    @media (min-width: 48em) {
      .responsive-table tbody {
        display: table-row-group;
      }
    }
    .responsive-table tbody tr {
      margin-bottom: 1em;
      border: 2px solid #D83192;
    }
    @media (min-width: 48em) {
      .responsive-table tbody tr {
        display: table-row;
        border-width: 1px;
      }
    }
    .responsive-table tbody tr:last-of-type {
      margin-bottom: 0;
    }
    @media (min-width: 48em) {
      .responsive-table tbody tr:nth-of-type(even) {
        background-color: rgba(94, 93, 82, 0.1);
      }
    }
    .responsive-table tbody th[scope="row"] {
      background-color: #D83192;
      color: white;
    }
    @media (min-width: 48em) {
      .responsive-table tbody th[scope="row"] {
        background-color: transparent;
        color: #5e5d52;
        text-align: left;
      }
    }
    .responsive-table tbody td {
      text-align: right;
    }
    @media (min-width: 30em) {
      .responsive-table tbody td {
        border-bottom: 1px solid #D83192;
      }
    }
    @media (min-width: 48em) {
      .responsive-table tbody td {
        text-align: center;
      }
    }
    .responsive-table tbody td[data-type=currency] {
      text-align: right;
    }
    .responsive-table tbody td[data-title]:before {
      content: attr(data-title);
      float: left;
      font-size: .8em;
      color: rgba(94, 93, 82, 0.75);
    }
    @media (min-width: 30em) {
      .responsive-table tbody td[data-title]:before {
        font-size: .9em;
      }
    }
    @media (min-width: 48em) {
      .responsive-table tbody td[data-title]:before {
        content: none;
      }
    }

</style>
@endsection

@section('content')
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>RIWAYAT TRANSAKSI</h3>
    </div>
</div>

{{--@if($trans->status_kedatangan == 0)--}}
    {{--<label class="btn btn-success"><i class="fa fa-check"></i>Konfirmasi Tiba</label>--}}
{{--@endif--}}
<!-- //banner -->  
  <div class="container">
  <table class="responsive-table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama</th>
        <th scope="col">Total</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($trans as $i => $tran)
          <tr>
            <th scope="row">{{ ++$i }}</th>
            <td data-title="Released">{{ $tran->tanggal_transaksi }}</td>
            <td data-title="Studio">{{ $tran->customer->users->name }}</td>
            <td data-title="Worldwide Gross">Rp. {{ number_format($tran->total) }}</td>
            <td data-title="Domestic Gross">

                @if($tran->status_kedatangan == 0)
                    <a href="{{ url('ck-admin/transaksi/'. $tran->id .'/confirm/datang') }}" class="btn btn-success"><i class="fa fa-check"></i>Konfirmasi Tiba</a>

                @else
                    <label class="label label-success"><i class="fa fa-check"></i>Sampai</label>

                @endif
            </td>
          </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection