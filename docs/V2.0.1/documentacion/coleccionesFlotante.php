<?php $titulo =  "Colecciones Flotantes"?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">


    <?php 
        $titulo = "Colecciones Flotantes";
        $descripcion = "Elemento que se desplaza a lo largo de toda la página.";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="muestra" class="article">
        <h2>Muestra</h2>
        <div class="html">
            <pre class="brush:html">
                <!--
                <div id="contexto">
                    <div class="lista-float-der">
                        <span class="cerrar icon-cross"></span>
                        <span class="abrir icon-list"></span>
                        <div class="lista-item">
                            <a href="#">Elemento</a>
                            <span class="borde fd-rojo"></span>
                        </div>
                        <div class="lista-item">
                            <a href="#">Elemento</a>
                            <span class="borde fd-verde"></span>
                        </div>
                        <div class="lista-item">
                            <a href="#">Elemento</a>
                            <span class="borde fd-naranja"></span>
                        </div>
                    </div>
                </div>
                -->
            </pre>
        </div>
        <h3>Inicializar</h3>
        <div class="js">
            <pre class="brush:js">
            BS.ColeccionFlotanteInit().iniciar({contexto: "#contexto"})
            </pre>
        </div>
        <p>
            Toda la lista debe estar encerrada en un div con un ID definido por ustedes.
            Este ID es un parámetro obligatorio de de la función iniciar del ejemplo anterior.
        </p>
    </article>
    <article id="config" class="article">
        <h2>Configuración</h2>
        <p>
            Disponemos de un conjunto de attrs que nos permiten darle estilos a la lista.
        </p>

        <div class="tabla-responsive">
            <table class="borde-vertical">
                <thead>
                    <tr>
                        <td>Atributo</td>
                        <td>Descripción</td>
                        <td class="ancho-20">Defecto</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>contexto</td>
                        <td>ID de la lista (OBLIGATORIO) </td>
                        <td>Vacio</td>
                    </tr>
                    <tr>
                        <td>fondoItem</td>
                        <td>Color de fondo de los elementos
                            son clases de la librería fd-{color}</td>
                        <td>.fd-gris-az-o</td>
                    </tr>
                    <tr>
                        <td>colorTexto</td>
                        <td>Color del texto dentro de los elementos
                        son clases de la librería ej: c-{color}</td>
                        <td>.c-blanco</td>
                    </tr>
                    <tr>
                        <td>altura</td>
                        <td>Separación respecto al inicio de la página</td>
                        <td>100px</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
    <article id="posicion" class="article">
        <h2>Posición</h2>
        <p>
            Podemos ubicar la lista a la izquierda o a la derecha de la página.
            Las clases son <i>.lista-float-der</i> y <i>.lista-float-izq</i>.
        </p>

        <h3>Estructura Básica</h3>

        <div class="html">
            <pre class="brush:html">
                <div id="IdLista"> <!-- Importante Sin un id no funciona-->
                    <div class="lista-float-izq"> <!-- IZQ o DER-->
                      
                        <!-- Botones para abrir y derrar la lista -->
                        <span class="cerrar"></span>
                        <span class="abrir"></span>

                        <div class="lista-item">
                            <!-- Contenido -->
                            <span class="borde fd-rojo"></span>  <!--Efecto hover de colores-->
                        </div>

                    </div>
                </div>
            </pre>
        </div>

        <div class="alerta-op-rojo">
            Los íconos de abrir y cerrar la lista pertenecen a 
            <a href="https://icomoon.io" class="link">https://icomoon.io</a>
        </div>
    </article>
</section>


<div id="contexto">
        <div class="lista-float-der">
            <span class="cerrar icon-cross"></span>
            <span class="abrir icon-list"></span>
            <div class="lista-item">
                <a href="#introduccion" class="tips-ele" data-posicion="izquierda" data-tips=".borde y fd-{color}">Introduccion</a>
                <span class="borde fd-rojo" ></span>
            </div>
            <div class="lista-item">
                <a href="#muestra">Muestra</a>
                <span class="borde fd-verde"></span>
            </div>
            <div class="lista-item">
                <a href="#config">Configuración</a>
                <span class="borde fd-naranja"></span>
            </div>
            <div class="lista-item">
                <a href="#posicion">Posición</a>
                <span class="borde fd-violeta-c"></span>
            </div>
    </div>
</div>

<?php require_once("./componentes/footer.php")?>


<script>
    BS.ColeccionFlotanteInit().iniciar(
            {
                contexto: "#contexto", 
                fondoItem: "fd-gris-n",
                altura: 100
            })
</script>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>
