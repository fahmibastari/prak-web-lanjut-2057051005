<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0 wi">
          <h6>DAFTAR USER</h6>
          <a href="<?= base_url('user/create') ?>" class="btn btn-hover">TAMBAH</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-1">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No</th>
                  <th class="text-uppercase text-primary text-xxs font-weight-bolder">Nama</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">NPM</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kelas</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($users as $user) { ?>
                  <tr>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span>
                    </td>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="<?= $user['foto'] ?>" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?= $user['nama'] ?></h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold"><?= $user['npm'] ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $user['nama_kelas'] ?></span>
                    </td>

                    <td style="display: flex;" class="align-middle text-center">
                      <a class="btn btn-link text-dark px-3 mt-0" href="<?= base_url('user/' . $user['id']) ?>"><i class="fas fa-eye text-dark me-2" aria-hidden="true"></i>Detail</a>
                      <a class="btn btn-link text-dark px-3 mt-0" href="<?= base_url('user/' . $user['id'] . '/edit') ?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      <form action="<?= base_url('user/' . $user['id']) ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button class="btn btn-hover text-dark mb-0" style="color: red background-color: black">
                          <i class="fas fa-trash text-dark me-2" aria-hidden="true"></i>
                          DELETE
                        </button>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <?= $this->endSection('content') ?>