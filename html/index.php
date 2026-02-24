<!-- llamada de los controladores de php -->
<?php
include("../controladores/conexion_db.php");
//si se accioa el boton entonces realiza el isset para llamar 
//a controlador_registro
if(isset($_POST["bton_registro_sesion"])){
    include("../controladores/controlador_registro.php");
}
?>

<!DOCTYPE html>
<html lang="en">
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
      <form id="forma" name="forma" action="../html/index.php" method="POST">
        <div class="elemento">
          <label for="e-mail_registro">propociona tu e-mail:</label>
          <input type="email" id="e-mail_registro" name="e-mail_registro" required="true"/>
        </div>
        <div class="elemento">
          <label for="telefono_registro">propociona tu telefono:</label>
          <input type="tel" id="telefono_registro" name="telefono_registro" required="true"/>
        </div>
        <div class="elemento">
          <label for="contrasena_registro">propociona una contrasena segura:</label>
          <input type="password" id="contrasena_registro" name="contrasena_registro" required="true"/>
        </div>
        <div class="elemento">
          <input name="bton_registro_sesion" type="submit" value="enviar"/>
        </div>
      </form>
    </div>

    <div class="boton-inicio-sesion">
      <p>Ya tienes sesion?</p>
      <p>No pierdas tiempo</p>
      <p>Y</p>
      <p>Encuentra ya a tu nuevo</p>
      <p>Viaje</p>
      <br />
      <a href="../html/login.php" id="boton-inicio-sesion-href">
        <button id="boton-inicio-de-sesion">INICIAR SESION</button>
      </a>
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
