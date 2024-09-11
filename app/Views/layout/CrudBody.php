<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/mycss/gaya.css">
</head>

<body>
  <aside class="bg-primary">
    <nav>
      <section class="links">
        <div>
          <a href="/Cruds/home"><img src="/img/home.png" alt=""> home </a>
        </div>
        <div>
          <a href="/Cruds/about"><img src="/img/info.png" alt=""> about</a>
        </div>
        <div>
          <a href="/Cruds/data"><img src="/img/data.png" alt=""> data</a>
        </div>
        <div>
          <a href="">disable</a>
        </div>
      </section>
    </nav>
  </aside>
  <?= $this->renderSection('crud-content'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <footer class="text-center fixed-bottom">
    <p class="fs-5 text-white text-opacity-75 text-capitalize opacity-25">
      copyrigth &copy; 2024 | Programing Zam.dev
    </p>
  </footer>
</body>

</html>