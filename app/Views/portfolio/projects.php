<?= $this->extend('layout/body'); ?>
<?= $this->section('body'); ?>
<main class="d-flex justify-content-center w-50 m-5 p-4">
  <section class="artikel p-5">
    <h5
      class="text-white text-capitalize fw-semibold fst-italic opacity-50">
      CRUD menggunakan framework php codeigniter 4
    </h5>
    <article class="text-white m-4 p-4">
      <p class="fs-6 opacity-50 fw-semibold">
        MOTIVATE YOURSELF adalah sebuah website yang bisa digunakan oleh
        user untuk menyimpan ataupun membuat sebuah kata-kata (bermanfaat
        bagi individu/kelompok). seperti yang kita lihat saat ini disosial
        media entah itu di tik tok Facebook whatssap sebuah kata-kata
        motivasi sering kita lihat Dan juga sering dijadikan sebuah konten
        oleh konten kreator di berbagai media sosial , apabila kita
        membacanya kita merasa termotivasi (seperti di beri semangat oleh
        orang terdekat walapun bukan <i>seorang pacar</i>), website ini juga
        bisa digunakan sebagai referensi(contoh) agar user bisa berkreasi
        dan juga memotivasi para pengguna yang lain .
      </p>
    </article>
    <article class="text-white m-5 p4">
      <p class="text-white opacity-50 fst-italic fw-semibold fs-6">
        untuk fitur-fitur di web ini mungkin hanya sedikit oleh krena itu
        kami memerlukan doa dan dukungan teman teman supaya WebPrograming |
        Zam.dev bisa berkembang lebih lagi sejauh harapan orang tua
      </p>
    </article>
    <div class="d-flex m-4 p-4 text-center">
      <a
        class="btn btn-outline-primary fw-semibold m-3"
        href="/Content"
        target="_blank">Chek my-projects</a>
      <i class="text-white text-center mt-4">Or</i>
      <a
        class="btn btn-outline-primary fw-semibold m-3"
        href="https://github.com/Zam-01/Ci4login"
        target="_blank">View Code</a>
    </div>
  </section>
</main>
<?= $this->endSection(); ?>