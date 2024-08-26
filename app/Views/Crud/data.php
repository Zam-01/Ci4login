<?= $this->extend('layout/template'); ?>
<?= $this->section('copas'); ?>
<div class="container">
  <nav class="navigasi">
    <h3>Khaerunnizam | ZAM.dev</h3>
    <div class="link">
      <?php
      if (session()->get('login') === true): ?>
        <a href="/Crud/home">home</a>
        <a href="/Crud/about">about</a>
        <a href="/Crud/data">Motivate your self</a>
        <a href="/Crud/contac">Contac me</a>
        <a href="/logout">logout</a>
      <?php else: ?>
        <a href="/Crud/home">home</a>
        <a href="/Crud/about">about</a>
        <a href="/Crud/data">Motivate your self</a>
        <a href="/Crud/contac">Contac me</a>
        <a href="/login/register">Login</a>
      <?php endif ?>
      <
        </div>
  </nav>
  <br>
  <br>
  <br>
  <div class="tabel-aset">
    <button id="tambah">
      <a href="/Crud/register">Add your motivation </a>
    </button>
    <br>
    <br>
    <?php
    if (session()->getFlashdata('pesan')) : ?>
      <h4 style="
      text-align:center;
      color:aqua;
      font:italic;
      ">
        <?php
        echo session()->getFlashdata('pesan');
        ?>
      </h4>
    <?php
    endif;
    ?>
    <form action="" method="post" id="cari">
      <input type="text" name="keyword" id="keyword" autofocus required placeholder="cari data anda disini">
      <button type="submit" name="submit"> Cari </button>
    </form>
    <br>
    <br>
    <br>
    <table>
      <tr style="border:1px solid;">
        <th>No</th>
        <th>Nama Penulis</th>
        <th>Hobi/Kebiasaan</th>
        <th>motivation</th>
        <th>Umur</th>
        <th>skill</th>
        <th>Opsi</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($data_motivasi as $data) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $data['Nama']; ?></td>
          <td><?= $data['Hobi']; ?></td>
          <td><?= $data['Motivasi']; ?></td>
          <td><?= $data['Umur']; ?></td>
          <td><?= $data['Nama_skill']; ?></td>
          <td>
            <a href="/ubah<?= $data['id']; ?>" id="edit">EDIT</a>
            <a href="/hapus<?= $data['id']; ?>" id="hapus" onclick="return confirm('yakin mau di hapus?,motivasimu bagus lohh');">HAPUS</a>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</div>
<!-- <footer id="about">
  copyright &copy; 2024
  <b>WebPrograming | Zam.dev </b>
</footer> -->
<?= $this->endSection(); ?>