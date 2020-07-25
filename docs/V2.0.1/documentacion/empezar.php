<?php $titulo = "Get Started" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    <?php 
        $titulo = "BodyStyle";
        $descripcion = "BodyStyle es una librería de estilos CSS que ". 
        "incorpora un conjunto de funcionalidades que permiten el rápido desarrollo 
        de las interfaces de usuario UI. La versión actual es la <span class='badge badge-rojo'>2.0.1</span>.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="comenzar" class="article scroll-item">
        <h2>Comenzar</h2>
        <p>
            La forma más rápida de disponer de la librería es a través de su CDN 
            y agregando el mismo dentro de la etuiqueta < head > de la página. 
        </p>
        <h3>Etiqueta Head</h3>
        <div class="html">
            <pre class="brush:html">

            <!--
                <!DOCTYPE html>   // HTML 5
                <html lang="es">  // lenguaje

                <head>
                    // Contenido del head 
                <head>
            -->
            </pre>
        </div>

        <h3>BodyStyle CSS</h3>
        <div class="html">
            <pre class="brush:html">
               <link rel="stylesheet" href="https://ghcdn.rawgit.org/FedericoManzano/Bodystyle-V2.0.1-fuente/master/dist/css/bodystyle.min.css">
            </pre>
        </div>

        <h3>BodyStyle JS</h3>

        <p>
            Antes del cierre de la etiqueta < body > del nustro sitio agregar las siguientes lineas 
            de código.
        </p>
        <div class="html">
            <pre class="brush:html">
                <script src="https://ghcdn.rawgit.org/FedericoManzano/Bodystyle-V2.0.1-fuente/master/dist/js/bodystyle.min.js"></script>
            </pre>
        </div>

        <h3>Agregar el meta view port</h3>

        <p>
            Esta etiqueta es imprescindible para el correcto funcionamiento de la librería.
            En la etiqueta head antes del CDN de a librería agregamos el siguiente código.
        </p>
        <div class="html">
            <pre class="brush:html">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </pre>
        </div>

    </article>
    <article id="hm" class="article scroll-item">
        <h2>Hola mundo</h2>
        <p>
            Esto es una plantilla html  de como deberían quedar agregadas los enlaces del CDN 
            de bodystyle.
        </p>
        
        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR SI LO COPIAN
                    <!DOCTYPE html>
                    <html lang="es">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
                        <link rel="stylesheet" href="https://ghcdn.rawgit.org/FedericoManzano/Bodystyle-V2.0.1-fuente/master/dist/css/bodystyle.min.css">
                
                        <title>BosyStyle</title>
                    </head>
                    <body>
                
                        
                        <h1>Hello World <span class="badge badge-rojo">NEW</span></h1>
                
                
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                        <script src="https://ghcdn.rawgit.org/FedericoManzano/Bodystyle-V2.0.1-fuente/master/dist/js/bodystyle.min.js"></script>
                    < /body >
                    </html>
                -->
            </pre>
        </div>

        
    </article>
</section>



<div class="lista-scroll ocultar-desde-medianos">
        <ul>
            <li><a href="#introduccion">Introducción</a></li>
            <li><a href="#comenzar">Comenzar</a></li>
            <li><a href="#hm">Hola Mundo</a></li>
        </ul>
    </div>


<?php require_once("./componentes/footer.php")?>



<script>
    BS.DesplegarSidebarFija().desplegar("#menuIntro")
</script>