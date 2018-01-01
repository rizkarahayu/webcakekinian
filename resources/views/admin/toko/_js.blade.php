<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getDetailUser(id) {
        $.ajax({
            type    : 'GET',
            url     : '/ck-admin/api/users/' + id,
            data    : {},
            success : function (res) {
                console.log(res);

                $('#name').val(res.name);
                $('#username').val(res.username);
                $('#alamat').val(res.alamat);
                $('#no_telp').val(res.no_telp);
                $('#email').val(res.email);
                $('#role_name').val(res.role_users.role);
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