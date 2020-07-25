<?php $titulo = "Tips" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    
    <?php 
        $titulo = "Tips";
        $descripcion = "Cuando queremos añadir información a algun elemento 
        los tips son mut utiles para mejorar la experiencia del 
        usuario.";
        require_once("./articuloPrincipal.php");
    ?>

    <article class="article scroll-item" id="iniciacion">
        <h2>Activación</h2>
        <div class="js">
            <pre class="brush:js">
                <script>
                    BS.ToolTipsInit()
                </script>
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="muestra">
        <h2>Muestra</h2>
            <div class="ejemplo">
            
            <div class="d-flex flex-wrap just-cobertura">
                <a class="btn fd-azul-ve tips-ele mar-1" data-posicion="arriba" data-tips="Soy un tips!">
                    Arriba
                </a>
                <a class="btn fd-azul-ve tips-ele mar-1" data-posicion="abajo" data-tips="Soy un tips!">
                    Abajo
                </a>
                <a class="btn fd-azul-ve tips-ele mar-1" data-posicion="izquierda" data-tips="Soy un tips!">
                    Izquierda
                </a>
                <a class="btn fd-azul-ve tips-ele mar-1" data-posicion="derecha" data-tips="Soy un tips!">
                    Derecha
                </a>
            </div>
            </div>
        <span class="span">
            Cuando pasamos el mouse por encima del elemento se activa el tips con información
        </span>
    </article>
    <article class="article scroll-item" id="utilizacion">
        <h2>Utilización</h2>
        <p>
            Para poder utilizarlos necesitamos agregarle la clase <i>.tips-ele</i> al elemento, 
            luego añadirle el atributo <i>data-posicion</i> y por ultimo el atributo 
            <i>data-tips</i>
        </p>

        <div class="alerta-op-verde">
            data-posicion: ["izquierda" | "derecha" | "arriba" | "abajo"]. </br>
            data-tips: el texto que queremos mostrar
        </div>
        <h3>Ejemplo</h3>
        <p>Tips del lado de arriba</p>
        <div class="ejemplo">
            <a class="btn fd-azul-ve tips-ele" data-posicion="arriba", data-tips="Soy un tips!!">Arriba</a>
        </div>
        <div class="js">
            <pre class="brush:html">
                
                <a 
                    class="btn fd-azul-ve tips-ele" 
                    data-posicion="arriba" 
                    data-tips="Soy un tips!!">
                    Arriba
                </a>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Si lo queremos por ejemplo a la izquierda simplemente en data-posicion="izquierda"
        </div>
        <div class="ejemplo">
            <a class="btn fd-azul-ve tips-ele" data-posicion="izquierda" data-tips="Soy un tips izquierdo!">Ejemplo</a>
        </div>
        <div class="js">
            <pre class="brush:html">
                
            <a class="btn fd-azul-ve tips-ele" data-posicion="izquierda" data-tips="Soy un tips izquierdo!">Ejemplo</a>
            </pre>
        </div>
    </article>
</section>



<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#iniciacion">Activación</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#utilizacion">Utilización</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuJS")
</script>