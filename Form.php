<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $fecha = $_POST["fecha"];
    $opcion = $_POST["opcion"];
    $apto = $_POST["apto"];
    $rol = $_POST["rol"];

    $mail = new PHPMailer(true);

    try {
        // Configuración SMTP (debes llenar con la información de tu servidor de correo)
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'santigamboa135@gmail.com';
        $mail->Password   = 'Santiago1023';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Puedes ajustar esto según las recomendaciones de tu servidor
        $mail->Port       = 587;

        // Destinatario y asunto del correo electrónico
        $mail->setFrom($correo);
        $mail->addAddress('santiagogamboacely@gmail.com');
        $mail->Subject = 'Reserva de Salón Social';

        // Contenido del correo electrónico
        $mail->Body = "Nombre: $nombre\nTeléfono: $telefono\nCorreo Electrónico: $correo\nFecha del Evento: $fecha\nInterior Seleccionado: $opcion\nApartamento: $apto\nRol: $rol";

        // Enviar el correo electrónico
        $mail->send();

        // Redireccionar a una página de confirmación
        header("Location: confirmacion.html");
        exit();
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Apartamento</title>
    <link rel="stylesheet" href="headerblanco.css">
    <!-- <link rel="stylesheet" href="css/header.css"> -->
    <link rel="stylesheet" href="css/salon.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

    <style>
        .form{
            margin-top: 120px;
        }
    </style>
<body>
    <header class="header">
        <a href="" class="logo">
          <img src="images/logo.jpeg" alt="" srcset="">
        </a>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
        <nav class="minavbar">
            <a href="#inicio" style="--i:0;">Inicio</a>
            <a href="#servicios" style="--i:1;">Servicios</a>
            <a href="" style="--i:2;">Nosotros</a>
      
            <a href=""></a>
          </nav>
    </header>
    <div class="form">    
        <div class="titulo">
            <h3>Reserva Salón Social</h3>
        </div>
        
    

    <form action="" method="post">
        <label for="nombre">Nombres y Apellidos:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre completo" required><br>
    
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" placeholder= "Ingrese su número de celular" required><br>
    
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" placeholder="Ingrese su e-mail"><br>
    
        <label for="fecha">Fecha del Evento:</label>
        <input type="date" id="fecha" name="fecha" required><br>
    
        <label for="option">Selecciona un Interior</label>
        <select id="selectInt" name="opcion">
            <option value="5">Interior 1</option>
            <option value="5">Interior 2</option>
            <option value="5">Interior 3</option>
            <option value="5">Interior 4</option>
            <option value="5">Interior 5</option>
            <option value="5">Interior 6</option>
            <option value="5">Interior 7</option>
            <option value="5">Interior 8</option>
        </select>
        <br>
    
        <label for="apto">Apartamento:</label>
        <input type="number" name="apto" placeholder="Ingrese el número del Apartamento" required><br>
    
        <label>Selecciona tu rol:</label>
        <div class="radio-group">
            <div class="radio-container">
            <input type="radio" id="arrendatario" name="rol" value="arrendatario">
            <label for="arrendatario">Arrendatario</label>
            </div>
            
            <div class="radio-container">
                <input type="radio" id="propietario" name="rol" value="propietario">
            <label for="propietario">Propietario</label>
            </div>
            
        </div>
    
        <input type="submit" value="Enviar">
    </form>
    
    </div> 
</body>
</html>

