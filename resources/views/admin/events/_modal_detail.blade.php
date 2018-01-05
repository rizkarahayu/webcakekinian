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
                                <center><legend>Details Events</legend></center>
                                <div class="box box-info">
                                    <form class="form-horizontal">
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class=".col-sm-4 .col-sm-pull-4">
                                                        <div class="image text-center">
                                                            <img src="{{ url('img\admin\event\1.jpg') }}" style="max-width:250px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Nama Event</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="inputPassword3" disabled placeholder="Masukan Nama Event">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-calendar-check-o"> &nbsp;</i>Tanggal Mulai</label>
                                                    <div class="col-md-4">
                                                        <input type="date" class="form-control" id="inputPassword3" disabled placeholder="Masukkan Tanggal Mulai">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-calendar-times-o"> &nbsp;</i>Tanggal Selesai</label>
                                                    <div class="col-md-4">
                                                        <input type="date" class="form-control" id="inputPassword3" disabled placeholder="Masukkan Tanggal Selesai">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Deskripsi Events</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" rows="4" disabled placeholder="Masukkan Alamat"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ url('/ck-admin/events') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>

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