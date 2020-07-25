
<?php $titulo = "ScrollSpy"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">


    <?php 
        $titulo = "ScrollSpy";
        $descripcion = "Un elemento muy útil que mejora ampliamente la navegabilidad de la página.
        Cada una de las secciones de la página quedan enlazadas en un elemento 
        que se desplaza a lo largo de todo el recorrido del documento.";
        require_once("./articuloPrincipal.php");
    ?>  

    <article id="activar" class="article scroll-item">
        <h2>Activar</h2>
        <h3>Iniciación por defecto</h3>
        <div class="js">
            <pre class="brush:js">
                BS.ScrollSpyInit()
            </pre>
        </div>
        <h3>Configuración por defecto</h3>
        <div class="tabla-responsive">
            <table class="borde-vertical">
                <thead>
                    <tr>
                        <td>Atributo</td>
                        <td>Descripción</td>
                        <td>Defecto</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ancho</td>
                        <td>Define el ancho del componente.</td>
                        <td>15% del total de la página</td>
                    </tr>
                    <tr>
                        <td>tamFuente</td>
                        <td>Tamaño de la fuente de los enlaces.</td>
                        <td>18px</td>
                    </tr>
                    <tr>
                        <td>colorBorde</td>
                        <td>Color del elemento que muestra al enlace 
                            seleccionado.
                        </td>
                        <td>.fd-azul-c</td>
                    </tr>
                    <tr>
                        <td>alturaBorde</td>
                        <td>Altura del borde que señala al elemento seleccionado
                        </td>
                        <td>30px</td>
                    </tr>
                    <tr>
                        <td>separacion</td>
                        <td>Separación respecto a limite superior de la 
                            página
                        </td>
                        <td>120px</td>
                    </tr>
                    <tr>
                        <td>colorSeleccionado</td>
                        <td>Color que posee el enlace seleccionado.
                        </td>
                        <td>#000</td>
                    </tr>
                    <tr>
                        <td>colorNoSeleccionado</td>
                        <td>Color que posee el enlace no seleccionado.
                        </td>
                        <td>#666</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
    <article id="funcionamiento" class="article scroll-item">
        <h2>Funcionamiento</h2>
        <p>
            A la sección de la página que queremos incluir para que quede enlazada 
            tenemos que agregarle la clase <i>.scroll-item</i> y un id identificatorio.
        </p>

        <div class="html">
            <pre class="brush:html">
                <!--
                <section class="scroll-item" id="ejemplo">

                </section>
                -->
            </pre>
        </div>
        <p>
            Luego crear una lista con la clase <i>.lista-scroll</i>
        </p>
        <div class="html">
            <pre class="brush:html">
                <!--
                <div class="lista-scroll">
                    <ul>
                        <li><a href="#ejemplo">Ejemplo1</a></li>
                        <li><a href="#ejemplo2">Ejempl2</a></li>
                    </ul>
                </div>
                -->
            </pre>
        </div>
        <p>
            Esto generará una lista en la parte derecha de la pantalla con los 
            enlaces que agregamos en la lista.
        </p>
    </article>
    <article id="ejemplo" class="article scroll-item">
        <h2>Ejemplo</h2>

        <h3>Ejemplo Configuración por default</h3>
        <div class="ejemplo" style="height: 500px">
            <iframe src="scrollspy/scrolldefault.html" width="100%" height="100%" frameborder="0" scrolling="yes"frameborder="0"></iframe>
        </div>

        <div class="js">
            <pre class="brush:js">
                BS.ScrollSpyInit()
            </pre>
        </div>
        <h3>Configuración personalizada</h3>

        <div class="ejemplo" style="height: 500px">
            <iframe src="scrollspy/scroll2.html" width="100%" height="100%" frameborder="0" scrolling="yes"frameborder="0"></iframe>
        </div>

        <div class="js">
            <pre class="brush:js">
                var config = {
                    ancho: "20%",
                    tamFuente: 15,
                    colorBorde: "fd-rojo",
                    alturaBorde: 23,
                    separacion: 200,
                    colorSeleccionado: "#212121",
                    colorNoSeleccionado: "#666"
                }

                BS.ScrollSpyInit(config)
            </pre>
        </div>
    </article>
    <article id="pantalla" class="article scroll-item">
        <h2>Pantalla</h2>
        <p>
            ScrollSpy es un elemento útil pero cuando se utilizar tamaños 
            de pantalla menores a 1024px (m) los elementos puede superponerse 
            de manera tal que perjudica la visibilidad de los elementos dentro de 
            la página. <br>
            Para solucionar esto vamos a utilizar los ayudantes de la librería los 
            cuales podemos conocerlos en la sección CSS de esta documentación. <br> 
            <a href="ayudantes.php" class="link" target="_blank">Ayudantes</a>
        </p>
        
        <div class="html">
            <pre class="brush:html">
                <!-- Agregamos la clase .ocultar-desde-medianos 
                <div class="lista-scroll ocultar-desde-medianos">
                    <ul>
                         Listado 
                    </ul>
                </div>
                -->
            </pre>
        </div>
        <div class="alerta-op-verde">
            Ahora el elemento sólo será visible en dispositivos con el tamaño 
            de pantalla mayor a 1024px.
            </div>

    </article>
</section>
<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#activar">Activar</a></li>
        <li><a href="#funcionamiento">Funcionamiento</a></li>
        <li><a href="#ejemplo">Ejemplo</a></li>
        <li><a href="#pantalla">Pantalla</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuJS")
</script>