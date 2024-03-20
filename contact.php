<?php require('./layout/header.php')?>

<title>Contacto JAC</title>

<!-- Page Header Start -->
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-4 text-white mb-3 animated slideInDown">Contacto</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-white" href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-white" href="#">JAC</a>
        </li>
        <li class="breadcrumb-item text-primary active" aria-current="page">Contacto</li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4 mb-5">
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="h-100 bg-light d-flex align-items-center p-5">
          <div class="btn-lg-square bg-white flex-shrink-0">
            <i class="fa fa-map-marker-alt text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2">
              <span class="text-primary me-2">#</span>Dirección
            </p>
            <h5 class="mb-0 consulta-info">Calle Sur 10 No. 127, 94300, Orizaba, Veracruz</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="h-100 bg-light d-flex align-items-center p-5">
          <div class="btn-lg-square bg-white flex-shrink-0">
            <i class="fa fa-phone-alt text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2">
              <span class="text-primary me-2">#</span>Contactenos al 
            </p>
            <h5 class="mb-0 consulta-info">272-725-9127</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
        <div class="h-100 bg-light d-flex align-items-center p-5">
          <div class="btn-lg-square bg-white flex-shrink-0">
            <i class="fa fa-envelope-open text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2">
              <span class="text-primary me-2">#</span>Correo
            </p>
            <h5 class="mb-0 consulta-info">jacversur@imss.com</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <p><span class="text-primary me-2">#</span>Contactenos</p>
        <h1 class="display-5 mb-4 consulta-info">¿Tiene alguna consulta? ¡Por favor contáctenos!</h1>
        <p class="mb-4"></p>
        <form action="https://formsubmit.co/verojig929@hdrlog.com" method="POST">
          <div class="row g-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control bg-light border-0" id="name" name="name" placeholder="Your Name">
                <label for="name">Nombre</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="email" class="form-control bg-light border-0" id="email" name="email" placeholder="Your Email">
                <label for="email">Correo</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control bg-light border-0" id="subject" name="subject" placeholder="Subject">
                <label for="subject">Tema</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control bg-light border-0" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                <label for="message">Mensaje</label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary w-100 py-3" type="submit">Enviar mensaje</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="h-100" style="min-height: 400px">
          <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776.0449007624507!2d-97.10929662525751!3d18.840671259319077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c502bda5f1e49d%3A0x87f0b8be4860a4f4!2sDelegaci%C3%B3n%20del%20Instituto%20Mexicano%20del%20Seguro%20Social!5e0!3m2!1ses-419!2smx!4v1700756547906!5m2!1ses-419!2smx" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->

<style>
  /* Estilo local */
  .mt-4 {
    padding-top: 2rem !important;
    padding-bottom: 1rem !important;
  }

  /* Estilos para el modo oscuro */
.modo-oscuro {
  background-color: #121212;
  color: #fff;
  
}
.modo-oscuro .bg-white {
  background-color: #121212 !important;
}


.modo-oscuro .large-text {
    font-size: 30px;
    color: #1b826a;
}

.modo-oscuro .navbar .navbar-nav .nav-link {
    color: #1b826a;
    font-weight: 500;
}

.modo-oscuro .consulta-info {
    color: #1b826a; /* Cambia el color del texto a blanco en modo oscuro */
}

.modo-oscuro .bg-light {
    background-color: #1a1a1a !important;
}
/* Estilos para el mapa en modo oscuro */
.modo-oscuro iframe {
    filter: grayscale(100%) invert(1) contrast(1.2);
}
</style>


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
