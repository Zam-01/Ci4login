  <nav class="navbar navbar-expand bg-body-tertiary w-100">
    <div class="container-fluid">
      <a class="navbar-brand opacity-50" href="#">Programming | Zam.dev</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/Cruds/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Cruds/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Cruds/data">Data</a>
          </li>
          <?php if (session()->get('login') === true) : ?>
            <li class="nav-item">
              <a class="nav-link" href="/logout">Logout</a>
            </li>
          <?php endif ?>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>