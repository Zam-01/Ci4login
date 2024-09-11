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
  <link rel="stylesheet" href="/Css/gaya.css" />
</head>

<body class="bg-secondary-subtle">
  <div class="container">
    <?php if (session()->getFlashdata('notreg')): ?>
      <h4 style="
        text-align:center;
        font-size:0.8em;
        color:red;
        "><?= session()->getFlashdata('notreg'); ?></h4>
    <?php else:
      // echo session()->getFlashdata('gagal');
    ?>
    <?php endif; ?>
    <div class="col">
      <?php if (session()->getFlashdata('password')): ?>
        <h5 class="text-center fs-6"> <?= session()->getFlashdata('password'); ?></h5>
      <?php endif ?>
      <div class="row">
        <?php if (session()->getFlashdata('login')): ?>
          <h5 class="text-center fs-6"> <?= session()->getFlashdata('login'); ?></h5>
        <?php endif ?>
        <?php
        if ($valid->getError('Email')):
        ?>
          <h6 class="fs-6">
            <?= $valid->getError('Email'); ?>
          </h6>
        <?php endif ?>
        <form method="post" action="/Crud/Daftar">
          <div class="mb-3 email-username">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input
              type="email"
              name="Email"
              class="form-control fw-bold"
              id="exampleInputEmail1"
              aria-describedby="emailHelp" required />
            <br />
            <br />
            <br />
            <label for="exampleInputPassword1" class="form-label">Username</label>
            <input
              type="text"
              name="Username"
              class="form-control fw-bold"
              id="exampleInputPassword1" required />
            <?php
            if ($valid->getError('Username')):
            ?>
              <div class="invalid-feedback">
                <?= $valid->getError('Username'); ?>
              </div>
            <?php endif ?>
          </div>
          <div class="mb-3 Password-chek">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input
              type="password"
              name="Password"
              maxlength="8"
              class="form-control fw-bold"
              id="exampleInputPassword1" required />
            <?php
            if ($valid->getError('Password')):
            ?>
              <div class="invalid-feedback">
                <?= $valid->getError('Password'); ?>
              </div>
            <?php endif ?>
            <br />
            <br />
            <br />
            <label for="exampleInputPassword1" class="form-label">Chek Your Password</label>
            <input
              type="password"
              name="chekPass"
              maxlength="8"
              class="form-control fw-bold"
              id="exampleInputPassword1" />
            <?php
            if ($valid->getError('')):
            ?>
              <div class="invalid-feedback">
                <?= $valid->getError(''); ?>
              </div>
            <?php endif ?>
          </div>
          <div class="buttons">
            <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
            <p>Or</p>
            <a href="/Crud/sigin" class="btn btn-primary"> Sigin</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>