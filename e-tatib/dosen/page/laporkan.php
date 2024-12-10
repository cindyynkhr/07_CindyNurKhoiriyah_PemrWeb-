<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet" />

    <style>
    .hidden {
        display: none;
    }

    #identityCard {
        border: 1px solid #FFA500;
        padding: 20px;
        background-color: #ffff;
        /* margin-top: 20px; */
    }

    .container-fluid {
        display: flex;
        justify-content: center;
    }

    .card {
        max-width: 500px;
        /* Atur lebar maksimal untuk memastikan tata letak rapi */
        width: 100%;
    }
    </style>

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
                <li>
                    <a href="dashboard.php" class="text-decoration-none px-3 py-3 d-block fw-bold"><i
                            class="fas fa-home"></i>
                        Dashboard</a>
                </li>
                <li class="active">
                    <a href="laporkan.php" class="text-decoration-none px-3 py-3 d-block fw-bold"><i
                            class="fas fa-book"></i>
                        Laporkan</a>
                </li>
                <li>
                    <a href="RiwayatPelaporan.php" class="text-decoration-none px-3 py-3 d-block fw-bold"><i
                            class="fas fa-info-circle"></i> Riwayat Pelaporan</a>
                </li>
                <li>
                    <a href="dataPelanggaran.php" class="text-decoration-none px-3 py-3 d-block fw-bold"><i
                            class="fas fa-print"></i> Data Pelanggaran</a>
                </li>
                <li>
                    <a href="informasi.php" class="text-decoration-none px-3 py-3 d-block fw-bold"><i
                            class="fas fa-info-circle"></i> Informasi</a>
                </li>
            </ul>
        </div>

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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../img/fotoagung.jpeg" alt="User Profile Picture" class="rounded-circle"
                                    width="50" height="50" />
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
        <div class="content px-3 pt-3" style="margin-top: 57px;">

            <div class="bg-white p-2 my-2" style="color: #b1b1b1; border-radius: 5px">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white p-3 my-3">
                        <p class="fw-medium mb-3 fw-bold" style="font-size: 20px">Pilih Mahasiswa</p>

                        <div class="d-flex py-2 gap-1">
                            <!-- Dropdown Prodi -->
                            <div class="dropdown">
                                <button
                                    class="btn btn-light dropdown-toggle border d-flex justify-content-between align-items-center"
                                    type="button" id="dropdownButton" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="width: 200px;">
                                    Pilih Prodi
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" data-value="Teknik Informatika"
                                            onclick="updateProdiDropdown(this)">Teknik Informatika</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="Sistem Informasi Bisnis"
                                            onclick="updateProdiDropdown(this)">Sistem Informasi Bisnis</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="D2 PPLS"
                                            onclick="updateProdiDropdown(this)">D2
                                            PPLS</a></li>
                                </ul>
                            </div>

                            <!-- Dropdown Tingkat -->
                            <div class="dropdown">
                                <button
                                    class="btn btn-light dropdown-toggle border d-flex justify-content-between align-items-center"
                                    type="button" id="dropdownTingkat" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="width: 200px;">
                                    Pilih Tingkat
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">1</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateTingkatDropdown(this)">A</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateTingkatDropdown(this)">B</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateTingkatDropdown(this)">C</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">2</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateTingkatDropdown(this)">A</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateTingkatDropdown(this)">B</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateTingkatDropdown(this)">C</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">3</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateTingkatDropdown(this)">A</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateTingkatDropdown(this)">B</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="updateTingkatDropdown(this)">C</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <button class="btn btn-detail" id="filterBtn">Filter </button>
                        </div>

                        <!-- Tabel Mahasiswa -->
                        <div class="table-responsive mb-2 mt-4 hidden" id="filterTable">
                            <table class="table table-bordered table-hover" id="mahasiswaTable">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="mahasiswaRow" data-nama="Ahmad Rizky Maulana" data-nim="23417720001"
                                        data-kelas="TI-1A">
                                        <td>Ahmad Rizky Maulana</td>
                                        <td>23417720001</td>
                                        <td>TI-1A</td>
                                    </tr>
                                    <tr class="mahasiswaRow" data-nama="Agung Fradiansyah" data-nim="23417729999"
                                        data-kelas="TI-1A">
                                        <td>Agung Fradiansyah</td>
                                        <td>23417729999</td>
                                        <td>TI-1A</td>
                                    </tr>
                                    <!-- Tambahkan baris lain sesuai data mahasiswa -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Laporan Pelanggaran -->
            <!-- <div class="row">
  <div class="col-md-12"> -->
            <div class="bg-white p-3">
                <div id="reportCard" class="hidden">
                    <div id="identityCard">
                        <h3>Laporkan pelanggaran untuk:</h3>
                        <p id="studentInfo"></p>
                    </div>
                    <div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" />
                        </div>
                        <div class="form-group">
                            <label for="jenisPelanggaran">Jenis Pelanggaran</label>
                            <button class="btn btn-secondary w-100" id="jenisPelanggaran">Pilih Pelanggaran</button>
                        </div>
                        <div class="form-group">
                            <label for="bukti">Bukti</label>
                            <input type="file" class="form-control-file" id="bukti" />
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea class="form-control" id="catatan" rows="3"></textarea>
                        </div>
                        <button class="btn btn-danger" id="batal">Batal</button>
                        <button class="btn btn-success" id="kirim">Kirim</button>
                    </div>
                </div>
            </div>
            <!-- </div>
</div> -->



            <!-- Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->





            <script>
            document.querySelectorAll(".mahasiswaRow").forEach((row) => {
                row.addEventListener("click", function() {
                    const nama = row.dataset.nama;
                    const nim = row.dataset.nim;
                    const kelas = row.dataset.kelas;

                    // Isi data pada card
                    document.getElementById("studentInfo").innerText = $ {
                        nama
                    }
                    / NIM: ${nim}/
                    $ {
                        kelas
                    };
                    document.getElementById("reportCard").classList.remove("hidden");
                    document.getElementById("mahasiswaTable").classList.add("hidden");
                });
            });

            // Tambahkan fungsi batal
            document.getElementById("batal").addEventListener("click", function() {
                document.getElementById("reportCard").classList.add("hidden");
            });


            document.querySelectorAll('.dropdown-submenu').forEach(function(submenu) {
                submenu.addEventListener('mouseenter', function() {
                    const submenuMenu = submenu.querySelector('.dropdown-menu');
                    if (submenuMenu) submenuMenu.classList.add('show');
                });

                submenu.addEventListener('mouseleave', function() {
                    const submenuMenu = submenu.querySelector('.dropdown-menu');
                    if (submenuMenu) submenuMenu.classList.remove('show');
                });
            });

            function updateTingkatDropdown(element) {
                const dropdownButton = document.getElementById("dropdownTingkat");
                const parentMenu = element.closest(".dropdown-submenu").querySelector(".dropdown-toggle").textContent;
                dropdownButton.textContent = $ {
                    parentMenu
                } - $ {
                    element.textContent
                };
            }


            function updateProdiDropdown(element) {
                const dropdownButton = document.getElementById("dropdownButton");
                dropdownButton.textContent = element.textContent;
            }


            $(".sidebar ul li").on("click", function() {
                $(".sidebar ul li.active").removeClass("active");
                $(this).addClass("active");
            });

            $(".open-btn").on("click", function() {
                $(".sidebar").addClass("active");
            });

            $(".close-btn").on("click", function() {
                $(".sidebar").removeClass("active");
            });

            //dropdown
            $(document).ready(function() {
                $('.dropdown-submenu a.test').on("click", function(e) {
                    $(this).next('ul').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });

            //
            document.querySelectorAll('#prodiOptions .dropdown-item').forEach(item => {
                item.addEventListener('click', function() {
                    const selectedValue = this.getAttribute('data-value'); // Ambil data-value dari item
                    document.getElementById('prodiInput').value =
                    selectedValue; // Isi input dengan nilai yang dipilih
                });
            });


            //tombol filter
            document.getElementById('filterBtn').addEventListener('click', function() {
                const table = document.getElementById('filterTable').classList.remove("hidden");;
                table.classList.toggle('d-none');
                table.classList.toggle('d-block');
            });
            </script>
</body>

</html>