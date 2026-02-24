<?php
include("../controladores/verificar_sesion.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Términos y Condiciones - NENEMI-A</title>
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

    <!-- Contenido de terminos y condiciones -->
    <div class="pagina-contenedor">
      <h1 class="seccion-titulo">Términos y Condiciones</h1>

      <div class="nosotros-contenido">
        <div id="nenemi-aaaa">
          <p id="ya-me-aburri">
            <strong id="voy-por-una-maruchan">Última actualización:</strong> 07 de Noviembre de 2025
          </p>
        </div>

        <h3>1. Aceptación de los Términos</h3>
        <p>
          Al acceder y utilizar los servicios de NENEMI-A, usted acepta estar sujeto a estos Términos y Condiciones. Si no está de acuerdo con alguna parte de estos términos, no debe utilizar nuestros servicios. NENEMI-A se reserva el derecho de modificar estos términos en cualquier momento, y es responsabilidad del usuario revisar periódicamente esta página.
        </p>

        <h3>2. Servicios Ofrecidos</h3>
        <p>
          NENEMI-A es una empresa de turismo cultural que ofrece paquetes turísticos, experiencias culturales y servicios de guía en diversos destinos de México. Nuestros servicios incluyen, pero no se limitan a:
        </p>
        <p>
          • Organización de tours y paquetes turísticos<br>
          • Reservaciones de hospedaje y transporte<br>
          • Guías turísticos certificados<br>
          • Experiencias culturales y talleres artesanales<br>
          • Asesoría personalizada para viajes
        </p>

        <h3>3. Proceso de Reservación</h3>
        <p>
          <strong>3.1 Confirmación de Reserva:</strong> Todas las reservas deben ser confirmadas por escrito mediante correo electrónico o documento oficial de NENEMI-A. Una reserva se considera confirmada únicamente después de recibir el pago del anticipo correspondiente.
        </p>
        <p>
          <strong>3.2 Anticipo:</strong> Para confirmar cualquier reserva se requiere un anticipo del 30% del costo total del paquete. Este anticipo debe realizarse dentro de las 48 horas posteriores a la solicitud de reserva, o la misma podrá ser cancelada automáticamente.
        </p>
        <p>
          <strong>3.3 Pago Final:</strong> El saldo restante (70%) deberá ser cubierto al menos 7 días calendario antes de la fecha de inicio del viaje. El incumplimiento de este plazo resultará en la cancelación automática de la reserva sin derecho a reembolso del anticipo.
        </p>

        <h3>4. Precios y Métodos de Pago</h3>
        <p>
          <strong>4.1 Precios:</strong> Todos los precios están expresados en pesos mexicanos (MXN) e incluyen IVA. Los precios están sujetos a cambios sin previo aviso hasta que se confirme la reserva con el pago del anticipo.
        </p>
        <p>
          <strong>4.2 Métodos de Pago Aceptados:</strong> Aceptamos transferencias bancarias, depósitos en efectivo, tarjetas de crédito y débito (Visa, Mastercard, American Express), PayPal y opciones de pago a meses sin intereses con tarjetas participantes.
        </p>
        <p>
          <strong>4.3 Incrementos de Precio:</strong> NENEMI-A se reserva el derecho de ajustar los precios en caso de aumentos significativos en costos de transporte, hospedaje, impuestos o tipo de cambio. Cualquier ajuste será notificado al cliente con al menos 30 días de anticipación.
        </p>

        <h3>5. Política de Cancelación y Reembolsos</h3>
        <p>
          <strong>5.1 Cancelación por el Cliente:</strong>
        </p>
        <p>
          • <strong>Más de 30 días antes del viaje:</strong> Reembolso del 90% (se retiene 10% por gastos administrativos)<br>
          • <strong>Entre 15 y 30 días antes:</strong> Reembolso del 50%<br>
          • <strong>Entre 7 y 14 días antes:</strong> Reembolso del 25%<br>
          • <strong>Menos de 7 días antes:</strong> Sin derecho a reembolso
        </p>
        <p>
          <strong>5.2 Cancelación por NENEMI-A:</strong> En caso de que NENEMI-A deba cancelar un viaje por causas de fuerza mayor, problemas de seguridad u otras circunstancias fuera de nuestro control, se ofrecerá al cliente la opción de reprogramar el viaje sin costo adicional o recibir un reembolso completo del 100%.
        </p>
        <p>
          <strong>5.3 Modificaciones:</strong> Las solicitudes de cambio de fecha están sujetas a disponibilidad y pueden generar cargos adicionales. Las modificaciones deben solicitarse con al menos 15 días de anticipación.
        </p>

        <h3>6. Responsabilidades del Cliente</h3>
        <p>
          <strong>6.1 Documentación:</strong> Es responsabilidad del cliente contar con toda la documentación necesaria para viajar, incluyendo identificación oficial vigente, permisos especiales (si aplica) y documentos de menores de edad si viajan con personas que no son sus padres o tutores.
        </p>
        <p>
          <strong>6.2 Salud y Condiciones Físicas:</strong> El cliente debe informar a NENEMI-A sobre cualquier condición de salud, limitación física, alergias alimentarias o necesidad especial que pueda afectar su participación en las actividades programadas.
        </p>
        <p>
          <strong>6.3 Comportamiento:</strong> Los clientes deben mantener un comportamiento respetuoso hacia otros viajeros, guías, personal de NENEMI-A y comunidades locales. NENEMI-A se reserva el derecho de excluir a cualquier cliente cuyo comportamiento sea inapropiado, sin derecho a reembolso.
        </p>
        <p>
          <strong>6.4 Puntualidad:</strong> Los clientes deben presentarse a tiempo en los puntos de encuentro establecidos. NENEMI-A no se hace responsable por servicios perdidos debido a retrasos del cliente.
        </p>

        <h3>7. Responsabilidades de NENEMI-A</h3>
        <p>
          <strong>7.1 Servicios Contratados:</strong> NENEMI-A se compromete a proporcionar todos los servicios descritos en el paquete contratado, o servicios equivalentes de calidad similar en caso de circunstancias imprevistas.
        </p>
        <p>
          <strong>7.2 Seguridad:</strong> NENEMI-A garantiza que todos sus guías están certificados y capacitados en protocolos de seguridad. Sin embargo, la participación en actividades turísticas conlleva riesgos inherentes que el cliente acepta al contratar el servicio.
        </p>
        <p>
          <strong>7.3 Seguros:</strong> NENEMI-A proporciona seguro de viajero básico en todos sus paquetes. Se recomienda contratar seguros adicionales para cobertura más amplia.
        </p>

        <h3>8. Limitación de Responsabilidad</h3>
        <p>
          NENEMI-A no se hace responsable por:
        </p>
        <p>
          • Pérdida, robo o daño de pertenencias personales<br>
          • Retrasos o cancelaciones de transporte por causas ajenas a NENEMI-A<br>
          • Condiciones climáticas adversas que impidan realizar actividades<br>
          • Cierres temporales de sitios turísticos por parte de autoridades<br>
          • Enfermedades o accidentes durante el viaje (más allá de la cobertura del seguro incluido)<br>
          • Gastos adicionales incurridos por el cliente debido a circunstancias imprevistas
        </p>

        <h3>9. Fuerza Mayor</h3>
        <p>
          NENEMI-A no será responsable por el incumplimiento de sus obligaciones cuando esto sea resultado de eventos de fuerza mayor, incluyendo pero no limitándose a: desastres naturales, pandemias, conflictos civiles, huelgas, actos de terrorismo, restricciones gubernamentales o cualquier otra circunstancia fuera del control razonable de la empresa.
        </p>

        <h3>10. Propiedad Intelectual</h3>
        <p>
          Todo el contenido de este sitio web, incluyendo textos, imágenes, logotipos, diseños y material gráfico, es propiedad de NENEMI-A o de sus proveedores de contenido y está protegido por las leyes de derechos de autor. El uso no autorizado de cualquier material está estrictamente prohibido.
        </p>

        <h3>11. Protección de Datos Personales</h3>
        <p>
          NENEMI-A se compromete a proteger la privacidad de sus clientes de acuerdo con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares. Los datos personales serán utilizados únicamente para:
        </p>
        <p>
          • Procesar reservaciones y pagos<br>
          • Comunicaciones relacionadas con el servicio contratado<br>
          • Envío de información promocional (con consentimiento del cliente)<br>
          • Cumplimiento de obligaciones legales
        </p>
        <p>
          Los clientes tienen derecho a acceder, rectificar, cancelar u oponerse al tratamiento de sus datos personales contactando a NENEMI-A.
        </p>

        <h3>12. Quejas y Reclamaciones</h3>
        <p>
          Cualquier queja o reclamación debe ser presentada por escrito a través de nuestro correo electrónico info@nenemia.com.mx dentro de los 15 días posteriores a la finalización del servicio. NENEMI-A se compromete a responder todas las reclamaciones en un plazo máximo de 30 días hábiles.
        </p>

        <h3>13. Jurisdicción y Ley Aplicable</h3>
        <p>
          Estos Términos y Condiciones se rigen por las leyes de los Estados Unidos Mexicanos. Cualquier controversia derivada de la interpretación o aplicación de estos términos será resuelta en los tribunales competentes de Hidalgo, México.
        </p>

        <h3>14. Sostenibilidad y Responsabilidad Social</h3>
        <p>
          NENEMI-A se compromete con el turismo sostenible y el respeto a las comunidades locales. Los clientes aceptan:
        </p>
        <p>
          • Respetar las normas culturales y tradiciones locales<br>
          • Minimizar su impacto ambiental durante el viaje<br>
          • Apoyar el comercio justo adquiriendo artesanías directamente de los creadores<br>
          • No participar en actividades que exploten a comunidades o medio ambiente
        </p>

        <h3>15. Contacto</h3>
        <p>
          Para cualquier consulta sobre estos Términos y Condiciones, puede contactarnos:
        </p>
        <p>
          <strong>Correo electrónico:</strong> info@nenemia.com.mx<br>
          <strong>Teléfono:</strong> +52 (771) 123-4567<br>
          <strong>Dirección:</strong> Tlanalapa, Hidalgo, México<br>
          <strong>Horario de atención:</strong> Lunes a Viernes, 9:00 AM - 7:00 PM
        </p>

        <div id="pase-ingles-con-10">
          <p id="nota-importante-p">
            <strong id="cl">Nota Importante:</strong> Al realizar una reserva con NENEMI-A, usted confirma que ha leído, entendido y aceptado estos Términos y Condiciones en su totalidad. Le recomendamos leer cuidadosamente este documento y contactarnos si tiene alguna duda antes de proceder con su reserva.
          </p>
        </div>

        <div id="div-terminos-condi-pet">
          <h3 id="h3-cl">¿Listo para reservar tu próxima aventura?</h3>
          <p id="p-terminos-condi">
            Ahora que conoces nuestros términos, comienza a planear tu viaje con confianza.
          </p>
          <a href="../html/reservas.php" class="btn-destino" id="btn-reservas-tmcn">Hacer una Reserva</a>
          <a href="../html/soporte-tecnico.php" class="btn-destino" id="dudas-tmcn">¿Tienes Dudas?</a>
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