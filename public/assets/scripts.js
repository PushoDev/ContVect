//Custom Position Message
$('#cambios-confirmados').click(function () {
    swal(
        {
            position: 'top-end',
            type: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        }
    )
});