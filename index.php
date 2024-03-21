<?php require('./layout/header.php')?>

<title>JAC VER SUR</title>

    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
      <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
          <div
            class="header-bg h-100 d-flex flex-column justify-content-center p-5"
          >
          <!--
            <h1 class="display-4 text-light mb-5">
              Jefatura de Servicios de Afiliación Cobranza
            </h1>
          -->  
            <div class="d-flex align-items-center pt-4 animated slideInDown">
<!--               <a href="./Mod40" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">MOD 40</a> -->
              <a href="https://www.imss.gob.mx/" target="_blank" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Saber más</a>
              
              <button
                type="button"
                class="btn-play"
                data-bs-toggle="modal"
                data-src="https://www.youtube.com/embed/t5w7OYj9HlY?autoplay=1&mute=1"
                data-bs-target="#videoModal"
              >
                <span></span>
              </button>
              <h6 class="text-white m-0 ms-4 d-none d-sm-block">Ver Video</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel header-carousel">
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/8.jpg" alt="Imagen 1" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/2.jpg" alt="Imagen 2" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/3.jpg" alt="Imagen 3" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/4.jpg" alt="Imagen 4" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/5.jpg" alt="Imagen 5" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/6.jpg" alt="Imagen 6" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/7.jpg" alt="Imagen 7" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/1.jpg" alt="Imagen 8" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Video Modal Start -->
    <div
      class="modal modal-video fade"
      id="videoModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Youtube Video IMSS</h3>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- 16:9 aspect ratio -->
            <div class="ratio ratio-16x9">
              <iframe
                class="embed-responsive-item"
                src=""
                id="video"
                allowfullscreen
                allowscriptaccess="always"
                allow="autoplay"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

<style>
  /* Estilo local */
  .mt-4 {
    padding-top: 2rem !important;
    padding-bottom: 1rem !important;
  }

</style>

<!-- Sección de Noticias de Facebook -->
<div class="container mt-4">
  <div class="row">
    <img src="./img/BAN.png" alt="Imagen de información oficial" class="img-fluid imagen-formato">
  </div>
  <hr class="linea-divisoria">
  <div class="row">
    <div class="col-md-6 text-center">
      <div class="mt-4">
        <a href="https://www.facebook.com/IMSSVeracruzSur" target="_blank" class="btn btn-primary btn-lg"><i class="fab fa-facebook-f"></i> IMSS Veracruz Sur</a>
      </div>
      <!-- Contenedor del plugin de Página de Facebook -->
      <div class="mx-auto" style="max-width: 90%;"> <!-- Aquí se cambió el max-width al 90% -->
        <div class="fb-page" data-href="https://www.facebook.com/IMSSVeracruzSur" data-tabs="timeline" data-width="500" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/IMSSVeracruzSur" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/IMSSVeracruzSur">IMSS Delegación Veracruz Sur</a>
          </blockquote>
        </div>
      </div>
      <!-- Fin de la Sección de Noticias 1 -->
    </div>

    <div class="col-md-6 text-center">
      <div class="mt-4">
        <a href="https://www.facebook.com/SaberIMSS" target="_blank" class="btn btn-primary btn-lg"><i class="fab fa-facebook-f"></i> Saber IMSS</a>
      </div>
      <!-- Contenedor del plugin de Página de Facebook -->
      <div class="mx-auto" style="max-width: 90%;"> <!-- Aquí se cambió el max-width al 90% -->
        <div class="fb-page" data-href="https://www.facebook.com/SaberIMSS" data-tabs="timeline" data-width="500" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/SaberIMSS" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/SaberIMSS">Saber IMSS</a>
          </blockquote>
        </div>
      </div>
      <!-- Fin de la Sección de Noticias de Facebook -->
    </div>
  </div>
</div>



<script>
  // Script para alternar entre los modos claro y oscuro
  function toggleModo() {
    // Verificar el estado actual del modo
    var cuerpo = document.body;
    var estadoActual = cuerpo.classList.contains('modo-oscuro');
    
    // Cambiar el estado del modo
    if (estadoActual) {
      cuerpo.classList.remove('modo-oscuro');
      localStorage.setItem('modo', 'claro'); // Guardar el estado en el almacenamiento local
    } else {
      cuerpo.classList.add('modo-oscuro');
      localStorage.setItem('modo', 'oscuro'); // Guardar el estado en el almacenamiento local
    }
  }

  // Verificar y aplicar el modo almacenado
  window.addEventListener('DOMContentLoaded', function() {
    var modoGuardado = localStorage.getItem('modo');
    if (modoGuardado === 'oscuro') {
      document.body.classList.add('modo-oscuro');
    }
  });

    // Script para alternar entre los modos claro y oscuro y cambiar el icono
  function toggleModo() {
    var cuerpo = document.body;
    var estadoActual = cuerpo.classList.contains('modo-oscuro');

    // Cambiar el estado del modo
    if (estadoActual) {
      cuerpo.classList.remove('modo-oscuro');
      localStorage.setItem('modo', 'claro');
      document.getElementById('iconoModo').classList.remove('d-none');
      document.getElementById('iconoModoOscuro').classList.add('d-none');
    } else {
      cuerpo.classList.add('modo-oscuro');
      localStorage.setItem('modo', 'oscuro');
      document.getElementById('iconoModo').classList.add('d-none');
      document.getElementById('iconoModoOscuro').classList.remove('d-none');
    }
  }

  // Verificar y aplicar el modo almacenado
  window.addEventListener('DOMContentLoaded', function() {
    var modoGuardado = localStorage.getItem('modo');
    if (modoGuardado === 'oscuro') {
      document.body.classList.add('modo-oscuro');
      document.getElementById('iconoModo').classList.add('d-none');
      document.getElementById('iconoModoOscuro').classList.remove('d-none');
    }
  });


</script>


<?php require('./layout/footer.php')?>