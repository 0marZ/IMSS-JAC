<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GENERADOR DE PLIEGO DE COMISION</title>
<script src="jquery.min.js"></script>
<script src="signature_pad.js"></script>

<body>

<h1>GENERADOR DE PLIEGO DE COMISION</h1>
<div><a href="./">Regresar</a></div>
<h3>Nueva Firma</h3>

<!-- Formulario que recoge los datos y los enviara al servidor -->
 <form id="form" action="./savedraw.php" method="post">

 <h3>Ingresa los siguientes datos: </h3>

<!--Empleado comisionado:-->
<div>Nombre completo: <input type="text" name="name" placeholder="Nombre Completo"></div>

<!--Matricula:-->
<div>Matricula: <input type="text" name="Matricula" placeholder="Matricula"></div>

<!--Grupo Jerarquico:-->
<div>Grupo Jerarquico: <input type="text" name="GrupoJ" placeholder="Grupo Jerarquico"></div>

<!--Tipo de contratacion:-->
<div>Tipo de contratacion: <input type="text" name="Tipo_Contratacion" placeholder="Contratacion"></div>

<!--Telefono de oficina:-->
<div>Telefono de oficina: <input type="text" name="phone" placeholder="Telefono"></div>

<!--Lugar de comision:-->
<div>Lugar de comision: <input type="text" name="Lugar_Comision" placeholder="Lugar de Comision"></div>

<!--Periodo:-->
<div>Periodo: <input type="text" name="Periodo" placeholder="Periodo"></div>

<!--Total de dias:-->
<div>Total de dias: <input type="text" name="Total_dias" placeholder="Total de dias"></div>

<!--Medio de transporte:-->
<div>Medio de transporte: <input type="text" name="Transporte" placeholder="Medio de transporte"></div>

<!--MOTIVO DE LA COMISION:-->
<div>Motivo de la comision: <input type="text" name="Motivo" placeholder="Motivo Comision"></div>

<input type="hidden" name="pacient_id" value="0">
<input type="hidden" name="base64" value="" id="base64">

<!-- Contenedor y Elemento Canvas -->
<div id="signature-pad" class="signature-pad">
    <div class="description">Firmar aquí</div>
    <div class="signature-pad--body" style="background-color: rgba(255, 255, 255, 0);">
        <canvas style="width: 640px; height: 420px; border: 1px black solid;" id="canvas"></canvas>
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

  var ratio =  Math.max(window.devicePixelRatio || 1, 1);

  canvas.width = canvas.offsetWidth * ratio;
  canvas.height = canvas.offsetHeight * ratio;
  canvas.getContext("2d").scale(ratio, ratio);

  signaturePad.clear();
}

window.onresize = resizeCanvas;
resizeCanvas();

</script>
<script>

   document.getElementById('form').addEventListener("submit",function(e){

    var ctx = document.getElementById("canvas");
      var image = ctx.toDataURL(); // data:image/png....
      document.getElementById('base64').value = image;
   },false);

</script>
  </body>
</html>

