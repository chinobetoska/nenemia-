<!-- archivo: html/paquetes.php -->
<?php
include("../controladores/verificar_sesion.php");
include("../controladores/conexion_db.php");
include("../controladores/controlador_carrito.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paquetes - NENEMI-A</title>
    <link href="../css/estilos.css" rel="stylesheet" />
    <link href="../imajenes/icono-alebrige.png" rel="icon" />
  </head>
  <body>
    <!-- checkbox oculto para controlar el menu -->
    <input type="checkbox" id="menu-palanca" class="menu-checkbox" />

    <!--imagen -->
    <label for="menu-palanca" class="menu-btn">
      <img src="../imajenes/hamburgesa.png" alt="Menu" />
    </label>

    <!-- menu lateral -->
    <nav class="menu-lateral">
      <!-- boton cerrar -->
      <label for="menu-palanca" class="cerrar-menu">&times</label>

      <ul>
        <li><a href="../html/inicio.php">Inicio</a></li>
        <li><a href="../html/destinos.php">Destinos</a></li>
        <li><a href="../html/paquetes.php">Paquetes</a></li>
        <li><a href="../html/reservas.php">Reservas</a></li>
        <li><a href="../html/sobre-nosotros.php">Sobre Nosotros</a></li>
        <li><a href="../html/soporte-tecnico.php">Soporte Tecnico</a></li>
        <li><a href="../html/terminos-y-condiciones.php">terminos y condiciones</a></li>
        <li><a href="../controladores/controlador_cerrar_sesion.php">Cerrar Sesion</a></li>
      </ul>
    </nav>

    <label for="menu-palanca" class="cubridor"></label>
    <!-- fin del menu-->

     <div class="alerta alerta-warning">
      <h2>Esta parte del proyecto esta en desarrollo todavia, estamos trabajando mucho para que puedas cotizar precios para tus viajes.</h2>
     </div>
     <div class="alerta alerta-info">
      <h2>los precios son teoricos, nos estamos esforzando para brindarte la mejor experiencia posible).</h2>
      </div>

    <?php
    // mostrar carrito si hay items
    if(function_exists('contarItemsCarrito') && contarItemsCarrito() > 0){
        echo mostrarCarrito();
    }
    ?>

    <!-- contenido de paquetes -->
    <div class="pagina-contenedor">
      <h1 class="seccion-titulo">Nuestros Paquetes Turisticos</h1>

      <div class="paquetes-grid">
        <!-- paquete basico -->
        <div class="paquete-card">
          <div class="paquete-header" id="paq-basicoo">
            <h3>Explorador</h3>
            <p>Perfecto para comenzar</p>
            <div class="paquete-precio">$3,500</div>
            <p>Por persona / 3 dias</p>
          </div>
          <div class="paquete-body">
            <ul class="paquete-lista">
              <li>Transporte terrestre incluido</li>
              <li>Hospedaje 2 noches</li>
              <li>Desayunos incluidos</li>
              <li>Guia turistico certificado</li>
              <li>Visita a 3 destinos principales</li>
              <li>Seguro de viajero basico</li>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </ul>
            <form method="POST" action="../html/paquetes.php">
              <input type="hidden" name="paquete" value="explorador">
              <input type="number" name="cantidad" value="1" min="1" max="10" style="width:60px; padding:5px; margin:10px 0;">
              <button type="submit" name="agregar_paquete" class="btn-destino" id="paq-basico">Agregar al Carrito</button>
            </form>
          </div>
        </div>

        <!-- paquete intermedio -->
        <div class="paquete-card">
          <div class="paquete-header" id="paq-aventurero">
            <h3>Aventurero</h3>
            <p>El mas popular</p>
            <div class="paquete-precio">$6,800</div>
            <p>Por persona / 5 dias</p>
          </div>
          <div class="paquete-body">
            <ul class="paquete-lista">
              <li>Transporte terrestre de lujo</li>
              <li>Hospedaje 4 noches en hoteles 4 estrellas</li>
              <li>Todos los alimentos incluidos</li>
              <li>Guia turistico bilingue</li>
              <li>Visita a 6 destinos turisticos</li>
              <li>Actividades culturales incluidas</li>
              <li>Seguro de viajero premium</li>
              <li>Kit de bienvenida con artesanias</li>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </ul>
            <form method="POST" action="../html/paquetes.php">
              <input type="hidden" name="paquete" value="aventurero">
              <input type="number" name="cantidad" value="1" min="1" max="10" style="width:60px; padding:5px; margin:10px 0;">
              <button type="submit" name="agregar_paquete" class="btn-destino" id="paq-basico">Agregar al Carrito</button>
            </form>
          </div>
        </div>

        <!-- paquete premium -->
        <div class="paquete-card">
          <div class="paquete-header" id="paq-premium">
            <h3>Experiencia Total</h3>
            <p>La experiencia completa</p>
            <div class="paquete-precio">$12,500</div>
            <p>Por persona / 7 dias</p>
          </div>
          <div class="paquete-body">
            <ul class="paquete-lista">
              <li>Transporte privado de lujo</li>
              <li>Hospedaje 6 noches en hoteles boutique</li>
              <li>Gastronomia gourmet incluida</li>
              <li>Guia turistico privado especializado</li>
              <li>Visita a mas de 10 destinos exclusivos</li>
              <li>Experiencias culturales inmersivas</li>
              <li>Talleres artesanales privados</li>
              <li>Cenas con chefs locales reconocidos</li>
              <li>Seguro de viajero VIP</li>
              <li>Fotografia profesional del viaje</li>
              <li>Souvenirs exclusivos</li>
            </ul>
            <form method="POST" action="../html/paquetes.php">
              <input type="hidden" name="paquete" value="experiencia-total">
              <input type="number" name="cantidad" value="1" min="1" max="10" style="width:60px; padding:5px; margin:10px 0;">
              <button type="submit" name="agregar_paquete" class="btn-destino" id="paq-basico">Agregar al Carrito</button>
            </form>
          </div>
        </div>

        <!-- paquete familiar -->
        <div class="paquete-card">
          <div class="paquete-header" id="paq-familiar">
            <h3>Familiar</h3>
            <p>Diversión para todos</p>
            <div class="paquete-precio">$18,000</div>
            <p>Familia de 4 / 5 dias</p>
          </div>
          <div class="paquete-body">
            <ul class="paquete-lista">
              <li>Transporte familiar confortable</li>
              <li>Hospedaje 4 noches en suite familiar</li>
              <li>Todos los alimentos incluidos</li>
              <li>Actividades para ninos y adultos</li>
              <li>Guia turistico especializado en familias</li>
              <li>Entrada a parques y zonas arqueologicas</li>
              <li>Talleres infantiles de artesanias</li>
              <li>Seguro familiar completo</li>
              <br>
            </ul>
            <br>
            <br>
            <form method="POST" action="../html/paquetes.php">
              <input type="hidden" name="paquete" value="familiar">
              <input type="number" name="cantidad" value="1" min="1" max="10" style="width:60px; padding:5px; margin:10px 0;">
              <button type="submit" name="agregar_paquete" class="btn-destino" id="paq-basico">Agregar al Carrito</button>
            </form>
          </div>
        </div>

        <!-- paquete cultural -->
        <div class="paquete-card">
          <div class="paquete-header" id="paq-cultural">
            <h3>Inmersion Cultural</h3>
            <p>Vive la tradicion</p>
            <div class="paquete-precio">$8,900</div>
            <p>Por persona / 6 dias</p>
          </div>
          <div class="paquete-body">
            <ul class="paquete-lista">
              <li>Transporte compartido</li>
              <li>Hospedaje 5 noches en posadas tradicionales</li>
              <li>Comidas con familias locales</li>
              <li>Talleres artesanales intensivos</li>
              <li>Clases de gastronomia tradicional</li>
              <li>Visita a comunidades indigenas</li>
              <li>Participacion en ceremonias tradicionales</li>
              <li>Guia antropologo especializado</li>
              <li>Material educativo incluido</li>
            </ul>
            <form method="POST" action="../html/paquetes.php">
              <input type="hidden" name="paquete" value="inmersion-cultural">
              <input type="number" name="cantidad" value="1" min="1" max="10" style="width:60px; padding:5px; margin:10px 0;">
              <button type="submit" name="agregar_paquete" class="btn-destino" id="paq-basico">Agregar al Carrito</button>
            </form>
          </div>
        </div>

        <!-- paquete fin de semana -->
        <div class="paquete-card">
          <div class="paquete-header" id="paq-finsema">
            <h3>Escapada Express</h3>
            <p>Fin de semana perfecto</p>
            <div class="paquete-precio">$2,200</div>
            <p>Por persona / 2 dias</p>
          </div>
          <div class="paquete-body">
            <ul class="paquete-lista">
              <li>Transporte redondo desde tu ciudad</li>
              <li>Hospedaje 1 noche</li>
              <li>2 comidas incluidas</li>
              <li>Tour guiado por el pueblo magico</li>
              <li>Visita a mercados artesanales</li>
              <li>Tiempo libre para explorar</li>
              <li>Seguro de viajero basico</li>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </ul>
            <form method="POST" action="../html/paquetes.php">
              <input type="hidden" name="paquete" value="escapada-express">
              <input type="number" name="cantidad" value="1" min="1" max="10" style="width:60px; padding:5px; margin:10px 0;">
              <button type="submit" name="agregar_paquete" class="btn-destino" id="paq-basico">Agregar al Carrito</button>
            </form>
          </div>
        </div>
      </div>

      <!-- info adicional -->
      <div class="nosotros-contenido" id="nosotros-info">
        <h3 style="text-align: center;">necesitas un paquete personalizado?</h3>
        <p style="text-align: center;">
          Contactanos y disenaremos el viaje perfecto segun tus intereses,
          presupuesto y tiempo disponible. Nuestros expertos en turismo cultural
          estan listos para crear una experiencia unica para ti.
        </p>
        <div id="div-info-add">
          <a href="soporte-tecnico.php" class="btn-destino" id="inf-add">Contactanos</a>
        </div>
      </div>
    </div>

    <!-- inicio del footer-->
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
    <!-- fin del footer-->
  </body>
</html>