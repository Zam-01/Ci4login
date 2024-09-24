<?= $this->extend('layout/CrudBody'); ?>
<?= $this->section('crud-content'); ?>

<section class="name">
  <img src="/img/jumlahdata.png" alt="">
  <header>
    <h1>Data</h1>
    <article class="w-75">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, cupiditate voluptas nostrum molestias cumque accusamus laudantium suscipit iure vel debitis fuga, neque fugiat, tempore porro fugit totam. Nulla, saepe veniam.
    </article>
    <article class="w-75">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, at nobis. Eius voluptatibus, sapiente facilis consectetur nostrum dignissimos praesentium officiis. Dicta quos exercitationem est explicabo repudiandae vel numquam nemo libero?
    </article>
  </header>
</section>
<main class="main-data">
  <?php
  if (session()->getFlashdata('pesan')) : ?>
    <h4 class="text-center text-success fs-4 fw-semibold ">
      <?php
      echo session()->getFlashdata('pesan');
      ?>
    </h4>
  <?php
  endif;
  ?>
  <?php
  if (session()->getFlashdata('succses')) : ?>
    <h4 class="text-center text-success fs-4 fw-semibold ">
      <?php
      echo session()->getFlashdata('succses');
      ?>
    </h4>
  <?php
  endif;
  ?>
  <div class="data">
    <div class="container mt-5">
      <a href="/Crud/register" class="text-decoration-none btn btn-outline-primary" role="button">
        Tambah data
      </a>
      <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand">cari data mu disini</a>
          <form class="d-flex" role="search" action="" method="post">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
              name="keyword" />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </nav>
      <table class="table table-borderless">
        <thead class="table-info">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Hobi</th>
            <th scope="col">Motivation</th>
            <th scope="col">Umur</th>
            <th scope="col">Skil</th>
            <th scope="col">Option</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($data_motivasi as $v): ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= $v['Nama']; ?></td>
              <td><?= $v['Hobi']; ?></td>
              <td><?= $v['Motivasi']; ?></td>
              <td><?= $v['Umur']; ?></td>
              <td><?= $v['Nama_skill']; ?></td>
              <td>
                <a href="/ubah/<?= $v['id']; ?>" class="btn btn-outline-primary" role="button">Edit</a>
                <a href="/hapus/<?= $v['id']; ?>" class="btn btn-outline-warning" role="button">Hapus</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- <div class="image">
    <img src="/img/codeigniter.png" alt="my-images" />
  </div> -->
</main>

<?= $this->endSection(); ?>