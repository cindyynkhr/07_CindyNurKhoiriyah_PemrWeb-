<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $errors = []; // untuk menyimpan pesan eror yang terjadi

    // Validasi di server
    if (empty($username)) {
        $errors[] = "Username harus terisi.";
    }

    if (empty($password)) {
        $errors[] = "Password harus terisi.";
    } elseif (strlen($password) > 6) {
        $errors[] = "Password maksimal 6 karakter.";
    } elseif (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
        $errors[] = "Password harus terdiri dari huruf besar dan kecil.";
    }

    // Jika ada error
    if (!empty($errors)) {
        echo implode(" ", $errors) . "<br>";
    } else {
        // Jika validasi berhasil, simpan sesi dan arahkan ke halaman home
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        echo "success"; // Mengirimkan respons "success" jika login berhasil
    }
}
?>