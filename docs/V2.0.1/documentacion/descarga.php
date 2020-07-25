<?php $titulo = "Descarga de BodyStyle" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Descarga";
        $descripcion = "Esta es la presentación de la librería bodystyle en ". 
                "su versión 2.0.0 con todos los agregados detallados para su utilización";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="descarga" class="article scroll-item">
        <h2>Descarga</h2>
        <p class="parrafo">
           En esta sección disponemos de varios métodos para agregar la librería 
           <span class="c-azul-c">BodyStyle</span>, a través de la descarga del 
           código fuente o el/los archivos compilados. También en esta nueva versión se incorporó 
           la pisibilidad de agregar la librería a través de los gestores de paquetes de nodeJs.
        </p>
        <div class="fila mab-0">
            <div class="cs-12 cm-6">
                <h3>Compilado</h3>
                <p class="parrafo">
                    Desde el botón que se muestra en la parte inferior podemos descargar de manera
                    directa el archivo .zip que contiene los archivos compilados de la librería.
                </p>
                <a href="https://github.com/FedericoManzano/Bodystyle-v2.0.1-compilado/archive/master.zip" class="btn fd-azul-ve">Descargar</a>
            </div>
            <div class="cs-12 cm-6">
                <h3>Código Fuente</h3>
                <p class="parrafo">
                    A través de este enlace podremos tener la librería con el código fuente 
                    tanto los módulos de JS cmo los archivos SASS con los diferentes componentes.
                </p>
                <a href="https://github.com/FedericoManzano/Bodystyle-V2.0.1-fuente/archive/master.zip" class="btn fd-azul-ve">Descargar</a>
            </div>
        </div>

        <h3>Contenido de los descargables</h3>
        <div class="fila">
            <div class="cs-12 cm-6">
                <div class="a-i mab-0">
                    <h6 class="mar-3 fz-17  mab-0"><span class="icon-file-zip c-naranja">&nbsp</span>BodyStyle-v2.0.0.zip</h6>
                    <h6 class="mi-3 fz-17 mab-0"><span class="icon-folder c-naranja">&nbsp</span>dist</h6>
                    <h6 class="mi-6 fz-17  mab-0"><span class="icon-folder c-naranja">&nbsp</span>css</h6>
                    <p class="mi-9 p-1 fz-17  mab-0"><span class="icon-file-text2">&nbsp;</span>bodystyle.css</p>
                    <p class="mi-9 p-1 fz-17 mab-0"><span class="icon-file-text2">&nbsp;</span>bodystyle.css.map</p>
                    <p class="mi-9 p-1 fz-17 mab-0"><span class="icon-file-text2">&nbsp;</span>bodystyle.min.css</p>
                    <p class="mi-9 p-1 fz-17 mab-0"><span class="icon-file-text2">&nbsp;</span>grillaSolo.css</p>
                    <p class="mi-9 p-1 fz-17 mab-0"><span class="icon-file-text2">&nbsp;</span>grillaSolo.css.map</p>
                    <p class="mi-9 p-1 fz-17 mab-0"><span class="icon-file-text2">&nbsp;</span>grillaSolo.min.css</p>
                    <h6 class="mi-6 fz-17  mab-0"><span class="icon-folder c-naranja">&nbsp</span>js</h6>
                    <p class="mi-9 p-1 fz-17 mab-0"><span class="icon-file-text2">&nbsp;</span>bodystyle.js</p>
                    <p class="mi-9 p-1 fz-17 mab-0"><span class="icon-file-text2">&nbsp;</span>bodystyle.min.js</p>
                    <p class="mi-3 p-1 fz-17 mab-0"><span class="icon-file-text2">&nbsp;</span>LICENCE</p>
                </div>
            </div>
            <div class="cs-12 cm-6">
                <div class="a-i mab-0">
                    <h6 class="mar-3 fz-17  mab-0"><span class="icon-file-zip c-naranja">&nbsp</span>BodyStyle-v2.0.0-compilado.zip</h6>
                    <h6 class="mi-3 fz-17  mab-0"><span class="icon-folder c-naranja">&nbsp</span>dist</h6>
                    <h6 class="mi-6 fz-17  mab-0"><span class="icon-folder c-naranja">&nbsp</span>css</h6>
                    <p class="mi-9 p-1 fz-17  mab-0"><span class="icon-file-text2">&nbsp;</span>*.css</p>
                    <h6 class="mi-6 fz-17  mab-0"><span class="icon-folder c-naranja">&nbsp</span>js</h6>
                    <p class="mi-9 p-1  fz-17 mab-0"><span class="icon-file-text2">&nbsp;</span>*.js</p>
                    
                    <h6 class="mi-3 fz-17  mab-0"><span class="icon-folder c-naranja">&nbsp</span>sass</h6>
                    <p class="mi-6 p-1 fz-17 mab-0"><span class="icon-file-text2">&nbsp;</span>bodystyle.scss *</p>
                    <h6 class="mi-3 fz-17  mab-0"><span class="icon-folder c-naranja">&nbsp</span>src</h6>
                    <p class="mi-6 p-1 fz-17  mab-0"><span class="icon-folder c-naranja">&nbsp;</span>modulos</p>
                    <p class="mi-9 p-1 fz-17  mab-0"><span class="icon-file-text2">&nbsp;</span>*.js</p>
                    <p class="mi-6 p-1 fz-17  mab-0"><span class="icon-file-text2">&nbsp;</span>app.js</p>
                    <p class="mi-3 p-1 fz-17  mab-0"><span class="icon-file-text2">&nbsp;</span>LICENCE</p>
                </div>
            </div>
        </div>

        <h3>Solo la grilla</h3>

        <p>
            Si lo que queremos es sólo la grilla de la librería podemos descargarla del 
            siguiente enlace si incorporar todas las demás funcionalidades.
        </p>

        <a href="#" class="btn fd-azul-ve">Descargar</a>
    </article>


    <article id="cdn" class="article scroll-item">
        <h2>CDN</h2>
        <p class="parrafo">
            Podemos agregar a nuestros proyecto la librería a través de su CDN.
        </p>
        <h3>BodyStyle CSS min</h3>
        <p class="parrafo">
            El archivo <span class="c-azul-c">bodystyle.min.css</span> es el que contiene todos 
            los estilos de la librería minificados.
        </p>
        <div class="html">
            <pre class="brush:html">
                 <link rel="stylesheet" href="https://ghcdn.rawgit.org/FedericoManzano/Bodystyle-V2.0.1-fuente/master/dist/css/bodystyle.min.css">
            </pre>
        </div>

        <h3>
            BodyStyle JS min
        </h3>
        <p class="parrafo">
            El archivo <span class="c-azul-c">bodystyle.min.css</span> es el que contiene todos 
            los estilos de la librería minificados.
        </p>
        <div class="html">
            <pre class="brush:html">
                <script src="https://ghcdn.rawgit.org/FedericoManzano/Bodystyle-V2.0.1-fuente/master/dist/js/bodystyle.min.js"></script>
            </pre>
        </div>
        <h3>Jquery</h3>
        <p class="parrafo">
            El archivo <span class="c-azul-c">bodystyle.min.css</span> es el que contiene todos 
            los estilos de la librería minificados.
        </p>
        <div class="html">
            <pre class="brush:html">
                <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
            </pre>
        </div>
    </article>
    <article id="node" class="article scroll-item">
        <h2>Node Package</h2>
        <p class="parrafo">
            Podemos agregar la librería a través de los diferentes gestores de paquetes de NodeJs. <br> 
            Si estamos realizando un proyecto con dependencias de Node lo mejor sería agregar a <span class="c-azul">BodyStyle</span>
            como una dependencia de nuestro proyecto.
        </p>
        <h3>NPM</h3>
        <div class="js">
            <pre class="brush:js">
                /> npm i body-ui
            </pre>
        </div>

        <h3>Yarn</h3>
        <div class="js">
            <pre class="brush:js">
                /> yarn add body-ui
            </pre>
        </div>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
        <ul>
            <li><a href="#introduccion">Introducción</a></li>
            <li><a href="#descarga">Descarga</a></li>
            <li><a href="#cdn">CDN</a></li>
            <li><a href="#node">Node package</a></li>
           
        </ul>
    </div>


<?php require_once("./componentes/footer.php")?>



<script>
    BS.DesplegarSidebarFija().desplegar("#menuIntro")
</script>