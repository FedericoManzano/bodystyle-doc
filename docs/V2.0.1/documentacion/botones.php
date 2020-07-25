<?php $titulo = "Botones"; ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">

    <?php 
        $titulo = "Botones";
        $descripcion = "Uno de los componentes más utilizados en toda página 
        web.";
        require_once("./articuloPrincipal.php");
    ?>
    
    <article class="article scroll-item" id="muestra">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <a href="#" class="btn">Azul</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <a href="#" class="btn">Azul</a>
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="colores">
        <h2>Colores</h2>
        <div class="alerta-op-verde">
            Para definir los colores debemos utilizar la clase <i>.fd-{color}</i>, 
            documentadas en la sección <span class="badge badge-azul mab-0">CSS</span> en la 
            sección <span class="badge badge-azul mab-0">Fondos</span> de esta librería. 
            <a href="fondos.php" target="_blank" class="link">Fondos</a>
        </div>
        <div class="ejemplo">
            <div class="fila">
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-rojo m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-rojo-ro m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-rojo-an m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-rojo-o-1 m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-rojo m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-verde m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-azul m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-negro m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-gris m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-blanco c-negro m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-azul-ve m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-azul-c m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-azul-ve-s m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-azul-ve-c m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-gris-az m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-gris-az-c m-1">Boton</a>
                </div>

                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-verde-az m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-verde m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-verde-o-2 m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-verde-t m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-amarillo c-negro m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-amarillo-o-1 m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-amarillo m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-amarillo-c c-negro m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-violeta m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-violeta-c m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-violeta-o-1  m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-violeta-az  m-1">Boton</a>
                </div>
                <div class="cs-6 cm-4 cl-3">
                    <a class="btn fd-violeta-ro  m-1">Boton</a>
                </div>
            </div>
        </div>
        <p>
            Esto son solo ejemplos podemos utilizar todos los colores documentados.
        </p>
        <div class="html">
            <pre class="brush:html">
                <div>
                    <a class="btn fd-rojo m-1">Boton</a>
                    <a class="btn fd-rojo-ro m-1">Boton</a>
                    <a class="btn fd-rojo-an m-1">Boton</a>
                    <a class="btn fd-rojo-o-1 m-1">Boton</a>
                    <a class="btn fd-rojo m-1">Boton</a>
                    <a class="btn fd-verde m-1">Boton</a>
                    <a class="btn fd-azul m-1">Boton</a>
                    <a class="btn fd-negro m-1">Boton</a>
                    <a class="btn fd-gris m-1">Boton</a>
                    <a class="btn fd-blanco c-negro m-1">Boton</a>
                    <a class="btn fd-azul-ve m-1">Boton</a>
                    <a class="btn fd-azul-c m-1">Boton</a>
                    <a class="btn fd-azul-ve-s m-1">Boton</a>
                    <a class="btn fd-azul-ve-c m-1">Boton</a>
                    <a class="btn fd-gris-az m-1">Boton</a>
                    <a class="btn fd-gris-az-c m-1">Boton</a>
                    <a class="btn fd-verde-az m-1">Boton</a>
                    <a class="btn fd-verde m-1">Boton</a>
                    <a class="btn fd-verde-o m-1">Boton</a>
                    <a class="btn fd-verde-t m-1">Boton</a>
                    <a class="btn fd-amarillo c-negro m-1">Boton</a>
                    <a class="btn fd-amarillo-o m-1">Boton</a>
                    <a class="btn fd-amarillo-c c-negro m-1">Boton</a>
                    <a class="btn fd-violeta m-1">Boton</a>
                    <a class="btn fd-violeta-c m-1">Boton</a>
                    <a class="btn fd-violeta-o-1  m-1">Boton</a>
                    <a class="btn fd-violeta-az  m-1">Boton</a>
                    <a class="btn fd-violeta-ro  m-1">Boton</a>
                </div>
            </pre>
        </div>
    </article>

    <article class="article scroll-item" id="tamaños">
        <h2>Tamaños</h2>
        <p>
            Existen tres tamaños de botones {sm}{defecto}{lg}. 
            Parámetros que pondremos en la blase <i>btn-{tam}</i>, 
            en el caso de los botones medianos no necesita el parametro del tamaño.
        </p>
        <div class="ejemplo">
            <div class="fila">
                <a class="btn-sm btn-rojo m-1 cs-12 cm-4 desactivado tips-ele"
                data-posicion="arriba" data-tips="<span class='c-rojo-c'>.desactivado</span>">Chico</a>
                <a class="btn btn-rojo m-1 cs-12 cm-4">Mediano</a>
                <a class="btn-lg btn-rojo m-1 cs-12 cm-4">Grande</a>    
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!-- Botones rojos chico mediano grande -->
                <a class="btn-sm desactivado">Chico</a>
                <a class="btn">Mediano</a>
                <a class="btn-lg">Grande</a>    
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="cubrir">
        <h2>Botones 100%</h2>
        <div class="ejemplo">
            <a  class="btn-cubrir-sm  desactivado">100%</a>
            <a  class="btn-cubrir mar-1">100%</a>
            <a  class="btn-cubrir-lg mar-1">100%</a>
        </div>
        <div class="alerta-op-verde">
            Utilizamos la clase <i>btn-cubrir-{tam}</i> si le agregagamos a 
            la clase btn -cubrir los botones ocupan el 100% del ancho del padre
        </div>
        <div class="html">
            <pre class="brush:html">
                <a  class="btn-cubrir-sm desactivado">100%</a>
                <a  class="btn-cubrir">100%</a>
                <a  class="btn-cubrir-lg">100%</a>
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="borde">
        <h2>Botones Borde</h2>
        <p>
            Botones sin relleno y solo bordes. 
            La clase utilizada es <i>btn-{color}-o</i>,
            Muy parecidos a los anteriores solamente se le añade al parametro -o
        </p>
        <div class="ejemplo">
            <div class="fila">
                <a class="btn-sm-o btn-rojo-o m-1 cs-12 cm-4 desactivado">Chico</a>
                <a class="btn-o btn-rojo-o m-1 cs-12 cm-4">Mediano</a>
                <a class="btn-lg-o btn-rojo-o m-1 cs-12 cm-4">Grande</a>    
            </div>
            <div class="fila">
                <a class="btn-sm-o btn-verde-o m-1 cs-12 cm-4">Chico</a>
                <a class="btn-o btn-verde-o m-1 cs-12 cm-4">Mediano</a>
                <a class="btn-lg-o btn-verde-o m-1 cs-12 cm-4">Grande</a>    
            </div>
            <div class="fila">
                <a class="btn-sm-o btn-azul-o m-1 cs-12 cm-4">Chico</a>
                <a class="btn-o btn-azul-o m-1 cs-12 cm-4">Mediano</a>
                <a class="btn-lg-o btn-azul-o m-1 cs-12 cm-4">Grande</a>    
            </div>
            <div class="fila">
                <a class="btn-sm-o btn-negro-o m-1 cs-12 cm-4">Chico</a>
                <a class="btn-o btn-negro-o m-1 cs-12 cm-4">Mediano</a>
                <a class="btn-lg-o btn-negro-o m-1 cs-12 cm-4">Grande</a>    
            </div>
            <div class="fila">
                <a class="btn-sm-o btn-gris-o m-1 cs-12 cm-4">Chico</a>
                <a class="btn-o btn-gris-o m-1 cs-12 cm-4">Mediano</a>
                <a class="btn-lg-o btn-gris-o m-1 cs-12 cm-4">Grande</a>    
            </div>
            <div class="fila fd-gris-n">
                <a class="btn-sm-o btn-blanco-o m-1 cs-12 cm-4">Chico</a>
                <a class="btn-o btn-blanco-o m-1 cs-12 cm-4">Mediano</a>
                <a class="btn-lg-o btn-blanco-o m-1 cs-12 cm-4">Grande</a>    
            </div>
        </div>
        <div class="html">
            <pre class="brush:html" style="overflow:auto">
                
                    <a class="btn-sm-o btn-rojo-o">Chico</a>
                    <a class="btn-o btn-rojo-o ">Mediano</a>
                    <a class="btn-lg-o btn-rojo-o">Grande</a>    
               
               
                    <a class="btn-sm-o btn-verde-o">Chico</a>
                    <a class="btn-o btn-verde-o">Mediano</a>
                    <a class="btn-lg-o btn-verde-o">Grande</a>    
           
              
                    <a class="btn-sm-o btn-azul-o">Chico</a>
                    <a class="btn-o btn-azul-o">Mediano</a>
                    <a class="btn-lg-o btn-azul-o">Grande</a>    
              
               
                    <a class="btn-sm-o btn-negro-o">Chico</a>
                    <a class="btn-o btn-negro-o">Mediano</a>
                    <a class="btn-lg-o btn-negro-o">Grande</a>    
             
               
                    <a class="btn-sm-o btn-gris-o">Chico</a>
                    <a class="btn-o btn-gris-o">Mediano</a>
                    <a class="btn-lg-o btn-gris-o">Grande</a>    
                
                    <a class="btn-sm-o btn-blanco-o">Chico</a>
                    <a class="btn-o btn-blanco-o">Mediano</a>
                    <a class="btn-lg-o btn-blanco-o">Grande</a>    
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="waves">
        <h2>Efecto Waves</h2>
        <p>
            Podemos añadirle un efecto a los botones, de manera tal 
            de resaltar el click del usuario.
        </p>
        <div class="ejemplo">
            <a  class="btn fd-rojo waves">Clic !!!</a>
        </div>

        <div class="alerta-op-verde">
            Lo único que tenemos que hacer es agregarle la clase waves 
            al botón.
        </div>
        <div class="html">
            <pre class="brush:html">
                <a  class="btn fd-rojo waves">Clic !!!</a>
            </pre>
        </div>
        <h3>Muestra</h3>
        <div class="ejemplo">
            <div class="d-flex flex-wrap-s just-cobertura">
                <a  class="btn fd-rojo waves m-1">Clic !!!</a>
                <a  class="btn fd-verde waves m-1">Clic !!!</a>
                <a  class="btn fd-azul waves m-1">Clic !!!</a>
                <a  class="btn fd-negro waves m-1">Clic !!!</a>
                <a  class="btn fd-gris waves m-1">Clic !!!</a>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex  just-cobertura">
                    <a  class="btn fd-rojo waves">Clic !!!</a>
                    <a  class="btn fd-verde waves">Clic !!!</a>
                    <a  class="btn fd-azul waves">Clic !!!</a>
                    <a  class="btn fd-negro waves">Clic !!!</a>
                    <a  class="btn fd-gris waves">Clic !!!</a>
                </div>
            </pre>
        </div>
    </article>
    <article id="generalizar" class="article scroll-item">
        <h2>Componentes</h2>
        <p>
            Mostramos como las clases btn se generalizan a los elementos <i>input, button, a</i>
        </p>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <input type="submit" class="btn fd-azul-c  mab-1" value="Text">
                <input type="reset" class="btn fd-azul-c  mab-1" value="Reset">
                <input type="submit" class="btn fd-azul-c mab-1" value="Submit">
                <button class="btn fd-azul-c mab-1">Button</button>
                <a class="btn fd-azul-c  mab-1">Link</a>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <input type="submit" class="btn fd-azul-c " value="Text">
                    <input type="reset" class="btn fd-azul-c " value="Reset">
                    <input type="submit" class="btn fd-azul-c " value="Submit">
                    <button class="btn fd-azul-c ">Button</button>
                    <a class="btn fd-azul-c ">Link</a>
                </div>
            </pre>
        </div>
    </article>
    <article id="deshabilitado" class="article scroll-item">
        <h2>Desactivado</h2>
        <div class="ejemplo">
            <a href="#" class="btn btn-azul desactivado">Inactivo</a>
        </div>
        <div class="codigo">
            <pre class="brush:html">
                <!--
                <a href="#" class="btn btn-azul desactivado">Inactivo</a>
                -->
            </pre>
        </div>
        <div class="alerta-op-verde">
            Para remover la clase <i>.deshabilitado</i> debemos hacerlo 
            manualmente o a traves de javaScript dinámicamente
        </div>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <input type="submit" class="btn btn-verde mab-1 deshabilitado" value="Text">
                <input type="reset" class="btn btn-verde mab-1 deshabilitado" value="Reset">
                <input type="submit" class="btn btn-verde mab-1 deshabilitado" value="Submit">
                <button class="btn btn-verde mab-1 deshabilitado">Button</button>
                <a class="btn btn-verde mab-1 deshabilitado">Link</a>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <!--
                    <input type="submit" class="btn btn-verde deshabilitado" value="Text">
                    <input type="reset" class="btn btn-verde deshabilitado" value="Reset">
                    <input type="submit" class="btn btn-verde deshabilitado" value="Submit">
                    <button class="btn btn-verde deshabilitado">Button</button>
                    <a class="btn btn-verde deshabilitado">Link</a>
                    -->
                </div>
            </pre>
        </div>
    </article>
    <article id="preloader" class="article scroll-item">
        <h2>Botón con preloader</h2>
        <div class="ejemplo">
            <a href="#" class="btn btn-azul b-azul-cargando">
                <span class="preloader-sm pre-gris md-1"></span>
                Cargando
            </a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!--
                <a href="#" class="btn btn-azul b-azul-cargando">
                    <span class="preloader-sm pre-gris"></span>
                    Cargando
                </a>
                -->
            </pre>
        </div>
        <div class="alerta-op-verde">
            Para remover la clase <i>.b-azul-cargando</i> debemos hacerlo 
            manualmente o a traves de javaScript dinámicamente
        </div>
    </article>
    <article id="redondeado" class="article scroll-item">
        <h2>Botón Redondeado</h2>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <a  class="btn fd-rojo bor-pill mar-1">Redondeado</a>
                <a  class="btn fd-amarillo-o-1 bor-pill mar-1">Redondeado</a>
                <a  class="btn fd-azul-ve bor-pill mar-1">Redondeado</a>
                <a  class="btn fd-gris-c bor-pill c-negro mar-1">Redondeado</a>
                <a  class="btn fd-verde-o-1 bor-pill mar-1">Redondeado</a>
                <a  class="btn fd-violeta bor-pill mar-1">Redondeado</a>
                <div class="divisor"></div>
                <div class="divisor"></div>
                <a  class="btn-sm fd-rojo bor-pill mar-1">Redondeado</a>
                <a  class="btn-sm fd-amarillo-o-2 bor-pill mar-1">Redondeado</a>
                <a  class="btn-sm fd-azul-ve bor-pill mar-1">Redondeado</a>
                <a  class="btn-sm fd-gris-c bor-pill c-negro mar-1">Redondeado</a>
                <a  class="btn-sm fd-verde-o-2 bor-pill mar-1">Redondeado</a>
                <a  class="btn-sm fd-violeta bor-pill mar-1">Redondeado</a>
                <div class="divisor"></div>
                <div class="divisor"></div>
                <a  class="btn-lg fd-rojo bor-pill mab-1">Redondeado</a>
                <a  class="btn-lg fd-amarillo-o-2 bor-pill mab-1">Redondeado</a>
                <a  class="btn-lg fd-azul-ve bor-pill mab-1">Redondeado</a>
                <a  class="btn-lg fd-gris-c bor-pill c-negro mab-1">Redondeado</a>
                <a  class="btn-lg fd-verde-o-2 bor-pill mab-1">Redondeado</a>
                <a  class="btn-lg fd-violeta bor-pill mab-1">Redondeado</a>
            </div>

            
        </div>
        <div class="html">
            <pre class="brush:html">
            <div class="d-flex flex-wrap just-cobertura">
                <a  class="btn fd-rojo bor-pill mar-1">Redondeado</a>
                <a  class="btn fd-amarillo-o-1 bor-pill mar-1">Redondeado</a>
                <a  class="btn fd-azul-ve bor-pill mar-1">Redondeado</a>
                <a  class="btn fd-gris-c bor-pill c-negro mar-1">Redondeado</a>
                <a  class="btn fd-verde-o-1 bor-pill mar-1">Redondeado</a>
                <a  class="btn fd-violeta bor-pill mar-1">Redondeado</a>
                <div class="divisor"></div>
                <div class="divisor"></div>
                <a  class="btn-sm fd-rojo bor-pill mar-1">Redondeado</a>
                <a  class="btn-sm fd-amarillo-o-2 bor-pill mar-1">Redondeado</a>
                <a  class="btn-sm fd-azul-ve bor-pill mar-1">Redondeado</a>
                <a  class="btn-sm fd-gris-c bor-pill c-negro mar-1">Redondeado</a>
                <a  class="btn-sm fd-verde-o-2 bor-pill mar-1">Redondeado</a>
                <a  class="btn-sm fd-violeta bor-pill mar-1">Redondeado</a>
                <div class="divisor"></div>
                <div class="divisor"></div>
                <a  class="btn-lg fd-rojo bor-pill mab-1">Redondeado</a>
                <a  class="btn-lg fd-amarillo-o-2 bor-pill mab-1">Redondeado</a>
                <a  class="btn-lg fd-azul-ve bor-pill mab-1">Redondeado</a>
                <a  class="btn-lg fd-gris-c bor-pill c-negro mab-1">Redondeado</a>
                <a  class="btn-lg fd-verde-o-2 bor-pill mab-1">Redondeado</a>
                <a  class="btn-lg fd-violeta bor-pill mab-1">Redondeado</a>
            </div>
            </pre>
        </div>
        <p>
            En los ejemplos está claro pero la clase utilitaria que se utliza para 
            generar botones con esta forma es la clase <span class="badge badge-azul">.bor-pill</span>
        </p>
    </article>
</section>




<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#colores">Colores</a></li>
        <li><a href="#tamaños">Tamaños</a></li>
        <li><a href="#cubrir">Botones 100%</a></li>
        <li><a href="#borde">Botones Borde</a></li>
        <li><a href="#waves">Efecto Waves</a></li>
        <li><a href="#generalizar">Componentes</a></li>
        <li><a href="#deshabilitado">Deshabilitado</a></li>
        <li><a href="#preloader">Preloader</a></li>
        <li><a href="#redondeado">Redondeado</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>