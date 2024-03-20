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
    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">SUBIR DOCUMENTO</h6>
  </div>
  <div class="br-pageheader pd-y-0 pd-l-20" style="margin-bottom: -15px;">
    <h6 class="tx-gray-600 tx-uppercase tx-bold tx-10">DOCUMENTOS</h6>
  </div>
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30"> 
    <!-- Agregar apartado para subir documento -->
    <div class="bg-white p-3 rounded">
      <div class="row">
        <div class="col-md-8">
          <form action="tu_script_de_procesamiento.php" method="post" enctype="multipart/form-data">
            <h4 class="tx-gray-800 mg-b-10 tx-40">Subir documento para validación</h4>
            <p class="tx-20">Aquí agregué el archivo que generaste, ya firmado, para poder validar sus faltas.</p>
            <p class="tx-16">Asegúrate de seleccionar el archivo correcto antes de pulsar el botón de subir.</p>
            <input type="file" name="documento" id="documento" class="form-control-file">
            <!-- Agregar checkbox para confirmar que el documento está firmado y sellado -->
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" value="" id="confirmCheck">
              <label class="form-check-label" for="confirmCheck">
                Confirmo que el documento está firmado y sellado.
              </label>
            </div>
            <!-- Añadir mensaje emergente personalizado al pasar el mouse sobre el botón -->
            <button type="submit" class="btn btn-primary mt-3" id="submitBtn" disabled>
              <i class="fas fa-cloud-upload-alt mr-1"></i> Subir
            </button>
          </form>
          <div id="warningMessage" style="display: none; color: red;">Si el documento no cumple con los requisitos no será validado.</div>
        </div>
        <div class="col-md-4">
          <div class="bg-light p-3 rounded">
            <h5 class="tx-gray-800 mg-b-10 tx-20">Ejemplo de archivo correcto</h5>
            <div class="row">
            <div class="col-md-12">
              <button class="btn btn-secondary mt-3" onclick="openPDF()">
                <i class="fas fa-eye mr-1"></i> Ver en grande
              </button>
            </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-12">
                <embed src="./docs/doc.pdf" type="application/pdf" width="100%" height="550px">
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>

    <script>
      function openPDF() {
        window.open('./docs/doc.pdf', '_blank', 'toolbar=yes,scrollbars=yes,resizable=yes,width=800,height=600');
      }
    </script>
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
