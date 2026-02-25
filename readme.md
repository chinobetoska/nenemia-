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

nenemia-/
├── controladores/          # controladores logicos
│   ├── conexion_db.php    # donde se invocaran todos los css 
│   ├── controlador_carrito.php    # donde se invocaran todos los css 
│   ├── controlador_cerrar_sesion.php    # donde se invocaran todos los css 
│   ├── controlador_enviar_correo.php    # donde se invocaran todos los css 
│   ├── controlador_login.php    # donde se invocaran todos los css 
│   ├── controlador_registro.php    # donde se invocaran todos los css 
│   ├── controlador_reservas.php    # donde se invocaran todos los css 
│   ├── controlador_soporte_tecnico.php    # donde se invocaran todos los css 
│   └── verificar_sesion.php    # donde se invocaran todos los css 
|
├── css/                # Hojas de estilo 
│   ├── styles.css    # donde se invocaran todos los css 
|   ├──  footer.css   # css donde se encontraran los estilos del footer
|   ├──  menu.css   # css que se usara en el menu
|   ├──  pagina-destinos.css   # css  que se usara para la pagina de destinos
|   ├──  pagina-inicio.css   # css  que se usara para la pagina de inicio
|   ├──  pagina-login.css   # css  que se usara para el login
|   ├──  pagina-paquetes.css   # css  que se usara para la pagina de pauetes
|   ├──  pagina-reservas.css   # css  que se usara para la pagina de reservas
|   ├──  pagina-sobre-nosotros.css   # css  que se usara para la pagina de sobre nosotros
|   ├──  pagina-soporte.css   # css  que se usara para la pagina de soporte tecnico
|   └──  pagina-condicones.css   # css  que se usara para la pagina de terminos y condiciones
|
├── fonts/             # tipografia del sitio
|
├── html/                 # archivos php y HTML
|     ├── destinos.php       # pagina donde aparecen los destinos
|     ├── inicio.php         # pagina de inicio (despues de logearse o haber creado su sesion)
|     ├── login.php       # pagina donde se logean los usuarios
|     ├── paquetes.php       # pagina donde se pueden ver los paquetes de los destinos turisticos
|     ├── reservas.php       # pagina donde aparecen los paquetes turisticos
|     ├── sobre-nostros.php       # pagina donde aparecen la historia de nenemi-a
|     ├── sopote-tecnico.php       # pagina donde se ayuda al usuario en un soporte tecnico
|     └── terminos-y-condiciones.php       # pagina donde aparecen los terminos y condiciones
|
├──imajenes/      # Imajenes del sitio
|
├──index.php       # pagina donde inicia el usuario
|
└─ readme.md           # donde se especifica el proyecto en un resumen general 

##  Instalación

Si deseas ejecutar este proyecto de forma local, sigue estos pasos:

1. Clona el repositorio:
   ```bash
   git clone [https://github.com/chinobetoska/nenemia-.git](https://github.com/chinobetoska/nenemia-.git)