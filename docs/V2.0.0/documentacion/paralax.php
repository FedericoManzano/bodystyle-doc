<?php $titulo = "Paralax" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    
    <?php 
        $titulo = "Paralax";
        $descripcion = "Efecto que se le agrega a las imágenes de fondo de los 
        contenedores.";
        require_once("./articuloPrincipal.php");
    ?>

    <article class="article scroll-item" id="muestra">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <div class="paralax-contenedor">
                <div class="paralax-contenedor">
                    <img class="paralax" src="https://cdn.wallpaper.com/main/styles/responsive_1680w_scale/s3/2020/02/louise_hagger_the_rituals_of_nourishment_food_alter.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR SI LO COPIAN
                <div class="paralax-contenedor">
                    <img class="paralax" src="https://cdn.wallpaper.com/main/styles/responsive_1680w_scale/s3/2020/02/louise_hagger_the_rituals_of_nourishment_food_alter.jpg" alt="">
                </div>
                -->
            </pre>
        </div>
        <div class="alerta-op-rojo">
            Las imagenes utilizadas pertenecen a <a href="https://www.wallpaper.com/" class="link">https://www.wallpaper.com/</a>
        </div>
        <p>
            Para realizar este efecto es necesario crear un contenedor con la clase 
            <i>.paralax-contenedor</i> y dentro de este añadir la imágen con la etiqueta 
            <i>img</i> y añadirle a esta la clase <i>.paralax</i>
        </p>
        <p>
            Es necesario también inicializar el componente con la función de la librería 
            <i>BS.ParalaxInit()</i>
        </p>
        <div class="js">
            <pre class="brush:js">
                BS.ParalaxInit()
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