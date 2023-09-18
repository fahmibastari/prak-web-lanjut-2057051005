<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
    <center>
    <form action="<?=base_url('/user/store')?>" method="POST">
        <div class="form-group">
        <input type="text"  name="nama" placeholder="Nama"><br>
        </div>
        <div class="form-group">
        <input type="number" name="npm" placeholder="NPM"><br>
        </div>
        <div class="form-group">
        <input type="text" name="kelas" placeholder="Kelas"><br>
        </div>
        <div class="form-group">
        <input type="submit" value="CREATE">
        </div>
    </form>
    </center>
</body>
</html>
