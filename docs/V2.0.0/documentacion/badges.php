
<?php $titulo = "Badges" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">

    <?php 
        $titulo = "Badges";
        $descripcion = "Elementos que permiten mostrar información en lugares 
        reducidos de la página y con estilos elegantes para mejorar la estética 
        del sitio.";
        require_once("./articuloPrincipal.php");
    ?>
   
    <article id="muestra" class="article scroll-item">
        <h2>Muestra Etiquetas</h2>
        <p>
            Badges tipo etiqueta de varios colores.
        </p>
        <div class="ejemplo">
            <span class="badges-etiqueta badges-etiqueta-rojo">EtiquetaRoja</span>
        </div>
        <div class="alerta-op-verde">
            Las etiqueta pueden utilizarse a través de la clase <i>.badges-etiqueta-{color}</i> 
            dentro e una etiqueta span. 
        </div>

        <div class="html">
            <pre class="brush:html">
                <span class="badges-etiqueta badges-etiqueta-rojo">BadgeRojo</span>
            </pre>
        </div>
    </article>
    <article id="colores" class="article scroll-item">
        <h2>Colores</h2>

        <p>
            Las etquetas pueden utilizarse en direntes colores como 
            se muestra en el ejemplo sieguiente.
        </p>
        
        <div class="ejemplo">

            <div class="d-flex flex-wrap just-cobertura">
                <span class="badges-etiqueta-sm badges-etiqueta-rojo m-1">BadgeRojo</span>
                <span class="badges-etiqueta-sm badges-etiqueta-verde m-1">BadgeVerde</span>
                <span class="badges-etiqueta-sm badges-etiqueta-azul m-1">BadgeAzul</span>
                <span class="badges-etiqueta-sm badges-etiqueta-gris m-1">BadgeGris</span>
                <span class="badges-etiqueta-sm badges-etiqueta-negro m-1">Badgenegro</span>
                <span class="badges-etiqueta-sm badges-etiqueta-blanco m-1">BadgeBlanco</span>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <span class="badges-etiqueta-sm badges-etiqueta-rojo m-1">BadgeRojo</span>
                    <span class="badges-etiqueta-sm badges-etiqueta-verde m-1">BadgeVerde</span>
                    <span class="badges-etiqueta-sm badges-etiqueta-azul m-1">BadgeAzul</span>
                    <span class="badges-etiqueta-sm badges-etiqueta-gris m-1">BadgeGris</span>
                    <span class="badges-etiqueta-sm badges-etiqueta-negro m-1">Badgenegro</span>
                    <span class="badges-etiqueta-sm badges-etiqueta-blanco m-1">BadgeBlanco</span>
                </div>
            </pre>
        </div>
        <h3>Tamaños</h3>
        <div class="ejemplo">

            <div class="d-flex flex-wrap just-cobertura">
                <span class="badges-etiqueta-sm badges-etiqueta-azul m-1">BadgeRojo</span>
                <span class="badges-etiqueta badges-etiqueta-azul m-1">BadgeVerde</span>
                <span class="badges-etiqueta-lg badges-etiqueta-azul m-1">BadgeAzul</span>
            </div>
        </div>
        <div class="codigo">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <span class="badges-etiqueta-sm badges-etiqueta-azul m-1">BadgeRojo</span>
                    <span class="badges-etiqueta badges-etiqueta-azul m-1">BadgeVerde</span>
                    <span class="badges-etiqueta-lg badges-etiqueta-azul m-1">BadgeAzul</span>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Los tamaños son sm _ lg siendo el _ el tamaño mediano. <br> 
            La clase sería <i>.badges-etiqueta-{tamaño}</i>
        </div>
    </article>
    <article id="notificaciones" class="article scroll-item">
        <h2>Notificaciones</h2>

        <p>
            Ahora vamos a ver los badges del tipo notificaciones.
        </p>
        
        <div class="ejemplo">
            <div class="h1">Cabecera h1<span class="badge badge-gris mar-2">Nuevo</span></div>
            <div class="h2">Cabecera h2 <span class="badge badge-gris mar-2">Nuevo</span></div>
            <div class="h3">Cabecera h3 <span class="badge badge-gris mar-2">Nuevo</span></div>
            <div class="h4">Cabecera h4 <span class="badge badge-gris mar-2">Nuevo</span></div>
            <div class="h5">Cabecera h5 <span class="badge badge-gris mar-2">Nuevo</span></div>
            <div class="h6">Cabecera h6 <span class="badge badge-gris mar-2">Nuevo</span></div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="h1">Cabecera h1<span class="badge badge-gris mar-2">Nuevo</span></div>
                <div class="h2">Cabecera h2 <span class="badge badge-gris mar-2">Nuevo</span></div>
                <div class="h3">Cabecera h3 <span class="badge badge-gris mar-2">Nuevo</span></div>
                <div class="h4">Cabecera h4 <span class="badge badge-gris mar-2">Nuevo</span></div>
                <div class="h5">Cabecera h5 <span class="badge badge-gris mar-2">Nuevo</span></div>
                <div class="h6">Cabecera h6 <span class="badge badge-gris mar-2">Nuevo</span></div>
            </pre>
        </div>
        <h3>Colores</h3>
            <div class="ejemplo">
                <div class="h1">Cabecera h1<span class="badge badge-negro mar-2">Negro</span></div>
                <div class="h2">Cabecera h2 <span class="badge badge-rojo mar-2">Rojo</span></div>
                <div class="h3">Cabecera h3 <span class="badge badge-verde mar-2">Verde</span></div>
                <div class="h4">Cabecera h4 <span class="badge badge-azul mar-2">Azul</span></div>
                <div class="h5">Cabecera h5 <span class="badge badge-blanco mar-2">Blanco</span></div>
                <div class="h6">Cabecera h6 <span class="badge badge-gris mar-2">Gris</span></div>
            </div>
            <div class="html">
            <pre class="brush:html">
                <div class="h1">Cabecera h1<span class="badge badge-negro mar-2">Negro</span></div>
                <div class="h2">Cabecera h2 <span class="badge badge-rojo mar-2">Rojo</span></div>
                <div class="h3">Cabecera h3 <span class="badge badge-verde mar-2">Verde</span></div>
                <div class="h4">Cabecera h4 <span class="badge badge-azul mar-2">Azul</span></div>
                <div class="h5">Cabecera h5 <span class="badge badge-blanco mar-2">Blanco</span></div>
                <div class="h6">Cabecera h6 <span class="badge badge-gris mar-2">Gris</span></div>
            </pre>
        </div>
        <h3>Botones</h3>
        <div class="ejemplo">
            <a class="btn fd-azul-c">
                Notificación 
                <span class="badge badge-blanco">4</span>
            </a>
            <a class="btn fd-rojo mar-1">
                Perfil 
                <span class="badge badge-blanco">9</span>
            </a>
            <a class="btn fd-verde mar-1">
                Actualizaciones 
                <span class="badge badge-blanco b-redondo">15</span>
            </a>
            <span class="badges-etiqueta-lg badges-etiqueta-azul m-1">
                BadgeAzul 
                <span class="badge badge-blanco b-redondo">5</span>
            </span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <a class="btn fd-azul-c">
                    Notificación 
                    <span class="badge badge-blanco">4</span>
                </a>
                <a class="btn fd-rojo mar-1">
                    Perfil 
                    <span class="badge badge-blanco">9</span>
                </a>
                <a class="btn fd-verde mar-1">
                    Actualizaciones 
                    <span class="badge badge-blanco b-redondo">15</span>
                </a>
                <span class="badges-etiqueta-lg badges-etiqueta-azul m-1">
                    BadgeAzul 
                    <span class="badge badge-blanco b-redondo">5</span>
                </span>
            </pre>
        </div>

    </article>
    <article id="like" class="article scroll-item">
        <h2>Botón Like</h2>
        <p>
            Un botón muy útil cualdo trabajamos con artículos evaluados por la gente.
        </p>
        <div class="ejemplo">
            <label for="#" class="badge-social">
                <span class="badge-like">Like</span>
                <span class="badge-cantidad">
                    100K
                </span>
            </label>
        </div>
        <div class="html">
            <pre class="brush:html">
                <label for="#" class="badge-social">
                    <span class="badge-like">Like</span>
                    <span class="badge-cantidad">
                        100K
                    </span>
                </label>
            </pre>
        </div>
    </article>
    <article id="mensajes" class="article scroll-item">
        <h2>Mensajes Formularios</h2>
        <p>
            Se pueden utilizar para diversas cosas pero es recomendado 
            para darle información al usuario sobre los campos de un formulario.
        </p>
        <div class="ejemplo">
            <div class="form-grupo">
                <label for="usuario">Usuario</label>
                <input type="text" placeholder="Usuario" name="usuario" required>
            </div>
            <label for="#" class="badge-mje-arr badge-mje-rojo">Campo de usuario obligatorio *</label>
            
            <div class="form-grupo mar-2">
                <label for="pass">Clave</label>
                <input type="password" placeholder="Clave" name="pass"> 
            </div>
            <label for="#" class="badge-mje-arr badge-mje-gris">De 6 a 8 Caracteres alfanuméricos</label>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="form-grupo">
                    <label for="usuario">Usuario</label>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                </div>
                <label for="#" class="badge-mje-arr badge-mje-rojo">Campo de usuario obligatorio *</label>
                
                <div class="form-grupo mar-2">
                    <label for="pass">Clave</label>
                    <input type="password" placeholder="Clave" name="pass"> 
                </div>
                <label for="#" class="badge-mje-arr badge-mje-gris">
                    De 6 a 8 Caracteres alfanuméricos
                </label>
            </pre>
        </div>
        <h3>Colores</h3>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <label for="#" class="badge-mje-arr badge-mje-rojo">Mensaje</label>
                <label for="#" class="badge-mje-arr badge-mje-verde">Mensaje</label>
                <label for="#" class="badge-mje-arr badge-mje-azul">Mensaje</label>
                <label for="#" class="badge-mje-arr badge-mje-negro">Mensaje</label>
                <label for="#" class="badge-mje-arr badge-mje-gris">Mensaje</label>
                <div class="fd-negro">
                    <label for="#" class="badge-mje-arr badge-mje-blanco c-gris">Mensaje</label>
                </div>
                
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <label for="#" class="badge-mje-arr badge-mje-rojo">Mensaje</label>
                <label for="#" class="badge-mje-arr badge-mje-verde">Mensaje</label>
                <label for="#" class="badge-mje-arr badge-mje-azul">Mensaje</label>
                <label for="#" class="badge-mje-arr badge-mje-negro">Mensaje</label>
                <label for="#" class="badge-mje-arr badge-mje-gris">Mensaje</label>
                <label for="#" class="badge-mje-arr badge-mje-blanco c-gris">Mensaje</label>
            </pre>
        </div>
        <h3>Dirección</h3>
        <p>
            Podemos utilizar las cuatro posiciones arriba, abajo, derecha e izquierda.
        </p>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <label for="#" class="badge-mje-arr badge-mje-negro">Mensaje</label>
                <label for="#" class="badge-mje-aba badge-mje-negro">Mensaje</label>
                <label for="#" class="badge-mje-der badge-mje-negro">Mensaje</label>
                <label for="#" class="badge-mje-izq badge-mje-negro">Mensaje</label>
            </div>
        </div>
    </article>
    <article id="compartir" class="article scroll-item">
        <h2>Botón Compartir</h2>
        <div class="ejemplo par-10">
            <label for="#" class="badge-compartir-gris">SHARE
                <span>6.5K</span>
            </label>
        </div>
        <div class="html">
            <pre class="brush:html">
                <label for="#" class="badge-compartir-gris">SHARE
                    <span>6.5K</span>
                </label>
            </pre>
        </div>
        <h3>Colores</h3>
        <div class="ejemplo par-10">
            <div class="d-flex flex-wrap just-cobertura">
                <label for="#" class="badge-compartir-gris">SHARE
                    <span>6.5K</span>
                </label>
                <label for="#" class="badge-compartir-rojo">SHARE
                    <span>6.5K</span>
                </label>
                <label for="#" class="badge-compartir-verde">SHARE
                    <span>6.5K</span>
                </label>
                <label for="#" class="badge-compartir-azul">SHARE
                    <span>6.5K</span>
                </label>
                <label for="#" class="badge-compartir-negro">SHARE
                    <span>6.5K</span>
                </label>
                <label for="#" class="badge-compartir-blanco">SHARE
                    <span>6.5K</span>
                </label>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <label for="#" class="badge-compartir-gris">SHARE
                    <span>6.5K</span>
                </label>
                <label for="#" class="badge-compartir-rojo">SHARE
                    <span>6.5K</span>
                </label>
                <label for="#" class="badge-compartir-verde">SHARE
                    <span>6.5K</span>
                </label>
                <label for="#" class="badge-compartir-azul">SHARE
                    <span>6.5K</span>
                </label>
                <label for="#" class="badge-compartir-negro">SHARE
                    <span>6.5K</span>
                </label>
                <label for="#" class="badge-compartir-blanco">SHARE
                    <span>6.5K</span>
                </label>
            </pre>
        </div>
        <h3>Íconos</h3>
        <p>
            Podemos agregarle iconos al botón.
        </p>
        <div class="ejemplo par-10">
            <label for="#" class="badge-compartir-rojo">
                <small class="icon-google fz-15"></small>
                SHARE
                <span>6.5K</span>
            </label>
        </div>
        <div class="html">
            <pre class="brush:html">
                <label for="#" class="badge-compartir-rojo">
                    <small class="icon-google fz-15"></small>
                    SHARE
                    <span>6.5K</span>
                </label>
            </pre>
        </div>
        <div class="alerta-op-rojo">
            Los íconos no perteneces a la librería. 
            <br>
            Puede obtenerlos de la página <a class="link" href="https://icomoon.io/">https://icomoon.io/</a>
        </div>
    </article>
    <article id="solapas" class="article scroll-item">
        <h2>Solapas</h2>
        <div class="ejemplo">
            <div class="contenedor-relativo">
                <img class="img-display-256 img-display-enc" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="Solapa verde">
                <span class="badge-solapa-verde">
                    Solapa
                </span>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc" src="{}" alt="Solapa verde">
                    <span class="badge-solapa-verde">
                        Solapa
                    </span>
                </div>
            </pre>
        </div>
        <p>
            Podemos agregarle estas solapas a todo elemento que tenga un ancho y un alto. 
            Para poder hacer esto tenemos que agregarle al contenedor padre la clase 
            <span class="c-azul-c">.contenedor-relativo</span>. 
        </p>

        <div class="ejemplo">
            <div class="tarjeta contenedor-relativo ov-visible" style="width: 18rem">
                <div class="tarjeta-img">
                    <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                </div>
                <div class="tarjeta-cuerpo">
                    <h4 class="tarjeta-titulo">
                        Titulo tarjeta
                    </h4>
                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                        facilis consequatur provident.</p>
                </div>
                <span class="badge-solapa-rojo">
                    Solapa
                </span>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tarjeta contenedor-relativo ov-visible" style="width: 18rem">
                    <div class="tarjeta-img">
                        <img src="..." alt="Tarjeta Ejemplo">
                    </div>
                    <div class="tarjeta-cuerpo">
                        <h4 class="tarjeta-titulo">
                            Titulo tarjeta
                        </h4>
                        <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                            facilis consequatur provident.</p>
                    </div>
                    <span class="badge-solapa-rojo">
                        Solapa
                    </span>
                </div>
            </pre>
        </div>
        <p>
            Las clases son <i>.badge-solapa-{color}</i> siendo color:
        </p>
        <h3>Muestra</h3>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-verde">
                        Solapa Verde
                    </span>
                </div>
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-rojo">
                        Solapa Verde
                    </span>
                </div>
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-azul">
                        Solapa Azul
                    </span>
                </div>
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-gris">
                        Solapa Gris
                    </span>
                </div>
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-blanco">
                        Solapa Blanco
                    </span>
                </div>
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-negro">
                        Solapa Negro
                    </span>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-verde">
                        Solapa Verde
                    </span>
                </div>
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-rojo">
                        Solapa Verde
                    </span>
                </div>
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-azul">
                        Solapa Azul
                    </span>
                </div>
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-gris">
                        Solapa Gris
                    </span>
                </div>
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-blanco">
                        Solapa Blanco
                    </span>
                </div>
                <div class="contenedor-relativo">
                    <img class="img-display-256 img-display-enc " style="position: relative;" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-solapa-negro">
                        Solapa Negro
                    </span>
                </div>
            </pre>
        </div>
        <h3>Etiquetas en las esquinas</h3>
        <p>
            Elemento pensado para utilizarlo con íconos para decorar las imágenes.
        </p>

        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                    <img class="img-display-256 img-display-enc" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-esquina-inf-izq-rojo">
                        <span class="icon-images" ></span>
                    </span>
                </div>
                <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                    <img class="img-display-256 img-display-enc" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-esquina-sup-izq-verde">
                        <span class="icon-images"></span>
                    </span>
                </div>
                <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                    <img class="img-display-256 img-display-enc" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-esquina-sup-der-azul">
                        <span class="icon-images"></span>
                    </span>
                </div>
                <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                    <img class="img-display-256 img-display-enc" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-esquina-inf-der-negro">
                        <span class="icon-images"></span>
                    </span>
                </div>
                <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                    <img class="img-display-256 img-display-enc" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-esquina-sup-der-blanco">
                        <span class="icon-images"></span>
                    </span>
                </div>
                <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                    <img class="img-display-256 img-display-enc" src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <span class="badge-esquina-inf-izq-gris">
                        <span class="icon-images" ></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="alerta-op-verde mab-3">
            Las clases utilizadas son <i>.contenedor-relativo .ov-hidden</i> En el contenedor 
            padre de todo el badge. Luego <i>.badge-esquina-{arr/aba}-{der/izq}-{color}</i>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                        <img class="img-display-256 img-display-enc" src="{}" alt="">
                        <span class="badge-esquina-inf-izq-rojo">
                            <span class="icon-images" ></span>
                        </span>
                    </div>
                    <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                        <img class="img-display-256 img-display-enc" src="{}" alt="">
                        <span class="badge-esquina-sup-izq-verde">
                            <span class="icon-images"></span>
                        </span>
                    </div>
                    <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                        <img class="img-display-256 img-display-enc" src="{}" alt="">
                        <span class="badge-esquina-sup-der-azul">
                            <span class="icon-images"></span>
                        </span>
                    </div>
                    <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                        <img class="img-display-256 img-display-enc" src="{}" alt="">
                        <span class="badge-esquina-inf-der-negro">
                            <span class="icon-images"></span>
                        </span>
                    </div>
                    <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                        <img class="img-display-256 img-display-enc" src="{}" alt="">
                        <span class="badge-esquina-sup-der-blanco">
                            <span class="icon-images"></span>
                        </span>
                    </div>
                    <div class="contenedor-relativo ov-hidden  mab-1" style="width: 256px; height: 256px">
                        <img class="img-display-256 img-display-enc" src="{}" alt="">
                        <span class="badge-esquina-inf-izq-gris">
                            <span class="icon-images" ></span>
                        </span>
                    </div>
                </div>
            </pre>
        </div>

        <div class="alerta-op-verde">
            Notese que los contenedores padre poseen el attr <i>Style</i> con un <i>ancho y el alto </i> 
            fijo igual al de las imágenes contenidas en ellos. <br> 
            Las demás clases no mensionadas en las explicaciones están definidas y explicadas 
            en las secciones correspondientes.
        </div>

        <div class="alerta-op-gris">
            Las secciones de interes para este elemento son: 
            <a href="flexbox.php" class="link">Alineación Flexbox</a> <br> 
            <a href="imagenes.php" class="link">Imágenes</a> <br> 
        </div>
        <div class="alerta-op-rojo mar-3">
            Los íconos se pueden descargar desde su página oficial. (No pertenecen a esta librería). 
            <a href="https://icomoon.io" class="link">https://icomoon.io</a>
        </div>
    </article>
    <article id="redondos" class="article scroll-item">
        <h2>Badges Redondos</h2>
        <div class="ejemplo">
            <div class="d-flex just-cobertura">
                <span class="badge-red-rojo"><span>1</span></span>
                <span class="badge-red-verde"><span>2</span></span>
                <span class="badge-red-azul"><span>3</span></span>
                <span class="badge-red-gris"><span>4</span></span>
                <span class="badge-red-blanco"><span>5</span></span>
                <span class="badge-red-negro"><span>6</span></span>
            </div>
            <div class="d-flex just-cobertura mar-2">
                <span class="badge-red-rojo"></span>
                <span class="badge-red-verde"></span>
                <span class="badge-red-azul"></span>
                <span class="badge-red-gris"></span>
                <span class="badge-red-blanco"></span>
                <span class="badge-red-negro"></span>
            </div>
        </div>
        <div class="alerta-op-verde">
            En este caso son badges pequeños redondos para contener un sólo caracter.
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-cobertura">
                    <span class="badge-red-rojo"><span>1</span></span>
                    <span class="badge-red-verde"><span>2</span></span>
                    <span class="badge-red-azul"><span>3</span></span>
                    <span class="badge-red-gris"><span>4</span></span>
                    <span class="badge-red-blanco"><span>5</span></span>
                    <span class="badge-red-negro"><span>6</span></span>
                </div>
                <div class="d-flex just-cobertura mar-2">
                    <span class="badge-red-rojo"></span>
                    <span class="badge-red-verde"></span>
                    <span class="badge-red-azul"></span>
                    <span class="badge-red-gris"></span>
                    <span class="badge-red-blanco"></span>
                    <span class="badge-red-negro"></span>
                </div>
            </pre>
        </div>
    </article>
    <article id="usuario" class="article scroll-item">
        <h2>Usuario Seguidores</h2>
        <div class="ejemplo par-10">
            <div class="badge-imagen">
                <div class="elementos">
                    <img src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" alt="Usuario">
                    <span>Federico Manzano</span>
                </div>
                <div class="seguidores">
                    3000000
                </div>
            </div>
        </div>
        <p>
            La imágen no pertenece a la librería. 
            Fue obtenida de <a href="https://www.softzone.es" target="_blank" class="link">https://www.softzone.es</a>
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="badge-imagen">
                    <div class="elementos">
                        <img src="{}" alt="Usuario">
                        <span>Federico Manzano</span>
                    </div>
                    <div class="seguidores">
                        3000000
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="cerrar" class="article scroll-item">
        <h2>Etiqueta cerrar</h2>
        <div class="ejemplo">
        <span class="badge-cierre-rojo">
                    Alberto López
                    <span class="cerrar"></span>
                </span>
                <span class="badge-cierre-verde">
                    Javier Matinez
                    <span class="cerrar"></span>
                </span>
                <span class="badge-cierre-azul">
                    Carla Perez
                    <span class="cerrar"></span>
                </span>
                <span class="badge-cierre-gris">
                    Elida Nox
                    <span class="cerrar"></span>
                </span>
                <span class="badge-cierre-blanco">
                    Vera Ramirez
                    <span class="cerrar"></span>
                </span>
                <span class="badge-cierre-negro">
                    Carlos Gonzalez
                    <span class="cerrar"></span>
                </span>
        </div>
        <div class="alerta-op-verde">
            El elemento de cierre de las etiqetas debe ser programado en JS 
            para que funcione, la librería sólo aporta la UI.
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="badge-cierre-rojo">
                    Alberto López
                    <span class="cerrar"></span>
                </span>
                <span class="badge-cierre-verde">
                    Javier Matinez
                    <span class="cerrar"></span>
                </span>
                <span class="badge-cierre-azul">
                    Carla Perez
                    <span class="cerrar"></span>
                </span>
                <span class="badge-cierre-gris">
                    Elida Nox
                    <span class="cerrar"></span>
                </span>
                <span class="badge-cierre-blanco">
                    Vera Ramirez
                    <span class="cerrar"></span>
                </span>
                <span class="badge-cierre-negro">
                    Carlos Gonzalez
                    <span class="cerrar"></span>
                </span>
            </pre>
        </div>
    </article>
    <article id="sub" class="article scroll-item">
        <h2>Botón Suscribirse</h2>
        <div class="ejemplo">
            <label class="badge-sub">
                SUSCRIBIRSE
                <span>3M</span>
            </label>
        </div>
        <p>
            La lógica del funcionamiento queda a cargo del desarrollador la librería sólo 
            aporta el UI.
        </p>
        <div class="html">
            <pre class="brush:html">
                <label class="badge-sub">
                    SUSCRIBIRSE
                    <span>300</span>
                </label>
            </pre>
        </div>
    </article>
    <article id="tamanos" class="article scroll-item">
        <h2>Tamaños</h2>
        <div class="ejemplo">
            <span class="badge-xs badge-rojo">xs</span>
            <span class="badge-sm badge-rojo">sm</span>
            <span class="badge-md badge-rojo">md</span>
            <span class="badge-lg badge-rojo">lg</span>
            <span class="badge-xl badge-rojo">xl</span>
        </div>
        <p>
            Cinco tamaños posibles entre los badges para poder utilizar 
            <i>.badge-xs .badge-sm badge-md badge-lg badge-xl</i>.
        </p>
        <div class="html">
            <pre class="brush:html">
                <span class="badge-xs badge-rojo">xs</span>
                <span class="badge-sm badge-rojo">sm</span>
                <span class="badge-md badge-rojo">md</span>
                <span class="badge-lg badge-rojo">lg</span>
                <span class="badge-xl badge-rojo">xl</span>
            </pre>
        </div>
        <p>
            En este caso son rojos pero podemos utilizar los colores definidos en el apartado 
            colores de esta sección.
        </p>
    </article>
    <article id="flotante" class="article scroll-item">
        <h2>Badges Flotantes</h2>

        <div class="ejemplo">
            <div class="d-flex flex-wrap">
                <div class="lista-contenedor activo" style="width: 8rem; overflow: visible;">
                    <div class="lista-item  fd-gris-c">
                        <span class="badge-sm badge-rojo badge-flot bor-pill">
                            3
                        </span>
                        <a >Correos</a>
                    </div>
                </div>
                <div class="lista-contenedor activo" style="width: 8rem; overflow: visible;">
                    <div class="lista-item fd-gris-c">
                        <span class="badge-sm badge-verde badge-flot">
                            5
                        </span>
                        <a>Mensajes</a>
                    </div>
                </div>
            </div>
        </div>
        <p>
            El elemento badge debe tener la clase <i>.badge-flot</i> 
            y el contenedor padre debe tener un posicionamiento relativo 
            con la clase <i>.contenedor-relativo</i>.
        </p>

        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap">
                    <div class="lista-contenedor activo" style="width: 8rem; overflow: visible;">
                        <div class="lista-item  fd-gris-c">
                            <span class="badge-sm badge-rojo badge-flot bor-pill">
                                3
                            </span>
                            <a >Correos</a>
                        </div>
                    </div>
                    <div class="lista-contenedor activo" style="width: 8rem; overflow: visible;">
                        <div class="lista-item fd-gris-c">
                            <span class="badge-sm badge-verde badge-flot">
                                5
                            </span>
                            <a>Mensajes</a>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    
</section>




<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Etiquetas</a></li>
        <li><a href="#colores">Colores</a></li>
        <li><a href="#notificaciones">Notificaciones</a></li>
        <li><a href="#like">Botón Like</a></li>
        <li><a href="#mensajes">Mensajes</a></li>
        <li><a href="#compartir">Compartir</a></li>
        <li><a href="#solapas">Solapas</a></li>
        <li><a href="#redondos">Redondos</a></li>
        <li><a href="#usuario">Seguidores</a></li>
        <li><a href="#cerrar">Cerrar</a></li>
        <li><a href="#sub">Suscribirse</a></li>
        <li><a href="#tamanos">Tamaños</a></li>
        <li><a href="#flotante">Flotantes</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>