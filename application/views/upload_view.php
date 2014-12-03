<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
<form action="<?=base_url()?>index.php/first/upload_photo" method="POST" enctype="multipart/form-data">
    <input type="file" name="userfile"/>
    <input type="submit" name="download" value="Загрузить"/>
</form>
</body>
</html>