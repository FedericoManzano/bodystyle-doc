
<?php $titulo = "Ayudantes" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>




<section class="contenido-pagina">
    <?php 
        $titulo = "Ayudantes";
        $descripcion = "Vamos a ver un conjunto de clases muy utiles que permiten ocultar 
        o mostrar elementos dependiendo la medida de pantalla en la cual se 
        esté visualizando la página.";
        require_once("./articuloPrincipal.php");
    ?>
    

    <article id="clases" class="article scroll-item">
        <h2>Listado de clases</h2>
        <div class="tabla-responsive">
            <table>
                <thead>
                    <tr >
                        <td class="ancho-50" >Clase</td>
                        <td>Descripción</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>.ocultar-solo-grandes</td>
                        <td>El elemento se muestra en todas las medidas menos
                            en la medida (l) a partir de los 1024px de ancho.
                        </td>
                    </tr>
                    <tr>
                        <td>.ocultar-desde-medianos</td>
                        <td>
                            Muestra el elemento sólo en dispositivos 
                            grandes en el resto los oculta.
                        </td>
                    </tr>
                    <tr>
                        <td>.ocultar-desde-chicos</td>
                        <td>
                            Muestra el elemento sólo en dispositivos 
                            grandes y medianos en el resto los oculta.
                        </td>
                    </tr>
                    <tr>
                        <td>.ocultar-desde-x-chicos</td>
                        <td>
                            Muestra el elemento en todos los dispositivos menos en los menores 
                            a 400px.
                        </td>
                    </tr>
                    <tr>
                        <td>.mostrar-solo-grandes</td>
                        <td>
                            Muestra solo en dispositivos grandes.
                        </td>
                    </tr>
                    <tr>
                        <td>.mostrar-solo-medianos</td>
                        <td>
                            Muestra solo en dispositivos medianos.
                        </td>
                    </tr>
                    <tr>
                        <td>.mostrar-solo-chicos</td>
                        <td>
                            Muestra solo en dispositivos chicos.
                        </td>
                    </tr>
                    <tr>
                        <td>.mostrar-solo-x-chicos</td>
                        <td>
                            Muestra solo en dispositivos extra chicos.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
    <article id="ejemplo" class="article scroll-item">
        <h2>Ejemplo</h2>
        <p>
            Vamos a mostrar un ejemplo que es aplicable a todoas las clases antes definidas.
            Vamos a mostrar un elemento sólo en dispositivos grandes donde la medida de la pantalla 
            es superior a 1024px.
        </p>
        <div class="ejemplo">
            <div class="box-fig mostar-solo-grandes"></div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="box-fig mostar-solo-grandes"></div>
            </pre>
        </div>
    </article>
</section>
<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion ">Introducción</a></li>
        <li><a href="#clases ">Clases</a></li>
        <li><a href="#ejemplo ">Ejemplo</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>