<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AJAX Dynamic Dropdown</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="p-4">

  <h3>Pilih Metode:</h3>
  <div id="step1" class="d-flex gap-3">
    <!-- Tombol AJAX -->
    <button class="btn btn-primary" id="btnManual">Cari Manual</button>
    <button class="btn btn-secondary" id="btnQR">Scan QR</button>
  </div>

  <!-- Tempat Menampilkan Data -->
  <div id="output" class="mt-4"></div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function () {
      // Data JSON untuk simulasi Prodi, Kelas, dan Mahasiswa
      const dataProdi = {
        "Teknik Informatika": ["A", "B", "C"],
        "Sistem Informasi Bisnis": ["A", "B"],
        "D2 PPLS": ["A"]
      };

      const dataMahasiswa = {
        "Teknik Informatika-A": ["Ali", "Budi", "Citra"],
        "Teknik Informatika-B": ["Dian", "Eka", "Faisal"],
        "Sistem Informasi Bisnis-A": ["Gina", "Hadi"],
        "D2 PPLS-A": ["Ilham", "Joko"]
      };

      // Event tombol "Cari Manual"
      $('#btnManual').on('click', function () {
        $('#step1').hide(); // Sembunyikan tombol awal
        let output = '<div class="mb-3">';
        output += '<label for="prodiSelect" class="form-label">Pilih Prodi:</label>';
        output += '<select class="form-select" id="prodiSelect">';
        output += '<option value="" disabled selected>Pilih Prodi</option>';
        for (let prodi in dataProdi) {
          output += `<option value="${prodi}">${prodi}</option>`;
        }
        output += '</select></div>';
        output += '<div id="kelasDropdown" class="mb-3"></div>';
        output += '<div id="mahasiswaDropdown" class="mb-3"></div>';
        $('#output').html(output);
      });

      // Event perubahan dropdown Prodi
      $(document).on('change', '#prodiSelect', function () {
        const selectedProdi = $(this).val();
        let kelasOptions = '<label for="kelasSelect" class="form-label">Pilih Kelas:</label>';
        kelasOptions += '<select class="form-select" id="kelasSelect">';
        kelasOptions += '<option value="" disabled selected>Pilih Kelas</option>';
        dataProdi[selectedProdi].forEach(kelas => {
          kelasOptions += `<option value="${selectedProdi}-${kelas}">${kelas}</option>`;
        });
        kelasOptions += '</select>';
        $('#kelasDropdown').html(kelasOptions);
        $('#mahasiswaDropdown').html(''); // Reset dropdown mahasiswa
      });

      // Event perubahan dropdown Kelas
      $(document).on('change', '#kelasSelect', function () {
        const selectedKelas = $(this).val();
        let mahasiswaOptions = '<label for="mahasiswaSelect" class="form-label">Pilih Mahasiswa:</label>';
        mahasiswaOptions += '<select class="form-select" id="mahasiswaSelect">';
        mahasiswaOptions += '<option value="" disabled selected>Pilih Mahasiswa</option>';
        dataMahasiswa[selectedKelas].forEach(mahasiswa => {
          mahasiswaOptions += `<option value="${mahasiswa}">${mahasiswa}</option>`;
        });
        mahasiswaOptions += '</select>';
        $('#mahasiswaDropdown').html(mahasiswaOptions);
      });

      // Event tombol "Scan QR"
      $('#btnQR').on('click', function () {
        $('#step1').hide();
        $('#output').html('<p>Fitur Scan QR akan tersedia di sini.</p>');
      });
    });
  </script>

</body>
</html>
