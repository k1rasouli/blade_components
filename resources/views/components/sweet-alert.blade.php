<script src="/libs/sweet_alert_2/sweetalert2.min.js"></script>
<script>
    Swal.fire({
        title: '{{ $message }}',
        html: '{!! $errors !!}',
        icon: '{{ $type }}',
        confirmButtonText: '{{ $confirmButtonText }}',
        buttonsStyling: false,
        customClass: {
            confirmButton: 'btn btn-{{ $confirmButtonType }}'
        },
    })
</script>
