<?php $titulo = "Contenedor" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    <?php 
        $titulo = "Contenedor";
        $descripcion = "Es una clase que nos permite centrar el contenido de un conjunto de elementos 
        y deja margenes variables a los costados que dependen de tamaño de pantalla.";
        require_once("./articuloPrincipal.php");
    ?>
    <article class="article scroll-item" id="utilizacion">
        <h2>Utilización</h2>
        <p>
            Para poder hacer uso el contenedor vamos a utilizar la clase <i>.contenedor</i> de la librería. 
        </p>
        <div class="ejemplo">
            <div class="contenedor">
                <div class="ej-100">Centrado</div>
            </div>
        </div>
        <div class="alerta-op-verde">
            Noten como en la caja azul aparece con un margen en la izquierda y en la derecha 
            y está centrada dentro del ejemplo.
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="contenedor">
                    <div class="ej-100">Contenedor</div>
                </div>
            </pre>
        </div>
        <p>Sin la clase contenedor</p>
        <div class="ejemplo">
            <div>
                <div class="ej-100">Sin Contenedor</div>
            </div>
        </div>
        <div class="alerta-verde-op">
            Esta librería trabaja con tamaños de contenedor variable. 
            No posee medidas fijas en su utilización.
        </div>
    </article>
    <article class="article scroll-item" id="tamaños">
        <h2>Tamaños</h2>
        <h3>Tabla Informativa</h3>

        <div class="tabla-responsive">
            <table class="tabla-sm">
                <thead>
                    <tr>
                        <td>Medida</td>
                        <td>Alias</td>
                        <td>Ocupa (%)</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Medida < 400px</td>
                        <td>xs</td>
                        <td>95%</td>
                    </tr>
                    <tr>
                        <td>400px < Medida < 768px</td>
                        <td>s</td>
                        <td>90%</td>
                    </tr>
                    <tr>
                        <td>768px < Medida < 1024px</td>
                        <td>m</td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td>1024px < Medida </td>
                        <td>l</td>
                        <td>80%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
</section>





<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#utilizacion">Utilización</a></li>
        <li><a href="#tamaños">Tamaños</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuAli")
</script>