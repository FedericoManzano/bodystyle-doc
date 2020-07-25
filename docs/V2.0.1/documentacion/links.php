<?php $titulo = "Links"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Links";
        $descripcion = "Estilos de los links de la librería";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <p>
            Para poder darle formato a links vamos a utilizar la clase <i>.link</i>.
        </p>
        <div class="ejemplo">
            <a href="#" class="link">Esto es un link activo</a>
            <a class="desactivado link" >Esto es un link inactivo</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <a href="#" class="link">Esto es un link activo</a>
                <a class="desactivado link" >Esto es un link inactivo</a>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Todos los links sin el attr href aparecen inactivos.
        </div>
    </article>
</section>
<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>