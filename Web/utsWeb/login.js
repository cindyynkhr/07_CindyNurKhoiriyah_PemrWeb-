$(document).ready(function(){
    $('#login-formcindy').submit(function(e){
        e.preventDefault();

        var formData = $(this).serialize(); // Mengambil data form

        $.ajax({
            type: 'POST',
            url: 'sessionLogin.php',
            data: formData,
            processData: false,
            success: function(response){
                if(response.trim() === "success") {
                    window.location.href = "homeSession.php"; // Arahkan ke halaman home jika login berhasil
                } else {
                    $('#status').html(response); // Tampilkan pesan error jika gagal
                }
            },
            error: function() {
                $('#status').html("Terjadi kesalahan. Silakan coba lagi.");
            }
        });
    });
});
