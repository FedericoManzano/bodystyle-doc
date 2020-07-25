<?php $titulo="Toast"?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>



<section class="contenido-pagina">
    
    <?php 
        $titulo = "Toast";
        $descripcion = "Elemento muy útil para informar al usuario resultados 
        a las acciones realizadas.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="scroll-item article">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <a class="btn fd-azul-ve" onclick="BS.Toast()">Toast!</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <a class="btn fd-azul-ve" onclick="BS.Toast()">Toast!</a>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Se utiliza el evento onclick del boton para llemar a las funciones 
            del toast.
        </div>
    </article>
    <article id="activación" class="scroll-item article">
        <h2>Activación</h2>
        <p>
            Para poder utilizar el Toast tenemos que llamar al metodo Toast de la 
            librería a través del objeto <i>BS</i> que contiene el método.
        </p>
        <div class="js">
            <pre class="brush:js">
                BS.Toast("Texto que queremos");
            </pre>
        </div>
        <div class="ejemplo">
            <a class="btn fd-azul-ve" onclick="BS.Toast('Este es el texto para el ejemplo')">Toast!</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <a class="btn fd-azul-ve" onclick="BS.Toast('Este es el texto para el ejemplo')">Toast!</a>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Es importante mencionar que el texto puede ser código html. 
            Por lo tanto podemos jugar con eso y agregar elementos al toast.
        </div>
        <div class="ejemplo">
            <a class="btn fd-azul-ve" onclick="avisoBoton()">Toast!</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!-- Llamada a la función -->
                <a class="btn fd-azul-ve" onclick="avisoBoton()">Toast!</a>
            </pre>
        </div>
        <div class="js">
            <pre class="brush:js">
                function avisoBoton() {
                    BS.Toast( "OK !!!&nbsp<a class='btn-sm btn-rojo'>Ingresar</a>");
                }
            </pre>
        </div>
    </article>

    <article id="configuracion" class="article scroll-item">
        <h2>Configuración</h2>
        <h3>Tabla de valores</h3>
        <div class="tabla-responsive">
            <table>
                <thead>
                    <tr>
                        <td>Propiedad</td>
                        <td>Valor</td>
                        <td>Defecto</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>html</td>
                        <td>Texto a enviar</td>
                        <td>Hola soy un toast!</td>
                    </tr>
                    <tr>
                        <td>Clases</td>
                        <td>
                            Objeto: [color, radio, colorTexto]
                        </td>
                        <td>
                            [fd-gris-az-c, bor-rad-3, c-blanco]
                        </td>
                    </tr>
                    <tr>
                        <td>Tiempo</td>
                        <td>
                            Duración (ms)
                        </td>
                        <td>
                            3000
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3>Ejemplo de una configuración</h3>
                <div class="js">
                    <pre class="brush:js">
                        var html = "Hola&nbsp<a class='btn btn-rojo'>Enviar</a>",
                            clases = {
                                color: "fd-verde",
                                radio: "bor-rad-20",
                                colorTexto: "c-blanco"
                            },
                            tiempo = 5000
                        BS.Toast(html, clases, tiempo)
                    </pre>
                </div>
        <div class="ejemplo">
            <a class="btn fd-azul-ve" onclick="prueba()">Prueba</a>
        </div>
        <div class="alerta-op-verde">
            Todas las clases de la configuración pertenecen la librería <br>
            color: [Colores documentados]  <br>
            radio: bor-rad-{rad px} <br>
            colorTexto: [colores de texto documentados]
        </div>

        <h3>otro ejemplo</h3>
        <div class="js">
            <pre class="brush:js">
                function registro() {
                    var html = "Registro exitozo!!!&nbsp<p class='f-grosor-6 c-negro'>Felicitaciones</p>",
                    clases = {
                        color: "fd-verde-c",
                        radio: "bor-rad-10",
                        colorTexto: "c-blanco"
                    },
                    tiempo = 5000
                    BS.Toast(html, clases, tiempo)
                }
            </pre>
        </div>
        <div class="ejemplo">
            <a class="btn fd-azul-ve" onclick="registro()">Registrar</a>
        </div>
    </article>

</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#activación">Activación</a></li>
        <li><a href="#configuracion">Configuración</a></li>
    </ul>
</div>
<script>
    function avisoBoton() {
        BS.Toast( "OK !!!&nbsp<a class='btn-sm btn-rojo'>Ingresar</a>");
    }

    function prueba() {
        var html = "Hola&nbsp<a class='btn btn-rojo'>Enviar</a>",
            clases = {
                    color: "fd-verde",
                    radio: "bor-rad-20",
                    colorTexto: "c-blanco"
            },
            tiempo = 5000
            BS.Toast(html, clases, tiempo)
        }

        function registro() {
            var html = "Registro exitozo!!!&nbsp<p class='f-grosor-6 c-negro'>Felicitaciones</p>",
            clases = {
                    color: "fd-verde-c",
                    radio: "bor-rad-10",
                    colorTexto: "c-blanco"
            },
            tiempo = 5000
            BS.Toast(html, clases, tiempo)
        }
</script>

<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuJS")
</script>