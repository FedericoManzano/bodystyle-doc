<?php $titulo = "Breadcrumbs" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">


    <?php 
        $titulo = "Breadcrumbs";
        $descripcion = "Es un elemento simple que funciona como guia para el usuario 
        cuando es necesario seguir una serie de pasos obligatorios.";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <div class="breadcrumb-negro">
                <a class="br-activo" href="#">Artículo</a>
                <a href="#">Datos</a>
                <a href="#">Pagos</a>
                <a href="#">Imprimir</a>
            </div>
        </div>

        <p>
            Un caso muy utilizado es cuando se compra un artículo.
            El suaurio accede al articulo, luego ingresa los datos de tarjeta de credito y 
            después realiza el pago. Por último descarga el ticket.
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="breadcrumb-negro">
                    <a class="br-activo" href="#">Artículo</a>
                    <a href="#">Datos</a>
                    <a href="#">Pagos</a>
                    <a href="#">Imprimir</a>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Es interesante utilizar este elemento cuando tenemos una serie de formularios 
            secuenciales y para ordenar las acciones del usuario introducimos esta guia.
        </span>
    </article>
    <article id="nav" class="article scroll-item">
        <h2>Nav</h2>
        <p>
            Podemos utilizarlo en un menú de navegación si lo queremos y cambiarle el color.
        </p>
        <div class="ejemplo">
            <div class="menu p-3">
                <div class="d-flex just-inicio ancho-100">
                    <div class="breadcrumb-blanco">
                        <a class="br-activo" href="#">Artículo</a>
                        <a href="#">Datos</a>
                        <a href="#">Pagos</a>
                        <a href="#">Imprimir</a>
                    </div>
                </div>
            </div>
        </div>

        <p>
            Siempre hay un link activo esto se logra añadiendole la clase 
            <i>.br-activo</i>. 
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="menu p-3">
                    <div class="d-flex just-inicio ancho-100">
                        <div class="breadcrumb-blanco">
                            <a class="br-activo" href="#">Artículo</a>
                            <a href="#">Datos</a>
                            <a href="#">Pagos</a>
                            <a href="#">Imprimir</a>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Los colores son 2 blanco o negro y las clases respectivas son 
            <i>.breadcrumb-blanco</i> y  <i>.breadcrumb-negro</i>
        </div>
        <p>
            Es importante mencionar que en el ejemplo anterior utilizamos 
            clases de la sección alineamiento (flexbox) si quieren accedes lo pueden 
            hacer a través de este link <a href="flexbox.php" target="_blank"class="link">Flexbox</a>
        </p>
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
