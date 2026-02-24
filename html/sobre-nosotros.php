<?php
include("../controladores/verificar_sesion.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobre Nosotros - NENEMI-A</title>
    <link href="../css/estilos.css" rel="stylesheet" />
    <link href="../imajenes/icono-alebrige.png" rel="icon" />
  </head>
  <body>
    <!-- Checkbox oculto para controlar el menu -->
    <input type="checkbox" id="menu-palanca" class="menu-checkbox" />

    <!--imagen -->
    <label for="menu-palanca" class="menu-btn">
      <img src="../imajenes/hamburgesa.png" alt="Menú" />
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
        <li><a href="../html/soporte-tecnico.php">Soporte Técnico</a></li>
        <li><a href="../html/terminos-y-condiciones.php">terminos y condiciones</a></li> 
      </ul>
    </nav>

    <label for="menu-palanca" class="cubridor"></label>
    <!-- fin del menu-->

    <!-- Contenido sobre nosotros -->
    <div class="pagina-contenedor">
      <h1 class="seccion-titulo">Sobre NENEMI-A</h1>

      <div class="nosotros-contenido">
        <h3>Nuestra Historia</h3>
        <p>
          NENEMI-A nace de la pasión por compartir las maravillas culturales y
          naturales de México con el mundo. Desde 2020, nos hemos dedicado a
          crear experiencias de viaje auténticas que conectan a viajeros con la
          esencia de nuestras tradiciones, artesanías y paisajes únicos.
        </p>
        <p>
          Nuestro nombre, inspirado en la palabra náhuatl "nemi" que significa
          "vivir", refleja nuestra filosofía: cada viaje es una oportunidad para
          vivir plenamente la cultura mexicana, desde sus raíces prehispánicas
          hasta sus expresiones contemporáneas.
        </p>

        <h3>Nuestra Misión</h3>
        <p>
          Promover el turismo cultural responsable y sostenible en México,
          ofreciendo experiencias transformadoras que enriquezcan la vida de
          nuestros viajeros mientras contribuimos al desarrollo de las
          comunidades locales y la preservación de nuestro patrimonio cultural.
        </p>

        <h3>Nuestra Visión</h3>
        <p>
          Ser la empresa líder en turismo cultural en México, reconocida por la
          calidad de nuestros servicios, nuestro compromiso con la
          sustentabilidad y nuestra capacidad para crear conexiones genuinas
          entre viajeros y comunidades locales.
        </p>

        <h3>Nuestros Valores</h3>
        <div class="valores-grid">
          <div class="valor-card">
            <h4>Autenticidad</h4>
            <p>
              Promovemos experiencias genuinas que respetan y honran las
              tradiciones locales.
            </p>
          </div>

          <div class="valor-card">
            <h4>Sustentabilidad</h4>
            <p>
              Nos comprometemos con prácticas turísticas que protegen el medio
              ambiente y las culturas locales.
            </p>
          </div>

          <div class="valor-card">
            <h4>Excelencia</h4>
            <p>
              Brindamos servicios de alta calidad con atención personalizada en
              cada detalle.
            </p>
          </div>

          <div class="valor-card">
            <h4>Responsabilidad Social</h4>
            <p>
              Apoyamos a las comunidades locales y promovemos el comercio justo
              de artesanías.
            </p>
          </div>

          <div class="valor-card">
            <h4>Innovación</h4>
            <p>
              Utilizamos tecnología y creatividad para mejorar constantemente
              nuestros servicios.
            </p>
          </div>

          <div class="valor-card">
            <h4>Pasión</h4>
            <p>
              Amamos lo que hacemos y compartimos con entusiasmo la riqueza de
              México.
            </p>
          </div>
        </div>

        <h3>¿Por qué elegirnos?</h3>
        <p>
          En NENEMI-A no solo organizamos viajes, creamos experiencias
          memorables que transforman la manera en que nuestros viajeros ven y
          entienden México. Nuestros guías son expertos locales apasionados,
          nuestros itinerarios están cuidadosamente diseñados para incluir tanto
          destinos icónicos como joyas escondidas, y trabajamos directamente con
          comunidades para asegurar que tu visita tenga un impacto positivo.
        </p>
        <p>
          Además, entendemos que cada viajero es único. Por eso ofrecemos desde
          paquetes prediseñados hasta experiencias completamente personalizadas,
          adaptándonos a tus intereses, presupuesto y estilo de viaje.
        </p>

        <h3>Nuestro Compromiso con las Comunidades</h3>
        <p>
          Creemos firmemente que el turismo debe beneficiar a las comunidades
          que visitamos. Por eso, trabajamos directamente con artesanos,
          familias locales y pequeños negocios, asegurando que una parte
          significativa de lo que inviertes en tu viaje quede en las manos de
          quienes realmente hacen posible estas experiencias auténticas.
        </p>

        <div id="titulo-aventura">
          <h3 id="color-h3-so-nos">¿Listo para tu próxima aventura?</h3>
          <p id="p-p-descrip">
            Descubre México con nosotros y vive experiencias que recordarás para
            siempre.
          </p>
          <a href="../html/paquetes.php" class="btn-destino" id="ver-pq-so-nos">Ver Paquetes</a>
          <a href="../html/soporte-tecnico.php" class="btn-destino" id="contac-id-sobre-nosotros">Contáctanos</a>
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