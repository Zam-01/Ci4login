<?= $this->extend('layout/body'); ?>
<?= $this->section('body'); ?>
<!-- aboute me -->
<main class="d-flex justify-content-center mt-5 ms-3 me-3 p-3" id="about">
  <section class="w-100 m-4">
    <article class="w-75 m-4 p-2">
      <h3 class="text-white fw-semibold text-capitalize m-2 p-2">
        About me
      </h3>
      <p class="fs-5 fw-semibold text-capitalize text-white opacity-50 p-3">
        Halo! Saya Khaerun nizam seorang
        <strong class="text-info opacity-25">
          <i> junior web devloper dan UI/UX designer </i>
        </strong>
        dengan passion di bidang IT. Dengan pengalaman
        <strong class="text-danger opacity-50"><i>selama 6 bulan</i></strong>
        saya mengkhususkan diri dalam bidang it hususnya di website.
      </p>
    </article>
    <article class="w-75 m-4 p-2">
      <h3 class="text-white fw-semibold text-capitalize m-2 p-2">
        Latar Belakang
      </h3>
      <p class="text-white fw-semibold text-capitalize fs-5 opacity-50 p-3">
        Saya lulus dari
        <strong class="text-primary"><i>SMKN 1 BATUKLIANG Jurusan rekayasa perangkat lunak</i> </strong>. pada saat saya masih sekolah, saya dan teman-teman sering
        mengerjakan berbagai tugas yang di berikan oleh guru , diantaranya
        membuat sistem login dan CRUD sederhana menggunakan bahasa
        pemrograman php.
      </p>
    </article>
  </section>
  <section class="w-100 m-3">
    <article class="w-75 m-5 p-2">
      <h3 class="text-white m-2 p-3">Pendekatan Saya</h3>
      <p class="fw-semibold text-capitalize fs-5 text-white opacity-50 p-3">
        Saya percaya pada diri saya sendiri dan saya akan berusaha untuk
        memberikan manfaat di setiap project yang saya kerjakan.
      </p>
    </article>
    <article class="w-75 m-5 p-2">
      <h3 class="text-white m-3 p-3">Sosial media</h3>
      <p class="text-white fw-semibold text-capitalize fs-5 opacity-50 p-3">
        Saya selalu terbuka untuk peluang dan kolaborasi baru. Jangan ragu
        untuk menghubungi saya di
        <a href="mailto:khaerunnizam@.com" class="text-decoration-none">khaerunnizam@gmail.com</a>
        atau terhubung dengan saya di
        <a href="" target="_blank" class="text-decoration-none">LinkedIn</a>,
        <a href="" target="_blank" class="text-decoration-none">Twitter</a>,
        atau
        <a href="" target="_blank" class="text-decoration-none">Instagram</a>.
      </p>
    </article>
  </section>
</main>
<?= $this->endSection(); ?>