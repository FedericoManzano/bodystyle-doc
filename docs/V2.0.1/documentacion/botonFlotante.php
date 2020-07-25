<?php $titulo = "Boton Flotante" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">


    <?php 
        $titulo = "Boton Flotante";
        $descripcion = "Elemento que permite disponer de un menú que se matiene mientas el usuario se mueve 
        por la página.";
        require_once("./articuloPrincipal.php");
    ?>
    
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
            <span class="span">
                Los iconos utilizados para los ejemplos no son de la librería 
                sino que pertenecen a <a href="http//icomoon.io" target="_blank" class="link">icomoon.io</a>
            </span>
            <div class="ejemplo">
                <iframe src="frames/botonFlotanteFrame.html" width="100%" height="600" frameborder="0" scrolling="yes"frameborder="0"></iframe>
            </div>
            <div class="codigo">
                <pre class="brush:html">
                    <div class="btn-flotante">
                        <div class="submenu">
                            <a href="" class="boton-opciones fd-azul icon-cloud-download"></a>
                            <a href="" class="boton-opciones fd-gris icon-user-plus"></a>
                            <a href="" class="boton-opciones fd-gris-n icon-cog"></a>
                            <a href="" class="boton-opciones fd-gris-az icon-plus"></a>
                        </div>
                        <span class="boton-menu icon-menu"></span>
                    </div>
                </pre>
            </div>
            <span class="span mar2">
                Este código html es el que se usa en todos los ejemplos.
            </span>
            <p>
                Para disponer de este elemento hace falta iniciar el módulo correspondiente.
            </p>
            <div class="js">
                <pre class="brush:html">
                   BS.BotonFlotanteInit()
                </pre>
            </div>
    </article>
    <article id="horizontal" class="article scroll-item">
        <h2>Botón Horizontal</h2>
            <div class="ejemplo">
                <iframe src="frames/botonHorizontal.html" width="100%" height="400" frameborder="0" scrolling="yes"frameborder="0"></iframe>
            </div>
            <p>
                En este caso la inicialización de be hacerse de esta manera
            </p>
            <div class="js">
                <pre class="brush:js">
                    BS.BotonFlotanteInit({alineacion: "horizontal"})
                </pre>
            </div>
    </article>
    <article id="horizontalExpandido" class="article scroll-item">
        <h2>Botón Horizontal Expandido</h2>
            <div class="ejemplo">
                <iframe src="frames/botonFlotanteHE.html" width="100%" height="500" frameborder="0" scrolling="yes"frameborder="0"></iframe>
            </div>
            <p>
                En este caso la inicialización de be hacerse de esta manera
            </p>
            <div class="js">
                <pre class="brush:js">
                    BS.BotonFlotanteInit({alineacion: "horizontalExpandido"})
                </pre>
            </div>
    </article>
    <article id="verticalExpandido" class="article scroll-item">
        <h2>Botón Vertical Expandido</h2>
            <div class="ejemplo">
                <iframe src="frames/botonFlotanteVE.html" width="100%" height="500" frameborder="0" scrolling="yes"frameborder="0"></iframe>
            </div>
            <p>
                En este caso la inicialización de be hacerse de esta manera
            </p>
            <div class="js">
                <pre class="brush:js">
                    BS.BotonFlotanteInit({alineacion: "vericalExpandido"})
                </pre>
            </div>
    </article>
    <article id="configuracion" class="article scroll-item">
        <h2>Configuración</h2>
        <div class="tabla-responsive">
            <table class="borde-vertical">
                <thead>
                    <tr>
                        <td>Atributo</td>
                        <td>Descripción</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>alineacion</td>
                        <td>{horizonta | horizontalExpandido | verticalExpandido }</td>
                    </tr>
                    <tr>
                        <td>altura</td>
                        <td>Distancia desde la parte superior de la página 
                        hasta el componente en ( px )</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
        <div class="js">
                <pre class="brush:js">
                    // Ejemplo 
                    BS.BotonFlotanteInit({alineacion: "horizontal", altura: 200})
                </pre>
            </div>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muetra">Muestra</a></li>
        <li><a href="#horizontal">Horizontal</a></li>
        <li><a href="#horizontalExpandido">Horizontal Expandido</a></li>
        <li><a href="#verticalExpandido">Vertical Expandido</a></li>
        <li><a href="#configuracion">Configuración</a></li>
    </ul>
</div>


<div class="btn-flotante">
    <div class="submenu">
        <a href="" class="boton-opciones fd-azul icon-cloud-download"></a>
        <a href="" class="boton-opciones fd-gris icon-user-plus"></a>
        <a href="" class="boton-opciones fd-gris-n icon-cog"></a>
        <a href="" class="boton-opciones fd-gris-az icon-plus"></a>
    </div>
    <span class="boton-menu icon-menu"></span>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuJS")
</script>