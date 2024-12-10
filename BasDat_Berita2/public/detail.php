<!-- BE -->
<?php
require '../config/db.php'; //berisi fungsi untuk menghubungkan ke mongo db

$collection = connectMongoDB(); //memanggil fungsi connectMongoDB dari dv untuk mendapatkan referensi ke koleksi database mongo DB
$id = new MongoDB\BSON\ObjectId($_GET['id']); //membuat object id dari nilai id yang diterima melalui URL get id
//objectid diperlukan untuk mencari dokumen berdasarkan id
$news = $collection->findOne(['_id' => $id]); //mencari dokumen di koleksi database mongoDB dengan _id yang sesuai dengan $id
?>

<!-- FE -->
<!DOCTYPE html> <!-- deklarasi dokumen  -->
<html lang="en"> <!-- menentukan elemen root html dengan menggunakan bahasa inggris -->

<head>
    <!-- menentukan encoding karakter (UTF-8) -->
    <meta charset="UTF-8"> 
    <!-- Mengatur agar halaman dapat bersifat responsif -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- menampilkan judul halaman yang muncul di browser -->
    <title>Detail Berita</title>
    <!-- Memuat CSS untuk styling halaman, dari bootstrap maupun css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <!-- Bagian header yang berisi navigasi -->
    <header>
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <!-- ketika kita melakukan klik pada berita nih akan kembali ke halaman pengguna awal -->
                <a class="navbar-brand font-weight-bold" href="../public/index.php">BERITA NIH</a>
            </div>
        </nav>
    </header>

    <!-- Menampilkan container bootstrap dengan margin atas (mt-4) untuk tampilan isi berita -->
    <div class="container mt-4">
        <!-- menampilkan data variable PHP yang berisi judul berita, dengan menggunakan heading 1 -->
        <h1><?php echo $news['title']; ?></h1>
        <!-- <em> digunakan untuk menampilkan teks dengan gaya miring -->
        <!-- autor untuk menampilkan nama penulis berita yang ada dalam variable news -->
        <!-- melakukan create yang mengambil data tanggal, mengubah ke objek dan menampilkan tanggal dengan format YYYY-MM-DD -->
        <p><em>Ditulis oleh <?php echo $news['author']; ?> | <?php echo $news['created_at']->toDateTime()->format('Y-m-d'); ?></em></p>

        <!-- mengecek apakah gambar pada varibale news ada, jika ada menentukan path gambar yang disimpan di direktori upload dengan nama file yang berada pada variable news -->
        <!-- html img-fluids untuk mencegah serangan XSS dengan mengubah karakter menjadi HTML-->
        <!-- img fluid = kelas css yang membuat gamabr responsif -->
        <?php if (!empty($news['image'])): ?>

            <img src="../uploads/<?php echo htmlspecialchars($news['image']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($news['title']); ?>">
        <?php endif; ?>

        <!-- membuat kelas dengan margin top sebesar 4 -->
        <!-- membuat tag HTML untuk paragraf -->
        <!-- menampilkan konten berita yang disimpan dalam halaman news konten -->
        <div class="mt-4">
            <p><?php echo $news['content']; ?></p>
        </div>
    </div>

    <!-- untuk mempermudah manipulasi DOM -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- untuk elemen popover dan dropdown  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <!-- library utama bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
