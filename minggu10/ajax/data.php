<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $sql = $db1->prepare($query);
        $sql->execute();
        $res1 = $sql->get_result();

        if ($res1->num_rows > 0) {
            while ($row = $res1->fetch_assoc()) {
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($nama); ?></td>
                    <td><?php echo htmlspecialchars($jenis_kelamin); ?></td>
                    <td><?php echo htmlspecialchars($alamat); ?></td>
                    <td><?php echo htmlspecialchars($no_telp); ?></td>
                    <td>
                        <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                        <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data">
                            <i class="fa fa-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
            <?php }
        } else { ?>
            <tr>
                <td colspan="6">Tidak ada data ditemukan</td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });

    // Fungsi reset untuk menghapus pesan error pada form
    function reset() {
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = "";
        document.getElementById("err_alamat").innerHTML = "";
        document.getElementById("err_no_telp").innerHTML = "";
    }

    // Event untuk tombol edit data
    $(document).on('click', '.edit_data', function() {
        $('html, body').animate({scrollTop: 0}, 'slow');
        var id = $(this).attr('id');
        
        $.ajax({
            type: 'POST',
            url: "get_data.php",
            data: {id: id},
            dataType: 'json',
            success: function(response) {
                reset();
                $('html, body').animate({scrollTop: 30}, 'slow');
                document.getElementById("id").value = response.id;
                document.getElementById("nama").value = response.nama;
                document.getElementById("alamat").value = response.alamat;
                document.getElementById("no_telp").value = response.no_telp;
                
                if (response.jenis_kelamin === "L") {
                    document.getElementById("jenkel1").checked = true;
                } else {
                    document.getElementById("jenkel2").checked = true;
                }
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });

    // Event untuk tombol hapus data
    $(document).on('click', '.hapus_data', function() {
        var id = $(this).attr('id');
        
        if(confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            $.ajax({
                type: 'POST',
                url: "hapus_data.php",
                data: {id: id},
                success: function() {
                    $('.data').load("data.php");
                },
                error: function(response) {
                    console.log(response.responseText);
                }
            });
        }
    });
</script>
