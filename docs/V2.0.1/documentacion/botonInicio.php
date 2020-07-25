
<?php $titulo = "Boton Inicio" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">

    <?php 
        $titulo = "Botón Inicio";
        $descripcion = "El típico botón ir a arriba.";
        require_once("./articuloPrincipal.php");
    ?>
    
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <p>
            El botón de inicio se activa cuando el scroll de la página incrementa.
            Para poder utilizarlo debemos activarlo de la siguiente manera.
        </p>

        <div class="html">
            <pre class="brush:js">
                BS.BotonInicioInit()
            </pre>
        </div>

        <div class="ejemplo" style="height: 600px">
            <div class="d-flex just-centrada ali-centrada" style="height: 600px">
                En la parte inferior derecha apararece el botón de inicio.
            </div>
        </div>
    </article>
</section>

<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>
<script>
    BS.BotonInicioInit()
    BS.DesplegarSidebarFija().desplegar("#menuJS")
</script>