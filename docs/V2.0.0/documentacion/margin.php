<?php $titulo="Margin" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    <?php 
        $titulo = "Margin";
        $descripcion = "La librería dispone de clases para generar un margin de diferentes 
        medidas en los componentes sin necesidad de agregar hojas de estilo para esto. <br>
        También dispone de margenes en los diferentes tamaños de pantalla.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="clases" class="article scroll-item">
        <h2>Clases</h2>
        <h3>Listado de clases </h3>
        <h4>Todos los tamaños de pantalla</h4>
        <div class="tabla-responsive">
            <table class="tabla-sm">
                <thead>
                    <tr>
                        <td>Clase</td>
                        <td>Descripción</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>m-{pantalla}-{medida}</td>
                        <td>
                            Con esta clase generamos un margen a los 4 lados 
                            del elemento. <br>
                            El parámetro medida lo establece la cantidad de margen 
                            que se desea. <br> 
                            parámetro: 0-15] donde 1 = 0.5em = 16px
                        </td>
                    </tr>
                    <tr>
                        <td>mi-{pantalla}-{medida}</td>
                        <td>
                            Con esta clase generamos un margen izquierdo  
                            del elemento. <br>
                            parámetro: 0-15] donde 1 = 0.5em = 16px
                        </td>
                    </tr>
                    <tr>
                        <td>md-{pantalla}-{medida}</td>
                        <td>
                            Con esta clase generamos un margen derecho  
                            del elemento. <br>
                            parámetro: 0-15] donde 1 = 0.5em = 16px
                        </td>
                    </tr>
                    <tr>
                        <td>mar-{pantalla}-{medida}</td>
                        <td>
                            Con esta clase generamos un margen arriba  
                            del elemento. <br>
                            parámetro: 0-15] donde 1 = 0.5em = 16px
                        </td>
                    </tr>
                    <tr>
                        <td>mab-{pantalla}-{medida}</td>
                        <td>
                            Con esta clase generamos un margen abajo  
                            del elemento. <br>
                            parámetro: 0-15] donde 1 = 0.5em = 16px
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="alerta-op-verde">
            Estos margenes se expanden para todos los tamaños de pantalla. <br>
            Ahora vamos a ver los que son espedifical para cada tamaño
        </div>

        <p>
            El parámetro pantalla hace referencia a los tamaños de pantalla (xs s m l). <br> 
        </p>
    </article>
    <article id="ejemplos" class="article scroll-item">
        <h2>Ejemplos</h2>
        <div class="ejemplo">
            <p class="mi-15 mi-m-2">Margen mi-10 y mi-m-2</p>
        </div>
        <div class="html">
            <pre class="brush:html">
                <p class="m-15 mi-m-5">Margen mi-10 y mi-m-5</p>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Notemos que cuando el tamaño de la pantalla es mayor a 
            1024 px el margen izquierdo es de 7.5em y cuando la pantalla es menor a 1024 px 
            el margen izquierdo es 2.5em.
        </div>
        <div class="ejemplo">
            <div class="d-flex">
                <a  class="btn btn-azul md-4 md-s-1">md-4 md-s-1</a>
                <a  class="btn btn-azul">Comparar</a>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex">
                    <a  class="btn btn-azul md-4 md-s-1">md-4 md-s-1</a>
                    <a  class="btn btn-azul">Comparar</a>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Esto es típico de formularios. Los elementos 
            en linea en dispositivos grandes queremos que tengan una determinada 
            separación pero en tamaños mas pequeños la separación queremos que sea 
            menor.
        </div>

        <div class="ejemplo">
            <div class="d-flex ali.fuente">
                <div class="check-radio-grupo">
                    <input id="i-check4" type="checkbox">
                    <label for="i-check4" class="cb-azul">Acepto</label>
                </div>
                <a  class="btn-sm btn-azul mi-6 mi-m-3 mi-s-1">Enviar</a>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="d-flex ali.fuente">
                    <div class="check-radio-grupo">
                        <input id="i-check4" type="checkbox">
                        <label for="i-check4" class="cb-azul">Acepto</label>
                    </div>
                    <a  class="btn-sm btn-azul mi-6 mi-m-3 mi-s-1">Enviar</a>
                </div>
            </pre>
        </div>
        <p>Lo msmo sucede con los margenes arriba y abajo en dispositivos grandes 
            un determinado espaciado puede parecer aceptable pero en dispositivos mas pequeños puede 
            ser excesivo.
        </p>

        <div class="ejemplo">
            <p class="m-10 m-m-6 m-s-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit non officia distinctio dic</p>
        </div>
        <div class="html">
            <pre class="brush:html">
            <p class="m-10 m-m-6 m-s-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit non officia distinctio dic</p>
            </pre>
        </div>
        <p>
            En este ejemplo podemos ver como los margenes son variables según los dispositivos utilizados, 
            la catidad de convinaciones sn muchas pero los ejemplos demuestran de que se trata esta sección.
        </p>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#clases">Clases</a></li>
        <li><a href="#ejemplos">Ejemplos</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuUti")
</script>