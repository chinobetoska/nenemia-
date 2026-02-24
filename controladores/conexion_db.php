<?php

//variables de la conexio
$host="localhost";
$usuario="root";
$contrasena="";
$nombre_base_de_datos="nenemia_db";
$puerto="3306";

//funcion para realizar la conexion a la base de datos 
$conexion=new mysqli($host,$usuario,$contrasena,$nombre_base_de_datos,$puerto);
//funcion para que el navegador acepte caracteres especiales
$conexion->set_charset("utf8");

//verificar la conexion 
if($conexion->connect_error){
    die("la conexion fallo:".$conexion->connect_error);
}
//echo"!conexion exitosa";

?>