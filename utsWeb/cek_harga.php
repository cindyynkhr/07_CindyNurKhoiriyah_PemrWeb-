<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Harga - Laundry Cindy</title>
    <link rel="stylesheet" href="style3.css">
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
    
    <div class="content">
        <form id="cek-harga-form">
            <table>
                <tr>
                    <td>Berat (kg)</td>
                    <td><input type="number" id="berat" min="1" value="1" required></td>
                </tr>
                <tr>
                    <td>Jumlah Laundry Sebelumnya</td>
                    <td><input type="number" id="jumlah-laundry" min="0" value="0" required></td>
                </tr>
                <tr>
                    <td>Jenis Layanan</td>
                    <td>
                        <select id="jenis">
                            <option value="5000">Cuci Kering</option>
                            <option value="8000">Cuci Setrika</option>
                            <option value="6000">Setrika</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kecepatan</td>
                    <td>
                        <select id="kecepatan">
                            <option value="0">Reguler</option>
                            <option value="2000">Ekspress</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Membership</td>
                    <td>
                        <select id="membership">
                            <option value="non">Non Member</option>
                            <option value="member">Member</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="button" value="Check" onclick="calculatePrice()"></td>
                </tr>
            </table>
        </form>

        <div id="result" style="margin-top: 20px;">
            <p><strong>Total Harga Sebelum Diskon: </strong> <span id="total-harga-before"></span></p>
            <p><strong>Diskon: </strong> <span id="diskon-harga"></span></p>
            <p><strong>Total Harga Setelah Diskon: </strong> <span id="total-harga"></span></p>
        </div>
    </div>

    <div class="footer">
        <p>Website Footer</p>
    </div>

    <script>
        function calculatePrice() {
        var berat = parseInt(document.getElementById("berat").value);
        var hargaPerkilo = parseInt(document.getElementById("jenis").value);
        var kecepatan = parseInt(document.getElementById("kecepatan").value);
        var membership = document.getElementById("membership").value;
        var jumlahLaundry = parseInt(document.getElementById("jumlah-laundry").value); // Ambil nilai jumlah laundry sebelumnya

        // Pembulatan berat ke atas
        berat = Math.ceil(berat);

        // Jika laundry ke-6, dapat diskon 2 kg
        if (jumlahLaundry >= 5) {
            berat = Math.max(berat - 2, 0); // Maksimum berat tidak boleh kurang dari 0
            alert("Selamat! Anda mendapatkan diskon kupon sebesar 2 kg pada laundry ke-6.");
        }

        // Perhitungan harga dasar
        var totalHarga = berat * hargaPerkilo;

        // Perhitungan biaya kecepatan
        var biayaKecepatan = berat * kecepatan;
        totalHarga += biayaKecepatan;

        // Simpan total sebelum diskon
        var totalHargaBefore = totalHarga;

        // Diskon member
        var diskon = 0;
        if (membership === "member") {
            diskon = totalHarga * 0.10; // 10% diskon untuk member
            totalHarga -= diskon;
        }

        // Tampilkan hasil perhitungan
        document.getElementById("total-harga-before").innerHTML = "Rp " + totalHargaBefore.toLocaleString();
        document.getElementById("diskon-harga").innerHTML = "Rp " + diskon.toLocaleString();
        document.getElementById("total-harga").innerHTML = "Rp " + totalHarga.toLocaleString();
        }
    </script>
</body>
</html>
