
<? $titulo = "Medidas" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Medidas";
        $descripcion = "Clases que permiten ajustar el ancho y alto de los elementos en diferentes 
        tamaños de pantalla permitiendo una mejor adaptación del diseño.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="medidas" class="article scroll-item">
        <h2>Ancho y  alto</h2>
        <p>
            Podemos utilizar las clases <i>.ancho y .alto</i> para definir 
            las medidas de objetos dentro de nuestra página.
        </p>

        <div class="ejemplo">
            <div class="ej-100 ancho-20 "></div>
            <div class="ej-100 ancho-30 "></div>
            <div class="ej-100 ancho-40 "></div>
            <div class="ej-100 ancho-45 "></div>
            <div class="ej-100 ancho-50 "></div>
            <div class="ej-100 ancho-55 "></div>
            <div class="ej-100 ancho-55 "></div>
            <div class="ej-100 ancho-60 "></div>
            <div class="ej-100 ancho-70 "></div>
            <div class="ej-100 ancho-75 "></div>
            <div class="ej-100 ancho-85 "></div>
            <div class="ej-100 ancho-95 "></div>
            <div class="ej-100 ancho-100 "></div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="ej-100 ancho-20 "></div>
                <div class="ej-100 ancho-30 "></div>
                <div class="ej-100 ancho-40 "></div>
                <div class="ej-100 ancho-45 "></div>
                <div class="ej-100 ancho-50 "></div>
                <div class="ej-100 ancho-55 "></div>
                <div class="ej-100 ancho-55 "></div>
                <div class="ej-100 ancho-60 "></div>
                <div class="ej-100 ancho-70 "></div>
                <div class="ej-100 ancho-75 "></div>
                <div class="ej-100 ancho-85 "></div>
                <div class="ej-100 ancho-95 "></div>
                <div class="ej-100 ancho-100 "></div>
            </pre>
        </div>

        <p>
            Las clases <i>.ancho-{por}</i> siendo por el porcentaje del ancho 
            del contenedor padre.
        </p>

        <div class="ejemplo" style="height: 600px">
            <div class="ej-100 alto-20 ">alto 20 %</div>
            <div class="ej-100 alto-30 ">alto 30 %</div>
            <div class="ej-100 alto-50 ">alto 50 %</div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="ej-100 alto-20 "></div>
                <div class="ej-100 alto-30 "></div>
                <div class="ej-100 alto-50 "></div>
            </pre>
        </div>
        <p>
            Las clases <i>.alto-{por}</i> siendo por el porcentaje del alto 
            del contenedor padre.
        </p>
    </article>

    <article id="pantalla" class="article scroll-item">
        <h2>Pantalla</h2>
        <p>
            Si lo que queremos es que un elementos tengan un ancho y un alto 
            para un determinado tamaño de pantalla y otro para otro tamaño 
            tenemos que utilizar las clases <i>.ancho-{pantalla}-{tamaño}</i> 
            Siendo pantalla la letra identificatoria del los tamaños predefinidos. 
            <i>xs - s - m - l</i> 
        </p>
        <div class="ejemplo">
            <div class="ej-fijo ancho-100 ancho-m-50 ancho-s-20"></div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="ej-fijo ancho-100 ancho-m-50 ancho-s-20"></div>
            </pre>
        </div>
        <p>
            Lo mismo con el alto.
        </p>

        <div class="ejemplo" style="height: 600px">
            <div class="ej-fijo alto-100 alto-m-50 alto-s-20"></div>
        </div>
        <div class="html">
            <pre class="brush:html">
            <div class="ej-fijo alto-100 alto-m-50 alto-s-20"></div>
            </pre>
        </div>
    </article>
</section>



<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuUti")
</script>