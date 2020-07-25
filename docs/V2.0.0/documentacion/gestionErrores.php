<?php $titulo = "Gestión de errores" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    <?php 
        $titulo = "Gestión de errores";
        $descripcion = "En muchas ocaciones nos encontramos errores
            y no sabemos porque, en la mayoria de los casos se trata en el mal 
            ingreso de los parámetros de los diferentes módulos. Por esta razón,  en esta versión 
            se le añade a la librería la gestión de errores que nos aporta información de donde se produjo 
            la falla y de esta forma poder solucionarla.";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="formato" class="article scroll-item">
        <h2>Formato</h2>
        <p class="parrafo">
            Para determinar cual fué el error disponemos de un código numérico 
            que identica tanto al módulo que produjo la falla como la descripción 
            del error.
        </p>

        <p class="parrafo c-azul-c fz-25">
            Mxxxx 
        </p>

        <p class="parrafo">
            Donde M hace una referencia descriptiva a la palabra módulo, las dos primeras xx del 
            formato anterior hacen referencia al módulo que falló y las dos ultimas xx hacen referencia 
            a la descripción del error.
        </p>

        <h3>Ejemplo</h3>
        <p class="parrafo">  
            Vamos a tomar un módulo al azar de todos los que posee bodystyle y vamos a mostrar 
            la inicialización de dicho módulo justo con el código de error mostrado en la consola del 
            navegador.
        </p>

        <div class="ejemplo">
            <div id="select" class="select-mod">
                <select name="select">
                    <option class="inactivo" value="1">Seleccione un nombre ...</option>
                    <option value="1">Federico</option>
                    <option value="2">Marcos</option>
                    <option value="3">Carlos</option>
                    <option value="4">Pedro</option>
                </select>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div id="selectEjemplo" class="select-mod">
                    <select name="select">
                        <option class="inactivo" value="1">Seleccione un nombre ...</option>
                        <option value="1">Federico</option>
                        <option value="2">Marcos</option>
                        <option value="3">Carlos</option>
                        <option value="4">Pedro</option>
                    </select>
                </div>
            </pre>
        </div>

        <p class="parrafo">
            Este sería un elemento select del formulario personalizado de bodystyle. Ahora bien 
            la inicialización de dicho elemento se realiza mediante la siguiente función.
        </p>

        <div class="js">
            <pre class="brush:js">
               // BS.SelectInit().iniciar("selectEjemplo") // error
            </pre>
        </div>
        <p class="parrafo">
            Observen que el parámetro que es el id del select está sin el caracter 
            # por lo tanto va a fallar el modulo porque el parámetro id tiene un problema 
            de formato.
        </p>

        <p class="parrafo c-rojo fz-15">
            Error BodyStyle dice: M2204 Problema con el ID: <br>
            El id que ingresa a las funciones tiene que estar precedido por el caracter #.
        </p>
    </article>
    <article id="tabla" class="article scroll-item">
        <h2>Tabla con los valores representativos</h2>
        <div class="tabla-responsive">
            <table>
                <thead>
                    <tr>
                        <td>Módulo</td>
                        <td>idModulo</td>
                        <td>Errores</td>
                        <td>Código</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alertas</td>
                        <td>M01</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Boton Flotante</td>
                        <td>M02</td>
                        <td>01, 05</td>
                        <td>M0201, M0205</td>
                    </tr>
                    <tr>
                        <td>Colecciones</td>
                        <td>M04</td>
                        <td>04, 01, 03, 05</td>
                        <td>M0404, M0401, M403, M405</td>
                    </tr>
                    <tr>
                        <td>Colecciones Flotantes</td>
                        <td>M05</td>
                        <td>04, 01, 03, 05</td>
                        <td>M0504, M0501, M503, M505</td>
                    </tr>
                    <tr>
                        <td>Dropdown</td>
                        <td>M08</td>
                        <td>02</td>
                        <td>M0802</td>
                    </tr>
                    <tr>
                        <td>ScrollSpy</td>
                        <td>M21</td>
                        <td>05, 01, 02</td>
                        <td>M2105, M2101, M2102</td>
                    </tr>
                    <tr>
                        <td>Select</td>
                        <td>M22</td>
                        <td>04</td>
                        <td>M2204</td>
                    </tr>
                    <tr>
                        <td>Sidebar Fija</td>
                        <td>M26</td>
                        <td>01, 02, 03, 04</td>
                        <td>M2601,M2602,M2603,M2604 </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
        <ul>
            <li><a href="#introduccion">Introducción</a></li>
            <li><a href="#formato">Formato</a></li>
            <li><a href="#tabla">Tabla</a></li>
        </ul>
    </div>


<?php require_once("./componentes/footer.php")?>



<script>
    BS.DesplegarSidebarFija().desplegar("#menuIntro")
</script>

<script>BS.SelectInit().iniciar("#select", "fondo")</script>