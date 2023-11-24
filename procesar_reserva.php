<?php
include 'database.php';
include 'enviar_correo.php';


// Recibe los datos del formulario
$nombre_residente = $_POST['nombre'];
$telefono_residente = $_POST['telefono'];
$correo_residente = $_POST['correo'];
$fecha_evento = $_POST['fecha'];
$interior_seleccionado = $_POST['opcion'];
$numero_apartamento = $_POST['apto'];
$rol_residente = $_POST['rol'];

// Prepara la declaración SQL para la inserción
$sql = "INSERT INTO reservas_salon (nombre_residente, telefono_residente, correo_residente, fecha_evento, interior_seleccionado, numero_apartamento, rol_residente)
        VALUES ('$nombre_residente', '$telefono_residente', '$correo_residente', '$fecha_evento', '$interior_seleccionado', '$numero_apartamento', '$rol_residente')";

if ($conn->query($sql) === TRUE) {

// Envía el correo después de la inserción
enviarCorreoConfirmacion($nombre_residente, $telefono_residente, $correo_residente, $fecha_evento, $interior_seleccionado, $numero_apartamento, $mail);

    $response = array(
        'success' => true,
        'message' => 'Solicitud enviada con éxito.'
    );
 } else {
     $response = array(
         'success' => false,
         'message' => 'Error al procesar la solicitud: ' . $conn->error
     );
 }

$conn->close();
echo json_encode($response);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<script>
    // Procesa la respuesta del servidor
    var response = <?php echo json_encode($response); ?>;
    if (response.success) {
        // Muestra un aviso de éxito
        alert(response.message);
        // Redirige al usuario a "productos.php"
        window.location.href = 'completed.html';
    } else {
        // Muestra un aviso de error si la inserción falló
        alert(response.message);
    }
</script>
</html>

