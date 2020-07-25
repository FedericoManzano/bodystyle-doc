
<?php $titulo = "Formas" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">


    <?php 
        $titulo = "Formas";
        $descripcion = "Vamos a ver un conjunto de formas que provve la librería a 
        través de clases incorporadas.
        <br> 
        Es importante acalara: <span class='c-rojo f-grosor-6'>Estas formas no 
        son aceptadas por todos los navegadores actualmente.</span>";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <p>
           Vamos a utilizar un contenedor de ancho fijo y alto fijo 
           para mostrar las figuras.
        </p>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="forma-triangulo box-fig"></div>
                <div class="forma-circulo box-fig"></div>
                <div class="forma-triangulo-recto-inf box-fig"></div>
                <div class="forma-triangulo-recto-sup box-fig"></div>
                <div class="forma-triangulo-recto-inf-der box-fig"></div>
                <div class="forma-triangulo-invertido box-fig"></div>
                <div class="forma-elipse box-fig"></div>
                <div class="forma-trapecio box-fig"></div>
                <div class="forma-rombo box-fig"></div>
                <div class="forma-pentagono  box-fig"></div>
                <div class="forma-hexagono box-fig"></div>
                <div class="forma-heptagono box-fig"></div>
                <div class="forma-flecha-izquierda box-fig"></div>
                <div class="forma-flecha-derecha box-fig"></div>
                <div class="forma-punto-izquierda box-fig"></div>
                <div class="forma-punto-derecha  box-fig"></div>
                <div class="forma-punto-abajo  box-fig"></div>
                <div class="forma-punto-arriba box-fig"></div>
                <div class="forma-banda-izquierda  box-fig"></div>
                <div class="forma-banda-derecha   box-fig"></div>
                <div class="forma-mensaje  box-fig"></div>
                <div class="forma-estrella box-fig"></div>
                <div class="forma-cruz   box-fig"></div>
                <div class="forma-cerrar  box-fig"></div>
                <div class="forma-ventana  box-fig"></div>
            </div>
        </div>
        <p>
            Por lo general se utilizar estas formas para delimitar cabeceras de 
            páginas web y utilizarlas con imágenes.
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="forma-triangulo box-fig"></div>
                    <div class="forma-circulo box-fig"></div>
                    <div class="forma-triangulo-recto-inf box-fig"></div>
                    <div class="forma-triangulo-recto-sup box-fig"></div>
                    <div class="forma-triangulo-recto-inf-der box-fig"></div>
                    <div class="forma-triangulo-invertido box-fig"></div>
                    <div class="forma-elipse box-fig"></div>
                    <div class="forma-trapecio box-fig"></div>
                    <div class="forma-rombo box-fig"></div>
                    <div class="forma-pentagono  box-fig"></div>
                    <div class="forma-hexagono box-fig"></div>
                    <div class="forma-heptagono box-fig"></div>
                    <div class="forma-flecha-izquierda box-fig"></div>
                    <div class="forma-flecha-derecha box-fig"></div>
                    <div class="forma-punto-izquierda box-fig"></div>
                    <div class="forma-punto-derecha  box-fig"></div>
                    <div class="forma-punto-abajo  box-fig"></div>
                    <div class="forma-punto-arriba box-fig"></div>
                    <div class="forma-banda-izquierda  box-fig"></div>
                    <div class="forma-banda-derecha   box-fig"></div>
                    <div class="forma-mensaje  box-fig"></div>
                    <div class="forma-estrella box-fig"></div>
                    <div class="forma-cruz   box-fig"></div>
                    <div class="forma-cerrar  box-fig"></div>
                    <div class="forma-ventana  box-fig"></div>
                </div>
            </pre>
        </div>
    </article>
    <article id="imagenes" class="article scroll-item">
        <h2>Imágenes</h2>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <img class="img-display-128 forma-estrella" src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg">
                <img class="img-display-128 forma-banda-izquierda " src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg">
                <img class="img-display-128 forma-banda-derecha " src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg">
                <img class="img-display-128 forma-punto-izquierda " src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg">
                <img class="img-display-128 forma-cerrar " src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg">
            </div>
        </div>
        <div class="codigo">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <img class="img-display-128 forma-estrella" src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg">
                    <img class="img-display-128 forma-banda-izquierda " src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg">
                    <img class="img-display-128 forma-banda-derecha " src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg">
                    <img class="img-display-128 forma-punto-izquierda " src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg">
                    <img class="img-display-128 forma-cerrar " src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg">
                </div>
            </pre>
        </div>
        <span class="span">
            Podemos utilizar todas las formas que queramos que figuren en el apartado <i>Muestra</i> 
            de esta sección.
        </span>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#imagenes">Imagenes</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>