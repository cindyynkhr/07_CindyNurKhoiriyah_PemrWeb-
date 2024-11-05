<?php
session_start();
header('Content-Type: application/json');

// Mengirimkan Token Keamanan
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Mendapatkan header dari request
$headers = apache_request_headers();

// Cek apakah header Csrf-Token ada
if (isset($headers['Csrf-Token'])) {
    // Cek apakah token di header sesuai dengan token di sesi
    if ($headers['Csrf-Token'] === $_SESSION['csrf_token']) {
        // Jika token benar, lanjutkan dengan permintaan
        exit(json_encode(['success' => 'Valid CSRF token.']));
    } else {
        // Jika token salah
        exit(json_encode(['error' => 'Wrong CSRF token.']));
    }
} else {
    // Jika header Csrf-Token tidak ditemukan
    exit(json_encode(['error' => 'No CSRF token provided.']));
}
?>
