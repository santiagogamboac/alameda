<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
ob_start(); // Inicia el almacenamiento en búfer

$mail = new PHPMailer(true);
function enviarCorreoConfirmacion($nombre_residente, $telefono_residente, $correo_residente, $fecha_evento, $interior_seleccionado, $numero_apartamento, $mail) {
try {
	$mail->SMTPDebug = 2;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'santigamboa135@gmail.com';				
	$mail->Password = 'nggqtkkcgeolfiul';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;


    // Configuración adicional para establecer la codificación
    $mail->CharSet = 'UTF-8';
//remitente
	$mail->setFrom('santigamboa135@gmail.com', 'Santiago Gamboa');
    //destinatario		
	$mail->addAddress($correo_residente);
	// $mail->addAddress('recipient2@example.com', 'Name');
	
	$mail->isHTML(true);								
	$mail->Subject = 'Confirmación Reserva Salon Social';


    $contenido_html = ' 

        <!DOCTYPE html> 

    <html lang="es"> 

    <head> 

        <meta charset="UTF-8"> 

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

        <title>Confirmación de Reserva</title> 

        <style> 

            body { 

                background-color: #f5f5f5; 

                color: #333; 

                margin: 0; 

                padding: 0; 

            } 

     

            .container { 

                max-width: 600px; 

                margin: 0 auto; 

                padding: 20px; 

                background-color: #ffffff; 

                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 

                border-radius: 5px; 

                margin-top: 20px; 

            } 

     

            h1 { 

                color: #4CAF50; 

            } 

     

            p { 

                margin-bottom: 20px; 

            } 

     

            a { 

                color: #4CAF50; 

                text-decoration: none; 

            } 

     

            .footer { 

                margin-top: 20px; 

                text-align: center; 

                font-size: 12px; 

                color: #777; 

            } 

        </style> 

    </head> 

    <body> 

        <div class="container"> 

            <h1>¡Gracias por realizar la reserva!</h1> 

            <p>Tu información ha sido recibida correctamente. A continuación, los detalles de tu reserva:</p> 

            <ul>
               
            <li><strong>Nombre:</strong> ' . $nombre_residente . '</li>
            <li><strong>Teléfono:</strong> ' . $telefono_residente . '</li>
            <li><strong>Correo Electrónico:</strong> ' . $correo_residente . '</li>
            <li><strong>Fecha del Evento:</strong> ' . $fecha_evento . '</li>
            <li><strong>Interior Seleccionado:</strong> ' . $interior_seleccionado . '</li>
            <li><strong>Número de Apartamento:</strong> ' . $numero_apartamento . '</li>
            </ul>

            <!-- Agrega más contenido HTML según tus necesidades --> 

     

            <div class="footer"> 

                <p>Este correo electrónico es generado automáticamente. Por favor, no responda a este mensaje.</p> 

            </div> 

        </div> 

    </body> 

    </html> '; 

    $mail->Body = $contenido_html; 
	
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
    // header("Location: completed.html");
    exit();
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
    header("Location: completed.html");
ob_end_flush(); // Libera el contenido del búfer y lo envía al navegador
?>