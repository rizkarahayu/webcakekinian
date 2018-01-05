<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getDetail(id) {
        $.ajax({
            type    : 'GET',
            url     : '/ck-admin/api/events/' + id,
            data    : {},
            success : function (res) {
                console.log(res);

                $('#gambar').src(res.gambar);
                $('#name').val(res.nama);
                $('#toko_id').val(res.toko_id);
                $('#deskripsi').val(res.deskripsi);
                $('#tanggal_mulai').val(res.tanggal_mulai);
                $('#tanggal_selesai').val(res.tanggal_selesai);
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
                    url     : '/ck-admin/events/delete/' + id,
                    data    : {},
                    success : function (res) {
                        window.location.href = '/ck-admin/events';
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