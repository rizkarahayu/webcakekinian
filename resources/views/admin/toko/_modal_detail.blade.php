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
                                <center><legend>Details Toko</legend></center>
                                <div class="box box-info">
                                    <form class="form-horizontal">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <div class="image text-center">
                                                    <img src="{{ url('img\admin\logo\banana_foster.jpg') }}" style="max-width:200px">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Id Toko</label>

                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="inputPassword3" disabled placeholder="Masukkan ID Toko">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Nama Toko</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword3" disabled placeholder="Masukkan Nama Toko">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>SIUP</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword3" disabled placeholder="Masukkan SIUP">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>NPWP</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword3" disabled placeholder="Masukkan NPWP">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama Kota</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword3" disabled placeholder="Banyuwangi">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>

                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="4" disabled placeholder="Masukkan Alamat"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Bank</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword3" disabled placeholder="Masukkan Bank Yang Digunakan">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Nomor Rekening </label>

                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="inputPassword3" disabled placeholder="Masukkan Rekening Yang Digunakan">
                                                </div>
                                            </div>

                                            <a href="{{ url('/ck-admin/toko') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>

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