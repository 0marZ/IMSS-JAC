<?php
  // Lógica de generación de viáticos

  // Incluir el archivo de conexión si es necesario
  require_once("../../../config/conexion.php");
  // Verificar si el usuario ha iniciado sesión
  if(isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viaticos y pasajes generados</title>
        <!-- Bootstrap CSS -->
    <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap5.min.css">
    <script src="https://kit.fontawesome.com/f0f6e50c6f.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="img/fevicon.png">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Archivo CSS -->
    <link rel="stylesheet" type="text/css" href="./css/">

    <title>Viaticos y pasajes generados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
        }
        .button-container {
            margin-top: 20px; /* Separación superior del botón */
            margin-left: 20px; /* Margen izquierdo para mover el botón hacia la izquierda */
            text-align: left; /* Alinear el texto a la izquierda */
        }
        .table-container {
            margin: 10px auto; /* Centro la tabla horizontalmente */
            width: 90%; /* Ancho máximo de la tabla */
            overflow-x: auto; /* Agregado para permitir desplazamiento horizontal en caso de contenido ancho */
        }
        table {
            width: 60%;
            border-collapse: collapse;
            font-size: 12px; /* Reducir el tamaño del texto en la tabla */
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 4px; /* Reducir el espacio dentro de las celdas */
            text-align: left;
            max-width: 100px; /* Limitar el ancho máximo de las celdas */
            white-space: nowrap; /* Evitar que el texto se ajuste automáticamente */
            overflow: hidden; /* Ocultar el texto que exceda el ancho máximo */
            text-overflow: ellipsis; /* Mostrar puntos suspensivos (...) para indicar texto truncado */
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .action-buttons {
            display: flex;
            justify-content: space-between;
        }
        .action-buttons a {
            text-decoration: none;
            padding: 4px 8px; /* Reducir el espacio alrededor de los botones */
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f2f2f2;
            color: #333;
            transition: background-color 0.3s ease;
        }
        .action-buttons a:hover {
            background-color: #ddd;
        }
        .back-button {
            text-decoration: none;
            padding: 6px 12px;
            border: 1px solid #009900; /* Color de borde verde */
            border-radius: 4px;
            background-color: #00cc00; /* Color de fondo verde */
            color: #fff; /* Color de texto blanco */
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #009900; /* Cambio de color de fondo al pasar el ratón */
        }
        .back-button i {
            margin-right: 4px;
        }

    </style>
</head>
<body>
    <h2>VIATIVOS Y PASAJES GENERADOS</h2>

    <!-- Contenedor del botón con margen superior y margen izquierdo -->
    <div class="button-container">
        <a href="../" class="back-button"><i class="fas fa-arrow-left"></i>Regresar</a>
    </div>

    <?php
    include "connect.db.php";
    $sql = "select * from person order by created_at desc";
    $con = connect_db();
    $query = $con->query($sql);
    $data = array();
    while($r= $query->fetch_object()){ $data[] = $r; }
    ?>

    <?php if(count($data)):?>
    <div class="table-container">  
        <table id="viaticos">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Matricula</th>
                    <th>Grupo Jerarquico</th>
                    <th>Tipo de Contratacion</th>
                    <th>Telefono</th>
                    <th>Lugar de comision</th>
                    <th>Periodo</th>
                    <th>Total de dias</th>
                    <th>Transporte</th>
                    <th>Motivo de Comision</th>
                    <th>Acciones</th> <!-- Cambiado a "Acciones" en lugar de estar vacío -->
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $d): ?>
                <tr>
                    <td><?php echo $d->id; ?></td>
                    <td><?php echo $d->name; ?></td>
                    <td><?php echo $d->Matricula; ?></td>
                    <td><?php echo $d->GrupoJ; ?></td>
                    <td><?php echo $d->Tipo_Contratacion; ?></td>
                    <td><?php echo $d->phone; ?></td>
                    <td><?php echo $d->Lugar_Comision?></td>
                    <td><?php echo $d->Periodo; ?></td>
                    <td><?php echo $d->Total_dias; ?></td>
                    <td><?php echo $d->Transporte; ?></td>
                    <td><?php echo $d->Motivo; ?></td>
                    <td class="action-buttons"> <!-- Cambiado a "action-buttons" -->
    <a href="./concentimiento.php?id=<?php echo $d->id ; ?>" target="_blank">Ver</a> 
    <a href="#" class="delete-button" data-id="<?php echo $d->id ; ?>">Eliminar</a>
</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php else:?>
    <p>No hay datos para mostrar.</p>
    <?php endif; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script>
$(document).ready(function() {
    // Verificar si la tabla ya ha sido inicializada antes de intentar inicializarla nuevamente
    if (!$.fn.DataTable.isDataTable('#viaticos')) {
        // Inicializar DataTable solo si aún no ha sido inicializado

    // Inicializar DataTable
    var table = $('#viaticos').DataTable({
            "responsive": true,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "processing": "Procesando información.....",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No hay coincidencias",
                "info": "Mostrando la _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscado:",
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
                    "pageLength": {
                        "-1": "Mostrar todas las filas",
                        "_": "Mostrar %d filas"
                    },
                },
            },
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
                    className: 'btn btn-info',
                    orientation: 'landscape', // Configuración de la orientación horizontal
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i> Imprimir',
                    className: 'btn btn-success',
                    customize: function(win) {
                        $(win.document.body)
                            .css('font-size', '5pt')
                            .css('color', '#333') // Cambiar el color del texto a negro para la impresión
                            .css('text-align', 'center'); // Centrar la tabla
                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit')
                            .css('width', 'auto') // Ajustar la tabla al ancho automático
                            .css('margin', 'auto') // Centrar la tabla horizontalmente
                            .css('max-width', '100%'); // Establecer el ancho máximo de la tabla al 100% del documento
                        $(win.document.body).find('iframe').attr('title', 'Viáticos y pasajes generados'); // Cambiar el título del iframe
                    }
                }
            ]
        });

        // Manejar clics en los botones de eliminación
        $('#viaticos').on('click', '.delete-button', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            if (confirm('¿Estás seguro de que quieres eliminar este registro?')) {
                // Redirigir al script de eliminación con el ID del registro
                window.location.href = './eliminar.php?id=' + id;
            }
        });
    }
});

    </script>


</body>
</html>
<?php
  } else {
    // Si no ha iniciado sesión, redireccionar a la página de error 404 o a la de inicio de sesión
    header("Location:".Conectar::ruta()."view/404/");
  }
?>
