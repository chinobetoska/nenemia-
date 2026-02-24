<?php
// FUNCIÓN PARA ENVIAR CORREO DE CONFIRMACIÓN DE RESERVA
function enviarCorreoConfirmacion($email, $nombre, $reserva_id, $paquete, $fecha_inicio) {
    
    // Configuración del correo
    $asunto = "Confirmación de Reserva #" . $reserva_id . " - NENEMI-A";
    
    // Crear el mensaje en HTML
    $mensaje = '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmación de Reserva</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #F1F3F4;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            }
            .header {
                background: linear-gradient(135deg, #F6B93B, #C97A40);
                color: #ffffff;
                padding: 30px;
                text-align: center;
            }
            .header h1 {
                margin: 0;
                font-size: 2em;
            }
            .content {
                padding: 30px;
                color: #5E5E5E;
            }
            .info-box {
                background-color: #FEFCF7;
                border-left: 4px solid #F6B93B;
                padding: 15px;
                margin: 20px 0;
            }
            .info-box strong {
                color: #8B4A23;
            }
            .footer {
                background-color: #8B4A23;
                color: #ffffff;
                padding: 20px;
                text-align: center;
                font-size: 0.9em;
            }
            .btn {
                display: inline-block;
                background: linear-gradient(135deg, #4E8B61, #3A6D4A);
                color: #ffffff;
                padding: 12px 30px;
                text-decoration: none;
                border-radius: 25px;
                margin: 20px 0;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>¡RESERVA CONFIRMADA!</h1>
                <p>NENEMI-A - Descubre Tlaxcala</p>
            </div>
            
            <div class="content">
                <h2 style="color: #8B4A23;">Hola, ' . htmlspecialchars($nombre) . '!</h2>
                
                <p>Gracias por confiar en NENEMI-A para tu próxima aventura. Tu reserva ha sido recibida exitosamente.</p>
                
                <div class="info-box">
                    <h3 style="color: #8B4A23; margin-top: 0;">Detalles de tu Reserva</h3>
                    <p><strong>Número de Reserva:</strong> #' . $reserva_id . '</p>
                    <p><strong>Paquete Seleccionado:</strong> ' . ucfirst(str_replace("-", " ", $paquete)) . '</p>
                    <p><strong>Fecha de Inicio:</strong> ' . date("d/m/Y", strtotime($fecha_inicio)) . '</p>
                </div>
                
                <h3 style="color: #8B4A23;">Próximos Pasos:</h3>
                <ol>
                    <li>Nuestro equipo revisará tu solicitud en las próximas 24 horas</li>
                    <li>Recibirás un correo con las instrucciones de pago</li>
                    <li>Una vez confirmado el pago, recibirás todos los detalles de tu viaje</li>
                </ol>
                
                <p><strong>Importante:</strong> Se requiere un anticipo del 60% para confirmar tu reserva. El resto se puede pagar hasta 7 días antes del viaje.</p>
                
                <div style="text-align: center;">
                    <a href="https://nenemia.com/mis-reservas" class="btn">Ver Mi Reserva</a>
                </div>
                
                <p style="margin-top: 30px;">Si tienes alguna pregunta, no dudes en contactarnos:</p>
                <ul>
                    <li><strong>Teléfono:</strong> +52 (771) 123-4567</li>
                    <li><strong>WhatsApp:</strong> +52 771 123 4567</li>
                    <li><strong>Email:</strong> reservas@nenemia.com.mx</li>
                </ul>
            </div>
            
            <div class="footer">
                <p>&copy; 2025 NENEMI-A. Todos los derechos reservados.</p>
                <p>Calpulalpan, Tlaxcala, México</p>
            </div>
        </div>
    </body>
    </html>
    ';
    
    // Cabeceras del correo
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: NENEMI-A <no-reply@nenemia.com.mx>" . "\r\n";
    $headers .= "Reply-To: reservas@nenemia.com.mx" . "\r\n";
    
    // Enviar el correo
    if (mail($email, $asunto, $mensaje, $headers)) {
        return true;
    } else {
        return false;
    }
}

// FUNCIÓN PARA ENVIAR CORREO DE SOPORTE
function enviarCorreoSoporte($email, $nombre, $ticket_id, $asunto) {
    
    $asunto_correo = "Ticket #" . $ticket_id . " - " . $asunto . " - NENEMI-A";
    
    $mensaje = '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <style>
            body { font-family: Arial, sans-serif; background-color: #F1F3F4; padding: 20px; }
            .container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 15px; overflow: hidden; }
            .header { background: linear-gradient(135deg, #1E88E5, #1565C0); color: #ffffff; padding: 30px; text-align: center; }
            .content { padding: 30px; color: #5E5E5E; }
            .footer { background-color: #8B4A23; color: #ffffff; padding: 20px; text-align: center; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>¡Mensaje Recibido!</h1>
            </div>
            <div class="content">
                <h2 style="color: #8B4A23;">Hola, ' . htmlspecialchars($nombre) . '</h2>
                <p>Hemos recibido tu mensaje y nuestro equipo te responderá lo antes posible.</p>
                <p><strong>Número de Ticket:</strong> #' . $ticket_id . '</p>
                <p><strong>Asunto:</strong> ' . htmlspecialchars($asunto) . '</p>
                <p>Tiempo estimado de respuesta: <strong>24-48 horas</strong></p>
            </div>
            <div class="footer">
                <p>&copy; 2025 NENEMI-A</p>
            </div>
        </div>
    </body>
    </html>
    ';
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: NENEMI-A Soporte <soporte@nenemia.com.mx>" . "\r\n";
    
    return mail($email, $asunto_correo, $mensaje, $headers);
}

// NOTA IMPORTANTE:
// Para que el envío de correos funcione en producción, necesitarás:
// 1. Configurar un servidor SMTP (recomendado: PHPMailer o SwiftMailer)
// 2. O usar servicios como SendGrid, Mailgun, Amazon SES
// 3. La función mail() de PHP requiere un servidor de correo configurado
?>