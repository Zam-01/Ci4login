<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <!-- my style -->
  <link rel="stylesheet" href="/Css/edit2.css" />
</head>

<body>
  <div class="container ms-4">
    <section>
      <div>
        <img src="/img/Upgrade.png" alt="">
        <header>
          <h1>Edit data mu disini</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt consequuntur ipsum vitae doloremque voluptate id architecto recusandae totam. Impedit, Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, temporibus.</p>
          <p>Lorem ipsum, dolor s Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit facere quae natus, possimus sit laboriosam deserunt nihil iusto asperiores in recusandae earum consequatur aperiam. Laudantium itaque possimus, quidem eveniet quis tempore repudiandae neque tempora ex eum aut asperiores debitis earum.</p>
        </header>
      </div>
    </section>
    <div class="edit">
      <form method="post" action="/Crud/update/<?= $isi['id']; ?>">
        <div class="mb-3 Nama-Alamat">
          <label for="exampleInputEmail1" class="form-label text-white">Nama</label>
          <input
            value="<?= $isi['Nama']; ?>"
            name="Nama"
            type="text"
            class="form-control fw-bold"
            id="exampleInputEmail1"
            aria-describedby="emailHelp" />
          <label for="exampleInputPassword1" class="form-label text-white">Hobi</label>
          <input
            value="<?= $isi['Hobi']; ?>"
            name="Hobi"
            type="text"
            class="form-control fw-bold"
            id="exampleInputPassword1" />
        </div>
        <br />
        <div class="Motivasi-Umur">
          <label for="exampleInputPassword1" class="form-label text-white">Umur</label>
          <input
            value="<?= $isi['Umur']; ?>"
            name="Umur"
            type="number"
            class="form-control fw-bold"
            id="exampleInputPassword1" />
          <br />
          <select
            name="id_skill"
            class="form-select fw-bold"
            aria-label="Default select example">
            <option selected class="">Your skill</option>
            <?php foreach ($skil as $data): ?>
              <option value="<?= $data['id_skill']; ?> "
                <?= $data["id_skill"] == $isi['id_skill'] ? 'selected' : '' ?>
                class="fw-bold">
                <?= $data['Nama_skill']; ?></option>
            <?php endforeach ?>
          </select>
          <div class="textarea">
            <textarea
              name="Motivasi"
              id=""
              placeholder="tulis sendiri"
              class="form-control fw-bold lh-sm"><?= $isi['Motivasi']; ?></textarea>
          </div>
        </div>
        <div class="buttons">
          <button type="submit" class="btn btn-primary">
            <a href="/Crud/data">Kembali</a>
          </button>
          <button type="submit" name="submit" value="Ubah" class="btn btn-primary">
            Ubah
          </button>
        </div>
      </form>
    </div>
    <section class="image">
      <img src="/img/ubah.png" alt="">
    </section>
  </div>


  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>