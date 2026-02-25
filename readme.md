# Nenemia 

[![Licencia](https://img.shields.io/github/license/chinobetoska/nenemia-)](LICENSE)
[![GitHub stars](https://img.shields.io/github/stars/chinobetoska/nenemia-)](https://github.com/chinobetoska/nenemia-/stargazers)

**Nenemia** es un proyecto web enfocado en que se conosca mucho mas sitios turisticos en tlax. El sitio está diseñado para ofrecer una experiencia de usuario limpia, moderna y totalmente responsiva.

##  Características

- **Diseño Responsivo:** Optimizado para móviles, tablets y escritorio.
- **Interfaz Moderna:** Uso de CSS avanzado para una estética atractiva.
- **Ligero:** Desarrollado con tecnologías web estándar para una carga rápida.

##  Tecnologías utilizadas

- **HTML5:** Estructura semántica del contenido.
- **CSS3:** Estilos, Layouts (Flexbox/Grid) y animaciones.
- **JavaScript** para una mejor funcionalidad.

##  Estructura del Proyecto
<pre>
nenemia-/
├── controladores/                   # Lógica de negocio y manejo de datos PHP
│   ├── conexion_db.php              # Configuración y conexión a la base de datos
│   ├── controlador_carrito.php      # Lógica para la gestión del carrito
│   ├── controlador_cerrar_sesion.php # Finalización de sesiones activas
│   ├── controlador_enviar_correo.php # Gestión de notificaciones por email
│   ├── controlador_login.php        # Validación de credenciales de usuario
│   ├── controlador_registro.php     # Registro de nuevos usuarios
│   ├── controlador_reservas.php     # Gestión y guardado de reservaciones
│   ├── controlador_soporte_tecnico.php # Procesamiento de tickets de soporte
│   └── verificar_sesion.php         # Middleware para proteger rutas privadas
├── css/                             # Hojas de estilo (estética del sitio)
│   ├── styles.css                   # Estilos globales y variables
│   ├── footer.css                   # Estilos específicos del pie de página
│   ├── menu.css                     # Estilos de la barra de navegación
│   ├── pagina-destinos.css          # Estilos para el catálogo de destinos
│   ├── pagina-inicio.css            # Estilos para el dashboard/inicio
│   ├── pagina-login.css             # Estilos para el formulario de acceso
│   ├── pagina-paquetes.css          # Estilos para la sección de paquetes
│   ├── pagina-reservas.css          # Estilos para el formulario de reservas
│   ├── pagina-sobre-nosotros.css    # Estilos para la sección institucional
│   ├── pagina-soporte.css           # Estilos para el área de ayuda
│   └── pagina-condiciones.css       # Estilos para términos y condiciones
├── fonts/                           # Archivos de tipografías locales
├── html/                            # Vistas y páginas principales (PHP/HTML)
│   ├── destinos.php                 # Visualización de lugares turísticos
│   ├── inicio.php                   # Página principal tras el login
│   ├── login.php                    # Interfaz de inicio de sesión
│   ├── paquetes.php                 # Listado de ofertas y paquetes
│   ├── reservas.php                 # Panel de reservaciones de usuario
│   ├── sobre-nosotros.php           # Historia y misión de Nenemia
│   ├── soporte-tecnico.php          # Formulario de contacto y ayuda
│   └── terminos-y-condiciones.php   # Aspectos legales del sitio
├── imagenes/                        # Recursos visuales y multimedia
├── index.php                        # Punto de entrada principal de la aplicación
└── README.md                        # Documentación general del proyecto
</pre>
##  Instalación

Si deseas ejecutar este proyecto de forma local, sigue estos pasos:

1. Clona el repositorio:
   ```bash
   git clone [https://github.com/chinobetoska/nenemia-.git](https://github.com/chinobetoska/nenemia-.git)