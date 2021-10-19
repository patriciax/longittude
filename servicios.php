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
    <h2 class="title">SERVICIOS</h2>
    <p class="parraf">Somos un estudio de diseño
      con arquitectos especializados
      en visualización urbanística,
      pasajística y arquitectónica.
      Buscamos plasmar la realidad
      futura con una variedad de
      opciones visuales, expresando
      composición, ambiente y
      contenido, comprometiéndonos
      siempre a desarrollar trabajos
      con un altísimo nivel de detalle
      y calidad, con un portafolio
      que comprende imágenes fijas,
      animaciones y realidad virtual.</p>
  </div>
  <div class="grid grid-main">
    <a href="servico-detalle.php" class="item">
      <div>

        <img src="assets/img/test1.png" alt="">
        <p>SUITE MAGIC BOX</p>

      </div>
    </a>
    <a href="render360.php" class="item">
      <div>
        <img src="assets/img/tes2.jpg" alt="">
        <p> RENDER 360°</p>
      </div>
    </a>
    <a href="recorrio.php" class="item">
      <div>
        <img src="assets/img/test3.png" alt="">
        <p> RECORRIDO INTERACTIVO 360° </p>
      </div>
    </a>
    <a href="servico-detalle.php" class="item">
      <div>
        <img src="assets/img/test3.png" alt="">
        <p> VIDEO INTERACTIVO 360° </p>
      </div>
    </a>
    <a href="servico-detalle.php" class="item">
      <div>
        <img src="assets/img/test3.png" alt="">
        <p>FOTOGRAFÍA 8K 360°</p>
      </div>
    </a>
    <a href="servico-detalle.php" class="item">
      <div>

        <img src="assets/img/test3.png" alt="">
        <p>RENDER 2D</p>

      </div>
    </a>
    <a href="servico-detalle.php" class="item">
      <div>

        <img src="assets/img/test3.png" alt="">
        <p>VIDEOS DE PROYECTOS
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