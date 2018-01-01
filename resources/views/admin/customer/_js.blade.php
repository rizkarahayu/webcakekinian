<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getDetailCustomer(id) {
        $.ajax({
            type    : 'GET',
            url     : '/ck-admin/api/customer/' + id,
            data    : {},
            success : function (res) {
                console.log(res);
                $('#name').val(res.users.name);
                $('#username').val(res.users.username);
                $('#alamat').val(res.users.alamat);
                $('#no_telp').val(res.users.no_telp);
                $('#email').val(res.users.email);

                $('#jklm').val(res.jklm);
                $('#tgl_lahir').val(res.tgl_lahir);
                $('#nama_bank').val(res.nama_bank);
                $('#no_rek').val(res.no_rek);
            }

        });
    }

    function actionChangeStatus(event, status, id) {
        event.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "You won't be undo this process!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, change its status!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type    : 'GET',
                    url     : '/ck-admin/customer/' + status + '/' + id,
                    data    : {},
                    success : function (res) {
                        swal(
                            'Change Status!',
                            res.message,
                            'success'
                        ).then(function () {
                            window.location.href = '/ck-admin/customer';
                        });
                    }
                });
            }
        });
    }
</script>