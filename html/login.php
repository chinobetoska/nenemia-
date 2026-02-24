<?php
include("../controladores/conexion_db.php");
if(isset($_POST["bton_iniciar_sesion"])){
    include("../controladores/controlador_login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NENEMI-A</title>
    <link href="../css/estilos.css" rel="stylesheet" />
    <link href="../imajenes/icono-alebrige.png" rel="icon" />
  </head>
  <body>
    <!--div para el titulo-->
    <div class="titulo-nenemia">
      <h1><i>BIENVENIDO</i></h1>
      <h1><i>A</i></h1>
      <h1><i>NENEMI-A</i></h1>
    </div>

    <div class="contenedor">
      <h2>Registro De Usuarios</h2>
      <form id="forma" name="forma" method="post" action="../html/login.php" >
        <div class="elemento">
          <label for="e-mail_registro">propociona tu e-mail:</label>
          <input type="email" id="e-mail_registro" name="e-mail_registro" />
        </div>
        <div class="elemento">
          <label for="contrasena_registro">propociona una contrasena segura:</label>
          <input type="password" id="contrasena_registro" name="contrasena_registro"/>
        </div>
        <div class="elemento">
          <input name="bton_iniciar_sesion" type="submit" value="enviar" />
        </div>
      </form>
    </div>

    <div class="boton-inicio-sesion">
      <p>No Estas Registrad@?</p>
      <p>No Te Preocupes</p>
      <p>Aqui Lo Puedes Hacer Rapido</p>
      <br />
      <a href="../html/index.php" id="boton-inicio-sesion-href">
        <button id="boton-inicio-de-sesion">Registro De Usuario</button> </a
      ><br />
    </div>

    <footer>
      <div class="footer-contenido">
        <p>&copy; 2025 NENEMI-A. Todos los derechos reservados.</p>

        <nav class="social-links">
          <a href="https://www.instagram.com/nenemi_a__oficial" target="_blank">
            <img src="../imajenes/instagram-icono.png" alt="Instagram" />
          </a>
          <a href="https://www.facebook.com/Nenem%Ia" target="_blank">
            <img src="../imajenes/icono-Facebook.png" alt="Facebook" />
          </a>
          <a href="https://www.tiktok.com/@nenemia52" target="_blank">
            <img src="../imajenes/logo-TikTok.png" alt="tiktok" />
          </a>
        </nav>

        <div class="partners">
          <img src="../imajenes/icono-alebrige.png" alt="Partner 1" />
        </div>
      </div>
    </footer>
  </body>
</html>
