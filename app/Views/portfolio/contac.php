<?= $this->extend('layout/body'); ?>
<?= $this->section('body'); ?>
<div class="container-contac">
  <h1>Contact Us</h1>
  <p class="text-white opacity-75">
    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint Lorem
    ipsum dolor sit amet consectetur adipisicing elit. Et dicta distinctio
    voluptatibus laudantium deleniti sint doloremque delectus modi voluptate
    voluptatem odio necessitatibus illo, enim eligendi? Lorem ipsum dolor
    sit amet consectetur adipisicing elit. Veniam, labore. Rerum quos
    commodi sequi eveniet ipsum, hic adipisci sapiente cupiditate placeat
    quibusdam vel itaque ex velit optio fugiat, corporis et, delectus
    deleniti libero eum quidem sunt expedita in!
  </p>
  <aside class="contact-info">
    <div class="contact-info-item">
      <img src="/img/location .png" alt="" /><br />
      <p>A108 Adam Street, New York, NY 535022</p>
    </div>
    <div class="contact-info-item">
      <img src="/img/telephone.png" alt="" /><br />
      <p>+1 5589 55488 55</p>
    </div>
    <div class="contact-info-item">
      <img src="/img/mail.png" alt="" /><br />
      <p>info@example.com</p>
    </div>
  </aside>
  <form class="contact-form">
    <input
      type="text"
      placeholder="Your Name"
      required
      class="bg-info text-white fs-5 bg-opacity-75" />
    <input
      type="email"
      placeholder="Your Email"
      required
      class="bg-info text-white fs-5 bg-opacity-75" />
    <input
      type="text"
      placeholder="Subject"
      required
      class="bg-info text-white fs-5 bg-opacity-75" />
    <textarea
      placeholder="Message"
      required
      class="bg-info text-white fs-5 bg-opacity-75"></textarea>
    <button class="w-25 btn btn-outline-primary" type="submit">
      Send Message
    </button>
  </form>
</div>
<?= $this->endSection(); ?>