<?php $titulo = "División"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    
    <?php 
        $titulo = "Division";
        $descripcion = "";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <div class="fd-negro" style="width:100px; height: 100px"></div>
            <div class="divisor"></div>
            <div class="fd-negro mar-1" style="width:100px; height: 100px"></div>
        </div>
        <div class="html">
            <pre class="brush:html">
            <div class="fd-negro" style="width:100px; height: 100px"></div>
            <div class="divisor"></div>
            <div class="fd-negro" style="width:100px; height: 100px"></div>
            </pre>
        </div>

        <div class="alerta-op-verde">
            Podemos utilizar la división en diversos objetos. 
            Uno de ellos es el dropdown.
        </div>

        <div class="ejemplo">
            <a  class="btn btn-azul dropdown-toggle" data-target="#listado">Drop</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!--
                <a  class="btn btn-azul dropdown-toggle" data-target="#listado">Drop</a>


                <div id="listado" class="dropdown">
                    <ul>
                        <li><a href="#" class="f-grosor-6">Perfil</a></li>
                        <div class="divisor"></div>
                        <li><a href="#">Configuración</a></li>
                        <li><a href="#">Cuenta</a></li>
                        <div class="divisor"></div>
                        <li><a href="#">Salir</a></li>
                    </ul>
                </div>
                -->
            </pre>
        </div>
        <span class="span">
            Simplmente añadiendo una etiqueta <i>div</i> con la clase 
            <i>.divisor</i> se vrea la linea mostrada en los ejemplos para separar 
            el contenido.
        </span>

    </article>
</section>

<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
    </ul>
</div>

<div id="listado" class="dropdown">
    <ul>
        <li><a href="#" class="f-grosor-6">Perfil</a></li>
        <div class="divisor"></div>
        <li><a href="#">Configuración</a></li>
        <li><a href="#">Cuenta</a></li>
        <div class="divisor"></div>
        <li><a href="#">Salir</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuUti")
</script>