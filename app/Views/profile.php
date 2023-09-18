<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <center>
    <img src="<?=base_url("/assets/img/IMG_2111.jpg")?>" alt="" class="mt-5" style="width:200px; height: 200px; border-radius: 50%;"><br><br>

        <div class="card" style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $nama ?></li>
            <li class="list-group-item"><?= $kelas ?></li>
            <li class="list-group-item"><?= $npm ?></li>
          </ul>
        </div>
    </center>
</body>
</html>
