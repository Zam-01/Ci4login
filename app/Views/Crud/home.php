<?= $this->extend('layout/template'); ?>
<?= $this->section('copas'); ?>
<div class="container">
  <?= session()->getFlashdata('logout'); ?>
  <h2>Selamat datang di motivate yourself.id</h2>
  <br />
  <p class="materi">
    <b>MOTIVATE YOURSELF </b>adalah sebuah website yang bisa digunakan oleh
    user untuk menyimpan ataupun membuat sebuah kata-kata (bermanfaat bagi
    individu/kelompok). seperti yang kita lihat saat ini disosial media entah
    itu di <strong>tik tik</strong> ,<strong>Facebook</strong>
    <strong>whatssap</strong>
    sebuah kata-kata motivasi sering kita lihat Dan juga sering dijadikan
    sebuah konten oleh konten kreator di berbagai media sosial , apabila kita
    membacanya kita merasa termotivasi (seperti di beri semangat oleh orang
    terdekat walapun bukan <i>seorang pacar</i>), website ini juga bisa
    digunakan sebagai referensi(contoh) agar user bisa berkreasi dan juga
    memotivasi para pengguna yang lain .
  </p>
  <article id="fitur">
    <p>
      untuk fitur-fitur di web ini mungkin hanya sedikit oleh krena itu kami
      memerlukan doa dan dukungan teman teman supaya WebPrograming | Zam.dev
      bisa berkembang lebih lagi sejauh harapan orang tua
    </p>
  </article>
</div>

<?= $this->endSection(); ?>