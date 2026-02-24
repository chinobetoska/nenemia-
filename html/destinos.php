<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destinos - NENEMI-A</title>
    <link href="../css/estilos.css" rel="stylesheet" />
    <link href="../nenemi-a/imajenes/icono-alebrige.png" rel="icon"  />
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


    <!-- Contenido de destinos -->
    <div class="pagina-contenedor">
      <h1 class="seccion-titulo">Descubre Nuestros Destinos</h1>

      <div class="destinos-grid">
        <div class="destino-grande">
          <img src="../imajenes/Luciernagas-nanacamilpa.jpg" alt="Nanacamilpa" />
          <div class="destino-grande-info">
            <h3>Nanacamilpa - Tierra de luz</h3>
            <p>
              La principal atracción es el Santuario de las Luciérnagas, 
              ideal para visitar entre junio y agosto. 
              Además, se pueden explorar antiguas haciendas como la de San Cayetano o la de Ixtafiayuca,
              y participar en actividades ecoturísticas como senderismo o recorridos por la Ruta del Pulque.
            </p>
            <p>
              <strong>Destacados:</strong>Santuario de las Luciérnagas, Senderismo y actividades ecoturísticas,
              Ruta del Pulque, Haciendas culturales, Museo de las luciérnagas.
            </p>
            <a href="../html/reservas.php" class="btn-destino">Reservar ahora</a>
          </div>
        </div>

        <div class="destino-grande">
          <img src="../imajenes/Sultepec-Tecoaque.jpg" alt="Tecoaque" />
          <div class="destino-grande-info">
            <h3>Tecoaque - Zona Arqueológica </h3>
            <p>
              Panorámica de Zultépec-Tecoaque donde hace 500 años tuvo lugar un ataque 
              contra los españoles y una represalia por parte de éstos. En junio de 1520, 
              los habitantes de Tecoaque, también conocido como Zultépec, capturaron un 
              convoy español. Todos, aparentemente, fueron sacrificados en pocos meses.
              El sitio fue bautizado por los mexicas como Tecoaque: “Donde se los comieron”
            </p>
            <p>
              <strong>Destacados:</strong> Museo de Sitio de Tecoaque, 
              pirámide circular dedicada a Ehécatl.
            </p>
            <a href="../html/reservas.php" class="btn-destino">Reservar ahora</a>
          </div>
        </div>

        <div class="destino-grande">
          <img src="../imajenes/valquirico-imajen.webp" alt="Val'Quirico" />
          <div class="destino-grande-info">
            <h3>Val'Quirico - destino turístico </h3>
            <p>
              Val' Quirico es un complejo residencial privado y un destino turístico en Tlaxcala, 
              inspirado en la arquitectura de la campiña italiana, específicamente la Toscana. No es
              un pueblo mágico, sino una recreación artificial con calles empedradas, plazas y
              fachadas que ofrecen una atmósfera europea, con opciones gastronómicas, hoteles,
              tiendas y actividades recreativas como paseos a caballo.
            </p>
            <p>
              <strong>Destacados:</strong> arquitectura de estilo europeo, especialmente toscana, con calles empedradas.
            </p>
            <a href="../html/reservas.php" class="btn-destino">Reservar ahora</a>
          </div>
        </div>

        <div class="destino-grande">
          <img src="../imajenes/xochitecatl-piramide.jpg" alt="Zona Arqueológica de Xochitécatl" />
          <div class="destino-grande-info">
            <h3>Zona Arqueológica de Xochitécatl - Zona arqueologica </h3>
            <p>
              La Zona Arqueológica de Xochitécatl, en Tlaxcala, es famosa por sus estructuras
              dedicadas al culto a la fertilidad y por su asociación con la cercana zona de Cacaxtla.
              Ubicada en un cerro, ofrece vistas panorámicas del valle y de los volcanes Popocatépetl e
              Iztaccíhuatl. El boleto de entrada es válido para ambas zonas, por lo que se recomienda
              visitar las dos en un mismo día.
            </p>
            <p>
              <strong>Destacados:</strong> arquitectura de estilo europeo, especialmente toscana, con calles empedradas, plazas, restaurantes y tiendas
            </p>
            <a href="../html/reservas.php" class="btn-destino">Reservar ahora</a>
          </div>
        </div>

         <div class="destino-grande">
          <img src="../imajenes/TLAXCO-Tlax.jpg" alt="Tlaxco" />
          <div class="destino-grande-info">
            <h3>Tlaxco - Pueblo magico </h3>
            <p>
              Tlaxco es un encantador Pueblo Mágico de Tlaxcala, conocido por su rica tradición pulquera y quesera, su impresionante arquitectura colonial y sus bellos paisajes boscosos. Ubicado a 2,500 metros sobre el nivel del mar, ofrece un clima semi-frío ideal para disfrutar de la naturaleza y la aventura.
            </p>
            <p>
              <strong>Destacados:</strong> Centro Histórico y Parroquia de San Agustín, Haciendas Pulqueras (Se pueden visitar la Ex Hacienda Santa María Xalostoc, que ha ganado premios de restauración histórica), Queserías Artesanales, Paisajes Naturales y Actividades al Aire Libre (senderismo, ciclismo de montaña).
            </p>
            <a href="../html/reservas.php" class="btn-destino">Reservar ahora</a>
          </div>
        </div>

        <div class="destino-grande">
          <img src="../imajenes/barca-de-la-fe.jpeg" alt="Barca de la fe" />
          <div class="destino-grande-info">
            <h3>Barca de la fe - Pueblo magico </h3>
            <p>
              La Barca de la Fe es un templo católico ubicado en la comunidad de San Andrés Buenavista, en el municipio de Tlaxco, Tlaxcala, famoso por su peculiar y original arquitectura en forma de barco o carabela.</p>
            <p>
              <strong>Detalles del Templo:</strong> Arquitectura única, Obra de la comunidad vistas panorámicas, Ubicación: Se encuentra en la localidad de San Andrés Buenavista, Experiencia: Es un destino turístico popular en Tlaxcala para quienes buscan conocer una iglesia diferente y con una historia de construcción fascinante, que une la fe católica con raíces prehispánicas.
            </p>
            <a href="../html/reservas.php" class="btn-destino">Reservar ahora</a>
          </div>
        </div>

       <!-- <div class="destino-grande">
          <img src="../imajenes/calpulalpan.jpg" alt="calpulalpan" />
          <div class="destino-grande-info">
            <h3>Calpulalpan - Centro histórico</h3>
            <p>
              El centro histórico del municipio de Calpulalpan es una zona de
              monumentos históricos con edificaciones coloniales de los siglos
              XVI al XIX. Puedes pasear por sus calles empedradas, admirar
              arquitectura antigua y disfrutar del ambiente tranquilo del pueblo.
            </p>
            <p>
              <strong>Destacados:</strong>Entre los alimentos que se pueden disfrutar
              son la auténtica barbacoa de carnero, de pollo, de hoyo o en mixiote; 
              de las sopas la de flor de calabaza, nopal, hongos, y de los exquisitos 
              quiotes con huevo.
            </p>
            <a href="../html/reservas.php" class="btn-destino">Reservar ahora</a>
          </div>
        </div> -->

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