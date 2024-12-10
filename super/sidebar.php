<!-- sidebar -->
<div class="sidebar" id="side_nav">
        <div class="header-box px-5 pt-3 pb-2 d-flex justify-content-between">
            <img alt="Logo E-Tatib" src="/public/img/logo-svg" />
            <button class="btn d-md-none d-block close-btn px-1 py-0 text-dark">
                <i class="fas fa-stream"></i>
            </button>
        </div>
        <ul class="list-unstyled px-2 py-1">
            <li class="active">
                <a href="dashboard.php" class="text-decoration-none px-3 py-3 d-block fw-bold">
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#kelolaPenggunaSubmenu" class="text-decoration-none px-3 py-3 d-block fw-bold dropdown-btn">
                    <i class="fas fa-users"></i> Kelola Pengguna
                </a>
                <ul class="collapse list-unstyled px-3" id="kelolaPenggunaSubmenu">
                    <li><a href="mahasiswa.php" class="text-decoration-none px-3 py-2 d-block">Mahasiswa</a></li>
                    <li><a href="dosen.php" class="text-decoration-none px-3 py-2 d-block">Dosen</a></li>
                    <li><a href="admin.php" class="text-decoration-none px-3 py-2 d-block">Admin</a></li>
                </ul>
            </li>
            <li>
                <a href="#pelanggaranSubmenu" class="text-decoration-none px-3 py-3 d-block fw-bold dropdown-btn">
                    <i class="fas fa-book"></i> Pelanggaran
                </a>
                <ul class="collapse list-unstyled px-3" id="pelanggaranSubmenu">
                    <li><a href="dataPelanggaran.php" class="text-decoration-none px-3 py-2 d-block">Data Pelanggaran</a></li>
                    <li><a href="informasi.php" class="text-decoration-none px-3 py-2 d-block">Informasi</a></li>
                </ul>
            </li>
        </ul>
    </div>