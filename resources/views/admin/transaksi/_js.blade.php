<script>
$.ajaxSetup({
        headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getDetail(id) {
        $.ajax({
            type    : 'GET',
            url     : 'api/transaksi/' + id,
            data    : {},
            success : function (res) {
            console.log(res);

            //  $('#gambar').src(res.gambar);
            $('#name').val(res.detail_pengiriman.nama_pembeli);
            $('#no_telp').val(res.detail_pengiriman.no_telp);
            $('#alamat').val(res.detail_pengiriman.alamat);
            $('#kabupaten').val(res.detail_pengiriman.kabupaten);
            $('#kode_pos').val(res.detail_pengiriman.kode_pos);
        }

        });
    }
    </script>
