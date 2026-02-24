<?php
include("../controladores/verificar_sesion.php");
include("../controladores/conexion_db.php");

if(isset($_POST["btn_enviar_reserva"])){
    include("../controladores/controlador_reservas.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservas - NENEMI-A</title>
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

    <!-- Contenido de reservas -->

    <div class="alerta alerta-warning">
      <h3>Esta parte del proyecto esta en desarrollo todavia, estamos trabajando mucho para que puedas hacer reservas para tus viajes.</h3>
     </div>

    <div class="pagina-contenedor">
      <h1 class="seccion-titulo">Realiza tu Reserva</h1>

      <div class="soporte-contenedor">
        <h3>Completa el formulario de reservación</h3>
        <p id="p-form">
          Llena todos los campos y nos pondremos en contacto contigo para confirmar tu reserva en menos de 24 horas.
        </p>

        <form class="soporte-form" action="../html/inicio.php" method="get">
          <!-- Informacion Personal -->
          <div id="div-info-per">
            <h3 id="h3-info-per">Información Personal</h3>
            
            <div class="form-grupo">
              <label for="nombre">Nombre Completo:</label>
              <input
                type="text"
                id="nombre"
                name="nombre"
                required
                placeholder="Nombre y apellidos"
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
              <label for="telefono">Teléfono de Contacto:</label>
              <input
                type="tel"
                id="telefono"
                name="telefono"
                required
                placeholder="10 dígitos"
              />
            </div>

            <div class="form-grupo">
              <label for="ciudad">Ciudad de Origen:</label>
              <input type="text" id="ciudad" name="ciudad" required placeholder="Ciudad, Estado"/>
            </div>
          </div>

          <!-- Detalles de la Reserva -->
          <div id="detalles-reserva">
            <h3 id="detalles-reserva-div">Detalles de tu Viaje</h3>
            
            <div class="form-grupo">
              <label for="paquete">Selecciona tu Paquete:</label>
              <select id="paquete" name="paquete" required>
                <option value="">Elige un paquete</option>
                <option value="explorador">Explorador - $3,500 (3 días)</option>
                <option value="aventurero">Aventurero - $6,800 (5 días)  Más Popular</option>
                <option value="experiencia-total">Experiencia Total - $12,500 (7 días)</option>
                <option value="familiar">Familiar - $18,000 (5 días - 4 personas)</option>
                <option value="inmersion-cultural">Inmersión Cultural - $8,900 (6 días)</option>
                <option value="escapada-express">Escapada Express - $2,200 (2 días)</option>
                <option value="personalizado">Paquete Personalizado</option>
              </select>
            </div>

            <div class="form-grupo">
              <label for="destino">Destino Preferido:</label>
              <select id="destino" name="destino" required>
                <option value="">Selecciona un destino</option>
                <option value="Nanacamilpa">Nanacamilpa - Tierra de luz</option>
                <option value="Tecoaque">Tecoaque - Zona Arqueológica</option>
                <option value="Calpulalpan">Calpulalpan - Centro histórico</option>
                <option value="Val_Quirico">Val'Quirico - destino turístico</option>
                <option value="Zona_Arqueologica_de_Xochitécatl">Zona Arqueológica de Xochitécatl - Zona arqueologica</option>
                <option value="Tlaxco">Tlaxco - Pueblo magico</option>
                <option value="Barca_de_la_fe">Barca de la fe - Pueblo magico</option>
                <option value="varios">Tour por Varios Destinos</option>
                <option value="consultar">Necesito Asesoría</option>
              </select>
            </div>

            <div class="form-grupo">
              <label for="fecha-inicio">Fecha de Inicio Preferida:</label>
              <input
                type="date"
                id="fecha-inicio"
                name="fecha-inicio"
                required
              />
            </div>

            <div class="form-grupo">
              <label for="num-personas">Número de Personas:</label>
              <input
                type="number"
                id="num-personas"
                name="num-personas"
                min="1"
                max="20"
                required
                placeholder="¿Cuántas personas viajarán?"
              />
            </div>

            <div class="form-grupo">
              <label for="habitaciones">Tipo de Habitación:</label>
              <select id="habitaciones" name="habitaciones" required>
                <option value="">Selecciona tipo de habitación</option>
                <option value="individual">Individual</option>
                <option value="doble">Doble</option>
                <option value="triple">Triple</option>
                <option value="familiar">Familiar (4+ personas)</option>
                <option value="suite">Suite</option>
              </select>
            </div>
          </div>

          <!-- Preferencias Adicionales -->
          <div id="div-preferencias">
            <h3 id="prefe-alimenticias">Preferencias y Solicitudes Especiales</h3>
            
            <div class="form-grupo">
              <label for="alimentacion">Preferencias Alimenticias:</label>
              <select id="alimentacion" name="alimentacion">
                <option value="ninguna">Sin restricciones</option>
                <option value="vegetariano">Vegetariano</option>
                <option value="vegano">Vegano</option>
                <option value="sin-gluten">Sin gluten</option>
                <option value="alergias">Tengo alergias alimentarias (Escribirlas en los comentarios adicionales)</option>
              </select>
            </div>

            <div class="form-grupo">
              <label for="actividades">Actividades de Interés:</label>
              <select id="actividades" name="actividades">
                <option value="">Selecciona tu principal interés</option>
                <option value="cultura">Cultura e Historia</option>
                <option value="artesanias">Artesanías y Talleres</option>
                <option value="gastronomia">Gastronomía Local</option>
                <option value="naturaleza">Naturaleza y Ecoturismo</option>
                <option value="aventura">Aventura y Deportes</option>
                <option value="fotografia">Fotografía</option>
                <option value="relajacion">Relajación y Descanso</option>
                <option value="todo">Un poco de todo</option>
              </select>
            </div>

            <div class="form-grupo">
              <label for="transporte">¿Necesitas Transporte desde tu Ciudad?</label>
              <select id="transporte" name="transporte" required>
                <option value="">Selecciona una opción</option>
                <option value="si">Sí, necesito transporte incluido</option>
                <option value="no">No, llegaré por mi cuenta</option>
                <option value="consultar">Necesito información</option>
              </select>
            </div>

            <div class="form-grupo">
              <label for="solicitudes">Solicitudes o Comentarios Adicionales:</label>
              <textarea
                id="solicitudes"
                name="solicitudes"
                placeholder="¿Hay algo más que debamos saber? (Ocasión especial, necesidades especiales, preferencias de hospedaje, etc.)"
              ></textarea>
            </div>
          </div>

          <!-- Metodo de Pago -->
          <div id="metodo-pago-div">
            <h3 id="h3-info-pago">Información de Pago</h3>
            <div class="alerta alerta-warning">
      <p>Esta parte del proyecto esta en desarrollo todavia, estamos trabajando mucho para que puedas hacer reservas para tus viajes.</p>
     </div>
            
            <div class="form-grupo">
              <label for="metodo-pago">Método de Pago Preferido:</label>
              <select id="metodo-pago" name="metodo-pago" required>
                <option value="">Selecciona método de pago</option>
                <option value="transferencia">Transferencia Bancaria</option>
                <option value="deposito">Depósito en Efectivo</option>
                <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                <option value="paypal">PayPal</option>
                <option value="meses">Pago en Meses sin Intereses</option>
                <option value="efectivo-viaje">Efectivo al Inicio del Viaje</option>
              </select>
            </div>

            <div id="advertencia-pago">
              <p id="p-pago">
                <strong id="letras-pago">Nota:</strong> Se requiere un anticipo del 60% para confirmar tu reserva. El resto se puede pagar hasta 7 días antes del viaje.
              </p>
            </div>
          </div>

      <!-- Terminos y Condiciones -->
          <div class="form-grupo" id="ter-condiciones">
            <label id="terminos-condiciones">
              <input
                type="checkbox" id="terminos-con" name="terminos" required id="terminos-condiciones"
              />
              <span>
                Acepto los <a href="../html/terminos-y-condiciones.php" id="ter-con">términos y condiciones</a> 
                y la <a href="../html/soporte-tecnico.php" id="pol-cancelacion">política de cancelación</a>
              </span>
            </label>
          </div>

          <button type="submit" class="btn-enviar">Enviar Reserva</button>

          <p id="turim-turip">
            Al enviar este formulario, recibirás un correo de confirmación con los detalles de tu reserva y las instrucciones de pago.
          </p>
        </form>
      </div>

      <!-- Informacion Adicional -->
      <div class="nosotros-contenido" id="info-per">
        <h3 style="text-align: center;">¿Tienes Dudas sobre tu Reserva?</h3>
        
        <div class="valores-grid" id="llamanos-reservas">
          <div class="valor-card">
            <h4> Llámanos</h4>
            <p>+52 (771) 123-4567<br>Lunes a Viernes<br>9:00 AM - 7:00 PM</p>
          </div>

          <div class="valor-card">
            <h4> WhatsApp</h4>
            <p>+52 771 123 4567<br>Respuesta inmediata<br>24/7</p>
          </div>

          <div class="valor-card">
            <h4> Email</h4>
            <p>reservas@nenemia.com.mx<br>Respuesta en 24 hrs</p>
          </div>
        </div>

        <div id="ya-no-puedo-mas-loco">
          <h3 id="h3-op-pago-flex"> Opciones de Pago Flexibles</h3>
          <p id="p-estilos-op-pg-flex">
            Ofrecemos planes de pago a meses sin intereses con tarjetas participantes.<br>
            Anticipo del 60% para reservar, el resto hasta 7 días antes del viaje.<br>
            <strong>Políticas de cancelación flexibles disponibles.</strong>
          </p>
        </div>

        <div id="div-prefe">
          <h3 id="h3-prefe">¿Prefieres Asesoría Personalizada?</h3>
          <p id="p-prefe">
            Nuestros expertos en viajes pueden ayudarte a diseñar el paquete perfecto para ti.
          </p>
          <a href="soporte-tecnico.php" class="btn-destino" id="btn-asesor-prefe">Contactar a un Asesor</a>
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