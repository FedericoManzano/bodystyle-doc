<?php $titulo = "Webpack" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

    <section class="contenido-pagina">
        <?php 
            $titulo = "Dependencia";
            $descripcion = "En esta sección vamos a ver las diferentes formas que tenemos ". 
            "para agregar la librería como una dependencia de nuestro proyecto.";
            require_once("./articuloPrincipal.php");
        ?>
        <article id="import" class="article scroll-item">
            <h2>Importar la librería</h2>
            <p>
                Una vez descargada a través de nuestro gestor de paquetes favorito 
                como se muestra en la sección descarga <a href="descarga.php" class="link">Descarga</a>. <br> 
                Vamos a ver como importarla a nuestro proyecto.
            </p>
            <div class="js">
                <pre class="brush:js">
                    // Utilizamos la instrucción import de JS para 
                    //traer la dependencia.

                    import "body-ui"
                </pre>
            </div>

            <p>
                De esta forma agregamos a nuestro proyecto el archivo <span class="c-azul-c">bodystyle.css</span>
                y el archivo <span class="c-rojo">bodystyle.js</span>. 
                Ambos archivos son funcionales pero no están minificados.
            </p>

            <h3>Importar minificados</h3>
            <div class="js">
                <pre class="brush:html">
                    import "body-ui/dist/css/bodystyle.min.css" 
                    import "body-ui/dist/js/bodystyle.min.js"
                </pre>
            </div>

            <p>
                Con esto tendremos los dos archivos minificados de la librería 
                que nos aportan todas las funcionalidades pero de manera más eficiente.
            </p>

            <h3>Importar solo la grilla</h3>
            <p>
                Si lo que necesitamos es solamente la grilla de la librería 
                y dejar afuera todo lo demás lo que debemos hacer es ingresar el siguiente codigo.
            </p>

            <div class="js">
                <pre class="brush:js">
                    import "body-ui/dist/css/grillaSolo.min.css"
                </pre>
            </div>

        </article>
        <article id="llamadas" class="article scroll-item">
            <h2>Llamadas a los módulos de la librería</h2>
            <p>
                Cuando queramos inicializar cualquier módulo desde la parte de nuestro proyecto 
                que corrsponda los hacemos a través del objeto BS de la librería.
            </p>
            <div class="js">
                <pre class="brush:js">
                    window.BS.AutoInit() // Por ejemplo
                </pre>
            </div>

            <p>
                Cualquiera de los módulos puede inicializarse de esta manera y con sus respectivos 
                parámetros.
            </p>
        </article>
    </section>



    <div class="lista-scroll ocultar-desde-medianos">
        <ul>
            <li><a href="#introduccion">Introducción</a></li>
            <li><a href="#import">Importar</a></li>
            <li><a href="#llamadas">Llamadas</a></li>
            
        </ul>
    </div>


<?php require_once("./componentes/footer.php")?>



<script>
    BS.DesplegarSidebarFija().desplegar("#menuIntro")
</script>