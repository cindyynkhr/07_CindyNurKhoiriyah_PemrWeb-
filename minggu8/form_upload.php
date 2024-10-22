<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
        <title>File Upload with Thumbnail</title>
        <style>
            .thumbnail {
                width: 200px;
                height: auto;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <h2>Upload Gambar</h2>
        <form action = "upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="myfile">
            <input type="submit" name="submit">
        </form>
    </body>
</html>