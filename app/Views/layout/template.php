<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul; ?></title>
  <link rel="stylesheet" href="/Css/allin.css">
  <!-- icon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <?= $this->include('layout/navigation'); ?>

  <!-- ?> -->
  <br>
  <?= $this->renderSection('copas'); ?>
  <footer>
    copyright &copy; <?= date('Y'); ?>
    <b>WebPrograming | Zam.dev </b>
  </footer>
</body>

</html>