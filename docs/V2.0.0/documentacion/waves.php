
<?php $titulo = "Waves" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">

    <?php 
        $titulo = "Tips";
        $descripcion = "Es un efecto a partir de una elemento que se añade dinámicamente. <br> 
        A partir de esta versión se puede cambiar los colores del efecto.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <a class="btn fd-azul waves">Clic !!!</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <a class="btn fd-azul waves">Clic !!!</a>
            </pre>
        </div>
        <p>
            Simplemente para utilizarlo debemos agregar la clase <i>.waves</i> a un 
            elemento y darle clic.
        </p>
        <h3>Colores</h3>

        <div class="ejemplo">
            <a class="btn fd-azul waves" data-color="fd-negro">Clic !!!</a>
        </div>
        <p>
            Si lo que queremos es que el efecto tenga otro color simplemente 
            agregamos el attr <span class="c-rojo">data-color</span> al elemento y le cargamos un color de fondo 
            de la librería. {fd-{color}}. <br> 
            Tiene que se un color documentado para que funcione. 
            <a href="fondos.php" target="_blank" class="link">Fondos</a>
        </p>

        <div class="html">
            <pre class="brush:html">
                <a class="btn fd-azul waves" data-color="fd-negro">Clic !!!</a>
            </pre>
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
    BS.DesplegarSidebarFija().desplegar("#menuJS")
</script>