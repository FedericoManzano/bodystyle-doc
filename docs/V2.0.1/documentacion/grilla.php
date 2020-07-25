<?php $titulo = "Grilla"?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Grilla";
        $descripcion = "Tal vez uno de los elementos más importantes de la 
        librería permite acomodar y reacomodar todos los elementos de la página 
        respetando el diseño y los tamaños de pantalla.
         Permite realizar un sitio completamente responsive sin demasiado esfuerzo.";
        require_once("./articuloPrincipal.php");
    ?>
    <article class="article scroll-item" id="fila">
        <h2>Fila</h2>
        <p>
            Es un contenedor que ocupa el 100% y está dividido en 12 
            columnas.
        </p>
        
        <div class="ejemplo scroll">
            <div class="fila">
                <div class="cxs-1">
                    <div class="ej-100">1</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">2</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">3</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">4</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">5</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">6</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">7</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">8</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">9</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">10</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">11</div>
                </div>
                <div class="cxs-1">
                    <div class="ej-100">12</div>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="fila">
                    <div class="cxs-1">
                        <div class="ej-100">1</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">2</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">3</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">4</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">5</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">6</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">7</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">8</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">9</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">10</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">11</div>
                    </div>
                    <div class="cxs-1">
                        <div class="ej-100">12</div>
                    </div>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            La clase utilizada es <i>.cxs-1</i> donde el 1 hace referencia 
            a la cantidad de columnas que va a ocupar el elemento y cxs significa que esta configuración de 
            columnas se va a mantener hasta los dispositivos de pantalla xs<=400px
        </div>
    </article>
    <article class="article scroll-item" id="columna">
        <h2>Columnas</h2>
        <p>
            Vamos a ver como utilizar las clases para obtener otra configuración 
            de columnas, donde cada elemento ocupa varias columnas.
        </p>
        <h3>Varias Columnas</h3>
        <div class="ejemplo">
            <div class="fila">
                <div class="cxs-3">
                    <div class="ej-100">1</div>
                </div>
                <div class="cxs-3">
                    <div class="ej-100">2</div>
                </div>
                <div class="cxs-3">
                    <div class="ej-100">3</div>
                </div>
                <div class="cxs-3">
                    <div class="ej-100">4</div>
                </div>
                <div class="cxs-3">
                    <div class="ej-100">5</div>
                </div>
                <div class="cxs-3">
                    <div class="ej-100">6</div>
                </div>
                <div class="cxs-3">
                    <div class="ej-100">7</div>
                </div>
                <div class="cxs-3">
                    <div class="ej-100">8</div>
                </div>
            </div>
        </div>
        <p>
            En este ejemplo cada elemento ocupa 3 columnas.
            La clase es <i>csx-3</i>
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="fila">
                    <div class="cxs-3">
                        <div class="ej-100">1</div>
                    </div>
                    <div class="cxs-3">
                        <div class="ej-100">2</div>
                    </div>
                    <div class="cxs-3">
                        <div class="ej-100">3</div>
                    </div>
                    <div class="cxs-3">
                        <div class="ej-100">4</div>
                    </div>
                    <div class="cxs-3">
                        <div class="ej-100">5</div>
                    </div>
                    <div class="cxs-3">
                        <div class="ej-100">6</div>
                    </div>
                    <div class="cxs-3">
                        <div class="ej-100">7</div>
                    </div>
                    <div class="cxs-3">
                        <div class="ej-100">8</div>
                    </div>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Si cada fila tiene 12 columnas y cada elemento ocupa 
            3 columnas 3 * 4 = 12 por lo tanto cada fila tendrá 
            4 elementos.
        </div>
    </article>
    <article class="article scroll-item" id="pantalla">
        <h2>Columnas para diferentes pantallas</h2>
        <p>
            Es necesario poder tener resultados que permitan 
            encolumnar el contenido y a la vez se respeten los tamaños 
            de pantalla y que el contenido se muestre manteniendo el diseño.
        </p>

        <h3>Tabla de clases y tamaños</h3>
        <div class="tabla-responsive">
            <table>
                <thead>
                    <tr>
                        <td>
                            Clase
                        </td>
                        <td>
                            Tamaño
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>.cxs</td>
                        <td> < 400px</td>
                    </tr>
                    <tr>
                        <td>.cs</td>
                        <td> > 400px < 768px </td>
                    </tr>
                    <tr>
                        <td>.cm</td>
                        <td>  > 768px < 1024px</td>
                    </tr>
                    <tr>
                        <td>.cl</td>
                        <td>  > 1024px</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="mar-1">
            Ahora lo que queremos es que en los dispositivos: </br> 
            <i>Grandes ocupen 3 columnas</i>, </br> 
            <i>Medianos ocupen 4 columnas</i> </br>
            <i>Chicos ocupen 6 columnas</i> </br>
            <i>Extra Chicos ocupen 12 columnas</i>
        </p>
        <div class="ejemplo">
            <div class="fila">
                <div class="cxs-12 cs-6 cm-4 cl-3">
                    <div class="ej-100">1</div>
                </div>
                <div class="cxs-12 cs-6 cm-4 cl-3">
                    <div class="ej-100">2</div>
                </div>
                <div class="cxs-12 cs-6 cm-4 cl-3">
                    <div class="ej-100">3</div>
                </div>
                <div class="cxs-12 cs-6 cm-4 cl-3">
                    <div class="ej-100">4</div>
                </div>
            </div>
        </div>
        <p>Ahora podemos comprobar que en dispositivos grandes 
            obtenemos una fila de 4 elementos, 
            en medianos dos filas de 3 elementos, en chicos 2 fila de 2 cada una,
            y el los extra pequeños tenemos 4 filas
        </p>
        <div class="codigo">
            <pre class="brush:html">
                <div class="fila">
                    <div class="cxs-12 cs-6 cm-4 cl-3">
                        <div class="ej-100">1</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-3">
                        <div class="ej-100">2</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-3">
                        <div class="ej-100">3</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-3">
                        <div class="ej-100">4</div>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="desplazamiento">
        <h2>Desplazamiento</h2>
        <p>
            Que pasaría si quisieramos centrar un grupo de elementos 
            que queda en un a fila incompleta.
        </p>

        <h3>Ejemplo desplazamiento</h3>
            <div class="ejemplo">
                <div class="fila">
                    <div class="cxs-12 cs-6 cm-4 cl-4">
                        <div class="ej-100">1</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-4">
                        <div class="ej-100">2</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-4">
                        <div class="ej-100">3</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-4">
                        <div class="ej-100">4</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-4">
                        <div class="ej-100">5</div>
                    </div>
                </div>
            </div>
            <div class="alerta-op-verde">Los dos elementos de la fila 2 no completan la fila 
                por lo tanto sería buendo centrarlos
            </div>
            <div class="ejemplo">
                <div class="fila">
                    <div class="cxs-12 cs-6 cm-4 cl-4 ">
                        <div class="ej-100">1</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-4">
                        <div class="ej-100">2</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-4">
                        <div class="ej-100">3</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-4 offset-l-2-4">
                        <div class="ej-100">4</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-4">
                        <div class="ej-100">5</div>
                    </div>
                </div>
            </div>
            <div class="alerta-op-verde">
                En el elemento n°4 agregamos un offset para que se desplace 2 columnas a la derecha 
            </div>

            <div class="html">
                <pre class="brush:html">
                    <div class="fila">
                        <div class="cxs-12 cs-6 cm-4 cl-4 ">
                            <div class="ej-100">1</div>
                        </div>
                        <div class="cxs-12 cs-6 cm-4 cl-4">
                            <div class="ej-100">2</div>
                        </div>
                        <div class="cxs-12 cs-6 cm-4 cl-4">
                            <div class="ej-100">3</div>
                        </div>
                        <div class="cxs-12 cs-6 cm-4 cl-4 offset-l-2-4">
                            <div class="ej-100">4</div>
                        </div>
                        <div class="cxs-12 cs-6 cm-4 cl-4">
                            <div class="ej-100">5</div>
                        </div>
                    </div>
                </pre>
            </div>
            <p>
                La clase utilizada es offset-{pantalla}-{desp}-{tam-bloque}. 
                En este caso <i>offset-l-2-4</i>. 
                Con esto le estamos diciendo que para dispositivos grandes queremos 
                un desplazamiento de 2 columnas y un tamaño de bloque de 4 columnas.
            </p>
            <div class="alerta-op-verde">
                Es importante aclarar que pa dispositivos que no son l(large) la alineación 
                no tendrá offset. 
                Si queremos un offset para otros tamaños debemos utilizar la clase 
                que corresponda.
            </div>

            <h3>Tabla Desplazamiento</h3>
            <div class="tabla-responsive">
            <table>
                <thead>
                    <tr>
                        <td>
                            Clase
                        </td>
                        <td>
                            Desplazamiento
                        </td>
                        <td>
                            Bloque
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>.offset-l-{des}-{bloque}</td>
                        <td> [1-12]</td>
                        <td> [1-12]</td>
                    </tr>
                    <tr>
                        <td>.offset-m-{des}-{bloque}</td>
                        <td> [1-12]</td>
                        <td> [1-12]</td>
                    </tr>
                    <tr>
                        <td>.offset-s-{des}-{bloque}</td>
                        <td> [1-12]</td>
                        <td> [1-12]</td>
                    </tr>
                    <tr>
                        <td>.offset-xs-{des}-{bloque}</td>
                        <td> [1-12]</td>
                        <td> [1-12]</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="alerta-op-verde">
            Es importante aclarar que las clases se expanden hacia arriba.
            las propiedades de escalas inferirores arrastran a las medidas superiores 
            sino se especifica lo contrario.
            por ejemplo. Si usamos un offset-m-2-4 esta configuración tambien afectaría 
            a dispositivos l(large) a no ser que se defina offset-l-2-3, 
            el reemplazo siempre es de abajo hacia arriba.
         </div>
    </article>
    <article class="article scroll-item" id="simulacion">
        <h2>Simulación de una página</h2>
        <div class="ejemplo">
            <div class="fila">
                <div class="cxs-12">
                    <div class="ej-100">Nav</div>
                </div>
                <div class="cxs-12 cs-6 cm-4 cl-3">
                    <div class="ej-100">Sidebar</div>
                </div>
                <div class="cxs-12 cs-6 cm-8 cl-9">
                    <div class="ej-100">Contenido</div>
                </div>
                <div class="cxs-12 cs-6 cm-4 cl-4 offset-m-2-4">
                    <div class="ej-100">Widget1</div>
                </div>
                <div class="cxs-12 cs-6 cm-4 cl-4">
                    <div class="ej-100">Widget2</div>
                </div>
                <div class="cxs-12">
                    <div class="ej-100">Footer</div>
                </div>
            </div>
        </div>
        <h3>Código Simulación</h3>
        <div class="html">
            <pre class="brush:html">
                    <div class="cxs-12">
                        <div class="ej-100">Nav</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-3">
                        <div class="ej-100">Sidebar</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-8 cl-9">
                        <div class="ej-100">Contenido</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-4 offset-m-2-4">
                        <div class="ej-100">Widget1</div>
                    </div>
                    <div class="cxs-12 cs-6 cm-4 cl-4">
                        <div class="ej-100">Widget2</div>
                    </div>
                    <div class="cxs-12">
                        <div class="ej-100">Footer</div>
                    </div>
                    </div>
            </pre>
        </div>
    </article>
</section>






<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#fila">Fila</a></li>
        <li><a href="#columna">Columna</a></li>
        <li><a href="#pantalla">Resposive</a></li>
        <li><a href="#desplazamiento">Desplazamiento</a></li>
        <li><a href="#simulacion">Simulación</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuAli")
</script>