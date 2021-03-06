<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getDetailProduk(id) {
        $.ajax({
            type    : 'GET',
            url     : 'api/produk/' + id,
            data    : {},
            success : function (res) {
                console.log(res);

              //  $('#gambar').src(res.gambar);
                $('#nama').val(res.nama);
                $('#toko').val(res.toko.nama);
                $('#deskripsi').val(res.deskripsi);
                $('#harga').val(res.harga);
                $('#stock').val(res.stock);
            }

        });
    }

    function actionDelete(event, id) {
        event.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
            swal(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            ).then(function () {
                $.ajax({
                    type    : 'GET',
                    url     : '/ck-admin/produk/delete/' + id,
                    data    : {},
                    success : function (res) {
                        window.location.href = '/ck-admin/produk';
                    }

                });
            })
        }
    });
    }
</script>

<!-- Page script -->
<script>
    $(function () {
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

        })
    })
</script>