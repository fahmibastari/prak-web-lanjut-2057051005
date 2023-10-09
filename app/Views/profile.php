<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<body>
  <img name="foto" src="<?= $user['foto'] ?? 'https://avatars.githubusercontent.com/u/34159640?v=4' ?>" class="rounded-circle mx-auto d-block py-3" alt="..." width="140" height="180">
  <table class="mx-auto">
    <tr>
      <td>
        <button class="p-2 bg-secondary text-white" style="width: 300px;"><?= $user['nama'] ?></button>
      </td>
    </tr>
    <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $user['npm'] ?></button>
      </td>
    </tr>
    <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $user['nama_kelas'] ?></button>
      </td>
    </tr>
  </table>
  <?= $this->endSection('content') ?>