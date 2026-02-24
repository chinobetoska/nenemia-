<?php
//Verificar que se presionó el botón
if (isset($_POST["bton_registro_sesion"])) {  // ¿Cómo se llama tu botón de registro?
    
    //Validar que los campos NO estén vacíos
    if (empty($_POST["e-mail_registro"]) && empty($_POST["telefono_registro"]) && empty($_POST["contrasena_registro"])) {
        echo "<div class='alerta alerta-error'>TODOS LOS CAMPOS SON OBLIGATORIOS</div>";
    } else {
        
        // Capturar los datos del formulario
        $email = $_POST["e-mail_registro"];
        $telefono = $_POST["telefono_registro"];
        $contrasena_plana = $_POST["contrasena_registro"];

        //Verificar si el email ya existe ANTES de insertar
        $stmt_verificar = $conexion->prepare("SELECT id FROM usuarios WHERE email = ?");
        $stmt_verificar->bind_param("s", $email);
        $stmt_verificar->execute();
        $stmt_verificar->store_result();
        
        if ($stmt_verificar->num_rows > 0) {
            // El email YA existe
            //arreglar el mensaje
            echo "<div class='alerta alerta-error'>ESTE EMAIL YA ESTA EN EXISTENCIA</div>";
            $stmt_verificar->close();
        } else {
            // El email NO existe, podemos registrar
            $stmt_verificar->close();

        //Hashear la contraseña
        $contrasena_hasheada = password_hash($contrasena_plana, PASSWORD_DEFAULT);
        
        //Insertar en la base de datos usando prepared statements
        $stmt = $conexion->prepare("INSERT INTO usuarios (email, telefono, contrasena) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $telefono, $contrasena_hasheada);
        
        if ($stmt->execute()) {
            //Redirigir si todo salió bien
            //arreglar el mensaje
            echo "<div class='alerta alerta-exito>¡REGISTRO EXITOSO! Redirigiendo...</div>";
            header("refresh:2;url=../html/inicio.php");
        } else {
            echo "<div class='alerta alerta-error'>ERROR AL REGISTRAR: " . $conexion->error . "</div>";
        }
        
        $stmt->close();
    }
    }
}
?>