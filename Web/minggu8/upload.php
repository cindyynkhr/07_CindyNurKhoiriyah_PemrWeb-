<?php
    if(isset($_POST["submit"])){ 
        $targetdir = "uploads/"; //Direktori tujuan untuk menyimpan file
        $targetfile = $targetdir. basename($_FILES["myfile"]["name"]);
        $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

        $allowedExtensions = array("txt", "pdf", "doc", "docx");
        $maxsize = 1*1024*2024;

        if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"]<=$maxsize) {
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) { 
                echo "File berhasil diunggah. <br>";
                echo '<img src=' . $targetfile . ' class="thumbnail" alt="Thumbnail">';
            }
            else{
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "FIle tidak valid atau melebihi ukuran maksimum yang diizinkan";
        }

    }
?>