
<?php $titulo = "Menú Selector"?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    
    <?php 
        $titulo = "Menú Selector";
        $descripcion = "Menú complementario que permite seleccionar el contenido que 
        mostrar.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="alerta-op-verde">
            Es recomendable revisar la sección de esta documentación que tiene 
            que ver con el menú. Para enteder las declaraciones <a href="menu.php" target="_blank" class="link">Menu</a>. 
        </div>
        <div class="ejemplo">
            <nav>
                <div class="menu">
                    <a href="#" class="menu-logo m-0">Logo</a>
                    <ul class="lista derecha">
                        <li><a class="selector-colapso" data-target="#inicio">Inicio</a></li>
                        <li><a class="selector-colapso" data-target="#servicios">Servicios</a></li>
                        <li><a class="selector-colapso" data-target="#porfolio">Porfolio</a></li>
                    </ul>
                </div>
            </nav>
            <div class="contenedor">
                <div id="inicio"class="ej-100 fd-rojo colapso">Inicio</div>
                <div id="servicios" class="ej-100 colapso">Servicios</div>
                <div id="porfolio" class="ej-100 colapso fd-verde">Porfolio</div>
            </div>
            
        </div>
        <p>
             Las cajas de contenido simulan lo que podría ser una página completa.
        </p>

        <div class="html">
            <pre class="brush:html">
                <nav>
                    <div class="menu">
                        <a href="#" class="menu-logo">Logo</a>
                        <ul class="lista derecha">
                            <li><a class="selector-colapso" data-target="#inicio">Inicio</a></li>
                            <li><a class="selector-colapso" data-target="#servicios">Servicios</a></li>
                            <li><a class="selector-colapso" data-target="#porfolio">Porfolio</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="contenedor">
                    <div id="inicio"class="box-v fd-rojo colapso">Inicio</div>
                    <div id="servicios" class="box-v colapso">Servicios</div>
                    <div id="porfolio" class="box-v colapso fd-verde">Porfolio</div>
                </div>
            </pre>
        </div>
    </article>
    <article id="iniciacion" class="article scroll-item">
        <h2>Iniciar</h2>
        <p>
            Para poder utlizar este menú tenemos que activar el modulo 
            a través de la siguiente linea de JS.
        </p>

        <div class="js">
            <pre class="brush:js">
                <script>BS.MenuSuperior() // Color por defecto</script> 
            </pre>
        </div>
        <div class="alerta-op-verde">
            Podemos enviar un parámetro con el color del borde selector:
        </div>
        <div class="js">
            <pre class="brush:js">
                <script>BS.MenuSuperior({color:"#ccc"}) // Color gris</script> 
            </pre>
        </div>
    </article>
    <article id="utilizacion" class="article scroll-item">
        <h2>Utilización</h2>
        <p>
            A cada elemento a de la lista del menú tenemos que agregarle 
            la clase <i>.selector-colapso</i> y un data-target que apunta al 
            id del elemento que despliega. <br>
            A los elementos hay que agregarles un id que se corresponde con el attr 
            data-target de la etiqueta (a) y la clase <i>.colapso</i>
        </p>
        <div class="alerta-op-verde">
            En el código de arriba figuran muchos attr dinámicos el código que deben agregar 
            es el sieguiente.
        </div>

        <div class="html">
            <pre class="brush:html">
                <!--
                    <div class="contenedor">
                        <div id="inicio"class="colapso">Inicio</div>
                        <div id="servicios" class=" colapso">Servicios</div>
                        <div id="porfolio" class="colapso fd-verde">Porfolio</div>
                    </div>
                -->
            </pre>
        </div>
        <div class="alerta-op-gris">
            A partir de esto podemos personalizar el menú de la forma 
            que queramos, para esto sería bueno que revisen la sección menú de esta 
            documentación. <a href="menu.php" target="_blank" class="link">Menú</a>
        </div>
    </article>
</section>
<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#iniciacion">Iniciación</a></li>
        <li><a href="#utilizacion">Utilización</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>