<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Webprograming | Zam.Dev</title>
  <link rel="stylesheet" href="/Css/style.css">
</head>
<body>
  <div class="container">
    <form action="/Crud/save" method="post" class="input">
      <h1>Tulis Motivasi mu di sini</h1>
      <?= csrf_field(); ?>
      <div class="Nama">
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" id="Nama" placeholder="Masukkan nama anda " required autofocus>
      </div>
      <br>
      <div class="hobi">
        <label for="Hobi">Hobi</label><br>
        <input type="text" name="Hobi" id="Hobi" placeholder="Hobi" required autofocus>
      </div>
      <br>
      <div class="motivasi">
        <label for="Motivasi"></label>
        <textarea name="Motivasi" id="Motivasi" placeholder="Tulis Motivasi Dengan Versi Mu Sendiri " required autofocus></textarea>
      </div>
      <br>
      <div class="umur">
        <label for="Umur">Umur</label>
        <input type="text" id="Umur" name="Umur" placeholder="umurrr" required>
      </div>
      <div class="skil">
        <label for="id_skil">Skill</label><br>
        <select name="id_skill" id="id_skil" placeholder="pilih satu" required>
        <?php foreach ($join as $data) : ?>>
          <option value="<?= $data['id_skill']; ?>"><?= $data['Nama_skill']; ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="tombol">
        <a href="/Crud/data" id="back"> Kembali </a>
        <button type="submit" id="kirim" value="Kirim!">Kirim!!</button>
      </div>
      <!-- <input type="submit" value="Kirim">Kirim</input> -->
    </form>

  </div>

</body>

</html>