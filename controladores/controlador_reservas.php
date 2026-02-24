<?php
// Verificar que se presionó el botón de reserva
if (!empty($_POST["btn_enviar_reserva"])) {
    
    // Validar que los campos obligatorios NO estén vacíos
    if (empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["telefono"]) || 
        empty($_POST["ciudad"]) || empty($_POST["paquete"]) || empty($_POST["destino"]) || 
        empty($_POST["fecha-inicio"]) || empty($_POST["num-personas"]) || 
        empty($_POST["habitaciones"]) || empty($_POST["metodo-pago"])) {
        
        echo "<div class='alerta alerta-error'>TODOS LOS CAMPOS OBLIGATORIOS DEBEN SER COMPLETADOS</div>";
    } else {
        
        // Capturar los datos del formulario
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $ciudad = $_POST["ciudad"];
        $paquete = $_POST["paquete"];
        $destino = $_POST["destino"];
        $fecha_inicio = $_POST["fecha-inicio"];
        $num_personas = $_POST["num-personas"];
        $habitaciones = $_POST["habitaciones"];
        
        // Campos opcionales
        $alimentacion = isset($_POST["alimentacion"]) ? $_POST["alimentacion"] : "ninguna";
        $actividades = isset($_POST["actividades"]) ? $_POST["actividades"] : "";
        $transporte = isset($_POST["transporte"]) ? $_POST["transporte"] : "";
        $solicitudes = isset($_POST["solicitudes"]) ? $_POST["solicitudes"] : ""; // COMENTARIOS
        $metodo_pago = $_POST["metodo-pago"];
        
        // Obtener el ID del usuario de la sesión (si está logueado)
        session_start();
        $usuario_id = isset($_SESSION["usuario_id"]) ? $_SESSION["usuario_id"] : NULL;
        
        // Estado inicial de la reserva
        $estado = "pendiente";
        $fecha_creacion = date("Y-m-d H:i:s");
        
        // Insertar en la base de datos usando prepared statements
        $stmt = $conexion->prepare("INSERT INTO reservas (usuario_id, nombre, email, telefono, ciudad, paquete, destino, fecha_inicio, num_personas, habitaciones, alimentacion, actividades, transporte, comentarios, metodo_pago, estado, fecha_creacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->bind_param("isssssssissssssss", 
            $usuario_id, 
            $nombre, 
            $email, 
            $telefono, 
            $ciudad, 
            $paquete, 
            $destino, 
            $fecha_inicio, 
            $num_personas, 
            $habitaciones, 
            $alimentacion, 
            $actividades, 
            $transporte, 
            $solicitudes,  // Aquí guardamos los comentarios
            $metodo_pago, 
            $estado, 
            $fecha_creacion
        );
        
        if ($stmt->execute()) {
            // Obtener el ID de la reserva recién creada
            $reserva_id = $conexion->insert_id;
            
            echo "<div class='alerta alerta-exito'>¡RESERVA REALIZADA CON ÉXITO! Tu número de reserva es: #" . $reserva_id . ". Recibirás un correo de confirmación pronto.</div>";
            
            // Opcional: Llamar al controlador de envío de correo
            // include("controlador_enviar_correo.php");
            // enviarCorreoConfirmacion($email, $nombre, $reserva_id, $paquete, $fecha_inicio);
            
            header("refresh:3;url=../html/inicio.php");
        } else {
            echo "<div class='alerta alerta-error'>ERROR AL PROCESAR LA RESERVA: " . $conexion->error . "</div>";
        }
        
        $stmt->close();
    }
}
?>