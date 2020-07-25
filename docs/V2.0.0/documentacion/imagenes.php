
<?php $titulo = "Imágenes"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">

    <?php 
        $titulo = "Imágenes";
        $descripcion = "En esta sección vamos a ver las utilidades de la librería para 
        utilizar imágenes.";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="display" class="article scroll-item">
        <h2>Display de imagenes</h2>
        <p>
            En este apartado vemos como podemos establecer tamaños de imágenes predefinidos y fijos 
            a través de la clase <i>.img-display-{tamaño}</i>, siendo tamaño la medida del ancho 
            y el alto de la imágen.
        </p>
        <div class="ejemplo">
            <div class="d-flex just-cobertura flex-wrap-m">
                <div>
                    <img class="img-display-16" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <small class="fz-15" style="display:block;">16 px</small>
                </div>

                <div>
                    <img class="img-display-24" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <small class="fz-15" style="display:block;">24 px</small>
                </div>
                <div>
                    <img class="img-display-32" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <small class="fz-15" style="display:block;">32 px</small>
                </div>
                <div>
                    <img class="img-display-40" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <small class="fz-15" style="display:block;">40 px</small>
                </div>
                <div>
                    <img class="img-display-48" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <small class="fz-15" style="display:block;">48 px</small>
                </div>
                <div>
                    <img class="img-display-64" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <small class="fz-15" style="display:block;">64 px</small>
                </div>
                <div>
                    <img class="img-display-128" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <small class="fz-15" style="display:block;">128 px</small>
                </div>
            </div>
        </div>
        <div class="alerta-op-verde">
            Los tamaños son multiplos de 8 y van desde 8 a 800 px. <br>
            Las clase utilizada es <i>.img-display-{tam}</i>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-cobertura flex-wrap-m">
                    <div>
                        <img class="{ url ...}">
                        <small class="fz-15" style="display:block;">16 px</small>
                    </div>

                    <div>
                        <img class="img-display-24" src="{ url ...}">
                        <small class="fz-15" style="display:block;">24 px</small>
                    </div>
                    <div>
                        <img class="img-display-32" src="{ url ...}">
                        <small class="fz-15" style="display:block;">32 px</small>
                    </div>
                    <div>
                        <img class="img-display-40" src="{ url ...}">
                        <small class="fz-15" style="display:block;">40 px</small>
                    </div>
                    <div>
                        <img class="img-display-48" src="{ url ...}">
                        <small class="fz-15" style="display:block;">48 px</small>
                    </div>
                    <div>
                        <img class="img-display-64" src="{ url ...}">
                        <small class="fz-15" style="display:block;">64 px</small>
                    </div>
                    <div>
                        <img class="img-display-128" src="{ url ...}">
                        <small class="fz-15" style="display:block;">128 px</small>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="bordeRed" class="article scroll-item">
        <h2>Borde Redondeado</h2>
        <p>
            Si queremos imagenes con borde redondeado podemos usar la clase <i>.img-red-bor</i>
        </p>
        <div class="ejemplo">
            <img class="img-display-128 img-red-bor" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
            <small class="fz-15" style="display:block;">128 px</small>
        </div>
        <div class="html">
            <pre class="brush:html">
                <img class="img-display-128 img-red-bor" src="{ url ...}" alt="">
                <small class="fz-15" style="display:block;">128 px</small>
            </pre>
        </div>
    </article>
    <article id="cuadro" class="article scroll-item">
        <h2>Imagenes en un cuadro</h2>
        <p>
            Vamos a ver una clase que permite definir un cuadro para la imagen 
            a través de bordes de colores.
        </p>
        <div class="ejemplo">
            <img class="img-display-128 img-display-enc" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
        </div>
        <div class="html">
            <pre class="brush:html">
                <img class="img-display-128 img-display-enc" src="{ url ...}" alt="">
                <small class="fz-15" style="display:block;">128 px</small>
            </pre>
        </div>

        <div class="alerta-op-verde">
            La clase utilizada es <i>.img-display-enc</i> y por defecto introduce a la 
            imágen dentro de un borde gris.
        </div>

        <h3>Colores</h3>
        <div class="ejemplo">
            <div class="d-flex just-cobertura flex-wrap">
                <img class="img-display-128 img-display-enc  bor-verde-1 fd-verde-t m-1" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg">
                <img class="img-display-128 img-display-enc  m-1 bor-azul-c-1 fd-azul-t" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg">
                <img class="img-display-128 img-display-enc  m-1 fd-rojo-t " src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg">
                <img class="img-display-128 img-display-enc  m-1 fd-gris-az-c" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg">
                <img class="img-display-128 img-display-enc  m-1 bor-azul-ve-1" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg">

            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-cobertura flex-wrap">
                    <img class="img-display-128 img-display-enc  bor-verde-1 fd-verde-t m-1" src="...">
                    <img class="img-display-128 img-display-enc  m-1 bor-azul-c-1 fd-azul-t" src="...">
                    <img class="img-display-128 img-display-enc  m-1 fd-rojo-t " src="...">
                    <img class="img-display-128 img-display-enc  m-1 fd-gris-az-c" src="...">
                    <img class="img-display-128 img-display-enc  m-1 bor-azul-ve-1" src="...">
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Para definir los bordes de diferentes colores utilizamos los utilitarios de la 
            librería con las clases <i>.bor-{color}-{tam}</i> y las clases <i>.fd-{color}</i> de la sección 
            fondos.
        </div>
    </article>
    <article id="resposive" class="article scroll-item">
        <h3>Imágenes responsive</h3>
        <div class="ejemplo">
            <img class="img-responsive" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg">
        </div>
        <div class="alerta-op-verde">
            La clase utilizada en este caso es <i>.img-responsive</i>.
        </div>
        <div class="html">
            <pre class="brush:html">
            <img class="img-responsive" src="{ruta img ...}">
            </pre>
        </div>
    </article>
    <article id="efecto" class="article scroll-item">
        <h2>Efecto pantalla completa</h2>
        <div class="ejemplo">
            <img class="img-responsive img-exp" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg">
        </div>

        <div class="alerta-op-verde">
            La clase utilizada en este caso es <i>.img-exp</i>.
            y es necesario inicializar el módulo para poder utilizarla.
        </div>


        <div class="js">
            <pre class="brush:js">
                BS.ImagenesInit()
            </pre>
        </div>


        <p>
            El código del ejemplo es el siguiente.
        </p>

        <div class="html">
            <pre class="brush:html">
                <img class="img-responsive img-exp" src="...">
            </pre>
        </div>


    </article>

    <article id="usuario" class="article scroll-item">
        <h2>Imagen usuario</h2>
        <p>
            Podemos a través de la librería generar el tipico cuadro de usaurio con una 
            imagen en la parte izquierda.
        </p>
        <div class="ejemplo">
            <div class="usuario-imagen">
                <img src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" alt="usuario imagen">
                <a href="#">AlbertoManzano</a>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="usuario-imagen">
                    <img src="{...}" alt="usuario imagen">
                    <a href="#">AlbertoManzano</a>
                </div>
            </pre>
        </div>

        <p>
            Un ejemplo de esto es cuando en el menú de navegación existe este elemento.
        </p>

        <div class="ejemplo">
            <div class="menu">
                <div class="contenedor">
                    <a href="#" class="menu-logo p-1">BodyStyle</a>
                    <ul class="lista derecha">
                        <div class="usuario-imagen">
                            <img src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" alt="usuario imagen">
                            <a  class="c-blanco dropdown-toggle" data-target="#ejemplo">AlbertoManzano</a>
                        </div>
                        <div class="btn-grupo">
                            <a href="#" class="btn-sm btn-blanco bor-pill waves">LogOut</a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="menu">
                    <div class="contenedor">
                        <a href="#" class="menu-logo p-1">BodyStyle</a>
                        <ul class="lista derecha">
                            <div class="usuario-imagen">
                                <img src="..." alt="usuario imagen">
                                <a  class="c-blanco dropdown-toggle" data-target="#ejemplo">AlbertoManzano</a>
                            </div>
                            <div class="btn-grupo">
                                <a href="#" class="btn-sm btn-rojo bor-pill waves">LogOut</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="redondas" class="article scroll-item">
        <h2>Imágenes Redondas</h2>
        <div class="ejemplo">
            <div class="contenedor mar-10 d-flex flex-wrap-m">
                <img class="img-redonda-25 img-exp" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                <img class="img-redonda-50" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                <img class="img-redonda-100" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                <img class="img-redonda-150" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="contenedor mar-10 d-flex flex-wrap-m">
                    <img class="img-redonda-25" src="..." alt="Imagen1 Redonda">
                    <img class="img-redonda-50" src="..." alt="Imagen2 Redonda">
                    <img class="img-redonda-100" src="..." alt="Imagen3 Redonda">
                    <img class="img-redonda-150" src="..." alt="Imagen4 Redonda">
                </div>
            </pre>
        </div>

        <p>
            La clase utilizada para crear imagenes redondas es <i>.img-redonda-{tam}</i>, siendo 
            el tamaño la medida en (px) del ancho y el alto
        </p>
    </article>
</section>


<div class="dropdown" id="ejemplo">
    <ul>
        <li><a href="#" class="f-grosor-6">Perfil</a></li>
        <li><a href="#">Noticias</a></li>
        <li><a href="#">Estadísticas</a></li>
        <div class="divisor"></div>
        <li><a href="#">Configuración</a></li>
        <li><a href="#">Salir</a></li>
    </ul>

</div>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#display">Display</a></li>
        <li><a href="#bordeRed">Borde Redondeado</a></li>
        <li><a href="#cuadro">Cuadros</a></li>
        <li><a href="#responsive">Responsive</a></li>
        <li><a href="#efecto">Efecto</a></li>
        <li><a href="#usuario">Usuario</a></li>
        <li><a href="#redondas">Redondas</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>