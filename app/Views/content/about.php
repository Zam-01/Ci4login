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
  <section class="hero">
    <img src="/img/About.png" alt="">
    <header>
      <h1 class="m-2">ABOUT MOTIVATE YOURSELF</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia distinctio minus aspernatur ut magnam velit labore, tenetur dolore, qui possimus earum at sint corrupti. Obcaecati quae, numquam modi vel culpa necessitatibus dolorem repudiandae accusamus possimus odit doloremque nam molestias voluptas nobis quisquam. Ratione, error! Eligendi amet velit nisi quo minima?</p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nulla iusto itaque suscipit culpa, rerum iste aliquam a temporibus, accusamus quidem possimus, incidunt officia sint.

    </header>
  </section>
  <div class="about p-4 mt-5 ms-3 me-3">
    <section class="about p-4 ms-3 me-3 d-flex">
      <article class="w-75 ms-3 me-3">
        <p class="fs-5">
          untuk teman - teman yang menanyakan sesuatu terkait dengan website
          ini teman teman bisa hubungi/contac
          <a
            href="https://www.tiktok.com/@khaerunnizam593?_t=8oMObbbFzRQ&_r=1">
            WebPrograming | Zam.dev
          </a>
          untuk mengetahui lebih lanjut tentang website ini Lorem ipsum
          dolor sit amet consectetur adipisicing elit. Possimus dignissimos
          nemo recusandae deserunt eligendi ipsum suscipit tempore, quasi
          consequuntur voluptatum inventore nobis eveniet id. Lorem ipsum
          dolor sit amet consectetur adipisicing elit. Commodi eos fuga
          asperiores voluptas sed! Dicta molestias temporibus incidunt eos
          recusandae aperiam quidem saepe reprehenderit iure!
        </p>
      </article>
      <article class="w-75">
        <p class="fs-5">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
          voluptas est aspernatur! Laboriosam obcaecati, magni animi porro
          id numquam, non deserunt at saepe praesentium temporibus libero
          iusto nam rem provident! Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Dolorem quaerat sunt harum voluptas nostrum,
          tempora eveniet quae eligendi a labore mollitia aperiam quia
          consequuntur at, magni quibusdam perferendis itaque illum?
        </p>
        <div class="media">
          <a href=""></a>
          <a href=""></a>
          <a href=""></a>
        </div>
      </article>
    </section>
    <section class="w-75 ms-5">
      <article>
        <div class="saran">
          <span id="pesan">
            <p class="fs-5">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
              dignissimos at libero. Numquam, totam facilis. Nesciunt, sint
              amet. Earum ad assumenda sit totam dolores saepe odit. Vel
              quisquam atque, accusamus, magnam maiores enim nulla cum omnis
              debitis similique, repellat a. apabila teman teman merasa
              website ini ada yang kurang atau memerlukan perbaikan,
              silahkan teman teman kirim pesan ke
              <a
                href=" https://www.tiktok.com/@khaerunnizam593?_t=8oMObbbFzRQ&_r=1">
                Tiktok </a>,<a
                href="https://www.facebook.com/share/5te88LUMZh2QhCCU/?mibextid=qi2Omg">Facebook</a>
              ,atau Dm Instagram @khaerunnizamn saya yaa
            </p>
            <a href="" class="btn btn-outline-primary" role="button">Ask the Manufacturer directly</a>
          </span>
        </div>
      </article>
    </section>
  </div>
  <div class="image">
    <img src="/img/codeigniter.png" alt="my-images" />
  </div>
</main>


<?= $this->endSection(); ?>