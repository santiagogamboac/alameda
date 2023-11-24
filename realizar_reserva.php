<?php
// Incluye la conexión a la base de datos
include 'database.php';

// Recibe la fecha que se quiere reservar
$fecha_seleccionada = $_POST['fecha'];

// Intenta adquirir un bloqueo en la fila correspondiente
$sql_bloqueo = "SELECT * FROM reservas_salon WHERE fecha_evento = '$fecha_seleccionada' FOR UPDATE";
$conn->begin_transaction();

$resultado_bloqueo = $conn->query($sql_bloqueo);

if ($resultado_bloqueo->num_rows > 0) {
    // El bloqueo se obtuvo con éxito, actualiza el estado a 'ocupado' y realiza la reserva
    $sql_actualizacion = "UPDATE reservas_salon SET estado = 'ocupado' WHERE fecha_evento = '$fecha_seleccionada'";
    $conn->query($sql_actualizacion);

    // Realiza la inserción en la tabla de reservas
    // ... (código para insertar en la tabla de reservas)

    // Confirma la transacción
    $conn->commit();

    echo "Reserva realizada con éxito.";
} else {
    // No se pudo obtener el bloqueo, informa al usuario
    $conn->rollback(); // Cancela la transacción
    echo "Lo siento, la fecha ya no está disponible.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>
