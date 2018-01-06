<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getDetailToko(id) {
        $.ajax({
            type    : 'GET',
            url     : 'api/toko/' + id,
            data    : {},
            success : function (res) {
                console.log(res);

                $('#name').val(res.nama);
                $('#username').val(res.users.username);
                $('#email').val(res.users.email);
                $('#kota').val(res.kota);
                $('#alamat').val(res.users.alamat);
                $('#no_telp').val(res.users.no_telp);
                $('#siup').val(res.siup);
                $('#npwp').val(res.npwp);
                $('#nama_bank').val(res.nama_bank);
                $('#no_rek').val(res.no_rek);
                $('#gambar').src(res.users.gambar);
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
                    url     : '/ck-admin/toko/delete/' + id,
                    data    : {},
                    success : function (res) {
                        window.location.href = '/ck-admin/toko';
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