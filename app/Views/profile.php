<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<body>
  <section style="background-color: #c90000; border-radius: 25px">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-7">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body">
              <div class="d-flex text-black">
                <div class="flex-shrink-0">
                  <img src="<?= $user['foto'] ?? 'https://avatars.githubusercontent.com/u/34159640?v=4' ?>" alt="Generic placeholder image" class="img-fluid" style="width: 180px; height:180px; border: 1px solid #000; border-radius: 10px;"><br>
                </div><br>
                <div class="flex-grow-1 me-0 ms-3">
                  <h6 class="mb-1">Nama &ensp;: <?= $user['nama'] ?></h6>
                  <h6 class="mb-1">Kelas &nbsp;&ensp;: <?= $user['nama_kelas'] ?></h6>
                  <h6 class="mb-1">NPM &nbsp;&nbsp;&ensp;: <?= $user['npm'] ?></h6>
                  <div class="d-flex pt-1">
                    <a type="button" class="btn btn-outline-primary me-1 flex-grow-1" href="<?= base_url('user/' . $user['id'] . '/edit') ?>">Edit User</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?= $this->endSection('content') ?>