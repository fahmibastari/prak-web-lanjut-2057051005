<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="row">
    <h3 class="mt-5">Tabel User</h3>
    <a href="<?= base_url('user/create')?>" class="btn btn-primary col-2">Tambah Data</a>
    <table class="table table-striped py-2">
      <thead>
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>NPM</td>
          <td>Kelas</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($users as $user) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td style="display: flex;">
              <a class="btn btn-primary" style="width: 80px; height: 40px; margin-right: 10px;" href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
              <a class="btn btn-warning" style="width: 80px; height: 40px; margin-right: 10px;" href="<?= base_url('user/' . $user['id']. '/edit') ?>">Edit</a>
              <form action="<?=base_url('user/' . $user['id'])?>" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <?= csrf_field() ?>
                <input type="submit" class="btn btn-danger" value="Delete" style="width: 80px; height: 40px;">
              </form>
            </td>
            
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection('content') ?>