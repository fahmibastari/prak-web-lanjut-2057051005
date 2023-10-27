<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<main class="form-signin w-100 m-auto">
  <form method="POST" action="<?= base_url('/kelas/store') ?>" enctype="multipart/form-data">
    <h1 class="h3 mt-5 mb-3 fw-normal">Buat Kelas Baru</h1>
    <div class="form-floating">
      <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama Kelas" name="nama_kelas" value="<?= old('nama_kelas') ?>">
      <label for="floatingName">Nama Kelas</label>
      <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('nama_kelas'); ?>
        </div>
      <?php endif; ?>
    </div>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingKapasitas" placeholder="Kapasitas" name="kapasitas" value="<?= old('kapasitas') ?>">
      <label for="floatingKapasitas">Kapasitas</label>
      <?php if (session('validation') && session('validation')->hasError('kapasitas')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('kapasitas'); ?>
        </div>
      <?php endif; ?>
    </div>
    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Buat</button>
  </form>
</main>
<?= $this->endSection('content') ?>