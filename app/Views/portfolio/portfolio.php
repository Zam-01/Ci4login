<?= $this->extend('layout/body'); ?>
<?= $this->section('body'); ?>
<div class="container">
  <header class="m-3 p-4" id="myinfo">
    <p class="display-4 fw-semibold text-white opacity-50 text-capitalize">
      Hello i'am khaerunnizam
    </p>
    <p class="display-6 fw-semibold opacity-50 text-capitalize text-white">
      i'am junior web developer
    </p>
    <p
      class="text-capitalize text-white fs-5 opacity-25 fw-semibold fst-italic">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur
      totam repellat similique quisquam. Repellat at expedita labore
      necessitatibus inventore quisquam, corporis maiores ullam dolorem eos
      sint ex voluptas laborum repudiandae ipsum corrupti ea aliquam alias?
      Dolor, quasi architecto ab, quo laudantium ipsum aut necessitatibus
      aliquid similique sit amet, nisi blanditiis reiciendis cupiditate
      facere mollitia. Architecto similique dicta officia, blanditiis
      nostrum explicabo quasi natus veritatis ex iure dignissimos dolores
      quas ullam molestias iusto harum consequatur, aut voluptates quisquam
      incidunt! Provident iure consequuntur corporis explicabo tempora
      labore earum reprehenderit maxime nobis minima et officia, ducimus
      harum doloremque debitis illum quo! Tenetur, harum!
    </p>
    <div class="d-flex my-sm-3 p-4">
      <a class="btn btn-outline-primary m-2 fw-semibold" href="">Chek my-projects</a>
      <a class="btn btn-outline-primary m-2 fw-semibold" href="">contac me</a>
    </div>
  </header>
  <main class="text-end" id="images">
    <section class="img">
      <img src="/img/propil.jpg" alt="my-portfrifil" />
    </section>
  </main>
</div>
<?= $this->endSection(); ?>