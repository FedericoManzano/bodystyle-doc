
<?php $titulo = "Etiquetados" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">

    <?php 
        $titulo = "Etiquetados";
        $descripcion = "Elementos que brindan un mejor expperiencia de usuario ya que estos contenedores 
        proveen cierta información relevante sobre los elementos dentro del contenedor.";
        require_once("./articuloPrincipal.php");
    ?>
    
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="con-simbolo d-flex just-centrada ali-centrada" style="height: 300px">
            <span>Esto sería el contenido</span>
            <label class="etiqueta-total arriba">Ejemplo</label>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="con-simbolo" style="height: 300px">
                    <span>Esto sería el contenido</span>
                    <label class="etiqueta-total arriba">Ejemplo</label>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Las clases utilizadas en este caso serían <i>.con-simbolo</i> para el contenedor 
            padre y <i>.etqueta-total .arriba</i> que corresponde al ancho de la etiqueta y la posición.
        </div>
    </article>
    <article id="tamaños" class="article scroll-item">
        <h2>Tamaños y dirección</h2>
        <h3>100% arriba</h3>
        <div class="con-simbolo d-flex just-centrada ali-centrada" style="height: 200px">
            <span>Esto sería el contenido</span>
            <label class="etiqueta-total arriba">HTML</label>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="con-simbolo" style="height: 200px">
                    <span>Esto sería el contenido</span>
                    <label class="etiqueta-total arriba">HTML</label>
                </div>
            </pre>
        </div>
        <div class="divisor"></div>
        <h3>100% abajo</h3>
        <div class="ejemplo">
            <div class="con-simbolo d-flex just-centrada ali-centrada" style="height: 200px">
                <span>Esto sería el contenido</span>
                <label class="etiqueta-total abajo">CSS</label>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="con-simbolo" style="height: 200px">
                    <span>Esto sería el contenido</span>
                    <label class="etiqueta-total abajo">CSS</label>
                </div>
            </pre>
        </div>
        <div class="divisor"></div>
        <h3>Esquina superior izquierda</h3>
        <div class="con-simbolo d-flex just-centrada ali-centrada" style="height: 200px">
            <span>Esto sería el contenido</span>
            <label class="etiqueta arriba-izquierda">CSS</label>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="con-simbolo d-flex just-centrada ali-centrada" style="height: 200px">
                    <span>Esto sería el contenido</span>
                    <label class="etiqueta arriba-izquierda">CSS</label>
                </div>
            </pre>
        </div>
        <div class="divisor"></div>
        <h3>Esquina superior derecha</h3>
        <div class="ejemplo">
            <div class="con-simbolo d-flex just-centrada ali-centrada" style="height: 200px">
                <span>Esto sería el contenido</span>
                <label class="etiqueta arriba-derecha">CSS</label>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="con-simbolo" style="height: 200px">
                    <span>Esto sería el contenido</span>
                    <label class="etiqueta arriba-derecha">CSS</label>
                </div>
            </pre>
        </div>
        <div class="divisor"></div>
        <h3>Esquina inferior izquierda</h3>
        <div class="ejemplo">
            <div class="con-simbolo d-flex just-centrada ali-centrada" style="height: 200px">
                <span>Esto sería el contenido</span>
                <label class="etiqueta abajo-izquierda">CSS</label>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="con-simbolo" style="height: 200px">
                    <span>Esto sería el contenido</span>
                    <label class="etiqueta abajo-izquierda">CSS</label>
                </div>
            </pre>
        </div>
        <div class="divisor"></div>
        <h3>Esquina inferior derecha</h3>
        <div class="ejemplo">
            <div class="con-simbolo d-flex just-centrada ali-centrada" style="height: 200px">
                <span>Esto sería el contenido</span>
                <label class="etiqueta abajo-derecha">CSS</label>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="con-simbolo" style="height: 200px">
                    <span>Esto sería el contenido</span>
                    <label class="etiqueta abajo-derecha">CSS</label>
                </div>
            </pre>
        </div>
    </article>
    <article id="auto" class="article scroll-item">
        <h2>Dinámicos</h2>
        <p>
            Puede pasar que no queramos incorporar la etiqueta label en cada contenedor 
            y necesitemos que la etiqueta descriptiva aparezca de manera dinámica.
            Para esto necesitamos añadir atricutos con la información y la posición de la 
            etiqueta.
        </p>

        <div class="ejemplo">
            <div class="con-simbolo" style="height: 200px"
                data-tipo="etiqueta-total" 
                data-posicion="arriba"
                data-texto="CSS"
            >
                <span>Esto sería el contenido</span>
            </div>
        </div>
        <div class="alerta-op-verde">
            Los attr son data-tipo, data-posicion, data-texto.
        </div>
        <div class="html">
            <pre class="brush:html">
            <!-- 
                <div class="con-simbolo" style="height: 200px"
                    data-tipo="etiqueta-total" 
                    data-posicion="arriba"
                    data-texto="CSS"
            >
                    <span>Esto sería el contenido</span>
                </div>
            -->
            </pre>
        </div>
        <p>
            Para poder utilizar esta funcionalidad debemos inicializar el módulo.
        </p>

        <div class="js">
            <pre class="brush:js">
                BS.ContenedoresInit()
            </pre>
        </div>
        <p>
            El contenido de los attr son las clases que utilizamos 
            en los ejemplos anteriores y el texto es el contenido de label. 
        </p>

    </article>
</section>

<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#tamaños">Tamaños</a></li>
        <li><a href="#tamaños">Dinámicos</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")

    BS.ContenedoresInit()
</script>