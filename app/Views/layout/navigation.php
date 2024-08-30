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
    <?php else : ?>
      <a href="/Crud/home">home</a>
      <a href="/Crud/about">about</a>
      <a href="/Crud/contac">Contac me</a>
      <a href="/login/register2">Login</a>
    <?php endif ?>
  </div>
</nav>