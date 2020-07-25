<?php $titulo = "File" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    
    <?php 
        $titulo = "File";
        $descripcion = "Estilos para los input de tipo file";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <input type="file" class="input-file" id="ejemplo" name="archivo">
            <label for="ejemplo" class="f-label">Subir</label>
        </div>
        <p>
            En el caso del input hay  que agregarle la clase <i>.input-file</i> y al label 
            la clase <i>.f-label</i>. 
            Es importante mencionar que el id del input se corresponde con  
            el atributo for del label.
        </p>
        <div class="html">
            <pre class="brush:html">
            <!--DESCOMENTAR SI LO COPIAN
                <input type="file" class="input-file" id="ejemplo" name="archivo">
                <label for="ejemplo" class="f-label">Subir</label>
            -->
            </pre>
        </div>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuForm")
</script>