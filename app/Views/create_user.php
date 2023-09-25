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
            <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
            <br>
            <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
            <div class="invalid-feedback">
              <?= session('validation')->getError('nama'); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="form-group">
            <input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
            <label for="floatingNpm"></label>
            <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
              <div class="invalid-feedback">
                <?= session('validation')->getError('npm'); ?>
              </div>
            <?php endif; ?>
        </div>
        <div class="form-group">
        <select type="text" name="kelas" placeholder="Kelas">
            <?php
            foreach ($kelas as $item) {
            ?>
                <option value="<?= $item['id'] ?>">
                    <?= $item['nama_kelas'] ?>
                </option>
            <?php
            }
            ?>
        </select>
        </div>
        <div class="form-group">
        <input type="submit" value="CREATE">
        </div>
    </form>
    </center>
</body>
</html>
