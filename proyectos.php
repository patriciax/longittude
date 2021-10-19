<?php
require('partials/loader.html');
?>
<?php
require('partials/header_blue.html');

?>

<style>
  .navbar-nav a {
    color: #000;
  }

  header {
    position: relative;
  }
</style>

<section class="main-services grid-section container-main">
  <div>
    <h2 class="title">PROYECTOS</h2>

  </div>
  <div class="grid-proyecto">
    <a href="proyecto-doneduardo.php" class="item">
      <div>

        <img src="assets/img/test1.png" alt="">
        <p>Don Eduardo</p>

      </div>
    </a>
    <a href="render360.php" class="item">
      <div>
        <img src="assets/img/tes2.jpg" alt="">
        <p> Ribera de Mallorquin</p>
      </div>
    </a>
    <a href="recorrio.php" class="item">
      <div>
        <img src="assets/img/test3.png" alt="">
        <p> NINA NA </p>
      </div>
    </a>
    <a href="servico-detalle.php" class="item">
      <div>
        <img src="assets/img/test3.png" alt="">
        <p> Punta Nativa </p>
      </div>
    </a>
    <a href="servico-detalle.php" class="item">
      <div>
        <img src="assets/img/test3.png" alt="">
        <p>El Country</p>
      </div>
    </a>
    <a href="servico-detalle.php" class="item">
      <div>

        <img src="assets/img/test3.png" alt="">
        <p>Miramar</p>

      </div>
    </a>
    <a href="servico-detalle.php" class="item">
      <div>

        <img src="assets/img/test3.png" alt="">
        <p>Tierrabuena
        </p>

      </div>
    </a>
  </div>

  <style>
    footer a,
    footer i {
      color: #112129;
    }

    footer div {
      position: relative;
      margin-top: 2rem;
    }
    .hamburger-inner,.hamburger-inner::before, .hamburger-inner::after {
 
 background-color: #124f8b;
 }
  </style>
</section>



<?php
require('partials/footer.html');

?>