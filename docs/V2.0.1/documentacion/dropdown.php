<?php $titulo = "Dropdown" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">

    <?php 
        $titulo = "Dropdown";
        $descripcion = "Es un elemento que se posiciona de manera dinámica alrededor de los 
        elementos al los cuales está asignado. <br>
        Es una pequeña lista que aporta un submenú que optimiza mucho el espacio disponible 
        en la página. ";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <button class="btn fd-azul-ve dropdown-toggle tips-ele"
            data-target="#dropdown"
            data-posicion="arriba" data-tips="Este es el elemento disparador">DropDown!!</button>
        </div>
        <h3>Iniciación</h3>
        <div class="alerta-op-verde">
            Para poder activarlo tenemos que llamar a la función de la librería 
            que cumpla esta función:
        </div>
        <div class="js">
            <pre class="brush:html">
               BS.DropDownInit()
            </pre>
        </div>
    </article>
    <article id="funcionamiento" class="article scroll-item">
        <h2>Funcionamiento</h2>
        <p>
            Le asignamos a un elemento, por ejemplo un botón, la clase <i>.dropdown-toggle</i> 
            que va a ser necesaria para el funcionamiento. Luego a este mismo elemento 
            le agregamos el atributo <i>data-target="#id-listado"</i> siendo #id-listado el 
            ID de la lista a desplegar que se encuentra definida en cualquier parte del documento 
            dentro de la etiqueta <i>body</i> de html.
        </p>
        <div class="ejemplo">
            <button class="btn fd-azul-ve dropdown-toggle" data-target="#dropdown">
                DropDown!!
            </button>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!--
                    <button class="btn fd-azul-ve dropdown-toggle" data-target="#dropdown">
                        DropDown!!
                    </button>
                -->
            </pre>
        </div>
        
        <p>
            Este sería el elemento disparador del evento del dropdown.
            Ahora vamos a ver la lista desplegable.
        </p>

        <h3>Lista desplegable</h3>
        <div class="html">
            <pre class="brush:html">
            <div id="dropdown" class="dropdown">
                <ul>
                    <li><a href="#">item1</a></li>
                    <li><a href="#">item2</a></li>
                    <li><a href="#">item3</a></li>
                </ul>
            </div>
            </pre>
        </div>
        <p>
            La lista tiene el <i>id="dropdown"</i> y la clase <i>.dropdown</i> la clase es necesaria 
            si no está agregada no fuenciona. En el caso del id es a elección pero es necesario que coincida con 
            el attr <i>data-target</i> del elemento disparador.
        </p>
    </article>
    <article id="nav" class="article scroll-item">
        <h2>Menú de navegación</h2>
        <p>
            Entre otras cosas podemos implementar el dropdown en el menú de navegación 
            visto en la sección menú de componentes <a href="menu.php" class="link" target="a_blank">Menú</a>
        </p>
        <div class="ejemplo">
            <nav>
                <div class="menu">
                    <a href="#" class="menu-logo m-0">Logo</a>
                    <ul class="lista derecha">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a class="dropdown-toggle tips-ele" data-target="#menu"
                        data-posicion="arriba" data-tips="Drop mejorado con las clases utilitarias">Porfolio</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR SI LO COPIAN
                <nav>
                    <div class="menu">
                        <a href="#" class="menu-logo m-0">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a class="dropdown-toggle tips-ele" data-target="#menu"
                            data-posicion="arriba" data-tips="Drop mejorado con las clases utilitarias">Porfolio</a></li>
                        </ul>
                    </div>
                </nav>
                -->
            </pre>
        </div>
        <div class="alerta-op-verde mab-3">
            En este caso mejoramos la lista desplegable con las elementos disponibles de la librería. 
            No tienen que ver directamente con el dropdown pero ayudan a darle una mejor apariencia. <br> 
            Las clases utilizadas provienen de las siguientes secciones. <br>
            Bordes dinámicos <a href="efectoBorde.php" class="link">Efecto Borde</a> <br> 
            Herramientas de texto <a href="texto.php" class="link">Utilitarios de Texto</a>.
        </div>

        <div class="codigo">
            <pre class="brush:html">
                <div id="menu" class="dropdown">
                    <ul>
                        <li><a class="f-grosor-6 c-negro">Fotos</a></li>
                        <div class="divisor"></div>
                        <li><a class="e-borde-izq-verde-5">Trabajo</a></li>
                        <li><a class="e-borde-izq-rojo-5">Universidad</a></li>
                        <li><a class="e-borde-izq-azul-5">Boliche</a></li>
                        <div class="divisor"></div>
                        <li><a class="f-grosor-6 c-negro">Templates</a></li>
                        <div class="divisor"></div>
                        <li><a class="e-borde-izq-verde-5">Marcos</a></li>
                        <li><a class="e-borde-izq-rojo-5">Filtros</a></li>
                    </ul>
                </div>
            </pre>
        </div>
    </article>

    <article id="colores" class="article scroll-item">
        <h2>Colores</h2>
        <p>
            Se nos puede presentar la necesidad de cambiarle el color a las flechas
            del dropdown. En este caso necesitamos inicializar el componente con un 
            color.
        </p>

        <div class="js">
            <pre class="brush:html">
                BS.DropdownInit({color: "#000"}) //color negro
            </pre>
        </div>
        
    </article>
    <article id="activoId" class="article scroll-item">
        <h2>Activo</h2>
        <p>
            Algún elemento necesitamos que se encuentre <span class="badge badge-azul">.activo</span>.
        </p>
        <div class="ejemplo">
            <a class="btn fd-azul-c dropdown-toggle" data-target="#activo">Drop</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!--<a class="btn fd-azul-c dropdown-toggle" data-target="#activo">Drop</a>-->
                <div id="activo" class="dropdown">
                    <ul>
                        <li><a >Trabajo</a></li>
                        <li><a class="activo" >Universidad</a></li>
                        <li><a >Boliche</a></li>
                    </ul>
                </div>
            </pre>
            
        </div>
        <div class="alerta-op-verde">
            Usamos la clase .activo y se la añadimos a un enlace.
        </div>
        
    </article>
    <article id="disabled" class="article scroll-item">
        <h2>Inactivo</h2>
        <p>
            Muechas veces necesitamos que algunas opciones 
            estén deshabilitadas. En este caso disponemos de la clase 
            <span class="badge badge-azul">.desactivado</span>.
        </p>
        <div class="ejemplo">
            <a class="btn fd-azul-c dropdown-toggle" data-target="#dis">Drop</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!--<a class="btn fd-azul-c dropdown-toggle" data-target="#dis">Drop</a>-->
                <div id="dis" class="dropdown">
                    <ul>
                        <li><a href="#">Trabajo</a></li>
                        <li><a class="desactivado" href="#">Universidad</a></li>
                        <li><a href="#">Boliche</a></li>
                    </ul>
                </div>
            </pre>
            
        </div>
    </article>
</section>

<div id="dropdown" class="dropdown">
    <ul>
        <li><a href="#">Trabajo</a></li>
        <li><a href="#">Universidad</a></li>
        <li><a href="#">Boliche</a></li>
    </ul>
</div>

<div id="menu" class="dropdown">
    <ul>
        <li><a class="f-grosor-6 c-negro">Fotos</a></li>
        <div class="divisor"></div>
        <li><a class="e-borde-izq-verde-5 tips-ele"
        data-posicion="izquierda" data-tips="Efecto Borde lateral">Trabajo</a></li>
        <li><a class="e-borde-izq-rojo-5">Universidad</a></li>
        <li><a class="e-borde-izq-azul-5">Boliche</a></li>
        <div class="divisor"></div>
        <li><a class="f-grosor-6 c-negro">Templates</a></li>
        <div class="divisor"></div>
        <li><a class="e-borde-izq-verde-5">Marcos</a></li>
        <li><a class="e-borde-izq-rojo-5">Filtros</a></li>
    </ul>
</div>

<div id="dis" class="dropdown">
    <ul>
        <li><a href="#">Trabajo</a></li>
        <li><a class="desactivado tips-ele"
        data-posicion="derecha" data-tips="Elemento <b class='c-rojo-c'> .disabled</b>">
        Universidad</a></li>
        <li><a href="#">Boliche</a></li>
    </ul>
</div>

<div id="activo" class="dropdown">
    <ul>
        <li><a >Trabajo</a></li>
        <li><a class="activo tips-ele" 
        data-posicion="derecha" data-tips="Elemento <b class='c-verde-c'> .activo</b>">Universidad</a></li>
        <li><a >Boliche</a></li>
    </ul>
</div>

<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#funcionamiento">Funcionamiento</a></li>
        <li><a href="#nav">Nav</a></li>
        <li><a href="#colores">Colores</a></li>
        <li><a href="#activoId">Activo</a></li>
        <li><a href="#disabled">Deshabilitado</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuJS")
</script>