<?php $titulo = "progress Bar"?>


<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">

    <?php 
        $titulo = "Progress Bar";
        $descripcion="";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <div class="progress-bar">
                <div id="pro-muestra" class="progress-rojo" style="width:50%"></div>
            </div>
            <a  class="btn btn-azul mar-2" onClick="aumentar('pro-muestra')">Probar</a>
        </div>
        <p>
            Para poder utilizar el progress bar es necesario modificar dinámicamente el ancho 
            del elemento que posee la clase <i>.progress-{color}</i>
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="progress-bar">
                    <div id="pro-muestra" class="progress-rojo" style="width:50%"></div>
                </div>
                <a  class="btn btn-azul mar-2" onClick="aumentar('pro-muestra')">Probar</a>
            </pre>
        </div>
        <div class="js">
            <pre class="brush:js">
            function aumentar(id) {
                var ancho = 0
                var timer = setInterval(() => {
                    $("#"+ id).css("width", ancho + "%")
                    ancho += 10
                    if(ancho === 110){
                        clearInterval(timer)
                    }
                }, 100);
            }
            </pre>
        </div>
        <p>
            Esta función es muy sensilla y es solo para probar el funcionamiento del elemento.
            Simplemento modifica el atributo del ancho para lograr el efecto buscado.
        </p>
    </article>

    <article id="colores" class="article scroll-item">
        <h2>Colores</h2>
        <div class="ejemplo">
            <div class="progress-bar mab-2">
                <div class="progress-rojo" style="width:20%"></div>
            </div>
            <div class="progress-bar mar-2">
                <div class="progress-verde" style="width:50%"></div>
            </div>
            <div class="progress-bar mar-2">
                <div class="progress-azul" style="width:70%"></div>
            </div>
            <div class="progress-bar mar-2">
                <div class="progress-negro" style="width:10%"></div>
            </div>
            <div class="progress-bar mar-2">
                <div class="progress-gris" style="width:30%"></div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="progress-bar mab-2">
                    <div class="progress-rojo" style="width:20%"></div>
                </div>
                <div class="progress-bar mab-2">
                    <div class="progress-verde" style="width:50%"></div>
                </div>
                <div class="progress-bar mab-2">
                    <div class="progress-azul" style="width:70%"></div>
                </div>
                <div class="progress-bar mab-2">
                    <div class="progress-negro" style="width:10%"></div>
                </div>
                <div class="progress-bar mab-2">
                    <div class="progress-gris" style="width:30%"></div>
                </div>
            </pre>
        </div>
    </article>

    <article id="tamaños" class="article scroll-item">
        <h2>Tamaños</h2>
        <p>
            A la clase <i>.progress-bar-{tamaño} le agregamos el parámetro sm / lg 
            para elementos pequeños y grandes respectivamente.</i>
        </p>
        <div class="ejemplo">
            <div class="progress-bar-sm mar-2">
                <div class="progress-rojo" style="width:20%"></div>
            </div>
            <div class="progress-bar mar-2">
                <div class="progress-rojo" style="width:20%"></div>
            </div>
            <div class="progress-bar-lg mar-2">
                <div class="progress-rojo" style="width:20%"></div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="progress-bar-sm mab-2">
                    <div class="progress-rojo" style="width:20%"></div>
                </div>
                <div class="progress-bar mab-2">
                    <div class="progress-rojo" style="width:20%"></div>
                </div>
                <div class="progress-bar-lg mab-2">
                    <div class="progress-rojo" style="width:20%"></div>
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
        <li><a href="#tamaños">Tamaños</a></li>
    </ul>
</div>




<?php require_once("./componentes/footer.php")?>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>

<script>

    function aumentar(id) {
        var ancho = 0
        var timer = setInterval(() => {
            $("#"+ id).css("width", ancho + "%")
            ancho += 10
            if(ancho === 110){
                clearInterval(timer)
            }
        }, 100);
    }
</script>