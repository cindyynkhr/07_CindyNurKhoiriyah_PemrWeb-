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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

    
  </head>
  <body>
    <div class="main-container d-flex">
      <!-- Sidebar -->
      <div class="sidebar" id="side_nav" style="width:300">
        <div class="header-box px-xl-5 pt-3 pb-2 d-flex justify-content-between">
          <img alt="Logo E-Tatib" src="../img/logo.svg" />
          <button class="btn d-md-none d-block close-btn px-1 py-0 text-dark">
            <i class="fas fa-stream"></i>
          </button>
        </div>

        <ul class="list-unstyled px-2 py-1">
          <li class="active"><a href="dashboard.html" class="text-decoration-none px-3 py-3 d-block fw-bold"><i class="fas fa-home"></i> Dashboard</a></li>
          <li>
            <a href="dataPelanggaran.php" class="text-decoration-none px-3 py-3 d-block fw-bold"><i class="fas fa-book"></i> Data Pelanggaran</a>
          </li>
          <li><a href="cetakSurat.php" class="text-decoration-none px-3 py-3 d-block fw-bold"><i class="fas fa-print"></i> Riwayat Pelaporan</a></li>
          <li><a href="informasi.php" class="text-decoration-none px-3 py-3 d-block fw-bold"><i class="fas fa-info-circle"></i> Informasi</a></li>
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
        <div class="content px-3 pt-3">
        <h2 class="h3 mb-3" style="font-size: 24px">Pelanggaran Terbaru</h2>
        
<div class="row">
  <div class="col-md-8">
    <div class="biodata">
      <p class="fw-medium mb-3" style="font-size: 20px">Statistik Data Pelanggaran</p>
      <canvas id="myChart" style="width:100%;max-width:100%;"></canvas>
    </div>
  </div>
  <div class="col-md-4">
    <div class="biodata">
      <p class="fw-medium mb-3" style="font-size: 20px">Grafik Lain</p>
      <div id="myPlot" style="width:100%;max-width:100%; "></div>
    </div>
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

      //Chart
      const xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});

//Bar Chart
const xArray = ["Italy", "France", "Spain", "USA", "Argentina"];
const yArray = [55, 49, 44, 24, 15];

const layout = {title:"World Wide Wine Production"};

const data = [{labels:xArr, values:yArray, hole:.4, type:"pie"}];

Plotly.newPlot("myPlot", data, layout);
    </script>
  </body>
</html>
