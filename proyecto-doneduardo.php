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

<section class="main-services grid-section container-main ">
  <div>
    <h2 data-aos="fade-right"
     data-aos-easing="linear"
     data-aos-duration="1500" class="title">DON EDUARDO</h2>
    <p class="parraf">
      Video <br>
      Renders 2D
    </p>
  </div>

  <!-----------grid-2------------->
 <div id="gallery" class=" gallery"> 

 <div class="grid grid-main grid-details" >
    <div class="item">
      <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="assets/img/tes2.jpg" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
          <img src="assets/img/tes2.jpg" itemprop="thumbnail" alt="Image description">
        </a>
        <p>Zenith</p>
      </figure>
    </div>
  </div>



  
  <div class="grid grid-main grid-details gallery grid-3" >
    <div class="item">

      <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="assets/img/tes2.jpg" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
          <img src="assets/img/tes2.jpg" itemprop="thumbnail" alt="Image description">
        </a>
        <p>Zenith</p>
      </figure>

    </div>
    <div class="item">

      <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="assets/img/tes2.jpg" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
          <img src="assets/img/tes2.jpg" itemprop="thumbnail" alt="Image description">
        </a>
        <p>Cardinal</p>
      </figure>

    </div>
    <div class="item">

      <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="assets/img/tes2.jpg" data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>" data-width="1200" data-height="900" itemprop="contentUrl">
          <img src="assets/img/tes2.jpg" itemprop="thumbnail" alt="Image description">
        </a>
        <p>Focal</p>
      </figure>

    </div>


  </div>
 </div>

</section>



<style>
  footer a,
  footer i {
    color: #112129;
  }

  footer div {
    position: relative;
    margin-top: 2rem;
  }
</style>










<?php
require('partials/footer.html');

?>