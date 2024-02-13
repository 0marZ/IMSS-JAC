<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GENERADOR DE PLIEGO DE COMISION</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
    <script src="https://kit.fontawesome.com/f0f6e50c6f.js" crossorigin="anonymous"></script>

    <script src="jquery.min.js"></script>
    <script src="signature_pad.js"></script>

    <!-- Archivo CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>
  <body>

    <h1>GENERADOR DE PLIEGO DE COMISION</h1>
    <div class="button-container">
      <a href="./" class="back-button"><i class="fas fa-arrow-left"></i>Regresar</a>
    </div>
    <h3>Nueva Firma</h3>

    <!-- Formulario que recoge los datos y los enviará al servidor -->
    <form id="form" action="./savedraw.php" method="post">

      <h3>Ingresa los siguientes datos: </h3>

      <!-- Empleado comisionado: -->
      <div>Nombre completo: <input type="text" name="name" placeholder="Nombre Completo" required></div>

      <!-- Matricula: -->
      <div>Matricula: <input type="text" name="Matricula" placeholder="Matricula" required></div>

      <!-- Grupo Jerarquico: -->
      <div>Grupo Jerarquico: <input type="text" name="GrupoJ" placeholder="Grupo Jerarquico" required></div>

      <!-- Tipo de contratacion: -->
      <div>Tipo de contratacion: <input type="text" name="Tipo_Contratacion" placeholder="Contratacion" required></div>

      <!-- Telefono de oficina: -->
      <div>Telefono de oficina: <input type="text" name="phone" placeholder="Telefono" required></div>

      <!-- Lugar de comision: -->
      <div>Lugar de comision: <input type="text" name="Lugar_Comision" placeholder="Lugar de Comision" required></div>

      <!-- Periodo: -->
      <div>Periodo: <input type="text" name="Periodo" placeholder="Periodo" required></div>

      <!-- Total de dias: -->
      <div>Total de dias: <input type="text" name="Total_dias" placeholder="Total de dias" required></div>

      <!-- Medio de transporte: -->
      <div>Medio de transporte:
        <select name="Transporte" required>
          <option value="autobus">AUTOBÚS</option>
          <option value="vehiculo_particular">VEHICULO PARTICULAR</option>
          <option value="vehiculo_oficial">VEHICULO OFICIAL</option>
          <option value="avion">AVIÓN</option>
        </select>
      </div>

      <!-- MOTIVO DE LA COMISION: -->
      <div>Motivo de la comision: <input type="text" name="Motivo" placeholder="Motivo Comision" required></div>

      <input type="hidden" name="pacient_id" value="0">
      <input type="hidden" name="base64" value="" id="base64">

      <!-- Contenedor y Elemento Canvas -->
      <div id="signature-pad" class="signature-pad">
        <div class="description">Firmar aquí</div>
        <div class="signature-pad--body" style="background-color: rgba(255, 255, 255, 0);">
          <canvas style="width: 558px; height: 420px; border: 1px black solid;" id="canvas"></canvas>
          <button id="clear-signature" class="btn btn-danger">Borrar firma</button>
        </div>
      </div>
      <button id="saveandfinish" class="btn btn-success">Guardar y Finalizar</button>
    </form>

    <script type="text/javascript">
      var wrapper = document.getElementById("signature-pad");
      var canvas = wrapper.querySelector("canvas");
      var signaturePad = new SignaturePad(canvas, {
        backgroundColor: 'rgb(255, 255, 255, 0)',
        penColor: 'blue' // Establece el color del lápiz a azul
      });

      function resizeCanvas() {
        var ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
        signaturePad.clear();
      }

      window.onresize = resizeCanvas;
      resizeCanvas();

      document.getElementById('form').addEventListener("submit", function(e) {
        if (!signaturePad.isEmpty()) {
          var ctx = document.getElementById("canvas");
          var image = ctx.toDataURL(); // data:image/png....
          document.getElementById('base64').value = image;
        } else {
          e.preventDefault();
          alert("Firme antes de enviar el formulario.");
        }
      }, false);
    </script>

    <script type="text/javascript">
      // Encuentra el botón y agrega un evento de clic
      document.getElementById('clear-signature').addEventListener("click", function(e) {
        e.preventDefault();
        signaturePad.clear();
      }, false);
    </script>

  </body>
</html>
