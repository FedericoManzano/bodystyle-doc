
<?php $titulo="Sidebar Fija" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    
    <?php 
        $titulo = "Sidebar Fija";
        $descripcion = "En este caso el sidebar es fijo ya que no posee un elemento para ocultarlo.
        La barra es la que aparece a la izquierda de esta documentación en dispositivos grandes.
        Tiene dentro un menú desplegable con un listado de links a diferentes páginas.";
        require_once("./articuloPrincipal.php");
    ?> 
    <article id="estructura" class="article scroll-item">
        <h2>Estructura</h2>
        <div class="html">
            <pre class="brush:html">

                <!-- Toda la barra está encerrada en un div con la clase 
                    sidebarFija -->
                <div class="sidebarFija">

                    <!-- Zona del Logo -->
                    <div class="sedebarLogo">
                        <div>
                            <h2>Logo Marca</h2>
                            <span>Pequeña descripción</span>
                        </div>
                    </div>
                    <!-- Fin zona del Logo -->

                    <!-- Elemento titulo que despliega la lista -->
                    <a class="titulo" data-target="#lista1">Introducción</a>

                    <!-- Listado desplegable
                    <ul class="lista" id="lista1">
                        <li><a href="introduccion.php">Instalación</a></li>
                    </ul>
                    -->
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            El enlace con la clase <i>.titulo</i> tiene que tener un attr (data-target) 
            que es igual al id que posee la lista a desplegar.
            En este caso sería data-target="#lista1" y el id de la lista sería 
            id="lista1"
        </div>
    </article>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <a href="sidebar-fija-muestra.php" target="_blank" class="btn btn-azul">Muestra</a>
        <div class="html">
            <pre class="brush:html">
                <!-- Descomentar si lo copian

                <div class="sidebarFija">
                    <div class="sedebarLogo">
                        <h2 class='fz-25'>Logo</h2>
                        <span>Descripción</span>
                    </div>
                    <a class="titulo" data-target="#lista1">Título<i class="f-derecha"></i><i class="f-abajo" style="display: none;"></i></a>
                    <ul class="lista" id="lista1">
                        <li><a href="#">Elemento1</a></li>
                        <li><a href="#">Elemento2</a></li>
                        <li><a href="#">Elemento3</a></li>
                        <li><a href="#">Elemento4</a></li>
                        <li><a href="#">Elemento5</a></li>
                    </ul>
                    <a class="titulo" data-target="#lista2">Título2<i class="f-derecha"></i><i class="f-abajo" style="display: none;"></i></a>
                    <ul class="lista" id="lista2">
                        <li><a href="#">Elemento1</a></li>
                        <li><a href="#">Elemento2</a></li>
                        <li><a href="#">Elemento3</a></li>
                        <li><a href="#">Elemento4</a></li>
                        <li><a href="#">Elemento5</a></li>
                    </ul>
                    <a class="titulo" data-target="#lista3">Título3<i class="f-derecha"></i><i class="f-abajo" style="display: none;"></i></a>
                    <ul class="lista" id="lista3">
                        <li><a href="#">Elemento1</a></li>
                        <li><a href="#">Elemento2</a></li>
                        <li><a href="#">Elemento3</a></li>
                        <li><a href="#">Elemento4</a></li>
                        <li><a href="#">Elemento5</a></li>
                    </ul>
                                

                </div>
                -->
            </pre>
        </div>
    </article>
    <aeticle id="iniciar" class="article scroll-item">
        <h2>Inicializar</h2>
        <div class="js">
            <pre class="brush:js">
                BS.SidebarFijaInit()
            </pre>
        </div>
        <div class="alerta-op-verde">
            Es necesario inicializar el menú para poder utilizarlo. En este caso 
            al no enviarle la configuración del sidebar va a añadirse a la página con la configuración por defecto.
        </div>
    </aeticle>
    <article id="configuracion" class="article scroll-item">
        <h2>Configuración</h2>
        <p>
            Podemos personalizar el menú con un objeto json con una serie de atributos.
        </p>
        <div class="tabla-responsive">
            <table>
                <thead>
                    <tr>
                        <td>Propiedad</td>
                        <td>Valor</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>colorFondo</td>
                        <td>Clases de color de fondo de la librería ej: fd-azul-ve</td>
                    </tr>
                    <tr>
                        <td>colorFlechas</td>
                        <td>Color hexadecimal ej: #000</td>
                    </tr>
                    <tr>
                        <td>colorLogo</td>
                        <td>Clases de color de texto ej: c-blanco</td>
                    </tr>
                    <tr>
                        <td>colorTitulos</td>
                        <td>Clases color texto ej: c-azul-c</td>
                    </tr>
                    <tr>
                        <td>colorEnlaces</td>
                        <td>Clases color de texto ej: c-verde</td>
                    </tr>
                    <tr>
                        <td>tiempoEfecto</td>
                        <td>Tiempo que tarda en desplegar los enlaces (ms)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
    <article id="ejemplo" class="article scroll-item">
        <h2>Ejemplo configuración</h2>
        <div class="js">
            <pre class="brush:js">
           
            BS.SidebarFijaInit( 
                {
                    colorFondo: "fd-azul-ve",
                    colorFlechas: "#fff",
                    colorLogo: "c-blanco", 
                    colorTitulos: "c-blanco",
                    colorEnlaces: "c-blanco",
                    colorTiempo: 500
                })
             
            </pre>
        </div>
        <div>
            <a href="sidebarFijaMuestra2.php" class="btn fd-azul-ve">Muestra</a>
        </div>

        <h3>Ejemplo 2</h3>
        <div class="js">
            <pre class="brush:js">
           
            BS.SidebarFijaInit( 
                {
                    colorFondo:     "fd-gris-c",
                    colorFlechas:   "#000",
                    colorLogo:      "c-gris-o", 
                    colorTitulos:   "c-gris-o",
                    colorEnlaces:   "c-gris-o",
                    colorTiempo:    300
                })
             
            </pre>
        </div>
        <div>
            <a href="sidebarFijaMuestra3.php" class="btn fd-azul-ve">Muestra</a>
        </div>   

        <div class="alerta-op-verde">
        Es recomendable ver las secciones <a target="_blank" href="fondos.php" class="link">Fondos</a>, 
        <a target="_blank" href="colores.php" class="link">Colores</a>.
        </div>     
    </article>

</section>

<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#estructura">Estructura</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#iniciar">Inicialización</a></li>
        <li><a href="#configuracion">Configuración</a></li>
        <li><a href="#ejemplo">Ejemplo</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>