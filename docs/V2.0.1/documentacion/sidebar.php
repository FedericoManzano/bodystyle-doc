
<?php $titulo = "Sidebar" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    
    <?php 
        $titulo = "Sidebar";
        $descripcion = "Vamos a ver un componente muy util que se utiliza 
        en diversas paginas web y que contiene la posibilidad 
        de agregar gran cantidad de opciones como se utilizan en aplicaciones web.";
        require_once("./articuloPrincipal.php");
    ?> 
    <article class="article scroll-item" id="iniciacion">
        <h2>Activación</h2>
        <p>
            Para poder utilizar el sidebar hay que agregar la siguiente linea 
            de código.
        </p>
        <div class="js">
            <pre class="brush:js">
                <script>
                    // Debajo de Jquery y bodystyle.js                
                    BS.SidebarInit()
                </script>
            </pre>
        </div>

        <a href="sidebar-demo.php" target="_blank" class="btn btn-azul">Demo</a>
    </article>
    <article class="article scroll-item" id="utilizacion">
        <h2>Utilización</h2>
        <p>
            Lo primero que vamos a hacer es agregar la cabecera del menú
        </p>        

        <div class="html">
            <pre class="brush:html">
                <nav>
                <!-- 
                    Sacar los comentarios 
                    <div class="sidebar-barra">
                        <a href="#" class="sidebar-menu"></a>
                    </div>
                -->
                </nav>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Sacar los comentarios so lo copian esto se debe 
            a que si no pongo el comentario muestra el código con 
            los elementos dinámicos que se le agregan.
        </div>

        <p>
            Luego vamos a agregar la barra lateral.
        </p>
        <h3>Estructura</h3>
        <div class="html">
            <pre class="brush:html">
                <!-- Todo encerrado en un div con la clase .sidebar-lateral -->
                <div class="sidebar-lateral">
                    <!-- luego un div con la clase logo -->
                    <div class="logo">Logo</div>

                    <!--Elemento titulo que puede desplegar las lista
                    <a href="#" class="titulo" data-target="#menu1">Titulo</a>
                    -->
                    <!--
                    <ul id="menu1" class="lista">
                        lListado 
                    </ul>
                    -->
                </div>
            </pre>
        </div>

        <div class="alerta-op-verde">
            Es importante resaltar que ele elento que posee la clase <i>.titulo</i>
            tiene un <i>data-target</i> que apunta al id de la lista que despliega.
            en este caso data-target="#menu1"
        </div>

        <div class="html">
            <pre class="brush:html">
                
                <div class="sidebar-lateral">
                    
                    <div class="logo">Logo</div>


                    <!--
                    <a href="#" class="titulo" data-target="#menu1">Titulo1</a>
                    <ul id="menu1" class="lista">
                        <ul>
                            <li><a href="#">item1</a></li>
                            <li><a href="#">item2</a></li>
                            <li><a href="#">item3</a></li>
                        </ul> 
                    </ul>
                    <a href="#" class="titulo" data-target="#menu2">Titulo2</a>
                    <ul id="menu2" class="lista">
                        <ul>
                            <li><a href="#">item1</a></li>
                            <li><a href="#">item2</a></li>
                            <li><a href="#">item3</a></li>
                        </ul> 
                    </ul>
                    <a href="#" class="titulo" data-target="#menu3">Titulo3</a>
                    <ul id="menu3" class="lista">
                        <ul>
                            <li><a href="#">item1</a></li>
                            <li><a href="#">item2</a></li>
                            <li><a href="#">item3</a></li>
                        </ul> 
                    </ul>
                    <a href="#" class="titulo" data-target="#menu4">Titulo4</a>
                    <ul id="menu4" class="lista">
                        <ul>
                            <li><a href="#">item1</a></li>
                            <li><a href="#">item2</a></li>
                            <li><a href="#">item3</a></li>
                        </ul> 
                    </ul>
                    -->
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Sacar los comentarios si copian el código de arriba
        </div>
    </article>
    <article class="article scroll-item" id="colores">
        <h2>Colores</h2>
        <p>
            Como todo elemento de la librería podemos cambiar el color por 
            defecto utilizando las clases fd-{color} definidas en la sección 
            colores y fondos de esta documentación.
        </p>
        <h3>Ejemplo</h3>
        <div class="html">
            <pre class="brush:html">
                
                <div class="sidebar-barra fd-rojo">
                    <!-- Aca va el logo-->
                </div>
                  
            </pre>
        </div>
        <div class="alerta-op-verde">
            En este caso la barra superior es de color roja.
        </div>
    </article>
</section>






<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#iniciacion">Activación</a></li>
        <li><a href="#utilizacion">Utilización</a></li>
        <li><a href="#colores">Colores</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>