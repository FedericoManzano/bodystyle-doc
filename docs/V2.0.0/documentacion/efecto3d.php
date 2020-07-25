<?php $titulo = "Efecto 3D" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
        <?php 
                $titulo = "Efecto 3D";
                $descripcion = "En esta sección vamos a ver efectos en tres dimensiones para diferentes elementos.";
                require_once("./articuloPrincipal.php");
        ?>

    <article id="estructura" class="article scroll-item">
        <h2>Estructura</h2>
        <div class="html">
            <pre class="brush:html">
                <!-- Horizontal -->
                <div class="contenedor-efecto3d">
                    <div class="contenedor-horizontal">
                        <div class="adelante">
                            <!-- Lo que queremos mostrar en la parte frontal-->
                        </div>
                        <div class="atras-horizontal">
                            <!-- Lo que queremos mostrar en la parte trasera-->
                        </div>
                    </div>
                </div>
                <!-- Vertical -->
                <div class="contenedor-efecto3d">
                    <div class="contenedor-vertical">
                        <div class="adelante">
                            <!-- Lo que queremos mostrar en la parte frontal-->
                        </div>
                        <div class="atras-vertical">
                            <!-- Lo que queremos mostrar en la parte trasera-->
                        </div>
                    </div>
                </div>
            </pre>
        </div>
        <h3>Ejemplo</h3>
        <div class="ejemplo" >
            <div class="d-flex flex-wrap just-cobertura">
                <div class="contenedor-efecto3d" style="width: 18rem">
                    <div class="contenedor-vertical">
                        <div class="adelante" >
                            <img src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg" width="300px" height="350px">
                        </div>
                        <div class="atras-vertical p-3 fd-gris-az">
                            <h4 class="c-blanco">Titulo del elemento</h4>
                            <div class="divisor"></div>
                            <p class="c-blanco m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia repellendus ab cumque, nulla nam enim accusantium deleniti dolorem illum qui?</p>
                        </div>
                    </div>
                </div>
                <div class="contenedor-efecto3d" style="width: 18rem">
                    <div class="contenedor-horizontal">
                        <div class="adelante" >
                            <img src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg" width="300px" height="350px">
                        </div>
                        <div class="atras-horizontal p-3 fd-gris-az">
                            <h4 class="c-blanco">Titulo del elemento</h4>
                            <div class="divisor"></div>
                            <p class="c-blanco m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia repellendus ab cumque, nulla nam enim accusantium deleniti dolorem illum qui?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alerta-op-rojo">
            La imágen pertenece a <a href="https://pixabay.com/" class="link">https://pixabay.com/</a>
        </div>
        <div class="htmp">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="contenedor-efecto3d" style="width: 18rem">
                        <div class="contenedor-vertical">
                            <div class="adelante" >
                                <img src="..." width="300px" height="350px">
                            </div>
                            <div class="atras-vertical p-3 fd-gris-az">
                                <h4 class="c-blanco">Titulo del elemento</h4>
                                <div class="divisor"></div>
                                <p class="c-blanco m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia repellendus ab cumque, nulla nam enim accusantium deleniti dolorem illum qui?</p>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-efecto3d" style="width: 18rem">
                        <div class="contenedor-horizontal">
                            <div class="adelante" >
                                <img src="..." width="300px" height="350px">
                            </div>
                            <div class="atras-horizontal p-3 fd-gris-az">
                                <h4 class="c-blanco">Titulo del elemento</h4>
                                <div class="divisor"></div>
                                <p class="c-blanco m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia repellendus ab cumque, nulla nam enim accusantium deleniti dolorem illum qui?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
        <p>
            Para ajustar los tamaños y colores de fondo y fuentes utilicé las clases 
            de los utitlitarios de esta librería.
        </p>
    </article>
    <article id="vertical" class="article scroll-item">
        <h2>Vertical</h2>

        <div class="ejemplo">
            <div class="contenedor-efecto3d" style="width: 300px; height: 350px">
                <figure class="contenedor-vertical" style="width: 300px; height: 350px">
                    <img class="adelante" src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg" width="300px" height="350px">
                    <figcaption class="atras-vertical fd-azul-ve p-3">
                        <h4 class="c-blanco">Titulo de la imágen</h4>
                        <div class="divisor"></div>
                        <p class="c-blanco">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, earum!</p>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="contenedor-efecto3d" style="width: 300px; height: 350px">
                    <figure class="contenedor-vertical" style="width: 300px; height: 350px">
                        <img class="adelante" src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg" width="300px" height="350px">
                        <figcaption class="atras-vertical fd-azul-ve p-3">
                            <h4 class="c-blanco">Titulo de la imágen</h4>
                            <div class="divisor"></div>
                            <p class="c-blanco">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, earum!</p>
                        </figcaption>
                    </figure>
                </div>
            </pre>
        </div>
        <p>
            Como se puede ver en el código de arriba se puede utilizar este efecto con 
            las etiquetas <i>< figure ></i>. Lo importante es mantener la estructura definida en el 
            apartado anterior.
        </p>
    </article>
    <article id="horizontal" class="article scroll-item">
        <h2>Horizontal</h2>
        <div class="ejemplo">
            <div class="contenedor-efecto3d" style="width: 300px; height: 350px">
                <figure class="contenedor-horizontal" style="width: 300px; height: 350px">
                    <img class="adelante" src="https://cdn.pixabay.com/photo/2017/07/08/11/46/maroon-2484170_960_720.jpg" width="300px" height="350px">
                    <figcaption class="atras-horizontal fd-azul-ve p-3 ">
                        <h4 class="c-blanco">Titulo de la imágen</h4>
                        <div class="divisor"></div>
                        <p class="c-blanco">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, earum!</p>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="contenedor-efecto3d" style="width: 300px; height: 350px">
                    <figure class="contenedor-horizontal" style="width: 300px; height: 350px">
                        <img class="adelante" src="..." width="300px" height="350px">
                        <figcaption class="atras-horizontal fd-azul-ve p-3 opa-7">
                            <h4 class="c-blanco">Titulo de la imágen</h4>
                            <div class="divisor"></div>
                            <p class="c-blanco">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, earum!</p>
                        </figcaption>
                    </figure>
                </div>
            </pre>
        </div>
        <p>
           La única diferencia con el vertical es que se utilizan las clases 
           <i>.contenedor-horizontal</i> y 
           <i>.atras-horizontal</i>
        </p>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#estructura">Estructura</a></li>
        <li><a href="#vertical">Vertical</a></li>
        <li><a href="#horizontal">Horizontal</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>
<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>