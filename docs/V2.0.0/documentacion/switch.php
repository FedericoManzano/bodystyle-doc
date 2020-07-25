<?php $titulo="Switch"?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>



<section class="contenido-pagina">
    <?php 
        $titulo = "Switch";
        $descripcion = "";
        require_once("./articuloPrincipal.php");
    ?> 
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <p>
            Utilizamos la clase <i>.switch-grupo</i> para poder utilizar este componente. 
        </p>
        <div class="ejemplo">
            <div class="switch-grupo">
                <input type="checkbox" name="" id="i-cb-3">
                <label for="i-cb-3" class="switch-verde"></label>
            </div>
        </div>
        <p>
            Dentro de la clase <i>.switch-grupo</i> declaramos un input del tipo 
            checkbox y un label con la etiqueta for que coincida con el in del input antes mencionado
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="switch-grupo">
                    <input type="checkbox" name="" id="i-cb-3">
                    <label for="i-cb-3" class="switch-verde"></label>
                </div>
            </pre>
        </div>
    </article>

    <article id="colores" class="article scroll-item">
        <h2>Colores</h2>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="switch-grupo">
                    <input type="checkbox" name="" id="i-cb-4">
                    <label for="i-cb-4" class="switch-verde"></label>
                </div>
                <div class="switch-grupo">
                    <input type="checkbox" name="" id="i-cb-5">
                    <label for="i-cb-5" class="switch-rojo"></label>
                </div>
                <div class="switch-grupo">
                    <input type="checkbox" name="" id="i-cb-6">
                    <label for="i-cb-6" class="switch-azul"></label>
                </div>
                <div class="switch-grupo">
                    <input type="checkbox" name="" id="i-cb-7">
                    <label for="i-cb-7" class="switch-negro"></label>
                </div>
            </div>
        </div>
        
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="switch-grupo">
                        <input type="checkbox" name="" id="i-cb-4">
                        <label for="i-cb-4" class="switch-verde"></label>
                    </div>
                    <div class="switch-grupo">
                        <input type="checkbox" name="" id="i-cb-5">
                        <label for="i-cb-5" class="switch-rojo"></label>
                    </div>
                    <div class="switch-grupo">
                        <input type="checkbox" name="" id="i-cb-6">
                        <label for="i-cb-6" class="switch-azul"></label>
                    </div>
                    <div class="switch-grupo">
                        <input type="checkbox" name="" id="i-cb-7">
                        <label for="i-cb-7" class="switch-negro"></label>
                    </div>
                </div>
            </pre>
        </div>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#colores">Colores</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuForm")
</script>