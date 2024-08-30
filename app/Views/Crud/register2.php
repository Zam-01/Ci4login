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

<body class="bg-secondary-subtle">
  <div class="container">
    <div class="col mb-5">
      <div class="row">
        <div class="edit">
          <form method="post" action="/Crud/save">
            <div class="mb-3 Nama-Alamat">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input

                name="Nama"
                type="text"
                class="form-control fw-bold"
                id="exampleInputEmail1"
                aria-describedby="emailHelp" />
              <label for="exampleInputPassword1" class="form-label">Hobi</label>
              <input

                name="Hobi"
                type="text"
                class="form-control fw-bold"
                id="exampleInputPassword1" />
            </div>
            <br />
            <div class="Motivasi-Umur">
              <label for="exampleInputPassword1" class="form-label">Umur</label>
              <input

                name="Umur"
                type="number"
                class="form-control fw-bold"
                id="exampleInputPassword1" />
              <br />
              <select
                name="id_skill"
                class="form-select fw-bold"
                aria-label="Default select example">
                <option selected>Your skill</option>
                <?php foreach ($join as $data): ?>
                  <option value="<?= $data['id_skill']; ?> "
                    class="fw-bold">
                    <?= $data['Nama_skill']; ?></option>
                <?php endforeach ?>
              </select>
              <div class="textarea">
                <textarea
                  name="Motivasi"
                  id=""
                  placeholder="tulis sendiri"
                  class="form-control fw-bold lh-sm"></textarea>
              </div>
            </div>
            <div class="buttons">
              <button type="submit" class="btn btn-primary">
                <a href="/Crud/data">Kembali</a>
              </button>
              <button type="submit" name="submit" value="Ubah" class="btn btn-primary">
                Simpan
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>