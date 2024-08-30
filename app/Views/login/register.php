<?= $this->extend('layout/Userview'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <?php if (session()->getFlashdata('notreg')): ?>
    <h4 style="
        text-align:center;
        font-size:0.8em;
        color:red;
        "><?= session()->getFlashdata('notreg'); ?></h4>
  <?php else:
    // echo session()->getFlashdata('gagal');
  ?>
  <?php endif; ?>
  <div class="form-login">
    <h4
      style="
        text-align:center;
        font-size:0.8em;
        color:red;">
      <?= session()->getFlashdata('login'); ?>
    </h4>
    <form method="post" action="/Crud/Daftar">
      <div class="email">
        <label for="Email">Email </label><br>
        <input type="email" name="Email" id="Email" required placeholder="masukkan email yang aktif" autofocus>
        <h6>
          <?= $valid->getError('Email'); ?>
        </h6>
      </div>
      <br>
      <div class="username">
        <label for="Username">Username </label><br>
        <input type="text" name="Username" id="Username" required placeholder="masukkan username ">
        <h6>
          <?= $valid->getError('Username'); ?>
        </h6>
      </div>
      <br>
      <div class="password">
        <label for="Password">Password </label><br>
        <input type="Password" name="Password" id="Password" required placeholder="masukkan password yang kuat">
        <h6>
          <?= $valid->getError('Password'); ?>
        </h6>
      </div>
      <br>
      <span class="tombol">
        <button type="submit" name="KIRIM">Daftar</button>
        <span>Sudah punya akun?&#128073;</span>
        <a href="/Crud/sigin">sigin disini!!</a>
      </span>
    </form>
  </div>

</div>

<?= $this->endSection(); ?>