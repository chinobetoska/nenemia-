<?php
// inicia la sesion
session_start();

// checa si no existe la sesion del usuario
if (!isset($_SESSION["usuario_id"])) {
    // no hay sesion activa, redirigir al login
    header("Location: ../html/login.php");
    exit(); //detiene la ejecución del script
}

// si llegs aqui, hay sesion activa
// el usuario puede continuar navegando
?>