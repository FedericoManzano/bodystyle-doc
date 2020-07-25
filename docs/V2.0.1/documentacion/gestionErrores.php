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
            <table class="borde-vertical">
                <thead>
                    <tr>
                        <td class="ancho-40">Módulo</td>
                        <td>idModulo</td>
                        <td>Errores</td>
                        <td class="ancho-10">Código</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="f-grosor-6">Alertas</td>
                        <td class="a-d">M01</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    
                    <tr >
                        <td class="f-grosor-6" rowspan="2">Boton Flotante</td>
                        <td rowspan="2" class="a-d">M02</td>
                        <td class="a-d">01</td>
                        <td class="c-rojo">M0201</td>
                    </tr>
                    <tr>
                        <td class="a-d">05</td>
                        <td class="c-rojo">M0205</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Boton Inicio</td>
                        <td class="a-d">M03</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6" rowspan="4">Colecciones</td>
                        <td rowspan="4" class="a-d">M04</td>
                        <td class="a-d">04</td>
                        <td class="c-rojo">M0404</td>
                    </tr>
                    <tr>
                        <td class="a-d">01</td>
                        <td class="c-rojo">M403</td>
                    </tr>
                    <tr>
                        <td class="a-d">05</td>
                        <td class="c-rojo">M405</td>
                    </tr>
                    <tr>
                        <td class="a-d">03</td>
                        <td class="c-rojo">M0401</td>
                    </tr>
                   
                    <tr>
                        <td rowspan="4" class="f-grosor-6">Colecciones Flotantes</td>
                        <td rowspan="4" class="a-d">M05</td>
                        <td class="a-d">04</td>
                        <td class="c-rojo">M0504</td>
                    </tr>
                    <tr>
                        <td class="a-d">01</td>
                        <td class="c-rojo">M0501</td>
                    </tr>
                    <tr>
                        <td class="a-d">03</td>
                        <td class="c-rojo">M0503</td>
                    </tr>
                    <tr>
                        <td class="a-d">05</td>
                        <td class="c-rojo">M0505</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Contenedores</td>
                        <td class="a-d">M06</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Desactivado</td>
                        <td class="a-d">M07</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Dropdown</td>
                        <td class="a-d">M08</td>
                        <td class="a-d">02</td>
                        <td class="c-rojo">M0802</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6" rowspan="3">Efecto Hover Borde</td>
                        <td class="a-d" rowspan="3">M09</td>
                        <td class="a-d">04</td>
                        <td class="c-rojo">M0904</td>
                    </tr>
                    <tr>
                        <td class="a-d">08</td>
                        <td class="c-rojo">M0908</td>
                    </tr>
                    <tr>
                        <td class="a-d">01</td>
                        <td class="c-rojo">M0901</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Efecto Scroll</td>
                        <td class="a-d">M10</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Grupos Input</td>
                        <td class="a-d">M12</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Imágenes</td>
                        <td class="a-d">M13</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Input Handler</td>
                        <td class="a-d">M14</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Menú Colapso</td>
                        <td class="a-d">M15</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Menú Superior</td>
                        <td class="a-d">M16</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Modal</td>
                        <td class="a-d">M17</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">paralax</td>
                        <td class="a-d">M18</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Range</td>
                        <td class="a-d">M19</td>
                        <td class="a-d">N/A</td>
                        <td class="c-rojo">N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6" rowspan="3">ScrollSpy</td>
                        <td class="a-d" rowspan="3">M21</td>
                        <td class="a-d">05</td>
                        <td class="c-rojo">M2105</td>
                    </tr>
                    <tr>
                        <td class="a-d">01</td>
                        <td class="c-rojo">M2101</td>
                    </tr>
                    <tr>
                        <td class="a-d">02</td>
                        <td class="c-rojo">M2102</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Select</td>
                        <td class="a-d">M22</td>
                        <td class="a-d">04</td>
                        <td class="c-rojo">M2204</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6" rowspan="4">Sidebar Fija</td>
                        <td class="a-d" rowspan="4">M26</td>
                        <td class="a-d">01</td>
                        <td class=c-rojo>M2601 </td>
                    </tr>
                    <tr>
                        <td class="a-d">02</td>
                        <td class=c-rojo>M2602 </td>
                    </tr>
                    <tr>
                        <td class="a-d">03</td>
                        <td class=c-rojo>M2603 </td>
                    </tr>
                    <tr>
                        <td class="a-d">04</td>
                        <td class=c-rojo>M2604 </td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6" rowspan="2">Slider</td>
                        <td class="a-d" rowspan="2">M27</td>
                        <td class="a-d">05</td>
                        <td class=c-rojo>M2705 </td>
                    </tr>
                    <tr>
                        <td class="a-d">07</td>
                        <td class=c-rojo>M2707 </td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6" rowspan="3">Tabs</td>
                        <td class="a-d" rowspan="3">M28</td>
                        <td class="a-d">04</td>
                        <td class=c-rojo>M2804</td>
                    </tr>
                    <tr>
                        <td class="a-d">03</td>
                        <td class=c-rojo>M2803</td>
                    </tr>
                    <tr>
                        <td class="a-d">01</td>
                        <td class=c-rojo>M2801</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Template</td>
                        <td class="a-d">M29</td>
                        <td class="a-d">N/A</td>
                        <td class=c-rojo>N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Toast</td>
                        <td class="a-d">M30</td>
                        <td class="a-d">N/A</td>
                        <td class=c-rojo>N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">ToolTips</td>
                        <td class="a-d">M31</td>
                        <td class="a-d">N/A</td>
                        <td class=c-rojo>N/A</td>
                    </tr>
                    <tr>
                        <td class="f-grosor-6">Waves</td>
                        <td class="a-d">M32</td>
                        <td class="a-d">N/A</td>
                        <td class=c-rojo>N/A</td>
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