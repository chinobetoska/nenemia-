<?php
// Verificar que se presionó el botón de soporte
if (!empty($_POST["btn_enviar_soporte"])) {
    
    // Validar que los campos obligatorios NO estén vacíos
    if (empty($_POST["nombre"]) || empty($_POST["email"]) || 
        empty($_POST["telefono"]) || empty($_POST["asunto"]) || 
        empty($_POST["mensaje"])) {
        
        echo "<div class='alerta alerta-error'>TODOS LOS CAMPOS SON OBLIGATORIOS</div>";
    } else {
        
        // Capturar los datos del formulario
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $asunto = $_POST["asunto"];
        $mensaje = $_POST["mensaje"];
        
        // Obtener el ID del usuario de la sesión (si está logueado)
        session_start();
        $usuario_id = isset($_SESSION["usuario_id"]) ? $_SESSION["usuario_id"] : NULL;
        
        // Estado inicial del ticket
        $estado = "abierto";
        $fecha_creacion = date("Y-m-d H:i:s");
        
        // Insertar en la base de datos usando prepared statements
        $stmt = $conexion->prepare("INSERT INTO soporte_tickets (usuario_id, nombre, email, telefono, asunto, mensaje, estado, fecha_creacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->bind_param("isssssss", 
            $usuario_id, 
            $nombre, 
            $email, 
            $telefono, 
            $asunto, 
            $mensaje, 
            $estado, 
            $fecha_creacion
        );
        
        if ($stmt->execute()) {
            // obtener el id del ticket recién creado
            $ticket_id = $conexion->insert_id;
            
            echo "<div class='alerta alerta-exito'>¡MENSAJE ENVIADO CON ÉXITO! Tu número de ticket es: #" . $ticket_id . ". Nos pondremos en contacto contigo pronto.</div>";
            
            header("refresh:3;url=../html/inicio.php");
        } else {
            echo "<div class='alerta alerta-error'>ERROR AL ENVIAR EL MENSAJE: " . $conexion->error . "</div>";
        }
        
        $stmt->close();
    }
}
?>