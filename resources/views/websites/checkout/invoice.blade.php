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
                    <h2>Invoice</h2><h3 class="pull-right">Order # 12345</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong>Billed To:</strong><br>
                            John Smith<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Springfield, ST 54321
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                            <strong>Shipped To:</strong><br>
                            Jane Smith<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Springfield, ST 54321
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong>Payment Method:</strong><br>
                            Visa ending **** 4242<br>
                            jsmith@email.com
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                            <strong>Order Date:</strong><br>
                            March 7, 2014<br><br>
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
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <tr>
                                    <td>BS-200</td>
                                    <th><strong>Patata</strong></th>
                                    <td class="text-center">$10.99</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$10.99</td>
                                </tr>
                                <tr>
                                    <td>BS-400</td>
                                    <th><strong>Patata</strong></th>
                                    <td class="text-center">$20.00</td>
                                    <td class="text-center">3</td>
                                    <td class="text-right">$60.00</td>
                                </tr>
                                <tr>
                                    <td>BS-1000</td>
                                    <th><strong>Patata</strong></th>
                                    <td class="text-center">$600.00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$600.00</td>
                                </tr>
                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                    <td class="thick-line text-right">$670.99</td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Shipping</strong></td>
                                    <td class="no-line text-right">$15</td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-right"><strong>Total</strong></td>
                                    <td class="no-line text-right">$685.99</td>
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