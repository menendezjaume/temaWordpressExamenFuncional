## Preparación

- Haz un fork de este repositorio y mantenlo privado
- Añádeme (@menendezjaume) y a Dani (@dmartinez82) para que podamos verlos y corregirlos
- Aunque no es necesario tener una instalación de WordPress funcional, es muy recomendado. Podrás ver si los cambios que haces tienen efecto o no, y si vas por buen camino
- Clona este repositorio en el directorio de temas (_themes_) de tu instalación de WordPress (si la tienes)
- Recuerda que si vas a usar WordPress para ver como vas corrigiendo los errores(recomendado), para este examen los _ajustes_ de _lectura_ tienen que estar configurados de modo que _Tu página de inicio muestre_ como portada el _home_, y como página de entradas el _blog_
- Para que el menú de arriba se vea bien, necesitareis asignarle un menú desde la opción _apariencia_ _menus_ tal y como hemos visto en clase
- Abre el directorio con tu IDE favorito (Visual Studio Code?)

## Enunciado

Hay que resolver los siguientes problemas:

1. Primero de todo, necesitaría ayuda resolviendo 2 _fatal errors_, cuando resuelvas uno, te saldrá el siguiente. (10 puntos)
2. He creado dos ficheros llamados _blog.css_ y _fonts.css_ en el directorio _inc/css_ pero no sé cómo incorporarlos al tema. Además, quiero que tengan preferencia respecto al ya incorporado css de _bootstrap_ (10 puntos)
3. Me gustaría poner el título del blog como título de la página, para que cuando alguien lo visite, el explorador ponga el título (ver imagen 1) (10 puntos)
4. Quiero incorporar un menú de navegación en el footer, pero no sé cómo hacerlo (20 puntos)
5. En el directorio _template-parts/content_ he creado un fichero llamado _content-single.php_. Me gustaría incorporar eso como parte de la plantilla del single. pero no sé cómo hacerlo. Ahora mismo la plantilla single está vacía. (10 puntos)
6. Me gustaría que tanto la página _Home_, como las páginas _acerca de nosotros_ y _contacto_ se visualizasen a través de plantillas **independientes** y que en ninguna de las tres se viesen ni el autor ni la fecha, pero si se viese en el cuerpo de la página tanto el título como el contenido (20 puntos)
7. Me gustaría crear una plantilla del footer tal y como he hecho con el header, y que todas las páginas que creo lo incorporen. ¿Lo podrías hacer? (10 puntos)
8. Antes, cuando estaba logeado como usuario en el panel de administrador y visitaba el blog, me salía un menú negro de WordPress arriba. Ahora ya no. ¿Podrías recuperarlo? (10 puntos)

## Respuestas

1. Dos respuestas:
   - La primera se resuelve cambiando el nombre de la función _wp_enqueue_styles_ del fichero _functions.php_ por _wp_enqueue_style_.
   - La segunda se resuelve poniendo el nombre completo al fichero _/inc/class-wp-bootstrap-navwalker_, que le falta la terminación _.php_
2. Añadir una línea _wp_enqueue_style(blog_css..._ después de _wp_enqueue_style("bootstrap_css..._
3. En el fichero _header.php_, dentro del _head_, crear una directiva _echo get_bloginfo("name");_ dentro de _title_
4. Este problema tiene dos pasos:
   - En el fichero _functions.php_, en la función _temazo_config_, incorporar un nuevo menú en el array.
   - En el fichero _footer.php_, incorporar el menú usando la función _wp_nav_menu_.
5. En el fichero _single.php_, incorporar la directiva _get_template_part('template-parts/content/content', 'single');_ dentro del bucle de posts
6. Varias opciones:
   - Opcion 1: Crear tres ficheros .php: _front-page.php, page-acerca-de-nosotros.php, y page-contacto.php_ (máxima puntuación)
   - Opcion 2: Crear tres ficheros .php: _page-home.php, page-acerca-de-nosotros.php, y page-contacto.php_ (máxima puntuación)
   - Opcion 3: Crear dos ficheros .php: _front-page.php, page.php_ (2/3 puntuación)
   - Opcion 4: Crear un fichero .php: _page.php_ (1/3 puntuación)
7. Crear un fichero _footer.php_ y añadir la clausula _get-footer()_ en las plantillas generales: _index.php, single.php, page\*.php, front-page.php_
8. Añadir la clausula _wp_footer()_ en el fichero _footer.php_
