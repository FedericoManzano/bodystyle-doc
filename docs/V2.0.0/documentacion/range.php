<?php $titulo = "Range"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Range";
        $descripcion = "";
        require_once("./articuloPrincipal.php");
    ?>  
    <article id="mustra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <div class="input-range">
                <span>1</span>
                <input type="range" value="0" min="1" max="99">
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="input-range">
                    <span>1</span>
                    <input type="range" value="0" min="1" max="99">
                </div>
            </pre>
        </div>
        <p>
            La clase es input-range y contine al input y a una etqueta span que 
            contiene el valor obtenido del input.
        </p>
    </article>
</section>
<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>