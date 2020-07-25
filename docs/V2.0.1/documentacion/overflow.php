
<?php $titulo = "Overflow"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Overflow";
        $descripcion = "Hay situaciones en las cuales se genera un desbordamiento del contenido de un 
        contenedor y los elementos que están dentro se escapan de los límites del padre. <br> 
        Para estas situaciones tenemos tres clases que nos permitirán manejar esta situación.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <p>
            Una de las clases permite ocultar todo lo que se desborda del contenedor padre 
            de manera tal que parte de los elementos hijos no van a ser visibles.
        </p>

        <div class="ejemplo">
            <div class="fd-negro p-3 c-blanco d-flex ali-centrada just-centrada contenedor-relativo" style="width: 200px">
                Padre
                <div class="fd-rojo p-1 c-blanco d-flex ali-centrada just-centrada" style="width: 500px; position:absolute; left: 0"> 
                    Hijo
                </div> 
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="fd-negro p-3 c-blanco d-flex ali-centrada just-centrada contenedor-relativo" style="width: 200px">
                    Padre
                    <div class="fd-rojo p-1 c-blanco d-flex ali-centrada just-centrada" style="width: 500px; position:absolute; left: 0"> 
                        Hijo
                    </div> 
                </div>
            </pre>
        </div>
        <p>
            Fijense en el ejemplo como el contenedor hijo sobresale al contenedor padre. 
            Esto de debe a que el contenedor hijo posee un posicionamiento absoluto lo cual no depende enteramente 
            de las dimensiones y posición del padre. 
        </p>

        <h3>Overflow Hidden</h3>
        <p>
            Ahora tomamos el mismo ejemplo pero con la diferencia que al contenedor padre le agregamos la clase 
            ov-hidden de la librería para evitar el desbordamiento del elemento.
        </p>
        <div class="ejemplo">
            <div class="fd-negro p-3 c-blanco d-flex ali-centrada just-centrada contenedor-relativo ov-hidden" style="width: 200px">
                Padre
                <div class="fd-rojo p-1 c-blanco d-flex ali-centrada just-centrada" style="width: 500px; position:absolute; left: 0"> 
                    Hijo
                </div> 
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="fd-negro p-3 c-blanco d-flex ali-centrada just-centrada contenedor-relativo ov-hidden" style="width: 200px">
                    Padre
                    <div class="fd-rojo p-1 c-blanco d-flex ali-centrada just-centrada" style="width: 500px; position:absolute; left: 0"> 
                        Hijo
                    </div> 
                </div>
            </pre>
        </div>
        <p>
            En este caso parte del contenedor hijo queda tapado por el contenedor padre. 
        </p>
        <h3>Overflow Scroll</h3>
        <p>
            Ahora que pasaría si el si quisieramos tapar el contenido exedente del contenedor padre pero 
            a la vez queremos dejar la oportunidad de poder ver la parte tapada del contenedor hijo.
        </p>
        <div class="ejemplo">
            <div class="fd-negro p-3 c-blanco d-flex ali-centrada just-centrada contenedor-relativo ov-scroll" style="width: 200px">
                Padre
                <div class="fd-rojo p-1 c-blanco d-flex ali-centrada just-centrada" style="width: 500px; position:absolute; left: 0"> 
                    Hijo
                </div> 
            </div>
        </div>
        <p>
            Notese que aparece un scroll en la parte inferior del contenedor padre para permitirle al usuario 
            acceder al contenido tapado del contenedor hijo pero no permitiendo que las dimensiones de los contenedores cambien.
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="fd-negro p-3 c-blanco d-flex ali-centrada just-centrada contenedor-relativo ov-scroll" style="width: 200px">
                    Padre
                    <div class="fd-rojo p-1 c-blanco d-flex ali-centrada just-centrada" style="width: 500px; position:absolute; left: 0"> 
                        Hijo
                    </div> 
                </div>
            </pre>
        </div>

        <p>
            En este caso utilizamos la clase ov-scroll de la librería.
        </p>
        <h3>Overflow Visible</h3>
        <p>
            En algunos casos disponemos de un elemento que ya posee la propiedad <span class="c-rojo-ro">overflow: hidden</span>  de CSS 
            y por alguna razón queremos anular en este caso es propiedad para mostrar contenido que sobrepasa los límites 
            del contenedor padre.
        </p>

        <div class="ejemplo">
            <div class="tarjeta contenedor-relativo ov-visible" style="width: 18rem">
                <div class="tarjeta-img">
                    <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="Tarjeta Ejemplo">
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
        <p>
            Este es un ejemplo claro. Las solapas pertenecientes a esta librería y que pueden encontrarlas en la sección 
            <span class="c-rojo-c">CSS > badges</span> sobresalen de los límites de la tarjeta pero a su vez, las tarjetas poseen la propiedad 
            overflow: hidden de CSS. Para solventar este problema agregamos a la tarjeta la clase <span class="c-rojo-c">.ov-visible</span>.
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="tarjeta contenedor-relativo ov-visible" style="width: 18rem">
                    <div class="tarjeta-img">
                        <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="Tarjeta Ejemplo">
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
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuUti")
</script>