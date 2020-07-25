<?php $titulo = "Colores" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Colores";
        $descripcion = "A continuación se detallan las clases de colores de texto.";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="colores" class="article scroll-item">
        <h2>Colores de texto</h2>
        <div class="ejemplo">
            <p class="c-negro">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p class="c-blanco fd-negro">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p class="c-rojo">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p class="c-violeta">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p class="c-naranja">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p class="c-verde">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p class="c-azul">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p class="c-gris">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p class="c-amarillo">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
        <div class="html">
            <pre class="brush:html">
                <p class="c-negro">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <p class="c-blanco fd-negro">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <p class="c-rojo">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <p class="c-violeta">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <p class="c-naranja">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <p class="c-verde">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <p class="c-azul">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <p class="c-gris">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <p class="c-amarillo">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </pre>
        </div>
    </article>

</section>
<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#nav">Nav</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>