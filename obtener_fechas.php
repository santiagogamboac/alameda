<?php
// Incluir el archivo de configuración de la base de datos
include 'database.php';

// Obtener fechas disponibles desde la base de datos
$sql = "SELECT fecha_evento FROM reservas_salon";
$result = $conn->query($sql);

$fechas_ocupadas = array();
while ($row = $result->fetch_assoc()) {
    $fechas_ocupadas[] = $row['fecha_evento'];
}

// Supongamos que hay una función que devuelve todas las fechas posibles
$fechas_posibles = obtenerFechasPosibles();

// Calcular las fechas disponibles restando las ocupadas de las posibles
$fechas_disponibles = array_diff($fechas_posibles, $fechas_ocupadas);

// Devolver las fechas disponibles al cliente
echo json_encode($fechas_disponibles);

$conn->close();

function obtenerFechasPosibles() {
    // Aquí deberías implementar la lógica para obtener las fechas posibles
    // Puedes generarlas según tus necesidades o extraerlas de tu base de datos
    // Retorna un array de fechas en el formato necesario
    // Ejemplo:
    // return ['2023-12-01', '2023-12-02', '2023-12-03'];
}
?>
