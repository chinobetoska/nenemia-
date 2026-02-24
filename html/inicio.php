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
        <li><a href="../html/soporte-tecnico.php">Soporte Tecnico</a></li>
        <li><a href="../html/terminos-y-condiciones.php">terminos y condiciones</a></li> 
      </ul>
    </nav>

    <label for="menu-palanca" class="cubridor"></label>
    <!-- fin del menu-->

    <!-- Seccion Hero -->
    <div class="hero-section">
      <h2>Descubre Tlaxcala</h2>
      <h2>y sus alrededores</h2>
      <br>
      <p>Explora la riqueza cultural y natural</p>
      <p>De Tlaxcala</p>
    </div>

    <!-- Scroll de Destinos -->
    <div class="pagina-contenedor">
      <h2 class="seccion-titulo">Destinos Populares</h2>
      
      <div class="scroll-contenedor">
        <!-- destinos -->
      <div class="destino-card">
          <img src="../imajenes/Luciernagas-nanacamilpa.jpg" alt="Nanacamilpa" />
          <div class="destino-info">
            <h3>Nanacamilpa</h3>
            <p>Este fenómeno natural ocurre entre junio y agosto, en donde miles de luciérnagas iluminan los bosques. Ideal para visitas nocturnas y turismo ecológico.</p>
            <a href="../html/destinos.php" class="btn-destino">Ver más</a>
          </div>
        </div>

        <div class="destino-card">
          <img src="../imajenes/zona-arqueologica-tecoaque.jpg" alt="Zona Arqueológica Tecoaque" />
          <div class="destino-info">
            <h3>Zona Arqueológica Tecoaque</h3>
            <p>Un sitio arqueológico donde se puede explorar la historia prehispánica de la región. Una buena opción para combinar naturaleza, historia y cultura.</p>
            <a href="../html/destinos.php" class="btn-destino">Ver más</a>
          </div>
        </div>

        <div class="destino-card">
          <img src="../imajenes/valquirico-imajen.webp" alt="Val’Quirico" />
          <div class="destino-info">
            <h3>Val’Quirico</h3>
            <p>Un complejo turístico de estilo europeo (toscana/medieval) ubicado en Tlaxcala, cerca de Puebla. Ideal para paseo relajado, fotos y disfrutar de buen ambiente.</p>
            <a href="../html/destinos.php" class="btn-destino">Ver más</a>
          </div>
        </div>

        <!-- <div class="destino-card">
          <img src="../imajenes/Puebla-ciudad.webp" alt="Puebla ciudad" />
          <div class="destino-info">
            <h3>Puebla ciudad</h3>
            <p>Historia colonial, talavera poblana y la deliciosa cocina tradicional, una ciudad grande con mucho que ofrecer: arquitectura barroca, cultura, comida, artesanías.</p>
            <a href="../html/destinos.php" class="btn-destino">Ver más</a>
          </div>
        </div>-->

        <div class="destino-card">
          <img src="../imajenes/xochitecatl-piramide.jpg" alt="Zona Arqueológica de Xochitécatl" />
          <div class="destino-info">
            <h3>Zona Arqueológica de Xochitécatl</h3>
            <p>Completa la experiencia arqueológica en Tlaxcala junto a Cacaxtla; otro sitio histórico que vale la pena visitar.</p>
            <a href="../html/destinos.php" class="btn-destino">Ver más</a>
          </div>
        </div>

      <!--  <div class="destino-card">
          <img src="../imajenes/La-laguna-Chignahuapan.jpg" alt="Chignahuapan" />
          <div class="destino-info">
            <h3>Chignahuapan</h3>
            <p>Ya en el estado de Puebla, pero relativamente cercano, famoso por sus lagunas, termales y producción de esferas navideñas. Buena opción para ampliar el radio de visita.</p>
            <a href="../html/destinos.php" class="btn-destino">Ver más</a>
          </div>
        </div>-->
        
        <div class="destino-card">
          <img src="../imajenes/TLAXCO-Tlax.jpg" alt="Tlaxco" />
          <div class="destino-info">
            <h3>Tlaxco</h3>
            <h3>Un sitio de bosques</h3>
            <p>Conocido por sus maravillosos paisajes de montañas, ideal para una escapada de fin de semana, destacando por sus haciendas, talleres artesanales.</p>
            <a href="../html/destinos.php" class="btn-destino">Ver más</a>
          </div>
        </div>

        <div class="destino-card">
          <img src="../imajenes/barca-de-la-fe.jpeg" alt="Barca de la fe" />
          <div class="destino-info">
            <h3>Barca de la fe</h3>
            <h3>Iglesia en forma de barco</h3>
            <p>La Barca de la Fe es un templo católico, es famoso por su peculiar y original arquitectura en forma de barco.</p>
            <a href="../html/destinos.php" class="btn-destino">Ver más</a>
          </div>
        </div>

      </div> 


      <!-- Seccion de paquetes destacados -->
      <h2 class="seccion-titulo">Paquetes Especiales</h2>
      <div class="eso-tilin" >
        <a href="../html/paquetes.php" class="btn-destino" id="baila-tilin">Ver todos los paquetes</a>
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
