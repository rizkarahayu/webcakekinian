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
                                                    &nbsp;<img src="{{ url('img\admin\banana\1.jpg') }}" class="img-circle" style="max-width:280px">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Id Produk</label>

                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="inputPassword3" disabled placeholder="1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-birthday-cake"> &nbsp;</i>Nama Produk</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword3" disabled placeholder="Red Velvet Savana Cake">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label  for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Toko</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="toko_id">
                                                        <option  value="1">Patata</option>
                                                        <option  value="2">Lampung Banana Fooster</option>
                                                        <option  value="3">Bosang Makasar</option>
                                                        <option  value="4">Bandung Makuta</option>
                                                        <option  value="5">Queen Puff</option>
                                                        <option  value="6">Lapis Minang Nantigo</option>
                                                        <option  value="7">Malang Struddle</option>
                                                        <option  value="8">Medan Napoleon</option>
                                                        <option  value="9">Surabaya Snowcake</option>
                                                        <option  value="10">Solo Pluffy</option>
                                                        <option  value="11">Mamahke Jogja</option>
                                                        <option  value="12">Bogor Rain Cake</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-hourglass-2"> &nbsp;</i>Stok</label>

                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="inputPassword3" disabled placeholder="232">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-money"> &nbsp;</i>Harga</label>

                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="inputPassword3" disabled placeholder="Rp. 65.000">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-newspaper-o"> &nbsp;</i>Deskripsi</label>

                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="4" disabled placeholder="Red Velvet adalah varian rasa yang paling digemari."></textarea>
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