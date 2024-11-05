<?php
// Mulai session pada bagian paling awal
session_start();

// Periksa jika form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi username dan password
    if ($username=="Cin" && $password=="Cin") {
        $_SESSION["username"] = $username;
        $_SESSION["status"] = 'login';
        header("Location: homeSession.php"); // Redirect ke halaman home
        exit(); // Hentikan eksekusi skrip setelah redirect
    } else {
        echo "Gagal login. Silahkan login lagi <a href='loginForm.html'>Halaman Login</a>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Home</title>
        <link rel="stylesheet" href="style2.css">
        <script src="../minggu6/jquery-3.7.1.js"></script>
<!-- 
         <script>
            var i =  0;
            $(document).ready(function(){
            $('.slidertittle, .slider img').hide();
            showNextImage();
            setInterval('showNextImage()', 3000);
            });
            function showNextImage(){
            i++;
            $('#sliderImage' + i).appendTo('.slider').fadeIn(1100).delay(1100).fadeOut(1100);
            $('#tittle' + i).appendTo('.slider').fadeIn(1100).delay(1100).fadeOut(1100);
            if(i==2) i = 0;
            }
        </script> -->

    </head>
    <body>
    <div class="header">
        <h2>Laundry Cindy</h2>
        <nav>
            <ul>
                <li><a href="homeSession.php">Home</a></li>
                <li><a href="cek_harga.php">Cek Harga</a></li>
                <li><a href="sessionLogout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
   
     <!-- <div class="slider">
            <img id="sliderImage1"  src="laun2.jpg">
            <div class="slidertittle" id="tittle1">Gambar1</div>

            <img id="sliderImage1"  src="laun2.jpg">
            <div class="slidertittle" id="tittle2">Gambar2</div>
        </div>  -->
    <div class="banner-slider">
        <img src="laun2.jpg" alt="Banner Image 2">
    </div>
    
    <div class="content">
        <h3>Company Profile</h3>
        <p>
        <?php
        echo "Bersih Kilat adalah usaha laundry profesional yang berfokus pada memberikan layanan cuci pakaian 
        berkualitas dengan cepat dan efisien. Kami melayani kebutuhan cuci pakaian harian, pakaian kerja, 
        sprei, selimut, hingga pakaian berbahan khusus seperti jas atau gaun. Kami menggunakan teknologi 
        mesin modern serta deterjen berkualitas yang ramah lingkungan, sehingga pakaian pelanggan terawat 
        dengan baik dan tetap wangi segar.";
        ?>
        </p>
    </div>

    <div class="footer">
        <p>Website Footer</p>
    </div>
    </body>
</html>
