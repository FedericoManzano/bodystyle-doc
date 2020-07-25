<?php $titulo = "Redes Sociales"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">


    <?php 
        $titulo = "Redes Sociales";
        $descripcion = "En este apartado dejamos un elemento fixed para permitir 
        enlazar las redes sociales pertinentes.";
        require_once("./articuloPrincipal.php");
    ?>
    
    <article class="article">
        <h2>Redes vertical</h2>
        <div class="alerta-op-rojo mab-2">
            Los íconos no pertenecen a la librería fueron descargados 
            del siguiente sitio. <a href="https://icomoon.io/" class="link">https://icomoon.io/</a>
        </div>
        <p>
            En la zona derecha de esta página podemos ver los diferentes iconos de redes sociales 
            y una animación hover que despliega una palabra por cada ícono.
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="social">
                    <a href="#" class="fd-facebook">
                        <span class="fd-facebook">Share</span>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="#" class="fd-twiter">
                        <span class="fd-twiter">Tweet</span>
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="#" class="fd-pinterest">
                        <span class="fd-pinterest">Pin</span>
                        <i class="icon-pinterest2"></i>
                    </a>
                    <a href="#" class="fd-linkedin">
                        <span class="fd-linkedin">Share</span>
                        <i class="icon-linkedin2"></i>
                    </a>
                    <a href="#" class="fd-whatsapp">
                        <span class="fd-whatsapp">Share</span>
                        <i class="icon-whatsapp"></i>
                    </a>
                    <a href="#" class="fd-youtube">
                        <span class="fd-youtube">Share</span>
                        <i class="icon-google-plus"></i>
                    </a>
                    <a href="#" class="fd-vimeo">
                        <span class="fd-vimeo">Ver</span>
                        <i class="icon-vimeo"></i>
                    </a>
                </div>
            </pre>
        </div>

        <div class="ejemplo">
        <div class="social">
            <a href="#" class="fd-facebook">
                <span class="fd-facebook">Share</span>
                <i class="icon-facebook c-blanco"></i>
            </a>
            <a href="#" class="fd-twiter">
                <span class="fd-twiter">Tweet</span>
                <i class="icon-twitter c-blanco"></i>
            </a>
            <a href="#" class="fd-pinterest">
                <span class="fd-pinterest">Pin</span>
                <i class="icon-pinterest2 c-blanco"></i>
            </a>
            <a href="#" class="fd-linkedin">
                <span class="fd-linkedin">Share</span>
                <i class="icon-linkedin2 c-blanco"></i>
            </a>
            <a href="#" class="fd-whatsapp">
                <span class="fd-whatsapp">Share</span>
                <i class="icon-whatsapp c-blanco"></i>
            </a>
            <a href="#" class="fd-youtube">
                <span class="fd-youtube">Share</span>
                <i class="icon-google-plus c-blanco"></i>
            </a>
            <a href="#" class="fd-vimeo">
                <span class="fd-vimeo">Ver</span>
                <i class="icon-vimeo c-blanco"></i>
            </a>
        </div>
        </div>
        
        <div class="alerta-op-verde">
            Los colores de las diferentes redes sociales podemos obtenerlos a través de 
            las clases fd-{red-social} por ejemplo fd-facebook.
        </div>

        <h3>Estructura</h3>
        <div class="html">
            <pre class="brush:html">
                <div class="social"> 
                    <!-- 
                        Dentro de este div se encuentra 
                        todo el componente
                    -->
                    <a href="#" class="fd-facebook">
                        <!-- Ancla con la clase del color de la red social-->
                        <span class="fd-facebook">Share</span> <!-- Span con la palabra relacionada -->
                        <i class="icono"></i> <!--El ícono -->
                    </a>
                </div>
            </pre>
        </div>
    </article>
    <article class="article">
        <h2>Redes Horizontal Rotacional</h2>
        <p>
            Disponemos también de un menú de redes sociales pero horizontal.
        </p>

      
            <div class="social-horizontal-rot">
                <ul>
                    <a href="#" class="fd-facebook"><i class="icon-facebook c-blanco"></i></a>
                    <a href="#" class="fd-twiter"><i class="icon-twitter c-blanco"></i></a>
                    <a href="#" class="fd-pinterest"><i class="icon-pinterest2 c-blanco"></i></a>
                    <a href="#" class="fd-linkedin"><i class="icon-linkedin2 c-blanco"></i></a>
                    <a href="#" class="fd-whatsapp"><i class="icon-whatsapp c-blanco"></i></a>
    
                </ul>
            </div>
            
            <div class="html mar-10">
                <pre class="brush:html">
                    <div class="social-horizontal-rot">
                        <ul>
                            <a href="#" class="fd-facebook"><i class="icon-facebook c-blanco"></i></a>
                            <a href="#" class="fd-twiter"><i class="icon-twitter c-blanco"></i></a>
                            <a href="#" class="fd-pinterest"><i class="icon-pinterest2 c-blanco"></i></a>
                            <a href="#" class="fd-linkedin"><i class="icon-linkedin2 c-blanco"></i></a>
                            <a href="#" class="fd-whatsapp"><i class="icon-whatsapp c-blanco"></i></a>
            
                        </ul>
                    </div>
                </pre>
            </div>
            <div class="alerta-op-verde">
                Es importante en este caso, envolver a links dentro de las etiquetas < ul >. <br> 
                Luego a la lista envolverla en un < div > con la clase 
                .social-horizontal-rot. 
                Por último los colores de fondo de los enlaces lo logramos con las clases fd-{color} dispuestas 
                por la librería.
            </div>
    </article>
    <article class="article">
        <h2>Redes Horizontal Escala</h2>

      
            <div class="social-horizontal-esc">
                <ul>
                    <a href="#" class="fd-facebook"><i class="icon-facebook c-blanco"></i></a>
                    <a href="#" class="fd-twiter"><i class="icon-twitter c-blanco"></i></a>
                    <a href="#" class="fd-pinterest"><i class="icon-pinterest2 c-blanco"></i></a>
                    <a href="#" class="fd-linkedin"><i class="icon-linkedin2 c-blanco"></i></a>
                    <a href="#" class="fd-whatsapp"><i class="icon-whatsapp c-blanco"></i></a>
    
                </ul>
            </div>
            <div class="html mar-10">
                <pre class="brush:html">
                    <div class="social-horizontal-esc">
                        <ul>
                            <a href="#" class="fd-facebook"><i class="icon-facebook c-blanco"></i></a>
                            <a href="#" class="fd-twiter"><i class="icon-twitter c-blanco"></i></a>
                            <a href="#" class="fd-pinterest"><i class="icon-pinterest2 c-blanco"></i></a>
                            <a href="#" class="fd-linkedin"><i class="icon-linkedin2 c-blanco"></i></a>
                            <a href="#" class="fd-whatsapp"><i class="icon-whatsapp c-blanco"></i></a>
            
                        </ul>
                    </div>
                </pre>
            </div>
    </article>

    <article class="article">
        <h2>Redes Horizontal Extendido</h2>

      
            <div class="social-horizontal-ext">
                <ul>
                    <a href="#" class="fd-facebook"><b class="icon-facebook"></b></a>
                    <a href="#" class="fd-twiter"><b class="icon-twitter"></b></a>
                    <a href="#" class="fd-pinterest"><b class="icon-pinterest2"></b></a>
                    <a href="#" class="fd-linkedin"><b class="icon-linkedin2"></b></a>
                    <a href="#" class="fd-whatsapp"><b class="icon-whatsapp"></b></a>
    
                </ul>
            </div>
            <div class="html mar-10">
                <pre class="brush:html">
                    <div class="social-horizontal-ext">
                        <ul>
                            <a href="#" class="fd-facebook"><i class="icon-facebook c-blanco"></i></a>
                            <a href="#" class="fd-twiter"><i class="icon-twitter c-blanco"></i></a>
                            <a href="#" class="fd-pinterest"><i class="icon-pinterest2 c-blanco"></i></a>
                            <a href="#" class="fd-linkedin"><i class="icon-linkedin2 c-blanco"></i></a>
                            <a href="#" class="fd-whatsapp"><i class="icon-whatsapp c-blanco"></i></a>
            
                        </ul>
                    </div>
                </pre>
            </div>
    </article>
</section>



<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>