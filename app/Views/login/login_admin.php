<?= $this->extend('layout/Userview'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="form-login">
    <?php if (session()->getFlashdata('register')): ?>
      <h4 style="
        text-align:center;
        "><?= session()->getFlashdata('register'); ?></h4>
    <?php else:
      // echo session()->getFlashdata('gagal');
    ?>
    <?php endif; ?>
    <form method="post" action="/Crud/get_sigin">
      <?php if (session()->getFlashdata('error')): ?>
        <h4 style="
        text-align:center;
        color:red;
        "><?= session()->getFlashdata('error'); ?></h4>
      <?php endif; ?>
      <div class="username">
        <label for="Username">Username </label><br>
        <input type="text" name="Username" id="Username" required placeholder="masukkan username " minlength="10" maxlength="15">
      </div>
      <div class="password">
        <label for="Password">Password </label><br>
        <input type="Password" name="Password" id="Password" required placeholder="masukkan password yang kuat" maxlength="14">
      </div>
      <span class="tombol">
        <button type="submit" name="KIRIM" onclick="return confirm('pastikan username dan passsword anda benar')">Sigin</button>
        <span>belum daftar?&#128073;</span>
        <a href="/login/register">daftar disini!!</a>
      </span>
    </form>
  </div>

</div>

<?= $this->endSection(); ?>