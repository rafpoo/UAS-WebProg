function validateFileSize(input) {
    const file = input.files[0];
    if (file.size > 2097152) { // 2 MB
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Ukuran file maksimal 2 MB!',
            confirmButtonText: 'OK'
        });
        input.value = ''; // Reset input
    }
}