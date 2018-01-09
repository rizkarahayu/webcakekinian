

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Data Laporan</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tgl Transaksi</th>
                            <th>No Produk</th>
                            <th>Nama Produk</th>
                            <th>Nama Toko</th>
                            <th>Stok</th>
                            <th>QTY</th>
                            <th>Harga</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        @if (count($produk) > 0)
                            @foreach($produk as $i => $produks)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td></td>
                            <td>{{ $produks->id}}</td>
                            <td>{{ $produks->nama}}</td>
                            <td>{{ $produks->toko->nama}}</td>
                            <td>{{ $produks->stock}}</td>
                            <td></td>
                            <td>{{ $produks->harga}}</td>
                        </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>{{ \App\GeneralFunction::$EMPTY_DATA_MESSAGE }}</td>
                            </tr>
                        @endif
                        </tbody>
                        <th class="col-ms-6"><bold>Total Pendapatan</bold></th>
                        <tr> <th class="col-ms-6"><bold>Total Stok Terjual</bold></th></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>




