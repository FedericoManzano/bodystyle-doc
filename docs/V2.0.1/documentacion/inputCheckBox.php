<?php $titulo = "CheckBox"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    <?php 
        $titulo = "CheckBox";
        $descripcion = "Elemento de formularios multiseleccionable.
        En esta sección vamos a mostrar estilos para este elemento.";
        require_once("./articuloPrincipal.php");
    ?>
    
    <article class="article scroll-item" id="muestra">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <div class="check-radio-grupo">
                <input id="i-check1" type="checkbox">
                <label for="i-check1" class="cb-rojo">Check</label>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="check-radio-grupo">
                    <input id="i-check1" type="checkbox">
                    <label for="i-check1" class="cb-rojo">Check</label>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Tanto el input como el label estan encerrados en un div con la clase 
            <i>.check-radio-grupo</i>. </br>
            El id del input es igual al contenido del for del label y el label 
            posee la clase <i>.cb-rojo</i>
        </div>
    </article>
    <article class="article scroll-item" id="colores">
        <h2>Colores</h2>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="check-radio-grupo">
                    <input id="i-check7" type="checkbox">
                    <label for="i-check7" class="cb-rojo">Rojo</label>
                </div>
                <div class="check-radio-grupo">
                    <input id="i-check2" type="checkbox">
                    <label for="i-check2" class="cb-verde">Verde</label>
                </div>
                <div class="check-radio-grupo">
                    <input id="i-check3" type="checkbox">
                    <label for="i-check3" class="cb-gris">Gris</label>
                </div>
                <div class="check-radio-grupo">
                    <input id="i-check4" type="checkbox">
                    <label for="i-check4" class="cb-azul">Azul</label>
                </div>
                <div class="check-radio-grupo">
                    <input id="i-check5" type="checkbox">
                    <label for="i-check5" class="cb-negro">Negro</label>
                </div>
                <div class="check-radio-grupo">
                    <input id="i-check6" type="checkbox">
                    <label for="i-check6" class="cb-blanco">Blanco</label>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="check-radio-grupo">
                        <input id="i-check7" type="checkbox">
                        <label for="i-check7" class="cb-rojo">Check</label>
                    </div>
                    <div class="check-radio-grupo">
                        <input id="i-check2" type="checkbox">
                        <label for="i-check2" class="cb-verde">Check</label>
                    </div>
                    <div class="check-radio-grupo">
                        <input id="i-check3" type="checkbox">
                        <label for="i-check3" class="cb-gris">Check</label>
                    </div>
                    <div class="check-radio-grupo">
                        <input id="i-check4" type="checkbox">
                        <label for="i-check4" class="cb-azul">Check</label>
                    </div>
                    <div class="check-radio-grupo">
                        <input id="i-check5" type="checkbox">
                        <label for="i-check5" class="cb-negro">Check</label>
                    </div>
                    <div class="check-radio-grupo">
                        <input id="i-check6" type="checkbox">
                        <label for="i-check6" class="cb-blanco">Check</label>
                    </div>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Tanto el input como el label estan encerrados en un div con la clase 
            <i>.check-radio-grupo</i>. </br>
            El id del input es igual al contenido del for del label y el label 
            posee la clase <i>.cb-rojo</i>
        </div>
    </article>
    <article id="deshabilitado" class="article scroll-item">
        <h2>Desactivado</h2>
        <div class="ejemplo">
            <div class="check-radio-grupo desactivado">
                <input id="i-check6" type="checkbox">
                <label for="i-check6" class="cb-blanco">Check</label>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!--
                <div class="check-radio-grupo desactivado">
                    <input id="i-check6" type="checkbox">
                    <label for="i-check6" class="cb-blanco">Check</label>
                </div>
                -->
            </pre>
        </div>
        <h3>Todos deshabilitados</h3>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="check-radio-grupo desactivado">
                    <input id="i-check7" type="checkbox">
                    <label for="i-check7" class="cb-rojo">Rojo</label>
                </div>
                <div class="check-radio-grupo desactivado">
                    <input id="i-check2" type="checkbox">
                    <label for="i-check2" class="cb-verde">Verde</label>
                </div>
                <div class="check-radio-grupo desactivado">
                    <input id="i-check3" type="checkbox">
                    <label for="i-check3" class="cb-gris">Gris</label>
                </div>
                <div class="check-radio-grupo desactivado">
                    <input id="i-check4" type="checkbox">
                    <label for="i-check4" class="cb-azul">Azul</label>
                </div>
                <div class="check-radio-grupo desactivado">
                    <input id="i-check5" type="checkbox">
                    <label for="i-check5" class="cb-negro">Negro</label>
                </div>
                <div class="check-radio-grupo desactivado">
                    <input id="i-check6" type="checkbox">
                    <label for="i-check6" class="cb-blanco">Blanco</label>
                </div>
            </div>
        </div>
    </article>
    <article id="modelo2" class="article scroll-item">
        <h2>Checkbox Modelo 2</h2>
        <p>
            Disponemos de otro tipo de Checkbox para poder variar en su utilización.
        </p>
        <div class="ejemplo">
            <div class="check-radio-grupo">
                <input id="tipo-dos" type="checkbox">
                <label for="tipo-dos" class="checkbox">Modelo dos de checkbox</label>
            </div>
            <div class="check-radio-grupo mar-2 desactivado">
                <input id="tipo-dos-2" type="checkbox">
                <label for="tipo-dos-2" class="checkbox">Modelo dos de checkbox</label>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="check-radio-grupo">
                    <input id="tipo-dos" type="checkbox">
                    <label for="tipo-dos" class="checkbox">Modelo dos de checkbox</label>
                </div>
                <div class="check-radio-grupo mar-2 desactivado">
                    <input id="tipo-dos-2" type="checkbox">
                    <label for="tipo-dos-2" class="checkbox">Modelo dos de checkbox</label>
                </div>
            </pre>
        </div>

        <span class="span">
            La única diferencia con el modelo anterior es que al label hay que agregarle 
            la clase <i>.checkbox</i>. 
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