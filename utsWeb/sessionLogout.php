<?php
session_start();
session_destroy();

// Tampilkan pesan logout berhasil (opsional)
echo "Anda berhasil logout. Anda akan diarahkan ke halaman login dalam 3 detik.";

// Tunggu 3 detik sebelum redirect
header("refresh:0; url=loginForm.html");
exit();
?>