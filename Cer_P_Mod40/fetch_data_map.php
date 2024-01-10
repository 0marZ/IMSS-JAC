<?php
header('Content-Type: application/json');

include('connection.php');

// Verificar la conexión
if (!$con) {
    echo json_encode(array('error' => 'Error de conexión a la base de datos.'));
    exit;
}

$query = "SELECT latitud, longitud, Ciudad,otraInformacion FROM datosmapa";
$result = mysqli_query($con, $query);

// Verificar la consulta
if (!$result) {
    echo json_encode(array('error' => 'Error al ejecutar la consulta: ' . mysqli_error($con)));
    mysqli_close($con);
    exit;
}

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);

// Cerrar la conexión
mysqli_close($con);
?>
