<?php $titulo="Slider"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>



<section class="contenido-pagina">
    <?php 
        $titulo = "Slider";
        $descripcion = "Es un elemento típico en las paginas web y le brida dinamismo a las presentaciones 
        realizadas.";
        require_once("./articuloPrincipal.php");
    ?> 

    <article id="defecto" class="article scroll-item">
        <h2>Slider Defecto</h2>
        
        <div class="ejemplo" style="height: 500px">
            <iframe src="slider/slider.html" width="100%" height="100%" frameborder="0" scrolling="yes"frameborder="0"></iframe>
        </div>
        <div class="html">
            <pre class="brush:html">
                <section class="slider-show">
                    <ul class="slider">
                        <li>
                            
                            <img src="https://images.unsplash.com/photo-1543145334-8be4a6b8fc7f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1403&q=80" alt="">
                            <div class="contenido">
                                <h4 class="fz-20 t-may">Librería de estilos CSS</h4>
                                <h2 class="fz-75">BodyStyle</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis recusandae quod</p>
                                <a href="#" class="btn btn-blanco-o m-a mar-6">Empezar</a>
                            </div>
                        </li>
                        <li>
                                <img src="https://i.redd.it/be4yfjotwrc41.jpg" alt="">
                            <div class="contenido">
                                <h4 class="fz-20 t-may">Librería de estilos CSS</h4>
                                <h2 class="fz-75">BodyStyle</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis recusandae quod</p>
                                <a href="#" class="btn btn-blanco-o m-a mar-6">Empezar</a>
                            </div>
                        </li>
                        <li>
                            <img src="https://i.redd.it/nfsczd4jc6d41.png" alt="">
                            <div class="contenido">
                                <h4 class="fz-20 t-may">Librería de estilos CSS</h4>
                                <h2 class="fz-75">BodyStyle</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis recusandae quod</p>
                                <a href="#" class="btn btn-blanco-o m-a mar-6">Empezar</a>
                            </div>
                        </li>
                    </ul>
                    <div class="botones">
                        <span class="icon-backward"></span>
                        <span class="icon-forward2"></span>
                    </div>

                    <div class="selectores-contenedor"></div>
                </section>
            </pre>
        </div>

        <div class="js">
            <pre class="brush:js">
                // Configuración por defecto 
                BS.SliderInit()
            </pre>
        </div>
        <div class="alerta-op-rojo">
            Las fotos utilizadas no pertenecen a la librería BodyStyle pueden verlas 
            o descargarlas de las siguientes páginas. <br> 
            <a href="https://images.unsplash.com" class="link">https://images.unsplash.com</a> <br>
            <a href="https://www.reddit.com/" class="link">https://www.reddit.com/</a>
        </div>
    </article>
    <article id="automatico" class="article scroll-item">
        <h2>Automático</h2>

        <div class="ejemplo" style="width:100%; height: 500px">
             <iframe src="slider/automatico.html" width="100%" height="100%" frameborder="0" scrolling="yes"frameborder="0"></iframe>
        </div>

        <div class="js">
            <pre class="brush:js">
            config = {
                efecto: "lateral", // Efecto de transición
                automatico: true, // Automático activado
                tiempo: 5000, // 5 segundos
                select: true // selectores inferiores NO
            }
            
            BS.SliderInit(config)
            </pre>
        </div>
    </article>
    <article id="fade" class="article scroll-item">
        <h2>Efecto Fade</h2>
        <div class="ejemplo" style="width: 100%; height: 500px">
            <iframe src="slider/fade.html" width="100%" height="100%" frameborder="0" scrolling="yes"frameborder="0"></iframe>
        </div>
    </article>
    <article id="configuracion" class="article scroll-item">
        <h2>Valores por defecto</h2>
        <div class="tabla-responsive">
                <table class="tabla-azul tabla-sm centrada">
                    <thead>
                        <tr>
                            <td>Atributo</td>
                            <td>Valores</td>
                            <td>Default</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>efecto</td>
                            <td>["lateral" | "fade"]</td>
                            <td>"lateral"</td>
                        </tr>
                        <tr>
                            <td>automatico</td>
                            <td>[false | true]</td>
                            <td>false</td>
                        </tr>
                        <tr>
                            <td>tiempo</td>
                            <td>tiempo [ms]</td>
                            <td>3000</td>
                        </tr>
                        <tr>
                            <td>select</td>
                            <td>[true | false]</td>
                            <td>true</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <h3 class="mar-3">Configuración ejemplo</h3>
            <div class="js">
                <pre class="brush:js">
                    config = {
                        efecto: "fade", // Efecto de transición
                        automatico: true, // Automático activado
                        tiempo: 5000, // 5 segundos
                        select: false // selectores inferiores NO
                    }

                    BS.SliderInit(config)
                </pre>
            </div>
    </article>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <a href="sliderMuestra.php" class="btn btn-azul" target="_blanck">Muestra</a>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#defecto">Defecto</a></li>
        <li><a href="#automatico">Automático</a></li>
        <li><a href="#configuracion">Configuración</a></li>
        <li><a href="#muestra">Muestra</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>
<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>