<?php
include("../controladores/verificar_sesion.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soporte Técnico - NENEMI-A</title>
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

    <!-- Contenido de soporte -->

    <div class="alerta alerta-warning">
      <h2>Esta parte del proyecto esta en desarrollo todavia, estamos trabajando mucho para que puedas hacer reportes sobre errores en el sitio.</h2>
     </div>

    <div class="pagina-contenedor">
      <h1 class="seccion-titulo">Soporte y Contacto</h1>

      <div class="soporte-contenedor">
        <h3>¿Cómo podemos ayudarte?</h3>
        <p id="p-estilos-soporte">
          Completa el formulario y nuestro equipo te responderá lo antes posible.
          También puedes contactarnos directamente por los medios que aparecen abajo.
        </p>

        <form class="soporte-form" action="../html/inicio.php" method="get">
          <div class="form-grupo">
            <label for="nombre">Nombre Completo:</label>
            <input
              type="text"
              id="nombre"
              name="nombre"
              required
              placeholder="Ingresa tu nombre completo"
            />
          </div>

          <div class="form-grupo">
            <label for="email">Correo Electrónico:</label>
            <input
              type="email"
              id="email"
              name="email"
              required
              placeholder="tu@email.com"
            />
          </div>

          <div class="form-grupo">
            <label for="telefono">Teléfono:</label>
            <input
              type="tel"
              id="telefono"
              name="telefono"
              required
              placeholder="10 dígitos"
            />
          </div>

          <div class="form-grupo">
            <label for="asunto">Asunto:</label>
            <select id="asunto" name="asunto" required>
              <option value="">Selecciona una opción</option>
              <option value="informacion">Información de paquetes</option>
              <option value="cotizacion">Solicitar cotización</option>
              <option value="reserva">Consulta sobre reserva</option>
              <option value="personalizado">Viaje personalizado</option>
              <option value="queja">Queja o sugerencia</option>
              <option value="tecnico">Problema técnico con el sitio</option>
              <option value="otro">Otro</option>
            </select>
          </div>

          <div class="form-grupo">
            <label for="mensaje">Mensaje:</label>
            <textarea
              id="mensaje"
              name="mensaje"
              required
              placeholder="Cuéntanos cómo podemos ayudarte..."
            ></textarea>
          </div>

          <button type="submit" class="btn-enviar">Enviar Mensaje</button>
        </form>

        <div class="contacto-info">
          <h3 id="contacto-info-soporte">
            Información de Contacto
          </h3>

          <div class="contacto-item">
            <strong>Teléfono:</strong> +52 (771) 123-4567
          </div>

          <div class="contacto-item">
            <strong>WhatsApp:</strong> +52 771 123 4567
          </div>

          <div class="contacto-item">
            <strong>Email:</strong> info@nenemia.com.mx
          </div>

          <div class="contacto-item">
            <strong>Horario de atención:</strong><br />
            Lunes a Viernes: 9:00 AM - 7:00 PM<br />
            Sábados: 10:00 AM - 4:00 PM<br />
            Domingos: Cerrado
          </div>

          <div class="contacto-item">
            <strong>Dirección:</strong><br />
            calpulalpan, Tlaxcala, México
          </div>

          <div id="div-spte">
            <h4 id="h4-spte">Síguenos en redes sociales</h4>
            <div class="social-links" id="so-links">
              <a href="https://www.instagram.com/nenemi_a__oficial" target="_blank">
                <img src="../imajenes/instagram-icono.png" alt="Instagram" class="so-links-spte" />
              </a>
              <a href="https://www.facebook.com/Nenem%Ia" target="_blank">
                <img src="../imajenes/icono-Facebook.png" alt="Facebook" class="so-links-spte" />
              </a>
              <a href="https://www.tiktok.com/@nenemia52" target="_blank">
                <img src="../imajenes/logo-TikTok.png" alt="TikTok" class="so-links-spte" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Preguntas Frecuentes -->
      <div class="nosotros-contenido" id="div-preguntas-fre">
        <h3 id="h3-pre-fre;">Preguntas Frecuentes</h3>

        <h3 class="respuestas-preguntas-fre">¿Cómo puedo reservar un paquete?</h3>
        <p>
          Puedes reservar directamente a través de nuestro sitio web, por
          teléfono o enviando un mensaje a través de este formulario. Te
          responderemos con los detalles de la reserva y las opciones de pago.
        </p>

        <h3 class="respuestas-preguntas-fre">¿Qué métodos de pago aceptan?</h3>
        <p>
          Aceptamos transferencias bancarias, depósitos en efectivo, tarjetas de
          crédito y débito. Para pagos en línea, trabajamos con plataformas
          seguras que protegen tu información.
        </p>

        <h3 class="respuestas-preguntas-fre">¿Puedo personalizar un paquete?</h3>
        <p>
          ¡Por supuesto! Nos especializamos en crear experiencias personalizadas.
          Contáctanos y diseñaremos un itinerario ajustado a tus intereses,
          presupuesto y disponibilidad.
        </p>

        <h3 class="respuestas-preguntas-fre">¿Qué incluyen los paquetes?</h3>
        <p>
          Cada paquete es diferente, pero generalmente incluyen transporte,
          hospedaje, alimentación especificada, guía turístico y entradas a
          sitios. Los detalles completos están en la descripción de cada paquete.
        </p>

        <h3 class="respuestas-preguntas-fre">¿Cuál es su política de cancelación?</h3>
        <p>
          Las cancelaciones con más de 15 días de anticipación tienen reembolso
          completo. Entre 7-15 días, 50% de reembolso. Menos de 7 días, no hay
          reembolso. Consulta términos específicos al reservar.
        </p>
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