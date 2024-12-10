<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../css/style.css   " />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet" />

    
  </head>
  <body>
    <div class="main-container d-flex">
      <!-- Sidebar -->
      <div class="sidebar" id="side_nav">
        <div class="header-box px-xl-5 pt-3 pb-4 d-flex justify-content-between">
          <img alt="Logo E-Tatib" src="../img/logo.svg" />
          <button class="btn d-md-none d-block close-btn px-1 py-0 text-dark">
            <i class="fas fa-stream"></i>
          </button>
        </div>

        <ul class="list-unstyled px-2">
          <li class="active"><a href="dashboard.html" class="text-decoration-none px-3 py-2 d-block fw-bold"><i class="fas fa-home"></i> Dashboard</a></li>
          <li>
            <a href="dataPelanggaran.php" class="text-decoration-none px-3 py-2 d-block fw-bold"><i class="fas fa-book"></i> Data Pelanggaran</a>
          </li>
          <li><a href="cetakSurat.php" class="text-decoration-none px-3 py-2 d-block fw-bold"><i class="fas fa-print"></i> Cetak Surat</a></li>
          <li><a href="informasi.php" class="text-decoration-none px-3 py-2 d-block fw-bold"><i class="fas fa-info-circle"></i> Informasi</a></li>
        </ul>
      </div>

      <!-- Content -->
      <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light py-2">
          <div class="container-fluid">
            <div class="d-flex align-items-center w-100">
              <button class="btn px-0 py-0 open-btn">
                <i class="fas fa-stream me-2 d-md-none"></i>
              </button>
              <span class="fw-medium" style="font-size: 28px">Data Pelanggaran</span>
              <div class="d-flex ms-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../img/fotoagung.jpeg" alt="User Profile Picture" class="rounded-circle" width="50" height="50" />
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#change-password">Ganti Password</a></li>
                    <li><a class="dropdown-item" href="#logout">Logout</a></li>
                  </ul>
                </li>
              </div>
            </div>
          </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="content px-3 pt-3">

          <div class="alert alert-success" role="alert">Selamat datang <strong>Agung Fradiansyah.</strong> Ayo patuhi peraturan kampus demi menciptakan lingkungan belajar yang aman, nyaman, dan kondusif.</div>

          <div class="row">
            <div class="col-md-7">
              <div class="biodata">
                <div class="row">
                  <!-- Kolom untuk foto dan tombol -->
                  <div class="col-3 d-flex flex-column align-items-center">
                    <img alt="Profile Picture" height="236px" src="../img/fotoagung.jpeg" width="177px" class="mb-2" />
                    <button class="btn-generate mt-2">Generate QR Code</button>
                  </div>
                  <!-- Kolom untuk biodata -->
                  <div class="col-9">
                    <table class="mt-3 table table-bordered table-hover">
                      <tr>
                        <td>Nama</td>
                        <td>: Muhammad Alif Febriansyah</td>
                      </tr>
                      <tr>
                        <td>NIM</td>
                        <td>: 2341720025</td>
                      </tr>
                      <tr>
                        <td>Kelas</td>
                        <td>: 2E</td>
                      </tr>
                      <tr>
                        <td>Prodi</td>
                        <td>: Teknik Informatika</td>
                      </tr>
                      <tr>
                        <td>Jurusan</td>
                        <td>: Teknologi Informasi</td>
                      </tr>
                      <tr>
                        <td>TTL</td>
                        <td>: 28, Februari 2024</td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td>: Laki-laki</td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>: Pasuruan</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>: aliffebriansyah@gmail.com</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <!-- Lapisan background putih -->
              <div class="bg-white p-3 position-relative" style="min-height: 200px">
                <h5 class="fw-bold mb-3 text-danger">Surat Peringatan</h5>
                <!-- Elemen dengan latar merah -->
                <div class="warning bg-danger text-white p-3 rounded">
                  <p>Hallo Muhammad Alif Febriansyah, anda belum memiliki surat peringatan.</p>
                </div>
                <!-- Tombol -->
                <button class="btn btn-danger mt-4 mb-3" style="bottom: 10px; right: 10px"><i class="bi bi-info-circle me-2"></i>Lihat Pelanggaran</button>
              </div>
            </div>

</div>
          </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
      $(".sidebar ul li").on("click", function () {
        $(".sidebar ul li.active").removeClass("active");
        $(this).addClass("active");
      });

      $(".open-btn").on("click", function () {
        $(".sidebar").addClass("active");
      });

      $(".close-btn").on("click", function () {
        $(".sidebar").removeClass("active");
      });
    </script>
  </body>
</html>
