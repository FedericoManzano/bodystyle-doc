
<?php $titulo = "Radio"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">

    <?php 
        $titulo = "Radio";
        $descripcion = "Otro elemento de formularios de selección simple.
        Colores y estilos para decorar estos elementos.";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <div class="check-radio-grupo m-1">
                <input id="i-radio" type="radio" name="grupo1">
                <label for="i-radio" class="rd-verde">
                    Radio 1
                </label>
            </div>
            <div class="check-radio-grupo m-1">
                <input id="i-radio1" type="radio" name="grupo1">
                <label for="i-radio1" class="rd-verde">
                    Radio 2
                </label>
            </div>
            <div class="check-radio-grupo m-1">
                <input id="i-radio2" type="radio" name="grupo1">
                <label for="i-radio2" class="rd-verde">
                    Radio 3
                </label>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="check-radio-grupo m-1">
                    <input id="i-radio" type="radio" name="grupo1">
                    <label for="i-radio" class="rd-verde">
                        Radio 1
                    </label>
                </div>
                <div class="check-radio-grupo m-1">
                    <input id="i-radio1" type="radio" name="grupo1">
                    <label for="i-radio1" class="rd-verde">
                        Radio 2
                    </label>
                </div>
                <div class="check-radio-grupo m-1">
                    <input id="i-radio2" type="radio" name="grupo1">
                    <label for="i-radio2" class="rd-verde">
                        Radio 3
                    </label>
                </div>
            </pre>
        </div>
        <span class="span mar-1">
            Hay que tener en cuenta que la clase utilizada enla etiqueta label es 
            <i>.rd-{color}</i> en este caso rd-verde.
        </span>
    </article>
    <article id="colores" class="article scroll-item">
        <h2>Colores</h2>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="check-radio-grupo m-1">
                    <input id="i-radioRojo" type="radio" name="grupo1">
                    <label for="i-radioRojo" class="rd-rojo">
                        Rojo
                    </label>
                </div>
                <div class="check-radio-grupo m-1">
                    <input id="i-radioVerde" type="radio" name="grupo1">
                    <label for="i-radioVerde" class="rd-verde">
                        Verde
                    </label>
                </div>
                <div class="check-radio-grupo m-1">
                    <input id="i-radioGris" type="radio" name="grupo1">
                    <label for="i-radioGris" class="rd-gris">
                        Gris
                    </label>
                </div>
                <div class="check-radio-grupo m-1">
                    <input id="i-radioAzul" type="radio" name="grupo1">
                    <label for="i-radioAzul" class="rd-azul">
                        Azul
                    </label>
                </div>
                <div class="check-radio-grupo m-1">
                    <input id="i-radioNegro" type="radio" name="grupo1">
                    <label for="i-radioNegro" class="rd-negro">
                        Negro
                    </label>
                </div>
                <div class="check-radio-grupo m-1">
                    <input id="i-radioBlanco" type="radio" name="grupo1">
                    <label for="i-radioBlanco" class="rd-blanco">
                        Blanco
                    </label>
                </div>
            </div>
        </div>
        <div class="alerta-op-verde">
            Es importante que la etiqueta for del label contenga el id 
            del input, de esta forma logramos vincular estos dos elementos.
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="check-radio-grupo">
                        <input id="i-radioRojo" type="radio" name="grupo1">
                        <label for="i-radioRojo" class="rd-rojo">
                            Rojo
                        </label>
                    </div>
                    <div class="check-radio-grupo">
                        <input id="i-radioVerde" type="radio" name="grupo1">
                        <label for="i-radioVerde" class="rd-verde">
                            Verde
                        </label>
                    </div>
                    <div class="check-radio-grupo">
                        <input id="i-radioGris" type="radio" name="grupo1">
                        <label for="i-radioGris" class="rd-gris">
                            Gris
                        </label>
                    </div>
                    <div class="check-radio-grupo">
                        <input id="i-radioAzul" type="radio" name="grupo1">
                        <label for="i-radioAzul" class="rd-azul">
                            Azul
                        </label>
                    </div>
                    <div class="check-radio-grupo">
                        <input id="i-radioNegro" type="radio" name="grupo1">
                        <label for="i-radioNegro" class="rd-negro">
                            Negro
                        </label>
                    </div>
                    <div class="check-radio-grupo">
                        <input id="i-radioBlanco" type="radio" name="grupo1">
                        <label for="i-radioBlanco" class="rd-blanco">
                            Blanco
                        </label>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="deshabilitado" class="article scroll-item">
        <h2>Deshabilitado</h2>
        <div class="ejemplo">
            <div class="check-radio-grupo desactivado">
                <input id="i-radioAzul" type="radio" name="grupo10">
                <label for="i-radioAzul" class="rd-azul">
                    Azul
                </label>
            </div>
        </div>
        <div class="alerta-op-verde">
            Hay que agregar la clase desactivado al contenedor padre <i>.check-radio-grupo</i>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!--
                <div class="check-radio-grupo desactivado">
                    <input id="i-radioAzul" type="radio" name="grupo10">
                    <label for="i-radioAzul" class="rd-azul">
                        Azul
                    </label>
                </div>
                -->
            </pre>
        </div>
    </article>
    <article id="modelo2" class="article scroll-item">
        <h2>Modelo 2 de Radio Button</h2>
        <p>
            La librería cuenta con un sergundo modelo de radio button.
        </p>

        <div class="ejemplo">
            <div class="check-radio-grupo m-1">
                <input id="i-radio-m" type="radio" name="grupo1">
                <label for="i-radio-m" class="radiobtn">
                    Este es el Radio Button 1
                </label>
            </div>
            <div class="check-radio-grupo m-1">
                <input id="i-radio1-m" type="radio" name="grupo1">
                <label for="i-radio1-m" class="radiobtn">
                    Este es el Radio Button 2
                </label>
            </div>
            <div class="check-radio-grupo m-1 desactivado">
                <input id="i-radio2-m" type="radio" name="grupo1">
                <label for="i-radio2-m" class="radiobtn">
                    Desactivado
                </label>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="check-radio-grupo m-1">
                    <input id="i-radio-m" type="radio" name="grupo1">
                    <label for="i-radio-m" class="radiobtn">
                        Este es el Radio Button 1
                    </label>
                </div>
                <div class="check-radio-grupo m-1">
                    <input id="i-radio1-m" type="radio" name="grupo1">
                    <label for="i-radio1-m" class="radiobtn">
                        Este es el Radio Button 2
                    </label>
                </div>
                <div class="check-radio-grupo m-1 desactivado">
                    <input id="i-radio2-m" type="radio" name="grupo1">
                    <label for="i-radio2-m" class="radiobtn">
                        Desactivado
                    </label>
                </div>
            </pre>
        </div>
        <span class="span">
            La única diferencia en este caso es que el la etiqueta tiene la clase 
            <i>.radiobtn</i>.
        </span>
    </article>
</section>





<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#colores">Colores</a></li>
        <li><a href="#deshabilitado">Deshabilitado</a></li>
        <li><a href="#modelo2">Modelo 2</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuForm")
</script>