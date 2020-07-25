<?php $titulo = "Preloader"?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">


    <?php 
        $titulo = "Preloader";
        $descripcion = "Elementos que permiten mejorar la experiencia del usuario
        mostrando una animación mientras espera el resultado de algún 
        evento.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <div class="preloader pre-rojo"></div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="preloader pre-rojo"></div>
            </pre>
        </div>
    </article>
    <article id="colores" class="article scroll-item">
        <h2>Colores</h2>
        <div class="ejemplo">
            <div class="d-flex just-cobertura-tope">
                <div class="preloader pre-rojo"></div>
                <div class="preloader pre-verde"></div>
                <div class="preloader pre-azul"></div>
                <div class="preloader pre-gris"></div>
                <div class="preloader pre-negro"></div>
                <div class="preloader pre-blanco"></div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
            <div class="d-flex just-cobertura-tope">
                <div class="preloader pre-rojo"></div>
                <div class="preloader pre-verde"></div>
                <div class="preloader pre-azul"></div>
                <div class="preloader pre-gris"></div>
                <div class="preloader pre-negro"></div>
                <div class="preloader pre-blanco"></div>
            </div>
            </pre>
        </div>
    </article>
    <article id="tamaños" class="article scroll-item">
        <h2>Tamaños</h2>
        <div class="ejemplo">
            <div class="d-flex just-cobertura">
                <div class="preloader-sm pre-rojo"></div>
                <div class="preloader pre-rojo"></div>
                <div class="preloader-lg pre-rojo"></div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-cobertura-tope">
                    <div class="preloader-sm pre-rojo"></div>
                    <div class="preloader pre-rojo"></div>
                    <div class="preloader-lg pre-rojo"></div>
                </div>
            </pre>
        </div>
        <p>
            Para los tamaños hay que agregarle a la clase <i>.preloader</i> el parametro 
            -sm, -lg para pequeños y grandes.
        </p>
    </article>
    <article id="botones" class="article scroll-item">
        <h2>Botones</h2>
        <div class="ejemplo">
            <a href="#" class="btn btn-azul ">
                <span class="preloader-sm pre-gris md-1"></span>
                Cargando
            </a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <a href="#" class="btn btn-azul ">
                    <span class="preloader-sm pre-gris md-1"></span>
                    Cargando
                </a>
            </pre>
        </div>
    </article>
</section>



<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#colores">Colores</a></li>
        <li><a href="#tamaños">Tamaños</a></li>
        <li><a href="#botones">Botones</a></li>
    </ul>
</div>

<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>