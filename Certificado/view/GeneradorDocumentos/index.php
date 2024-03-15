<?php
  // Lógica de generación de viáticos

  // Incluir el archivo de conexión si es necesario
  require_once("../../config/conexion.php");

  // Verificar si el usuario ha iniciado sesión
  if(isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php require_once("../html/MainHead.php"); ?>
  <script src="https://kit.fontawesome.com/f0f6e50c6f.js" crossorigin="anonymous"></script>
  <title>Generador de Documentos</title>
  <link rel="icon" type="image/png" href="../../JAC .png">
  <style>
    .form-check-input {
      position: absolute;
      margin-top: 0.25rem;
      margin-left: -0.25rem;
    }
  </style>
</head>
<body>

<?php require_once("../html/MainMenu.php"); ?>

<?php require_once("../html/MainHeader.php"); ?>

<div class="br-mainpanel">
  <div class="br-pageheader pd-y-80 pd-l-20" style="margin-bottom: -70px;">
    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">GENERADOR DE DOCUMENTOS</h6>
  </div>
  <div class="br-pageheader pd-y-0 pd-l-20" style="margin-bottom: -15px;">
    <h6 class="tx-gray-600 tx-uppercase tx-bold tx-10">DOCUMENTOS</h6>
  </div>
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    
    <div class="button-container bg-white p-3 rounded">
      <h1 class="tx-gray-800 mg-b-20 tx-30">SELECCIONA EL DOCUMENTO A GENERAR</h1>
      <a href="./Gen Viaticos y pasajes/newsign.php" class="btn btn-outline-primary mr-2"> <i class="fa-solid fa-file"></i>  Nuevo VIATICOS Y PASAJES</a>
    </div>
    <div class="button-container bg-white p-3 rounded">
      <a href="./Gen Pliego Comision/newsign.php" class="btn btn-outline-primary mr-2"> <i class="fa-solid fa-file"></i>  Nueva PLIEGO DE COMISION</a>
    </div>
    
  </div>
</div>

<!-- Incluir el script de Bootstrap para el funcionamiento del mensaje emergente -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Script para mostrar la advertencia cuando el usuario pase el mouse sobre el botón -->
<script>
  // Habilitar o deshabilitar el botón de envío según si el checkbox está marcado o no
  document.getElementById('confirmCheck').addEventListener('change', function() {
    document.getElementById('submitBtn').disabled = !this.checked;
  });

  // Mostrar la advertencia cuando el usuario pasa el mouse sobre el botón
  document.getElementById('submitBtn').addEventListener('mouseover', function() {
    document.getElementById('warningMessage').style.display = 'block';
  });

  // Ocultar la advertencia cuando el mouse se aleja del botón
  document.getElementById('submitBtn').addEventListener('mouseout', function() {
    document.getElementById('warningMessage').style.display = 'none';
  });
</script>



<?php require_once("../html/MainJs.php"); ?>

</body>
</html>

<?php
  } else {
    // Para matar sesion si no ha iniciado sesion. Manda a pagina no encontrada.
    header("Location:".Conectar::ruta()."view/404/");
  }
?>
