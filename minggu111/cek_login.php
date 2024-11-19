<!-- <!--  -->
// if (session_status() === PHP_SESSION_NONE)
//     session_start();

// include "config/koneksi.php";
// include "fungsi/pesan_kilat.php";
// include "fungsi/anti_injection.php";

// $username = antiinjection($koneksi, $_POST['username']);
// $password = antiinjection($koneksi, $_POST['password']);

// $query = "SELECT username, level, salt, password as hashed_password FROM user WHERE username = '$username'";
// $result = mysqli_query($koneksi, $query);
// $row = mysqli_fetch_assoc($result);
// mysqli_close($koneksi);
// $salt = $row['salt'];
// $hashed_password = $row['hashed_password'];

// if ($salt !== null && $hashed_password !== null) {
//     $combined_password = $salt . $password;

//     if (password_verify($combined_password, $hashed_password)) {
//         $_SESSION['username']  = $row['username'];
//         $_SESSION['level'] = $row['level'];
//         header("Location: index.php");
//     } else {
//         pesan('danger', "Login gagal. Password Anda Salah.");
//         header("Location: login.php");
//     }
// } else {
//     pesan('warning', "Username tidak ditemukan.");
//     header("Location: login.php");
// } -->


<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "config/koneksi.php";
include "fungsi/pesan_kilat.php";
include "fungsi/anti_injection.php";

// Ambil data dari form dan lakukan sanitasi
$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

// Query untuk mendapatkan data pengguna berdasarkan username
$query = "SELECT username, level, salt, password as hashed_password FROM user WHERE username = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
mysqli_close($koneksi);

// Cek apakah username ditemukan
if ($row) {
    $salt = $row['salt'];
    $hashed_password = $row['hashed_password'];

    // Gabungkan salt dengan password dari form
    $combined_password = $salt . $password;

    // Verifikasi password
    if (password_verify($combined_password, $hashed_password)) {
        // Set session jika login berhasil
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];

        // Redirect ke halaman utama
        header("Location: index.php");
        exit;
    } else {
        // Password salah
        pesan('danger', "Login gagal. Password Anda salah.");
        header("Location: login.php");
        exit;
    }
} else {
    // Username tidak ditemukan
    pesan('warning', "Username tidak ditemukan.");
    header("Location: login.php");
    exit;
}
?>
