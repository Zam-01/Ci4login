<?= $this->extend('layout/Userview'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="hero-content">
    <img src="/img/Userview.png" alt="">
    <header>
      <h1 class="text-white">Sigin up Disini</h1>
      <article>
        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quo? Dolorem qui quaerat soluta ad obcaecati molestiae impedit cumque commodi?
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam deserunt natus porro exercitationem eum, minus molestias officia quibusdam vero assumenda? Assumenda sapiente officiis cumque deserunt voluptas, ipsa non autem praesentium architecto eos eligendi provident at culpa earum distinctio labore et?
        </p>
      </article>
    </header>
  </div>
  <?php if (session()->getFlashdata('register')): ?>
    <h4 style="
        text-align:center;
        color:white;
        "><?= session()->getFlashdata('register'); ?></h4>
  <?php else:
    // echo session()->getFlashdata('gagal');
  ?>
  <?php endif; ?>
  <div class="form-login">
    <form method="post" action="/Crud/get_sigin">
      <?php if (session()->getFlashdata('error')): ?>
        <h4 style="
        text-align:center;
        color:red;
        "><?= session()->getFlashdata('error'); ?></h4>
      <?php endif; ?>
      <div class="username">
        <label for="Username">Username </label><br>
        <input type="text" name="Username" id="Username" required placeholder="masukkan username " maxlength="8">
      </div>
      <div class="password">
        <label for="Password">Password </label><br>
        <input type="Password" name="Password" id="Password" required placeholder="masukkan password yang kuat" maxlength="14">
      </div>
      <span class="tombol">
        <button type="submit" name="KIRIM" onclick="return confirm('pastikan username dan passsword anda benar')">Sigin</button>
        <p>Or</p>
        <a href="/login/register2">daftar</a>
      </span>
    </form>
    <div class="heroes-image">
      <img src="/img/Sign-up.png" alt="">
    </div>
  </div>

</div>

<?= $this->endSection(); ?>