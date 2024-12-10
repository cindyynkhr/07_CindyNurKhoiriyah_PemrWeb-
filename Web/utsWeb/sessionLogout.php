<?php
session_start();
session_destroy();

// Tampilkan pesan logout berhasil (opsional)
echo "Anda berhasil logout. Anda akan diarahkan ke halaman login dalam 3 detik.";

header("refresh:0; url=loginForm.html");
exit();
?>