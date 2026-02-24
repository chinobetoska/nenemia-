<?php
//Verificar que se presionó el botón
if (!empty($_POST["bton_iniciar_sesion"])) {
    
    //Validar que los campos NO estén vacíos
    if (empty($_POST["e-mail_registro"]) && empty($_POST["contrasena_registro"])) {
        echo "<div class='alerta alerta-error'>LOS CAMPOS ESTÁN VACÍOS</div>";
    } else {
        
        // Capturar los datos del formulario
        $email = $_POST["e-mail_registro"];
        $contrasena_ingresada = $_POST["contrasena_registro"];
        
        //Buscar el usuario SOLO por email usando prepared statements
        $stmt = $conexion->prepare("SELECT id, email, contrasena FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
        //Verificar si existe el usuario
        if ($resultado->num_rows > 0) {
            // El usuario SÍ existe, obtener sus datos
            $usuario = $resultado->fetch_assoc();
            
            //Verificar la contraseña con password_verify()
            if (password_verify( $contrasena_ingresada,$usuario["contrasena"])) {
                // ¡Contraseña correcta! Iniciar sesión
                session_start();
                $_SESSION["usuario_id"] = $usuario["id"];
                $_SESSION["usuario_email"] = $usuario["email"];
                
                echo "<div class='alerta alerta-exito'>¡INICIO DE SESIÓN EXITOSO! Redirigiendo...</div>";
                header("refresh:2;url=../html/inicio.php");
            } else {
                // Contraseña incorrecta
                echo "<div class='alerta alerta-error'>ES INCORRECTA SU CONTRASENA O EMAIL, INGRESAR VALOR VALIDO</div>";
            }
        } else {
            // El usuario NO existe
            echo "<div class='alerta alerta-error'>ES INCORRECTA SU  EMAIL O CONTRASENA, INGRESAR VALOR VALIDO</div>";
        }
        
        $stmt->close();
    }
}
?>