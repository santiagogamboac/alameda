<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha_publicacion = $_POST["fecha_publicacion"];

    // Verificar si se ha enviado una imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['size'] > 0) {
        $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
        $imagen = $conn->real_escape_string($imagen);
    } else {
        // En caso de que no se haya enviado una imagen, asigna un valor predeterminado (por ejemplo, NULL)
        $imagen = NULL;
    }

    // Verificar si se ha enviado un archivo PDF
    if (isset($_FILES['pdf']) && $_FILES['pdf']['size'] > 0) {
        $pdf = file_get_contents($_FILES['pdf']['tmp_name']);
        $pdf = $conn->real_escape_string($pdf);
    } else {
        // En caso de que no se haya enviado un archivo PDF, asigna un valor predeterminado (por ejemplo, NULL)
        $pdf = NULL;
    }

    // Insertar la información en la base de datos
    $sql = "INSERT INTO anuncios (titulo, descripcion, fecha_publicacion, imagen, pdf) 
            VALUES ('$titulo', '$descripcion', '$fecha_publicacion', '$imagen', '$pdf')";

    if ($conn->query($sql) === TRUE) {
        echo "Anuncio guardado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
