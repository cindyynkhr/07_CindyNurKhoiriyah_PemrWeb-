<?php
require '../vendor/autoload.php'; //mengimpor file autoload dari komposer(untuk memuat pustaka), digunakan untuk berkomunikasi dengan mongo db

function connectMongoDB() { //untuk membuat koneksi ke database
    $client = new MongoDB\Client("mongodb://localhost:27017"); //objek untuk terhubung ke server mongo db, dan disitu diberikan url dari mongo db
    return $client->webberita->news; //untuk mengembalikan referensi news ke database webberita
} //$digunakan untuk deklarasi suatu variable 
?>
