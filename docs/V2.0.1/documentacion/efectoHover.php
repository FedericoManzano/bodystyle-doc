<?php $titulo = "Efecto Hover" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">


        <?php 
            $titulo = "Efecto Hover";
            $descripcion = "Efectos que se efectúan cuando el usuarios 
            se desplaza con el cursor del mouse por encima del elemento.";
            require_once("./articuloPrincipal.php");
        ?>

    <article id="estructura" class="article scroll-item">
        <h2>Estructura</h2>
        <div class="html">
            <pre class="brush:html">
                <!-- Es necesario ajustar el ancho y el alto-->
                <div class="hover-contenedor" style="width: 200px; height: 200px"> 
                    <div>Elemento por detras</div>

                    <!-- El segundo elemento es el que posee la clase con el efecto -->
                    <div class="nombre-efecto">Elemento por delante</div>
                </div>
            </pre>
        </div>
        <p>
            La clase contenedora de los 2 elementos va a ser <i>.hover-contenedor</i> 
            y el segundo hijo de esta clase va a tener la clase con el efecto elegido. <br> 
            Es importante que el contenedor padre (<i>.hover-contenedor</i>) tenga definidos 
            el ancho y el alto a través del atributo <i>style</i>
        </p>
    </article>

    <article id="efectos" class="article scroll-item">
        <h2>Efectos</h2>
    
        <h3>Efecto lateral derecha</h3>
        <div class="ejemplo">
            <div class="hover-contenedor" style="width: 200px; height: 200px">
                <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                    Contratapa !!!
                </div>

                <img class="lateral-derecha" src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" alt="Efecto Hover">
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="hover-contenedor" style="width: 200px; height: 200px">
                    <!-- La contratapa utiliza clases de la librería para el formato-->
                    <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                        Contratapa !!!
                    </div>
                    <img class="lateral-derecha" src="{...}" alt="Efecto Hover">
                </div>
            </pre>
        </div>
        <h3>Efecto lateral izquierda</h3>
        <div class="ejemplo">
            <div class="hover-contenedor" style="width: 200px; height: 200px">
                <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                    Contratapa !!!
                </div>

                <img class="lateral-izquierda" src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" alt="Efecto Hover">
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="hover-contenedor" style="width: 200px; height: 200px">
                    <!-- La contratapa utiliza clases de la librería para el formato-->
                    <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                        Contratapa !!!
                    </div>
                    <img class="lateral-izquierda" src="{...}" alt="Efecto Hover">
                </div>
            </pre>
        </div>
        <h3>Efecto hacia arriba</h3>
        <div class="ejemplo">
            <div class="hover-contenedor" style="width: 200px; height: 200px">
                <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                    Contratapa !!!
                </div>

                <img class="arriba" src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" alt="Efecto Hover">
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="hover-contenedor" style="width: 200px; height: 200px">
                    <!-- La contratapa utiliza clases de la librería para el formato-->
                    <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                        Contratapa !!!
                    </div>
                    <img class="arriba" src="{...}" alt="Efecto Hover">
                </div>
            </pre>
        </div>
        <h3>Efecto hacia abajo</h3>
        <div class="ejemplo">
            <div class="hover-contenedor" style="width: 200px; height: 200px">
                <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                    Contratapa !!!
                </div>

                <img class="abajo" src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" alt="Efecto Hover">
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="hover-contenedor" style="width: 200px; height: 200px">
                    <!-- La contratapa utiliza clases de la librería para el formato-->
                    <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                        Contratapa !!!
                    </div>
                    <img class="abajo" src="{...}" alt="Efecto Hover">
                </div>
            </pre>
        </div>
        <h3>Efecto girar a la derecha</h3>
        <p>
            Para este efecto podemos apoyarnos en las clases utilitarias de la 
            librería <i>.bor-rad-por-50</i> para generar contenedores resdondos.
        </p>

        <div class="ejemplo">
            <div class="hover-contenedor bor-rad-por-50" style="width: 200px; height: 200px">
                <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                    Contratapa !!!
                </div>

                <img class="girar-derecha bor-rad-por-50" src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" alt="Efecto Hover">
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="hover-contenedor bor-rad-por-50" style="width: 200px; height: 200px">
                    <!-- La contratapa utiliza clases de la librería para el formato-->
                    <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                        Contratapa !!!
                    </div>
                    <img class="girar-derecha bor-rad-por-50" src="{...}" alt="Efecto Hover">
                </div>
            </pre>
        </div>
        <h3>Efecto girar Izquierda</h3>
        <div class="ejemplo">
            <div class="hover-contenedor bor-rad-por-50" style="width: 200px; height: 200px">
                <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                    Contratapa !!!
                </div>
                <img class="girar-izquierda bor-rad-por-50" src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" alt="Efecto Hover">
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="hover-contenedor bor-rad-por-50" style="width: 200px; height: 200px">
                    <!-- La contratapa utiliza clases de la librería para el formato-->
                    <div class="d-flex just-centrada ali-centrada c-blanco fd-negro">
                        Contratapa !!!
                    </div>
                    <img class="girar-izquierda bor-rad-por-50" src="{...}" alt="Efecto Hover">
                </div>
            </pre>
        </div>
    </article>
    <article id="borde" class="article scroll-item">
        <h2>Efecto Hover Borde</h2>
        <div class="ejemplo">
            <div id="i-borde" class="d-flex just-centrada ali-centrada fd-negro efecto-hover-borde" style="width: 200px; height: 100px">
                <p class="c-blanco m-0">Contenido</p>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div id="i-borde" class="efecto-hover-borde">
                    <p>Contenido</p>
                </div> 
            </pre>
        </div>
        <div class="js">
            <pre class="brush:js">
                BS.EfectoHoverBordeInit().iniciar({contexto: "#i-borde"})
            </pre>
        </div>
        <div class="alerta-op-verde">
            La clase contenedora es <i>.efecto-hover-borde</i>. por otra parte 
            es necesario agregarle un ID al contenedor el cual lo vamos a pasar 
            por parámetro a la función anterior.
        </div>
        <h3>Configuración</h3>
        <div class="tabla-responsive">
            <table class="tabla-sm">
                <thead>
                    <tr>
                        <td>Atributo</td>
                        <td>Descripción</td>
                        <td>Defecto</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>contexto</td>
                        <td>Valor obligatorio que contiene el ID 
                        del contenedor principal</td>
                        <td>Vacio</td>
                    </tr>
                    <tr>
                        <td>posicion</td>
                        <td>[izquierda, derecha, arriba, abajo]</td>
                        <td>izquierda</td>
                    </tr>
                    <tr>
                        <td>color</td>
                        <td>Color del borde son las clases fd-{color}</td>
                        <td>fd-rojo</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3>Ejemplos</h3>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div id="i-borde2" class="d-flex just-centrada ali-centrada fd-negro efecto-hover-borde m-1" style="width: 200px; height: 100px">
                    <p class="c-blanco m-0">Contenido</p>
                </div>
                <div id="i-borde3" class="d-flex just-centrada ali-centrada fd-negro efecto-hover-borde m-1" style="width: 200px; height: 100px">
                    <p class="c-blanco m-0">Contenido</p>
                </div>
            
                <div id="i-borde4" class="d-flex just-centrada ali-centrada fd-negro efecto-hover-borde m-1" style="width: 200px; height: 100px">
                    <p class="c-blanco m-0">Contenido</p>
                </div>
                <div id="i-borde5" class="d-flex just-centrada ali-centrada fd-negro efecto-hover-borde m-1" style="width: 200px; height: 100px">
                    <p class="c-blanco m-0">Contenido</p>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div id="i-borde2" class="efecto-hover-borde">
                    <p class="c-blanco">Contenido</p>
                </div>
                <div id="i-borde3" class="efecto-hover-borde">
                    <p class="c-blanco">Contenido</p>
                </div>
                <div id="i-borde4" class="efecto-hover-borde">
                    <p class="c-blanco">Contenido</p>
                </div>
                <div id="i-borde5" class="efecto-hover-borde">
                    <p class="c-blanco">Contenido</p>
                </div>
            </pre>
        </div>
        <div class="js">
            <pre class="brush:js">
                BS.EfectoHoverBordeInit().iniciar({contexto: "#i-borde2", posicion: "izquierda", color: "fd-amarillo"})
                BS.EfectoHoverBordeInit().iniciar({contexto: "#i-borde3", posicion: "derecha", color: "fd-naranja"})
                BS.EfectoHoverBordeInit().iniciar({contexto: "#i-borde4", posicion: "arriba", color: "fd-azul"})
                BS.EfectoHoverBordeInit().iniciar({contexto: "#i-borde5", posicion: "abajo", color: "fd-gris"})
            </pre>
        </div>
        <div class="alerta-op-gris mar-2">
            Los colores son clases documentadas en la sección CSS -> <a href="fondos.php" class="link">Fondos</a>
        </div>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#estructura">Estructura</a></li>
        <li><a href="#efectos">Efectos</a></li>
        <li><a href="#borde">Borde</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
    BS.EfectoHoverBordeInit().iniciar({contexto: "#i-borde"})
    BS.EfectoHoverBordeInit().iniciar({contexto: "#i-borde2", posicion: "izquierda", color: "fd-amarillo"})
    BS.EfectoHoverBordeInit().iniciar({contexto: "#i-borde3", posicion: "derecha", color: "fd-naranja"})
    BS.EfectoHoverBordeInit().iniciar({contexto: "#i-borde4", posicion: "arriba", color: "fd-azul"})
    BS.EfectoHoverBordeInit().iniciar({contexto: "#i-borde5", posicion: "abajo", color: "fd-gris"})
</script>