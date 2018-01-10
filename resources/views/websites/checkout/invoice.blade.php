@extends('layout.website_template')

@section('title', 'Produk')
@section('page_title', 'Produk')

@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="invoice-title text-center">
                    <h2>Invoice</h2><h3 class="pull-right">Order # {{ $transaksi->id }}</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong>Payment Method:</strong><br>
                            {{ $transaksi->payment_transaksi->metode_payment->metode }}<br>
                            @if ($transaksi->payment_transaksi->metode_payment->id == 2)
                                <strong style="color: white; background: darkgreen">No. Rek : 140001234299988</strong><br>
                            @endif
                            <strong style="color: white; background: darkgreen">Kode Pembayaran : {{ $transaksi->kode_pembayaran }}</strong>
                            <br>
                            @if ($transaksi->payment_transaksi->metode_payment->id == 1)
                                <strong style="color: white; background: darkred">Barang akan dikirim setelah proses pembayaran anda selesai</strong>
                            @endif
                        </address>
                        <address>
                            <strong>Order Date:</strong><br>
                            {{ $transaksi->tanggal_transaksi }}<br><br>
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                            <strong>Dikirim ke :</strong><br>
                            {{ $transaksi->detail_pengiriman->nama_pembeli }}<br>
                            {{ $transaksi->detail_pengiriman->alamat }}<br>
                            {{ $transaksi->detail_pengiriman->kabupaten }}<br>
                            {{ $transaksi->detail_pengiriman->kode_pos }}<br>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Order summary</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th><strong>Produk</strong></th>
                                    <th><strong>Nama Toko</strong></th>
                                    <th class="text-center"><strong>Harga</strong></th>
                                    <th class="text-center"><strong>Quantity</strong></th>
                                    <th class="text-right"><strong>Total</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $total = 0; @endphp
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                @foreach($transaksi->detail_transaksi as $detail)
                                    @php $total += $detail->subtotal; @endphp

                                    <tr>
                                        <td>{{ $detail->produk->nama }}</td>
                                        <th><strong>{{ $detail->produk->toko->nama }}</strong></th>
                                        <td class="text-center">Rp. {{ number_format($detail->produk->harga) }}</td>
                                        <td class="text-center">{{ $detail->qty }}</td>
                                        <td class="text-right">Rp. {{ number_format($detail->subtotal) }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-right"><strong>Subtotal</strong></td>
                                    <td class="thick-line text-right">Rp. {{ number_format($total) }}</td>
                                </tr>
                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-right"><strong>Biaya Pengiriman</strong></td>
                                    <td class="thick-line text-right">Rp. {{ number_format(20000) }}</td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-right"><strong>Total</strong></td>
                                    <td class="no-line text-right">Rp. {{ number_format(20000 + $total) }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection