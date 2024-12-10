<!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Dokumen</title>
        <link rel="stylesheet" href="upload.css" type="text/css">
    </head>
    <body>
        <div class="upload-form-container">
            <h2>Unggah File </h2>
            <form id="upload-form" action="upload_ajax.php"  method="post" enctype="multipart/form-data">
                <div class="file-input-container">
                    <input type="file" name="file[]" id="file" class="file-input">
                    <label for="file" class="file-label">Pilih File</label>
                </div>
                <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
            </form>
            <div id="status" class="upload-status"></div>
        </div>
        
        <!-- <form action="upload_ajax.php" id="uploud-form" method="post" enctype="multipart/form-data">
            <input type="file" name="file[]" id="file" multiple="multiple">
            <input type="submit" name="submit" value="unggah">
        </form>
        <div id="status"></div>-->
        
        <script src="..\minggu6\jquery-3.7.1.js"></script>
        <script src="upload.js"></script> 
    </body>
</html>