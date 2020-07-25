<?php $titulo = "Tipografía" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Tipografía";
        $descripcion = "En esta sección vamos a mostar las diferentes fuentes 
        que que llama la librería para mostrar los diferentes tipos de texto.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="fuente" class="article scroll-item">
        <h2>Fuentes</h2>
        <p>
            La librería agrega de manera general un listado de fuentes que se encuentran 
            en los disposivos que trabajan con Window, Linux o Mac. <br> 
            Es importante aclarar que la librería no viene con fuentes incorporadas. 
        </p>
        <h3>Listado</h3>
        <p class="parrafo c-azul-c">
        -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
        </p>
        <p class="parrafo">
            Podemos cambiar estas fuentes si utilizamos la versión de bodystyle con el código fuente 
            desde el archivo de sass / globales / variables.scss cualquier cambio se verá reflejado en todos 
            los componentes de la librería.
        </p>
        <h3>Muestra</h3>
        <div class="ejemplo">
            <div class="tabla-responsive">
                <table>
                    <thead>
                        <tr>
                            <td>Head</td>
                            <td>Muestra</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>h1</td>
                            <td><p class="c-negro h1">Esto es un H1</p></td>
                        </tr>
                        <tr>
                            <td>h2</td>
                            <td><p class="c-negro h2">Esto es un H2</p></td>
                        </tr>
                        <tr>
                            <td>h3</td>
                            <td><p class="c-negro h3">Esto es un H3</p></td>
                        </tr>
                        <tr>
                            <td>h4</td>
                            <td><p class="c-negro h4">Esto es un H4</p></td>
                        </tr>
                        <tr>
                            <td>h5</td>
                            <td><p class="c-negro h5">Esto es un H5</p></td>
                        </tr>
                        <tr>
                            <td>h6</td>
                            <td><p class="c-negro h6">Esto es un H6</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h3>Equivalencias</h3>
        <p>
            Dispnemos de algunas clases que nos ofrecen el mismo comportamiento 
            que las etiquetas H. 
        </p>

        <div class="ejemplo">
            <div class="tabla-responsive">
                <table>
                    <thead>
                        <tr>
                            <td>Head</td>
                            <td>Muestra</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>.h1</td>
                            <td><p class="c-negro h1">Esto es un H1</p></td>
                        </tr>
                        <tr>
                            <td>.h2</td>
                            <td><p class="c-negro h2">Esto es un H2</p></td>
                        </tr>
                        <tr>
                            <td>.h3</td>
                            <td><p class="c-negro h3">Esto es un H3</p></td>
                        </tr>
                        <tr>
                            <td>.h4</td>
                            <td><p class="c-negro h4">Esto es un H4</p></td>
                        </tr>
                        <tr>
                            <td>.h5</td>
                            <td><p class="c-negro h5">Esto es un H5</p></td>
                        </tr>
                        <tr>
                            <td>.h6</td>
                            <td><p class="c-negro h6">Esto es un H6</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </article>
</section>

<div class="lista-scroll ocultar-desde-medianos">
        <ul>
            <li><a href="#introduccion">Introducción</a></li>
            <li><a href="#fuente">Fuentes</a></li>
           
        </ul>
    </div>


<?php require_once("./componentes/footer.php")?>



<script>
    BS.DesplegarSidebarFija().desplegar("#menuFuente")
</script>