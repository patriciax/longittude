<?php
require('partials/loader.html');

?>
<?php
require('partials/header.html');

?>
<style>
    footer{
        display: none;
    }
</style>
<section class="banner">
    <div class="video-player mb30">
        <video id="bgdvid">
            <source src="https://embotellados.labsjoinlife.cl/wp-content/uploads/2021/10/videoplayback-1.mp4" type="video/mp4">
            <source src="https://embotellados.labsjoinlife.cl/wp-content/uploads/2021/10/videoplayback-1.mp4" type="video/ogg">
            Your browser does not support HTML5 video.
        </video>
        <div class="btn play-btn btn-base fa play active" id="play-pause-button">
            <button id="playv">
                <div class="video-overlay-play"></div>
            </button>
        </div>

        <p>SOMOS ARQUITECTOS PLASMANDO LA
            REALIDAD FUTURA CON OPCIONES VISUALES
            QUE EXPRESAN COMPOSICIÓN,
            AMBIENTE Y CONTENIDO.</p>
    </div>
</section>

<?php
require('partials/footer.html');

?>