<?php $titulo = "Alertas" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Alertas";
        $descripcion = "Elemento simple pero muy útil para mostrar información 
        importante dentro de nuestra página web.";
        require_once("./articuloPrincipal.php");
    ?>
    
    <article class="article scroll-item" id="muestra">
        <h2>Muestra</h2>
        <h3>Alerta roja</h3>
        <div class="ejemplo">
            <span class="alerta-roja">
                Lorem ipsum dolor sit amet consectetur 
                adipisicing elit.
                Totam quidem illo, accusamus repellat 
            </span>
        </div>
        
        <div class="html">
            <pre class="brush:html">
                <span class="alerta-roja">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit.
                    Totam quidem illo, accusamus repellat 
                </span>
            </pre>
        </div>
        
    </article>
    <article class="article scroll-item" id="colores">
        <h2>Colores</h2>
        <div class="ejemplo">
            <span class="alerta-roja mab-1">
                Lorem ipsum dolor sit amet consectetur 
                adipisicing elit.
                Totam quidem illo, accusamus repellat 
            </span>
            <span class="alerta-verde mab-1">
                Lorem ipsum dolor sit amet consectetur 
                adipisicing elit.
                Totam quidem illo, accusamus repellat 
            </span>
            <span class="alerta-azul mab-1">
                Lorem ipsum dolor sit amet consectetur 
                adipisicing elit.
                Totam quidem illo, accusamus repellat 
            </span>
            
            <span class="alerta-gris mab-1">
                Lorem ipsum dolor sit amet consectetur 
                adipisicing elit.
                Totam quidem illo, accusamus repellat 
            </span>
            
            <span class="alerta-negra mab-1">
                Lorem ipsum dolor sit amet consectetur 
                adipisicing elit.
                Totam quidem illo, accusamus repellat 
            </span>
          
            <span class="alerta-blanca mab-1">
                Lorem ipsum dolor sit amet consectetur 
                adipisicing elit.
                Totam quidem illo, accusamus repellat 
            </span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="alerta-roja mab-1">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit.
                    Totam quidem illo, accusamus repellat 
                </span>
                <span class="alerta-verde mab-1">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit.
                    Totam quidem illo, accusamus repellat 
                </span>
                <span class="alerta-azul mab-1">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit.
                    Totam quidem illo, accusamus repellat 
                </span>
                
                <span class="alerta-gris mab-1">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit.
                    Totam quidem illo, accusamus repellat 
                </span>
                
                <span class="alerta-negra mab-1">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit.
                    Totam quidem illo, accusamus repellat 
                </span>
            
                <span class="alerta-blanca mab-1">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit.
                    Totam quidem illo, accusamus repellat 
                </span>
            </pre>
        </div>
    </article>
    <article id="llenas" class="article scroll-item">
        <h2>Alertas Llenas</h2>
        <p>
            Alertas con un color de fondo.
        </p>

        <div class="ejemplo">
            <div class="alerta-op-azul">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="alerta-op-azul">
                    <h4>Titulo de la alerta</h4>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
                </div>
            </pre>
        </div>
        <h3>Colores</h3>
        <div class="ejemplo">
            <div class="alerta-op-rojo mab-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
            </div>
            <div class="alerta-op-verde mar-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
            </div>
            <div class="alerta-op-azul mar-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
            </div>
            <div class="alerta-op-gris mar-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
            </div>
            <div class="alerta-op-negro mar-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
            </div>
            <div class="alerta-op-blanco mar-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="alerta-op-rojo mab-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
                </div>
                <div class="alerta-op-verde mab-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
                </div>
                <div class="alerta-op-azul mab-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
                </div>
                <div class="alerta-op-gris mab-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
                </div>
                <div class="alerta-op-negro mab-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
                </div>
                <div class="alerta-op-blanco mab-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
                </div>
            </pre>
        </div>
    </article>
    <article id="cerrar" class="article scroll-item">
        <h2>Cerrar</h2>
        <p>
            Podemos agregar una clase para eliminar una alerta.
        </p>

        <div class="ejemplo">
            <div class="alerta-op-rojo alerta-cerrar">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="alerta-op-rojo alerta-cerrar">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet corrupti
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            La clase es <i>.alerta-cerrar</i>
        </div>
    </article>
</section>



<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#colores">Colores</a></li>
        <li><a href="#llenas">Fondos</a></li>
        <li><a href="#cerrar">Cerrar</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>