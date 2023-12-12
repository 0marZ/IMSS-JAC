<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap5.min.css">
    <script src="https://kit.fontawesome.com/f0f6e50c6f.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="img/fevicon.png">
    <!-- Archivo CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>CERTIFICACIÓN DE DATOS DE PAGO IMSS</title>
</head>



 <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <!-- Logo del IMSS -->
        <a class="navbar-brand" href="../">
          <div style="max-width: 200px;">
            <img src="img/JAC_Logo3.png" alt="JAC LOGO" class="d-inline-block align-top" style="max-width: 100%;">
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">MODALIDAD 40</a>
                </li>
                 <!--
                <li class="nav-item">
                    <a class="nav-link" href="../">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        OTROS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">1. </a></li>
                        <li><a class="dropdown-item" href="#">2. </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">3. </a></li>
                    </ul>
                </li>
                -->
            </ul>
        </div>
    </div>
    <div class="imagenav d-none d-lg-block">
                <img src="img/VERSUR.png" alt="Imagen a la derecha">
    </div>
</nav>
 <!-- END NAVBAR -->

<!-- TABLA  -->
<body>
    <div class="container-fluid mt-4">
        <h2 class="text-center">CERTIFICACIÓN DE DATOS DE PAGO IMSS</h2>
        <p class="datatable design text-center">MODALIDAD 40</p>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <table id="example" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <th>Id</th>
                                <th>Cve Delegación</th>
                                <th>Cve Subdelegación</th>
                                <th>Cve NSS</th>
                                <th>Num Periodo Pago</th>
                                <th>Num Folio Sua</th>
                                <th>Nombre trabajador</th>
                                <th>Fecha de Pago</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

    <script type="text/javascript">
$(document).ready(function () {
    $('#example').DataTable({
        "language": {
              "processing": "Procesando información.....",
              "lengthMenu": "Mostrar _MENU_ registros por página",
              "zeroRecords": "No hay coincidencias",
              "info": "Mostrando la _PAGE_ de _PAGES_",
              "infoEmpty": "No records available",
              "infoFiltered": "(Filtrado de _MAX_ registros totales)",
              "search": "Buscar:",
              "paginate": {
                  "next": "Siguiente",
                  "previous": "Anterior"
              },
          "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad",
                "collection": "Colección",
                "colvisRestore": "Restaurar visibilidad",
                "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                "copySuccess": {
                    "1": "Copiada 1 fila al portapapeles",
                    "_": "Se ha copiado %d filas al portapapeles"
                    },
                    
                    "copyTitle": "Copiado al portapapeles",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength":{
                        "-1": "Mostrar todas las filas",
                        "_": "Mostrar %d filas"
                    },
            },
        },
        "fnCreatedRow": function (nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
            'url': 'fetch_data.php',
            'type': 'post',
        },
        "aoColumnDefs": [{

        }],
        "dom": '<"top"Bf>rtlip',
        "lengthMenu": [10, 25, 50, 100],
        "buttons": [
            {
                extend: 'copy',
                text: '<i class="fas fa-copy"></i> Copiar',
                className: 'btn btn-primary'
            },
            {
                extend: 'csv',
                text: '<i class="fas fa-file-csv"></i> CSV',
                className: 'btn btn-warning'
            },
            {
                extend: 'excel',
                text: '<i class="fas fa-file-excel"></i> Excel',
                className: 'btn btn-danger'
            },
            {
                extend: 'pdf',
                text: '<i class="fas fa-file-pdf"></i> PDF',
                className: 'btn btn-info'
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print"></i> Imprimir',
                className: 'btn btn-success'
            }
        ]
    });
});




    // BARRA ROJA EN LA PARTE SUPERIOR
document.addEventListener('DOMContentLoaded', function () {
    var barraCarga = document.getElementById('barraCarga');

    // Simula el progreso (puedes ajustar la velocidad cambiando el valor de intervalo)
    var progreso = 0;
    var intervalo = setInterval(function () {
        progreso += 3; // Ajusta el valor del incremento según tus necesidades
        barraCarga.style.width = progreso + '%';

        if (progreso >= 100) {
            clearInterval(intervalo);
            // Oculta la barra de carga cuando alcanza el 100%
            setTimeout(function () {
                barraCarga.style.display = 'none';
            }, 300);
        }
    }, 100); // Ajusta la velocidad de la barra de carga según tus necesidades
});

  </script>


  <!-- BARRA DE CARGA SUPERIOR-->
<div class="barra-carga" id="barraCarga"></div>



</body>
<!-- Pie de página -->
<footer class="text-center bg-dark text-white py-3 mt-4">
  <div class="container">
  <img class="logomex" src="img/logoheader.svg" alt="Descripción de la imagen SVG">
    <p>&copy; 2023 IMSS. Todos los derechos reservados.</p>
  </div>
  <img class="iconosS" src="img/Inferior.png" style= "height: auto; width: 100%">
</footer>


</html>
<script type="text/javascript">
  //var table = $('#example').DataTable();
</script>
