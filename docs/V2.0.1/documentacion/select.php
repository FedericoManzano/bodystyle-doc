<?php $titulo="Select"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    <?php 
        $titulo = "Select";
        $descripcion = "";
        require_once("./articuloPrincipal.php");
    ?>  

    <article id="muestra" class="article scroll-item">
        <h2>Select Básico</h2>
        <p>
            La librería dispone de este elemento con pocos estilos manteniendo 
            muchas características similares al componente por default.
        </p>
        <div class="ejemplo">
            <select name="paises" id="paises" class="select">
                <option value="1">Argentina</option>
                <option value="2">Chile</option>
                <option value="3">Perú</option>
            </select>
        </div>
        <div class="html">
            <pre class="brush:html">
                <select name="paises" id="paises" class="select">
                    <option value="1">Argentina</option>
                    <option value="2">Chile</option>
                    <option value="3">Perú</option>
                </select>
            </pre>
        </div>
        <p>
            En este caso utilizamos la clase <i>.select</i> para darle algunos estilos 
            pero el ícono por defecto del navegador sigue estando. 
        </p>
    </article>

    <article id="modificado" class="article scroll-item">
        <h2>Select Modificado</h2>
        <p>
            En este caso es parecido al anterior salvo que en este caso 
            el ícono cambia por uno personalizado.
        </p>
        <div class="ejemplo">
            <div class="select-contenedor">
                <select name="paises" id="paises" class="select">
                    <option value="1">Argentina</option>
                    <option value="2">Chile</option>
                    <option value="3">Perú</option>
                </select>
            </div>
        </div>
        <div class="alerta-op-verde">
            Lo que tenemos que hacer es encerrar el select en un div con la clase 
            <i>.select-contenedor</i>. De esta forma cambiamos el icono por defecto 
            de html.
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="select-contenedor">
                    <select name="paises" id="paises" class="select">
                        <option value="1">Argentina</option>
                        <option value="2">Chile</option>
                        <option value="3">Perú</option>
                    </select>
                </div>
            </pre>
        </div>
    </article>

    <article id="iniciar" class="scroll-item article">
        <h2>Select Personalizado</h2>
        <p>
            Ahora vamos a ver los ejemplos mas personalizados de la librería. 
            En este caso es necesario la inicialización del componente y la utilización de un contexto 
            (id del select).
        </p>
        <h3>Ejemplo Básico</h3>
        <div class="ejemplo">
            <div id="select-default" class="select-mod">
                <select name="nombres">
                    <option value="0" class="inactivo">Seleccionar un nombre...</option>
                    <option value="1">Carlos</option>
                    <option value="2">Roberto</option>
                    <option value="3">Sebastian</option>
                </select>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div id="default" class="select-mod">
                    <select name="nombres">
                        <option value="0" class="inactivo">Seleccionar un nombre...</option>
                        <option value="1">Carlos</option>
                        <option value="2">Roberto</option>
                        <option value="3">Sebastian</option>
                    </select>
                </div>
            </pre>
        </div>
        <p>
            Es necesario inicializar el componente pasandole el id del contenedor padre.
        </p>
        <div class="js">
            <pre class="brush:js">
                BS.SelectInit().iniciar("#select-default")
            </pre>
        </div>
        <div class="alerta-op-verde">
            El componente select esta encerrado en un div con la clase (.select-mod) y a su vez 
            este contenedor padre posee el (id=default).
        </div>

        <h3>Efecto hover borde</h3>
        <p>
            Vamos a ver otro ejemplo en el cual le aplicamos un efecto hover con un borde 
            a la lista desplegable del select.
        </p>

        <div class="ejemplo">
            <div id="select-hover-borde" class="select-mod">
                <select name="nombres">
                    <option value="0" class="inactivo">Seleccionar un nombre...</option>
                    <option value="1">Carlos</option>
                    <option value="2">Roberto</option>
                    <option value="3">Sebastian</option>
                </select>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div id="hover-borde" class="select-mod">
                    <select name="nombres">
                        <option value="0" class="inactivo">Seleccionar un nombre...</option>
                        <option value="1">Carlos</option>
                        <option value="2">Roberto</option>
                        <option value="3">Sebastian</option>
                    </select>
                </div>
            </pre>
        </div>
        <div class="js">
            <pre class="brush:js">
                BS.SelectInit().iniciar("#select-hover-borde", "borde")
            </pre>
        </div>
        <p>
            Es igual que el anterior con la diferencia que a la función de inicialización le pasamos 
            el parámetro "borde".
        </p>
        <h3>Efecto hover fondo</h3>
        <p>
            Vamos a ver otro efecto hover.
        </p>
        <div class="ejemplo">
            <div id="select-hover-fondo" class="select-mod">
                <select name="nombres">
                    <option value="0" class="inactivo">Seleccionar un nombre...</option>
                    <option value="1">Carlos</option>
                    <option value="2">Roberto</option>
                    <option value="3">Sebastian</option>
                </select>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div id="hover-fondo" class="select-mod">
                    <select name="nombres">
                        <option value="0" class="inactivo">Seleccionar un nombre...</option>
                        <option value="1">Carlos</option>
                        <option value="2">Roberto</option>
                        <option value="3">Sebastian</option>
                    </select>
                </div>
            </pre>
        </div>
        <div class="js">
            <pre class="brush:js">
                BS.SelectInit().iniciar("#select-hover-fondo", "fondo")
            </pre>
        </div>
    </article>
</section>

<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#modificado">Modificado</a></li>
        <li><a href="#iniciar">Inicializado</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuForm")
    BS.SelectInit().iniciar("#select-default")
    BS.SelectInit().iniciar("#select-hover-borde", "borde")
    BS.SelectInit().iniciar("#select-hover-fondo", "fondo")
</script>