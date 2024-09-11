<?= $this->extend('layout/CrudBody'); ?>
<?= $this->section('crud-content'); ?>
<div class="bg-primary costum d-flex justify-content-end p-4 content">
  <section class="name">
    <p> welcome to programing | Zam.dev </p>
  </section>
  <div class="dropdown">
    <a
      class="dropdown-toggle btn btn-primary"
      href="#"
      role="button"
      id="dropdownMenuLink"
      data-bs-toggle="dropdown"
      aria-expanded="false">
      <img src="/img/boy.png" alt="" />
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <li class="d-flex m-2">
        <a class="dropdown-item" href="#"><button class="btn btn-outline-primary">Login</button></a>
        <a class="dropdown-item" href="#"><button class="btn btn-outline-info">Sigin</button></a>
      </li>
      <li>
        <a class="dropdown-item" href="#">Login/sigin disini</a>
      </li>
    </ul>
  </div>
</div>
<main>
  <!-- <div class="condition">
    <section>
      <h1>Anda belum login , silahkan login terlebih dahulu</h1>
    </section>
  </div> -->
  <section class="hero">
    <img src="/img/Hello.png" alt="">
    <header>
      <h1>welcome to Homepage user</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam accusantium saepe nobis expedita velit amet, quos harum. Temporibus, quasi quae.</p>
    </header>
  </section>
  <br />
  <div class="my-project mt-3">
    <div class="home">
      <section id="Home w-100">
        <h5
        class="text-primary-emphasis text-capitalize fw-semibold fst-italic opacity-75">
        CRUD menggunakan framework php codeigniter 4
        </h5>
        <article class="w-100 d-flex">
          <p class="opacity-75 fw-semibold fs-5 w-75 m-2 p-2 text-black">
            MOTIVATE YOURSELF adalah sebuah website yang bisa digunakan oleh
            user untuk menyimpan ataupun membuat sebuah kata-kata
            (bermanfaat bagi individu/kelompok). seperti yang kita lihat
            saat ini disosial media entah itu di tik tok Facebook whatssap
            sebuah kata-kata motivasi sering kita lihat Dan juga sering
            dijadikan sebuah konten oleh konten kreator di berbagai media
            sosial , apabila kita membacanya kita merasa termotivasi
            (seperti di beri semangat oleh orang terdekat walapun bukan
            <i class="">seorang pacar</i>), website ini juga bisa digunakan
            sebagai referensi(contoh) agar user bisa berkreasi dan juga
            memotivasi para pengguna yang lain .
          </p>
          <p class="fs-5 w-75 m-2 p-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
            maxime esse deserunt, enim, doloribus dolorem sunt accusantium
            tempora eaque placeat architecto accusamus quae recusandae odit
            distinctio at repellat magnam quos? Sunt deleniti saepe esse
            maxime ad eius voluptatibus ut, consequuntur labore. Nulla
            deserunt aspernatur inventore voluptatum ratione, impedit vero
            corporis quos fuga id? Ad odit optio dolorum laudantium commodi
            architecto! Molestiae a labore dolorum doloribus porro omnis
          </p>
        </article>
        <div class="jumlah">
          <div class="user-data">
            <h2>User add++</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus
              cumque libero minima eveniet quaerat voluptatem officia ipsam. Quia
              necessitatibus enim est quam, ratione voluptatibus? Ratione, omnis!
              Tempora iure modi vero dignissimos iusto nisi laboriosam nemo
              nesciunt quos! Voluptatem, deserunt laborum!
            </p>
          </div>
          <div class="data-db">
            <h2>Data yang ditambahkan =>  <?= $jumlahdata; ?></h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur
              numquam aut perferendis beatae ipsa commodi. Ipsum tempore velit
              eaque voluptates unde eveniet quos quas illo ratione, obcaecati
              dolore dignissimos pariatur cupiditate, maiores autem? Voluptatem
              totam fugit, alias magnam suscipit temporibus.
            </p>
          </div>
        </div>
        <!-- <p>
          natus delectus voluptatem iusto, similique, deleniti eum sapiente,
          mollitia inventore impedit nihil saepe. Rem ipsum ab quaerat at
          nam magni ea officiis doloribus. Ut ipsum itaque, dolore quam,
          exercitationem illum quidem magni aliquam debitis amet assumenda
          ipsa recusandae qui vitae laborum at beatae tecto distinctio,
          repellat porro optio sunt magni totam! Sed placeat dolorum
          repellat quam facilis similique, minima autem eum veritatis illum
          commodi aliquid suscipit voluptatum, ducimus porro quidem ut qui,
          illo ea non. Saepe sapiente deleniti esse optio blanditiis. Lorem
          ipsum dolor sit amet consectetur adipisicing elit. Ducimus odio,
          porro, iure aut quibusdam inventore molestiae repellendus cumque
          pariatur corporis aperiam veniam, recusandae officiis voluptatem
          officia ipsum labore similique neque.
        </p> -->
      </section>
    </div>
    <div class="image">
      <img src="/img/codeigniter.png" alt="my-images" />
    </div>
  </div>
</main>
<?= $this->endSection(); ?>