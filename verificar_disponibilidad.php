<?php
// Incluye la conexión a la base de datos
include 'database.php';

// Recibe la fecha seleccionada desde la solicitud AJAX
$fechaSeleccionada = $_POST['fecha'];

// Consulta SQL para verificar la disponibilidad
$sql = "SELECT COUNT(*) as count FROM reservas_salon WHERE fecha_evento = '$fechaSeleccionada'";
$result = $conn->query($sql);

$response = array();

if ($result) {
    $row = $result->fetch_assoc();
    $disponibilidad = ($row['count'] == 0) ? 'Disponible' : 'No disponible';

    // Agrega la disponibilidad al array de respuesta
    $response['disponibilidad'] = $disponibilidad;
} else {
    // Si hay un error, agrega un mensaje de error al array de respuesta
    $response['error'] = 'Error al verificar la disponibilidad.';
}

// Cierra la conexión a la base de datos
$conn->close();

// Devuelve la respuesta en formato JSON
echo json_encode($response);
?>
