<?php
header('Content-Type: application/json');

include('connection.php');

$query = "SELECT ciudad, datos FROM datosgrafica";
$result = mysqli_query($con, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);

// Manejo de errores
if (json_last_error() != JSON_ERROR_NONE) {
    echo json_encode(array('error' => 'Error en la generación del JSON.'));
    exit;
}
?>
