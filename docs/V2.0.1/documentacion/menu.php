
<?php $titulo = "Menú" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>



<section class="contenido-pagina">


    <?php 
        $titulo = "Menú";
        $descripcion = "En esta sección vamos a ver uno de los menus que trae 
        <span class='badge badge-azul m-0'>BodyStyle</span>";
        require_once("./articuloPrincipal.php");
    ?>

    <article class="article scroll-item" id="estructura">
        <h2>Estructura</h2>
        <p>
            Vamos a analizar la estructura principal del menú 
            así no solo copiamos y pegamos sino que tenemos una idea de como 
            funciona.
        </p>
        <div class="html">
            <pre class="brush:html">
                <nav>
                    <div class="menu">
                        <a href="#" class="menu-logo"></a>
                        <ul class="lista">
                            <!-- Aca va la lista del menu-->
                        </ul>
                    </div>
                </nav>
            </pre>
        </div>
        <nav>
            <div class="menu">
            <a href="#" class="menu-logo"></a>
                <ul class="lista">
                        
                </ul>
            </div>
        </nav>
        <div class="alerta-op-verde">
            Con esto tenemos la estructura principal.
            Por un lado la clase <i>.menu</i> que envuelve todo,
            después la clase <i>.menu-logo</i> y luego la <i>lista</i>.
        </div>
    </article>
    <article class="article scroll-item" id="basico">
        <h2>Menú Básico</h2>
        <h3>Muestra del menú</h3>
        <div class="ejemplo">
            <nav>
                <div class="menu">
                    <a href="#" class="menu-logo m-0">Logo</a>
                    <ul class="lista">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#" class="desactivado">Porfolio</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="codigo">
            <pre class="brush:html">
                <nav>
                    <div class="menu">
                        <a href="#" class="menu-logo">Logo</a>
                        <ul class="lista">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#" class="desactivado">Porfolio</a></li>
                        </ul>
                    </div>
                </nav>
            </pre>
        </div>

    </article>
    <article class="article scroll-item" id="derecha">
        <h2>Menú Lista derecha</h2>
        <p>
            Podemos querer que la lista de elementos 
            se ubique en la derecha.
        </p>
        <h3>
            Muestra Menú
        </h3>
        <div class="ejemplo">
            <nav>
                <div class="menu">
                    <a href="#" class="menu-logo m-0">Logo</a>
                    <ul class="lista derecha">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Porfolio</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="html">
            <pre class="brush:html">
                <nav>
                    <div class="menu">
                        <a href="#" class="menu-logo">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                        </ul>
                    </div>
                </nav>
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="centrado">
        <h2>Menú Centrado</h2>
        <p>
            Le agregamos un contenedor al contenido del menú
        </p>
        <h3>Muestra del menú</h3>
        <div class="ejemplo">
            <nav>
                <div class="menu">
                    <div class="contenedor">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="html">
            <pre class="brush:html">
                <nav>
                    <div class="menu">
                        <div class="contenedor">
                            <a href="#" class="menu-logo">Logo</a>
                            <ul class="lista derecha">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Porfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="fixed">
        <h2>Menú Fixed</h2>
        <p>
            Para que el menú se desplace a medida que el usuario 
            hace scroll en la pagina utilizamos la clase <i>.menu-fixed</i>
        </p>
        <h3>Muestra Menú</h3>
        <div class="ejemplo">
            <nav>
                <div class="menu">
                    <div class="contenedor">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="codigo">
            <pre class="brush:html">
                <nav class="menu-fixed">
                    <div class="menu">
                        <div class="contenedor">
                            <a href="#" class="menu-logo">Logo</a>
                            <ul class="lista derecha">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Porfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="colores">
        <h2>Menú Colores</h2>
        <p>
            El color de los ejemplos anteriores es por defecto.
            podemos cambiarlo utilizando las clases de colores que vienen con la 
            librería.
        </p>
        <h3>Muestra Menú</h3>
        <div class="ejemplo">
            <nav>
                <div class="menu fd-rojo">
                    <div class="contenedor">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav>
                <div class="menu fd-gris">
                    <div class="contenedor">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav>
                <div class="menu fd-gris-o">
                    <div class="contenedor">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav>
                <div class="menu fd-gris-az">
                    <div class="contenedor">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav>
                <div class="menu fd-gris-az-o">
                    <div class="contenedor">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav>
                <div class="menu fd-verde">
                    <div class="contenedor">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="alerta-op-verde">De esta forma podemos utilizar todos los colores 
            de la biblioteca que están documentados en la sección colores 
            y fondos.
        </div>
        <div class="html">
            <pre class="brush:html">
                <nav>
                    <div class="menu fd-rojo">
                        <div class="contenedor">
                            <a href="#" class="menu-logo">Logo</a>
                            <ul class="lista derecha">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Porfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <nav>
                    <div class="menu fd-gris">
                        <div class="contenedor">
                            <a href="#" class="menu-logo">Logo</a>
                            <ul class="lista derecha">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Porfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <nav>
                    <div class="menu fd-gris-o">
                        <div class="contenedor">
                            <a href="#" class="menu-logo">Logo</a>
                            <ul class="lista derecha">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Porfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <nav>
                    <div class="menu fd-gris-az">
                        <div class="contenedor">
                            <a href="#" class="menu-logo">Logo</a>
                            <ul class="lista derecha">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Porfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <nav>
                    <div class="menu fd-gris-az-o">
                        <div class="contenedor">
                            <a href="#" class="menu-logo">Logo</a>
                            <ul class="lista derecha">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Porfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <nav>
                    <div class="menu fd-verde">
                        <div class="contenedor">
                            <a href="#" class="menu-logo">Logo</a>
                            <ul class="lista derecha">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Porfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="dropdown">
        <h2>Menú con dropdown</h2>
        <p>
            Podemos agregarle un dropdown al las opciones del menú. 
            La utilización del dropdown se encuentra en la sección correspondiente a este tema en 
            la documentación.
        </p>

        <div class="ejemplo">
        <nav>
                <div class="menu">
                    <div class="contenedor">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a class="dropdown-toggle" data-target="#porfolio">Porfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
           
        
        <div class="html">
            <pre class="brush:html">
                <nav>
                    <div class="menu">
                        <div class="contenedor">
                            <a href="#" class="menu-logo">Logo</a>
                            <ul class="lista derecha">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <!-- 
                                    Este es el dropdown
                                <li>
                                    <a class="dropdown-toggle" data-target="#porfolio">
                                        Porfolio
                                    </a>
                                </li>
                                -->
                            </ul>
                        </div>
                    </div>
                </nav>
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="responsive">
        <h2>Menú Resposive</h2>
        <p>
            Para dispositivos mas pequeños es necesario adaptar 
            nuestro menú para que sea funcional a todo el mundo.
            Ahora vamos a ver como desplegar un menu lateral 
            que reemplaza a la lista del menú.
        </p>
        <h3>Iniciación</h3>
        <div class="alerta-op-verde ">
            Es necesario tener activado el componente 
            desde la librería. Para esto debajo de donde 
            agregamos a <i>bodystyle.js</i> agregamos:
        </div>
        <div class="html">
            <pre class="brush:js">
                <script>
                    BS.MenuSuperior() // Linea para activar 
                    // el sidebar responsive
                </script>
            </pre>
        </div>
        <div class="ejemplo">
            <nav>
                <div class="menu">
                    <div class="contenedor">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <a  class="lateral-boton" data-target="#menu-lateral"></a>
                        <ul class="lista derecha ocultar-desde-medianos">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="alerta-op-verde">
            Si achicamos la pantalla podemos ver que la lista se borra y se reemplaza 
            por un boton de menu. 
        </div>

        <div class="html">
            <pre class="brush:html">
                <nav>
                    <div class="menu">
                        <div class="contenedor">
                            <a href="#" class="menu-logo">Logo</a>
                            <a  class="lateral-boton" data-target="#menu-lateral"></a>
                            <ul class="lista derecha ocultar-desde-medianos">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Porfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Como podemos observar agregamos una etiqueta (a) con la clase 
            <i>.lateral-boton</i> y el atributo <i>data-target</i> que apunta 
            al menú lateral a través del id.
        </div>
        <div class="html">
            <pre class="brush:html">
                <div id="menu-lateral" class="menu-lateral">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Porfolio</a></li>
                    </ul>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Hay que notar que el id del menú lateral es igual 
            al data-target de la etiqueta a que tiene la clase <i>.lateral-boton</i>. 
            También es importante la clase <i>.menu-lateral</i> para general 
            sidebar reemplazante.
        </div>
    </article>
    <article id="menu-ext" class="article scroll-item">
        <h2>Menú Extendido</h2>
        <p>
            Es importante este elemento debido a que se pone en evidencia 
            la utilidad de los utilitarios de la labrería. <br> 
            Si solo copiamos los ejemplos tal y como figuran no utilizamos 
            todas las funcionalidades que posee BodyStyle.
        </p>

        <div class="ejemplo">
            <div class="menu fd-negro-trasp bor-negro-trasp">
                <a href="" class="menu-logo c-gris-o p-2">BodyStyle</a>
                <ul class="lista derecha">
                    <div class="divisorH"></div>
                    <a href="#" class="btn-sm fd-rojo fz-13 f-grosor-6 md-1">LogIn</a>
                    <a href="#" class="btn-sm fd-blanco c-negro f-grosor-6 fz-13">Registro</a>
                </ul>
            </div>
            <div class="menu-ext">
                <div class="contenedor">
                    <ul>
                        <li>
                            <a href="#" class="efecto-borde-rojo centro">
                                <span class="fz-25 icon-home3"></span>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="efecto-borde-rojo centro">
                                <span class="fz-25 icon-cloud-download"></span>
                                <span>Descargas</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="efecto-borde-rojo centro">
                                <span class="fz-25 icon-cloud-check"></span>
                                <span>Estado</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="efecto-borde-rojo centro">
                                <span class="fz-25 icon-checkmark"></span>
                                <span>Completado</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <p>
            La única clase adicional con respecto a los otros menus anteriormente mencionados 
            es la clase <i>.menu-ext</i> para agregar el contenedor con los íconos. Luego 
            todas las clases son de los utilitarios, y a través de ellos podemos modificar 
            componentes y diseñar modelos diferentes a los predeterminados.
        </p>

        <div class="html">
            <pre class="brush:html">
                <div class="menu fd-negro-trasp bor-negro-trasp">
                    <a href="" class="menu-logo c-gris-o-1 p-2">BodyStyle</a>
                    <ul class="lista derecha">
                        <div class="divisorH"></div>
                        <a href="#" class="btn-sm fd-rojo fz-13 f-grosor-6 md-1">LogIn</a>
                        <a href="#" class="btn-sm fd-blanco c-negro f-grosor-6 fz-13">Registro</a>
                    </ul>
                </div>
                <div class="menu-ext">
                    <div class="contenedor">
                        <ul>
                            <li>
                                <a href="#" class="efecto-borde-rojo centro">
                                    <span class="fz-25 icon-home3"></span>
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="efecto-borde-rojo centro">
                                    <span class="fz-25 icon-cloud-download"></span>
                                    <span>Descargas</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="efecto-borde-rojo centro">
                                    <span class="fz-25 icon-cloud-check"></span>
                                    <span>Estado</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="efecto-borde-rojo centro">
                                    <span class="fz-25 icon-checkmark"></span>
                                    <span>Completado</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </pre>
        </div>
        <div class="alerta-op-rojo">
            Los íconos no pertenecen a la librería. 
            Pueden conseguirlos desde <a href="https://icomoon.io/" target="_blank" class="link">https://icomoon.io/</a>
        </div>
        <div class="alerta-op-gris">
            <h4 class="mab-1">Clases adicionales</h4>
            Los utilitarios utilizados para generar este menú son los siguientes. <br>
            <a href="bordes.php" target="_blank" class="link">Bordes</a>,
            <a href="texto.php" target="_blank" class="link">Texto</a>,
            <a href="colores.php" target="_blank" class="link">Colores Texto</a>, 
            <a href="efectoBorde.php" target="_blank" class="link">Efecto Borde</a> 
        </div>
    </article>
</section>

<div id="menu-lateral" class="menu-lateral">
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Porfolio</a></li>
    </ul>
</div>


<div id="porfolio" class="dropdown">
    <ul>
        <li><a href="#">Vacaciones</a></li>
        <li><a href="#">Trabajo</a></li>
        <li><a href="#">Universidad</a></li>
        <li><a href="#">Boliche</a></li>
    </ul>
</div>

<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#estructura">Estructura</a></li>
        <li><a href="#basico">Básico</a></li>
        <li><a href="#derecha">Derecha</a></li>
        <li><a href="#centrado">Centrado</a></li>
        <li><a href="#colores">Colores</a></li>
        <li><a href="#fixed">Fixed</a></li>
        <li><a href="#dropdown">Dropdown</a></li>
        <li><a href="#responsive">Responsive</a></li>
        <li><a href="#menu-ext">Extendido</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>
