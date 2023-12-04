<?php require('./layout/header.php')?>

<title>JAC</title>

    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
      <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
          <div
            class="header-bg h-100 d-flex flex-column justify-content-center p-5"
          >
            <h1 class="display-4 text-light mb-5">
              Jefatura de Servicios de Afiliación Cobranza
            </h1>
            <div class="d-flex align-items-center pt-4 animated slideInDown">
              <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5"
                >Saber más</a
              >
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
              <img class="img-fluid" src="img/1.jpg" alt="Imagen 1" />
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
              <img class="img-fluid" src="img/8.jpg" alt="Imagen 8" />
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
    <!-- Video Modal End -->
<!-- Después de tu carrusel -->
<div id="nuestros-servicios" class="container mt-4">
<div class="row">
<hr class="linea-divisoria">
</div>
  <div class="row">
    <h1 class="text-center">Menú</h1>
    <div class="col text-center">
      <a href="./Mod40" class="btn btn-primary rounded-pill">
        <img src="img/mod 40.jpg" alt="Servicio 1" class="img-fluid rounded-circle">
        Modalidad 40
      </a>
    </div>
    <div class="col text-center">
      <a href="./datatable" class="btn btn-primary rounded-pill">
        <img src="img/mod 40.jpg" alt="Servicio 2" class="img-fluid rounded-circle">
        Certificación de pagos Mod 40
      </a>
    </div>
    <div class="col text-center">
      <a href="../PERSONAL_HelpDesk/" class="btn btn-primary rounded-pill">
        <img src="img/PTD.png" alt="Servicio 3" class="img-fluid rounded-circle">
        REPORTE DE INCIDENCIAS PTD
      </a>
    </div>
  </div>
</div>


<?php require('./layout/footer.php')?>