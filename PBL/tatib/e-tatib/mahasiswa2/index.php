<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tatib</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> <!-- Link ke file CSS eksternal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzG0sAfHozSMnCS+yD+0006cZpaynQ+wXi+3D11WZYZKdYbaIIqWk+tK" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Nunito Sans', sans-serif;
            background-color: #fff;
        }

        .header-image {
            background-image: url('img/bg(1).png');
            background-size: cover;
            background-position: center;
            height: 900px; /* Fixed height */
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            margin-bottom: -50px;
        }

        .btn-primary {
            background-color: #fd7e14;
            border-color: #fd7e14;
        }

        .btn-primary:hover {
            background-color: #e56706;
            border-color: #e56706;
        }

        .main-content {
            /* margin-right : 150px;
            margin-left: 150px; */
            /* margin-le: 0 50px; */
            /* padding: 50px 15px; */
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #333;
            text-align: center;
        }

        .benefit-list {
            margin: 20px 0;
        }

        .social-proof img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 15px;
            text-align: center;
        }

        /* Navbar customization */
        .navbar-nav {
            gap : 20px;
            text-align: center;
        }

        .navbar-toggler {
            border-color: #fd7e14;
        }

        @media (min-width: 1200px) {
            .navbar {
                margin : 0 ;
            }
        }

        section #manfaat{
        }

        section {
            margin-bottom: 110px;
        }

        
    </style>

</head>
<body>

<main id="main" class="main-content container">

<nav class="navbar navbar-expand-lg navbar-light pt-2 pb-2">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#"><img src="img/logo.svg" height="50px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tentang">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#manfaat">Manfaat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#list-tata-tertib">List Tata Tertib</a>
        </li>
      </ul>
      <a href="page/login.php" class="btn btn-primary px-4 ms-3">Login</a>
    </div>
  </div>
</nav>

</main>

<header class="header-image d-flex align-items-start">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-5 text-dark text-start">
                <h1 class="fw-bold" style="font-size: 45px;">Sistem Informasi Tata Tertib Jurusan Teknologi Informasi</h1>
                <p class="lead" style="font-size: 16px;">Sistem Tata Tertib yang Membantu Menciptakan Lingkungan Belajar yang Kondusif dan Profesional</p>
                <a href="page/login.php" class="btn btn-primary btn-lg mt-3">Login</a>
            </div>
        </div>
    </div>
</header>


<main id="main" class="main-content container">

<section id="prodi" class="text-center">
        <!-- <h2 class="section-title">Program Studi</h2> -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">D-IV TEKNIK INFORMATIKA</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">D-IV SISTEM INFORMASI BISNIS</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">D-II PPLS</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="manfaat" class="text-center">
        <div class="row align-items-center g-4">
            <div class="col-md-7">
                <div class="text-start">
                    <h5 class="mb-4 fw-bold">Tentang E-TATIB JTI</h5>
                    <p>Tata tertib di kampus sangat penting untuk menciptakan lingkungan belajar yang kondusif dan profesional. Dengan mematuhi tata tertib, mahasiswa, dosen, dan staf kampus dapat bekerja sama dengan lebih baik, mengurangi konflik, dan meningkatkan efisiensi dalam berbagai kegiatan.</p>
                    <div class="d-flex align-items-center">
                        <img src="img/qr.png" alt="QR Code" width="75px" height="75px" class="me-3">
                        <div>
                            <p style="font-size: 20px; margin-bottom: 5px;">QR Code</p>
                            <p style="font-size: 16px;">QR Code didapatkan setelah login ke sistem. QR Code digunakan untuk mengidentifikasi apakah mahasiswa JTI atau bukan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="img/svg1.svg" alt="Illustration of E-Tatib Benefits" class="img-fluid" style="max-width: 100%; height: 340px;">
            </div>
        </div>
    </section>



    <section id="list-tata-tertib" class="text-center">
    <div class="row align-items-center g-4">
        <div class="col-md-5">
            <img src="img/svg2.svg" alt="Illustration of E-Tatib Benefits" class="img-fluid" style="max-width: 100%; height: 300px;">
        </div>
        <div class="col-md-7">
            <div class="text-start">
                <h5 class="mb-4 fw-bold">Manfaat Utama</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle-fill me-2"></i><strong>Hemat Waktu:</strong> Kurangi penggunaan kertas dan kelola semua data secara digital.</li>
                    <li><i class="bi bi-check-circle-fill me-2"></i><strong>Transparansi:</strong> Memudahkan pelacakan pelanggaran dengan data yang jelas dan transparan.</li>
                    <li><i class="bi bi-check-circle-fill me-2"></i><strong>Keberagaman:</strong> Menjamin penegakan aturan yang adil dan tanpa bias.</li>
                </ul>
            </div>
        </div>
    </div>
</section>


    <section id="list-tata-tertib" class="text-center">
        <div class="row align-items-center g-4">
            
            <div class="col-md-6">
                <div class="text-end">
                    <h5 class="mb-4 fw-bold">Informasi Tata Tertib</h5>
                    <ul class="list-unstyled">
                        <li>Tidak berbicara kotor.<i class="bi bi-x-circle-fill me-2"></i></li>
                        <li><i class="bi bi-x-circle-fill me-2"></i>Berkomunikasi dengan tidak sopan, baik tertulis atau tidak tertulis kepada mahasiswa, dosen, karyawan, atau orang lain</li>
                        <li><i class="bi bi-x-circle-fill me-2"></i>Larangan merokok di area kampus.</li>
                        <li><i class="bi bi-x-circle-fill me-2"></i>Tidak melakukan plagiasi.</li>
                    </ul>
                    <a href="#cta" class="btn btn-primary btn-l mt-3">Selengkapnya</a>
                </div>
            </div>

            <div class="col-md-6">
                <img src="img/svg3.svg" alt="Illustration of E-Tatib Benefits" class="img-fluid" style="max-width: 100%; height: 300px;">
            </div>
        </div>
    </section>
    
    
</main>


<footer class="footer">
    <p>&copy; 2024 Politeknik Negeri Malang - All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0J59sAqXG8b9l7F2zZ8C+GoX7LEpmKh6ab4tsE7mrSTJpCk2" crossorigin="anonymous"></script>
<script src="js/script.js"></script> <!-- Link ke file JavaScript eksternal -->
</body>
</html>
