<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/icon/fevicon.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    
     <!-- SDK FACEBOOK-->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId            : 'your-app-id',
          xfbml            : true,
          version          : 'v19.0'
        });
      };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
   
    <!-- Icon Font Stylesheet -->
    <script src="https://kit.fontawesome.com/f0f6e50c6f.js" crossorigin="anonymous"></script>

  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Cargando</span>
      </div>
    </div>
    <!-- Spinner End -->



<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.5s">
  <a href="index.php" class="navbar-brand p-0">
    <img class="img-fluid me-3" src="img/JAC .png" alt="Icon" />
  </a>
  <h1 class="d-none d-lg-block main-title">
  <style>
    h1, .h1 {
        font-size: 1.5rem;
    }
  </style>
    <span class="large-text">Departamento de Conservación y Servicios Generales</span> <br>
    <span class="small-text">Jefatura de Servicios de Afiliación Cobranza <br><span style="font-size: 20px; letter-spacing: -1px;">Ver Sur</span></span>
  </h1>
      <!-- Mobile-specific content -->
      <div class="d-lg-none text-center">
    <h1 class="mobile-title">
      <span class="large-text">JAC - VER SUR</span> <br>
    </h1>

    <button id="modoBtn" onclick="toggleModo()" class="btn btn-outline-primary btn-sm ms-2"
              onmouseover="mostrarMensaje()" onmouseout="ocultarMensaje()">
        <i id="iconoModo" class="fas fa-sun icono-grande"></i>
        <i id="iconoModoOscuro" class="fas fa-moon d-none icono-grande"></i> 
        <span class="visually-hidden">Cambiar Modo</span> 
        <div id="mensaje" class="oculto">Cambiar Modo</div>
      </button>
  </div>
  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
    <div class="navbar-nav ms-auto">
      <a href="index.php" class="nav-item nav-link active">Inicio</a>
<!--       <a href="#nuestros-servicios" class="nav-item nav-link">Servicios</a> -->
      <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Servicios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./Mod40">SEMOD 40</a></li>
                        <li><a class="dropdown-item" href="../../Cer_Mod_40/">Certificación de pagos Mod 40</a></li>
                        <li><a class="dropdown-item" href="./Certificado">PTD</a></li>
                        
<!--                         <li>
                            <hr class="dropdown-divider">
                        </li> -->
                    </ul>
                </li>
      <a href="contact.php" class="nav-item nav-link">Contacto</a>
      <button id="modoBtn" onclick="toggleModo()" class="btn btn-outline-primary btn-sm ms-2"
              onmouseover="mostrarMensaje()" onmouseout="ocultarMensaje()">
        <i id="iconoModo" class="fas fa-sun icono-grande"></i>
        <i id="iconoModoOscuro" class="fas fa-moon d-none icono-grande"></i> 
        <span class="visually-hidden">Cambiar Modo</span> 
        <div id="mensaje" class="oculto">Cambiar Modo</div>
      </button>

<script>
  function toggleModo() {
  }

  function mostrarMensaje() {
    var mensaje = document.getElementById("mensaje");
    mensaje.style.display = "block";
  }

  function ocultarMensaje() {
    var mensaje = document.getElementById("mensaje");
    mensaje.style.display = "none";
  }
</script>
    </div>
  </div>
</nav>
    <!-- Navbar End -->