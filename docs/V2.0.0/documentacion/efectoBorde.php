<?php $titulo = "Efecto Borde" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">

        <?php 
            $titulo = "Efecto Borde";
            $descripcion = "Efecto para el borde inferior de los elementos.";
            require_once("./articuloPrincipal.php");
        ?>
    
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <h3>Texto </h3>
        <div class="ejemplo">
            <span class="pab-1 efecto-borde-verde derecha">Derecha</span>
            <span class="pab-1 efecto-borde-verde izquierda">Izquierda</span>
            <span class="pab-1 efecto-borde-verde centro">Centro</span>
        </div>
        <div class="html">

            <pre class="brush:html">
                <span class="pab-1 efecto-borde-verde derecha">Derecha</span>
                <span class="pab-1 efecto-borde-verde izquierda">Izquierda</span>
                <span class="pab-1 efecto-borde-verde centro">Centro</span>
            </pre>
        </div>
        <h3>Contenedores</h3>
        <div class="ejemplo">
            <div class="d-flex just-cobertura">
                <div class="ej-fijo efecto-borde-rojo izquierda"></div>
                <div class="ej-fijo efecto-borde-rojo derecha"></div>
                <div class="ej-fijo efecto-borde-rojo centro"></div>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-cobertura">
                    <div class="box-v efecto-borde-rojo izquierda"></div>
                    <div class="box-v efecto-borde-rojo derecha"></div>
                    <div class="box-v efecto-borde-rojo centro"></div>
                </div>
            </pre>
        </div>

        <div class="alerta-op-verde">
            Son dos clases que hay que agregar paralograr el efecto 
            la primero <i>.efecto-borde-{color}</i> y la dirección 
            <i>.izquierda .derecha .centro</i>
        </div>
    </article>
    <article id="colores" class="article scroll-item">
        <h2>Colores</h2>

        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura mar-2">
                <p class="pab-1 efecto-borde-azul izquierda">Azul</p>
                <p class="pab-1 efecto-borde-verde derecha">Verde</p>
                <p class="pab-1 efecto-borde-rojo centro">Rojo</p>
                <p class="pab-1 efecto-borde-negro izquierda">Negro</p>
                <p class="pab-1 efecto-borde-blanco derecha fd-gris-n c-blanco">Blanco</p>
                <p class="pab-1 efecto-borde-gris centro">Gris</p>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura mar-2">
                    <p class="pab-1 efecto-borde-azul izquierda">Azul</p>
                    <p class="pab-1 efecto-borde-verde derecha">Verde</p>
                    <p class="pab-1 efecto-borde-rojo centro">Rojo</p>
                    <p class="pab-1 efecto-borde-negro izquierda">Negro</p>
                    <p class="pab-1 efecto-borde-blanco derecha fd-gris-n c-blanco">Blanco</p>
                    <p class="pab-1 efecto-borde-gris centro">Gris</p>
                </div>
            </pre>
        </div>

        <h3>Ejemplo en el Nav</h3>
        <div class="ejemplo">
            <nav>
                <div class="menu">
                    <a href="#" class="menu-logo m-0">Logo</a>
                    <ul class="lista">
                        <li><a href="#" class="efecto-borde-blanco centro">Inicio</a></li>
                        <li><a href="#" class="efecto-borde-blanco centro">Servicios</a></li>
                        <li><a href="#" class="efecto-borde-blanco centro">Porfolio</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        
    </article>
    <article id="lateral" class="article scroll-item">
        <h2>Efecto Borde Lateral</h2>
        <p>
            Podemos utilizar este mismo efecto pero generandolo en la parte izquierda de un elemento.
        </p>

        <div class="ejemplo">
            <div class="d-flex just-cobertura">
                <div class="ej-fijo e-borde-izq-verde-5"></div>
                <div class="ej-fijo e-borde-izq-rojo-5"></div>
                <div class="ej-fijo e-borde-izq-blanco-5"></div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-cobertura">
                    <div class="ej-fijo e-borde-izq-verde-5"></div>
                    <div class="ej-fijo e-borde-izq-rojo-5"></div>
                    <div class="ej-fijo e-borde-izq-blanco-5"></div>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Las clases utilizadas en este caso son <i>.e-borde-{izq / der}-{color}-{tam}</i>
            donde el tam puede variar de 1 a 10 (px) de ancho.
        </div>
        <div class="ejemplo">

            <div class="d-flex just-cobertura">
                <div class="ej-fijo e-borde-der-verde-5"></div>
                <div class="ej-fijo e-borde-der-rojo-5"></div>
                <div class="ej-fijo e-borde-der-blanco-5"></div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-cobertura">
                    <div class="box-v e-borde-der-verde-5"></div>
                    <div class="box-v e-borde-der-rojo-5"></div>
                    <div class="box-v e-borde-der-blanco-5"></div>
                </div>
            </pre>
        </div>
        <h3>Ejemplo típico</h3>

        <div class="ejemplo">
            <a class="btn fd-azul-ve dropdown-toggle" data-target="#dropdown">Dropdown</a>
        </div>

        <div class="html">
            <pre class="brush:html">
                <a class="btn fd-azul-ve dropdown-toggle" data-target="#dropdown">Dropdown</a>
                <!-- DESCOMENTAR SI LO COPIAN
                    
                    <div id="dropdown" class="dropdown">
                        <ul>
                            <li><a class="f-grosor-6 c-negro">Fotos</a></li>
                            <div class="divisor"></div>
                            <li><a class="e-borde-izq-azul-5">Universidad</a></li>
                            <li><a class="e-borde-izq-verde-5">Recreamiento</a></li>
                            <li><a class="e-borde-izq-rojo-5">Boliche</a></li>
                            <div class="divisor"></div>
                            <li><a class="f-grosor-6 c-negro">Tramites</a></li>
                            <div class="divisor"></div>
                            <li><a class="e-borde-izq-azul-5">Bancarios</a></li>
                            <li><a class="e-borde-izq-rojo-5">Vivienda</a></li>
                        </ul>
                    </div>
                -->
            </pre>
        </div>
        <div class="alerta-op-gris">
            En este ejemplo utilizamos el dropdown de la librería para mas información 
            <a href="dropdown.php" class="link">Dropdown</a>
        </div>

        <h3>Ahora lo mismo pero a la derecha</h3>
        <div class="ejemplo">
            <a class="btn fd-azul-ve dropdown-toggle" data-target="#dropdown2">Dropdown</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <a class="btn fd-azul-ve dropdown-toggle" data-target="#dropdown2">Dropdown</a>
                <!--
                    <div id="dropdown2" class="dropdown">
                        <ul>
                            <li><a class="f-grosor-6 c-negro">Fotos</a></li>
                            <div class="divisor"></div>
                            <li><a class="e-borde-der-azul-9">Universidad</a></li>
                            <li><a class="e-borde-der-verde-7">Recreamiento</a></li>
                            <li><a class="e-borde-der-rojo-5">Boliche</a></li>
                            <div class="divisor"></div>
                            <li><a class="f-grosor-6 c-negro">Tramites</a></li>
                            <div class="divisor"></div>
                            <li><a class="e-borde-der-azul-3">Bancarios</a></li>
                            <li><a class="e-borde-der-rojo-1">Vivienda</a></li>
                        </ul>
                    </div>
                -->
            </pre>
        </div>
    </article>
</section>


<div id="dropdown" class="dropdown">
    <ul>
        <li><a class="f-grosor-6 c-negro">Fotos</a></li>
        <div class="divisor"></div>
        <li><a class="e-borde-izq-azul-5">Universidad</a></li>
        <li><a class="e-borde-izq-verde-5">Recreamiento</a></li>
        <li><a class="e-borde-izq-rojo-5">Boliche</a></li>
        <div class="divisor"></div>
        <li><a class="f-grosor-6 c-negro">Tramites</a></li>
        <div class="divisor"></div>
        <li><a class="e-borde-izq-azul-5">Bancarios</a></li>
        <li><a class="e-borde-izq-rojo-5">Vivienda</a></li>
    </ul>
</div>
<div id="dropdown2" class="dropdown">
    <ul>
        <li><a class="f-grosor-6 c-negro">Fotos</a></li>
        <div class="divisor"></div>
        <li><a class="e-borde-der-azul-9">Universidad</a></li>
        <li><a class="e-borde-der-verde-7">Recreamiento</a></li>
        <li><a class="e-borde-der-rojo-5">Boliche</a></li>
        <div class="divisor"></div>
        <li><a class="f-grosor-6 c-negro">Tramites</a></li>
        <div class="divisor"></div>
        <li><a class="e-borde-der-azul-3">Bancarios</a></li>
        <li><a class="e-borde-der-rojo-1">Vivienda</a></li>
    </ul>
</div>



<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#colores">Colores</a></li>
        <li><a href="#lateral">Lateral</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>
<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>