<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <form action='' method='POST' class="form-horizontal" role="form">
                            <fieldset>
                                <center><legend>Details Produk</legend></center>
                                <div class="box box-info">
                                    <form class="form-horizontal">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <div class="image text-center" >
                                                    &nbsp;<img src="{{ url('img\admin\banana\1.jpg') }}" id="gambar" class="img-circle" style="max-width:280px">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama Produk</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="nama" disabled placeholder="Savana">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama Toko</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="toko" disabled placeholder="Savanacake">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Stok</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="stock" disabled placeholder="savanacake@gmail.com">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Harga</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="harga" disabled placeholder="Banyuwangi">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Deskripsi</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="deskripsi" disabled placeholder="Jl. Prajurit Syakur 48">
                                                </div>
                                            </div>
                                           

                                            <a href="{{ url('/ck-admin/produk') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>