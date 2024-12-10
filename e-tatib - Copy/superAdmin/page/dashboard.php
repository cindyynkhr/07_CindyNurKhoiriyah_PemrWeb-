<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>
  <div class="main-container">
    <!-- Sidebar -->
    <div class="sidebar" id="side_nav">
      <div class="header-box px-5 pt-3 pb-2 d-flex justify-content-between">
        <img alt="Logo E-Tatib" src="../img/logo.svg" />
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-dark">
          <i class="fas fa-stream"></i>
        </button>
      </div>
      <ul class="list-unstyled px-2 py-1">
        <li class="active">
          <a href="dashboard.php" class="text-decoration-none px-3 py-3 d-block fw-bold"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li class="has-submenu">
            <a href="#" class="text-decoration-none px-3 py-3 d-block fw-bold">
                <i class="fas fa-book"></i> Kelola Data
            </a>
            <ul class="submenu list-unstyled px-2 py-1">
                <li><a href="data1.php" class="text-decoration-none px-3 py-2 d-block">Data List Pelanggaran</a></li>
                <li><a href="data2.php" class="text-decoration-none px-3 py-2 d-block">Data Jurusan</a></li>
            </ul>
        </li>
        <li>
        <li>
          <a href="informasi.php" class="text-decoration-none px-3 py-3 d-block fw-bold"><i class="fas fa-info-circle"></i> Informasi</a>
        </li>
      </ul>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light py-2 position-fixed">
      <div class="container-fluid">
        <div class="d-flex align-items-center w-100">
          <button class="btn px-0 py-0 open-btn">
            <i class="fas fa-stream me-2 d-md-none"></i>
          </button>
          <span class="fw-medium" style="font-size: 28px">Dashboard</span>
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
    <div class="content px-3 pt-3" style="margin-top: 60px;">
      <!-- Cards -->
      <div class="row mb-3">
        <!-- Card 1 -->
        <div class="col-md-3">
          <div class="card py-2">
            <div class="card-body">
              <div class="row">
                <div class="col-4 text-end align-self-center">
                  <i class="fas fa-arrow-up" style="color: #17A2B8; background-color: rgba(23, 162, 184, 0.25); border-radius: 50%; width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; font-size: 24px;"></i>
                </div>
                <div class="col-8">
                  <h5 class="card-title fw-semibold" style="font-size: 28px">234</h5>
                  <p class="card-text fw-semibold" style="font-size: 16px; color: #b1b1b1">Total Pelanggaran</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
            <div class="card py-2">
              <div class="card-body">
                <div class="row">
                  <div class="col-4 text-end align-self-center">
                    <i class="bi bi-arrow-repeat" STYLE="color: #FFC107;  background-color: rgba(255, 193, 7, 0.25) ; border-radius: 50%; width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; font-size: 24px;"></i>
                  </div>
                  <div class="col-8">
                    <h5 class="card-title fw-semibold" style="font-size: 28px">234</h5>
                    <p class="card-text fw-semibold" style="font-size: 16px; color: #b1b1b1">Pelanggaran Proses</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
          <div class="card py-2">
            <div class="card-body">
              <div class="row">
                <div class="col-4 text-end align-self-center">
                  <i class="fas fa-plus" style="color: #28A745; background-color: rgba(40, 167, 69, 0.25); border-radius: 50%; width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; font-size: 24px;"></i>
                </div>
                <div class="col-8">
                  <h5 class="card-title fw-semibold" style="font-size: 28px">234</h5>
                  <p class="card-text fw-semibold" style="font-size: 16px; color: #b1b1b1">Pelanggaran Terbaru</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
            <div class="card py-2">
              <div class="card-body">
                <div class="row">
                  <div class="col-4 text-end align-self-center">
                    <i class="bi bi-flag-fill" STYLE="color: #FD7E14;  background-color: rgba(253, 126, 20, 0.25) ; border-radius: 50%; width: 50px; height: 50px; display: inline-flex; justify-content: center; align-items: center; font-size: 24px;"></i>
                  </div>
                  <div class="col-8">
                    <h5 class="card-title fw-semibold" style="font-size: 28px">234</h5>
                    <p class="card-text fw-semibold" style="font-size: 16px; color: #b1b1b1">Pelanggaran Selesai</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- Duplicate Cards Example (Remove if Necessary) -->
        <!-- Repeat structure for other cards -->

      </div>

      <!-- <div id="myPlot" style="width:100%;max-width:700px"></div> -->


      <!-- Graphs -->
      <div class="row">
        <div class="col-md-8 col-12">
          <div class="biodata">
            <p class="fw-medium mb-3" style="font-size: 20px">Statistik Data Pelanggaran</p>
            <div id="myPlot" style="width:100%;max-width:100%"></div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="biodata">
            <p class="fw-medium mb-3" style="font-size: 20px">Total Pelanggaran</p>
            <div id="myPlot1" style="width:100%;max-width:100%"></div>
          </div>
        </div>
      </div>

      <div class="bg-white mt-3 p-3">
      <h2 class="h3 mb-3 mt-3 fw-semibold" style="font-size: 24px">Pelanggaran Terbaru</h2>
      <div class="input-group mb-3 gap-2" >
        <div class="form-outline" data-mdb-input-init>
              <input type="search" id="form1" class="form-control" placeholder="Search" />
            </div>
            <div class="form-outline" data-mdb-input-init>
              <input type="search" id="filter" class="form-control" placeholder="Filter" />
            </div>
          </div>
      
          <div class="table-responsive mb-2">
            <table class="table table-bordered table-hover" id="tabel-awal">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Tanggal</th>
                  <th>Jenis Pelanggaran</th>
                  <th>Tingkat</th>
                  <th>Catatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>12345678</td>
                  <td>No Name</td>
                  <td>19/11/2024</td>
                  <td>Merokok di kawasan kampus</td>
                  <td>3</td>
                  <td>19/11/2024</td>
                  <td><button class="btn-detail" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</button></td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>

    </div>
  </div>

  

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>

    //Grafik
    const xArray = ["January<br>2024 ", "February<br>2024", "March<br>2024", "April<br>2024", "May<br>2024", "June<br>2024"];
const yArray = [8, 10, 15, 8, 9, 10]; // Sesuaikan jumlah data dengan xArray

const data = [{
  x: xArray,
  y: yArray,
  mode: "lines", 
  line: { shape: "spline", color: "#fd7e14", width: 2 }, 
}];

const layout = {
  xaxis: {title: "Months"},
  yaxis: {range: [5, 16], title: "Total Pelanggar"},  
  // title: "House Prices vs. Month"  
};

Plotly.newPlot("myPlot", data, layout);

//pie

// Array yang berisi kategori untuk diagram pie
const xArray1 = ["D2 PPLS", "D4 TI", "D4 SIB"];

// Array yang berisi nilai untuk setiap kategori
const yArray1 = [20, 45, 35];

// Menghitung total dari semua nilai dalam yArray1
const total = yArray1.reduce((acc, value) => acc + value, 0);

// Menghitung persentase dari setiap nilai
const percentageArray = yArray1.map(value => (value / total * 100).toFixed(2)); // Menghitung persentase dan membatasi dua angka desimal

// Memperbarui label dengan menambahkan persentase pada setiap kategori
const updatedLabels = xArray1.map((label, index) => `${label}<br>${percentageArray[index]}%`);

// Layout pengaturan untuk diagram pie
const layout1 = {
  title: "From Jan to Okt 2024", // Judul diagram
  legend: {
    orientation: "h", // Menjadikan legend horizontal
    x: 0.5, // Posisi horizontal legend
    xanchor: "center", // Menyelaraskan legend secara horizontal di tengah
    y: -0.2, // Posisi vertikal legend di bawah chart
    yanchor: "bottom" // Menyelaraskan legend secara vertikal
  }
};

// Data untuk diagram pie, menggunakan label yang telah diperbarui dengan persentase
const data1 = [{
  labels: updatedLabels, // Menggunakan label yang telah diperbarui dengan persentase
  values: yArray1, // Nilai-nilai yang digunakan untuk diagram pie
  hole: .6, // Membuat diagram pie menjadi diagram cincin (hole = 0.6)
  type: "pie", // Menentukan jenis chart (pie chart)
  marker: {
    colors: ["#5A6ACF", "#8593ED", "#FD7E14"] // Warna untuk tiap segmen diagram
  },
  textinfo: "none", // Tidak menampilkan teks di dalam diagram
  hovertemplate: "%{label}<br>%{percent}",
}];

// Membuat diagram pie dengan Plotly menggunakan data dan layout yang telah disiapkan
Plotly.newPlot("myPlot1", data1, layout1);


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
