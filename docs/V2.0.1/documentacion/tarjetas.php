
<?php $tarjetas="Tarjetas" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">

    <?php 
        $titulo = "Tarjetas";
        $descripcion = "En esta sección vamos a ver un conjunto de tarjetas que nos 
        permiten mostrar determinada informacón con una apariencia agradable.";
        require_once("./articuloPrincipal.php");
    ?>
    
    <article id="simple" class="article scroll-item">
        <h2>Tarjetas Simple</h2>
        <div class="ejemplo">
            <div class="tarjeta" style="width: 18rem" >
                <div class="tarjeta-cuerpo">
                    <h4 class="tarjeta-titulo c-negro">
                        Titulo tarjeta
                    </h4>
                    <p class="mar-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                        facilis consequatur provident.</p>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tarjeta" style="width: 18rem">
                    <div class="tarjeta-cuerpo">
                        <h4 class="tarjeta-titulo c-negro">
                            Titulo tarjeta
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur 
                            adipisicing elit. 
                            Sequi placeat aperiam porro officiis ita
                            facilis consequatur provident.
                        </p>
                    </div>
                </div>
            </pre>
        </div>
        <h3>Colores</h3>

        <div class="ejemplo">
            <div class="fila">
                <div class="cs-12 cm-6">
                    <div id="t-1" class="tarjeta fd-gris-az-c c-blanco" style="width: 18rem">
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo c-blanco">
                                Titulo tarjeta
                            </h4>
                            <p class="mar-2 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                    </div>    
                </div>
                <div class="cs-12 cm-6 ">
                    <div class="tarjeta fd-azul c-blanco" style="width: 18rem">
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo c-blanco">
                                Titulo tarjeta
                            </h4>
                            <p class="mar-2  c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                    </div>    
                </div>
                <div class="cs-12 cm-6 ">
                    <div class="tarjeta fd-verde c-blanco" style="width: 18rem">
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo c-blanco">
                                Titulo tarjeta
                            </h4>
                            <p class="mar-2 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                    </div>    
                </div>
                <div class="cs-12 cm-6 ">
                    <div class="tarjeta fd-azul-c c-blanco" style="width: 18rem">
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo c-blanco">
                                Titulo tarjeta
                            </h4>
                            <p class="mar-2  c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="alerta-op-gris mab-3">
            Los colores podemos utilizar todos los que se encuentran documentados 
            en <a href="fondos.php" target="_blank" class="link">Fondos</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="fila">
                    <div class="cs-12 cm-6">
                        <div class="tarjeta fd-gris-az-c c-blanco" style="width: 18rem">
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo c-blanco">
                                    Titulo tarjeta
                                </h4>
                                <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                        </div>    
                    </div>
                    <div class="cs-12 cm-6 ">
                        <div class="tarjeta fd-azul c-blanco" style="width: 18rem">
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo c-blanco">
                                    Titulo tarjeta
                                </h4>
                                <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                        </div>    
                    </div>
                    <div class="cs-12 cm-6 ">
                        <div class="tarjeta fd-verde c-blanco" style="width: 18rem">
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo c-blanco">
                                    Titulo tarjeta
                                </h4>
                                <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                        </div>    
                    </div>
                    <div class="cs-12 cm-6 ">
                        <div class="tarjeta fd-azul-c c-blanco" style="width: 18rem">
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo c-blanco">
                                    Titulo tarjeta
                                </h4>
                                <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                        </div>    
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="anchos" class="article scroll-item">
        <h2>Clases Anchos</h2>
        <p>
            Podemos cambiar el ancho de las tarjetas con los utilitarios de la librería 
        </p>

        <div class="ejemplo">
            <h4>Tarjeta 100%</h4>
            <div class="tarjeta">
                <div class="tarjeta-cabecera">
                    Cabecera
                </div>
                <div class="tarjeta-cuerpo">
                    <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                    <p class="mar-2 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                </div>
            </div>
            <h4 class="mar-6">Tarjeta L:50% M:75% S:100%</h4>
            <div class="tarjeta mar-2 ancho-s-100 ancho-m-75 ancho-50">
                <div class="tarjeta-cabecera">
                    Cabecera
                </div>
                <div class="tarjeta-cuerpo">
                    <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                    <p class="mar-2 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <h4>Tarjeta 100%</h4>
                <div class="tarjeta">
                    <div class="tarjeta-cabecera">
                        Cabecera
                    </div>
                    <div class="tarjeta-cuerpo">
                        <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                    </div>
                </div>
                <h4 class="mar-6">Tarjeta L:50% M:75% S:100%</h4>
                <div class="tarjeta mar-2 ancho-s-100 ancho-m-75 ancho-50">
                    <div class="tarjeta-cabecera">
                        Cabecera
                    </div>
                    <div class="tarjeta-cuerpo">
                        <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="bordes" class="article scroll-item">
        <h2>Bordes</h2>
        <p>
            Con los utilitarios de la librería podemos cambiar los bordes.
        </p>

        <div class="ejemplo" >

            <div class="fila">
                <div class="cs-12 cm-6">
                    <div class="tarjeta bor-verde-2" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta bor-rojo-2" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta bor-azul-3" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta bor-gris-n-1" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta bor-azul-ve-1" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta bor-azul-c-1" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="fila">
                    <div class="cs-12 cm-6">
                        <div class="tarjeta bor-verde-2" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                    <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta bor-rojo-2" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                    <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta bor-azul-3" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                    <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta bor-gris-n-1" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                    <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta bor-azul-ve-1" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                    <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta bor-azul-c-1" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                    <h4 class="tarjeta-titulo">Título de la tarjeta</h4>
                                    <p > Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem assumenda voluptate recusandae fuga nihil opt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </pre>
        </div>
    </article>
    <article id="cabecera-tarjeta" class="article scroll-item">
        <h2>Tarjetas con cabecera</h2>


        <div class="ejemplo">
            <div class="tarjeta" style="width: 18rem">
                <div class="tarjeta-cabecera">
                    Cabecera
                </div>
                <div class="tarjeta-cuerpo">
                    <h4 class="tarjeta-titulo c-negro">
                        Titulo tarjeta
                    </h4>
                    <p class="mar-2 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                        facilis consequatur provident.</p>
                </div>
            </div>  
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="tarjeta" style="width: 18rem">
                    <div class="tarjeta-cabecera">
                        Cabecera
                    </div>
                    <div class="tarjeta-cuerpo">
                        <h4 class="tarjeta-titulo">
                            Titulo tarjeta
                        </h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                            facilis consequatur provident.</p>
                    </div>
                </div> 
            </pre>
        </div>

        <h3>Colores</h3>

        <div class="ejemplo">
            <div class="fila">
                <div class="cs-12 cm-6">
                    <div class="tarjeta fd-gris-az-c c-blanco" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo c-blanco">
                                Titulo tarjeta
                            </h4>
                            <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta fd-azul-c c-blanco" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo c-blanco">
                                Titulo tarjeta
                            </h4>
                            <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta fd-rojo c-blanco" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo c-blanco">
                                Titulo tarjeta
                            </h4>
                            <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta fd-verde c-blanco" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo c-blanco">
                                Titulo tarjeta
                            </h4>
                            <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta fd-gris c-blanco" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo c-blanco">
                                Titulo tarjeta
                            </h4>
                            <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta fd-azul-ve c-blanco" style="width: 18rem">
                        <div class="tarjeta-cabecera">
                            Cabecera
                        </div>
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo c-blanco">
                                Titulo tarjeta
                            </h4>
                            <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="fila">
                    <div class="cs-12 cm-6">
                        <div class="tarjeta fd-gris-az-c c-blanco" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo c-blanco">
                                    Titulo tarjeta
                                </h4>
                                <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta fd-azul-c c-blanco" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo c-blanco">
                                    Titulo tarjeta
                                </h4>
                                <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta fd-rojo c-blanco" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo c-blanco">
                                    Titulo tarjeta
                                </h4>
                                <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta fd-verde c-blanco" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo c-blanco">
                                    Titulo tarjeta
                                </h4>
                                <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta fd-gris c-blanco" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo c-blanco">
                                    Titulo tarjeta
                                </h4>
                                <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta fd-azul-ve c-blanco" style="width: 18rem">
                            <div class="tarjeta-cabecera">
                                Cabecera
                            </div>
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo c-blanco">
                                    Titulo tarjeta
                                </h4>
                                <p class="m-0 c-blanco">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="pie-tarjeta" class="article scroll-item" >
        <h2>Tarjetas con pie</h2>
        <div class="ejemplo">
            <div class="tarjeta" style="width: 18rem">
                <div class="tarjeta-cabecera">
                    Cabecera
                </div>
                <div class="tarjeta-cuerpo">
                    <h4 class="tarjeta-titulo">
                        Titulo tarjeta
                    </h4>
                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                        facilis consequatur provident.</p>
                </div>
                <div class="tarjeta-pie">
                    <a href="#" class="tarjeta-link">Enlace</a>
                </div>
            </div>
        </div>
        <div class="alerta-op-verde">
            Al igual que en los otros ejemplos podemos combinar colores.
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tarjeta" style="width: 18rem">
                    <div class="tarjeta-cabecera">
                            Cabecera
                    </div>
                    <div class="tarjeta-cuerpo">
                    <h4 class="tarjeta-titulo">
                            Titulo tarjeta
                    </h4>
                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                </div>
                <div class="tarjeta-pie">
                    <a href="#" class="tarjeta-link">Enlace</a>
                </div>
            </pre>
        </div>
    </article>
    <article id="imagenes" class="article scroll-item" >
        <h2>Tarjetas con imagenes</h2>
        <div class="ejemplo">
            <div class="tarjeta" style="width: 18rem">
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
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tarjeta" style="width: 18rem">
                    <div class="tarjeta-img">
                        <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    </div>
                    <div class="tarjeta-cuerpo">
                        <h4 class="tarjeta-titulo">
                            Titulo tarjeta
                        </h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                            facilis consequatur provident.</p>
                    </div>
                </div>
            </pre>
        </div>
        <h3>Efecto hover</h3>
        <div class="ejemplo">
            <div class="tarjeta" style="width: 18rem">
                <div class="tarjeta-img">
                    <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                    <div class="tarjeta-capa d-flex flex-wrap ali-contenido-centrada">
                    <div class="a-c ancho-100 ">
                        <h4 class="tarjeta-titulo f-grosor-6 c-blanco">Descripción Adicional</h4>
                        <p class="mab-2 c-verde-c">Lorem imsi</p>
                        <a href="#" class="btn-sm btn-azul m-a">Ver</a>
                    </div>
                </div>
                </div>
                    <div class="tarjeta-cuerpo">
                    <h4 class="tarjeta-titulo">
                        Titulo tarjeta
                    </h4>
                    <p class="m-0">
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Sequi placeat aperiam porro officiis ita
                        facilis consequatur provident.
                    </p>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tarjeta" style="width: 18rem">
                    <div class="tarjeta-img">
                        <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                        <div class="tarjeta-capa">
                            <div>
                                <span>Descripción del la tarjeta</span>
                                <a href="#" class="btn-sm btn-verde">Ver</a>
                            </div>
                        
                        </div>
                    </div>
                        <div class="tarjeta-cuerpo">
                        <h4 class="tarjeta-titulo">
                            Titulo tarjeta
                        </h4>
                        <p class="m-0">
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Sequi placeat aperiam porro officiis ita
                            facilis consequatur provident.
                        </p>
                    </div>
                </div>
            </pre>
        </div>
        <div class="ejemplo mar-2">
        <div class="tarjeta" style="width: 18rem">
            <div class="tarjeta-img">
                <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
            </div>
                <div class="tarjeta-cuerpo">
                    <h4 class="tarjeta-titulo">
                        Titulo tarjeta
                    </h4>
                    <small>Actualizado Hace 2 horas</small>
                </div>
                
                <div class="tarjeta-cobertura ">
                    <div class="tarjeta-cuerpo">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt, praesentium labore cum temporibus earum explicabo adipisci magnam eligendi rerum quas distinctio dicta amet ipsa id saepe officiis eos deleniti!</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tarjeta" style="width: 18rem">
                <div class="tarjeta-img">
                    <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg" alt="">
                </div>
                    <div class="tarjeta-cuerpo">
                        <h4 class="tarjeta-titulo">
                            Titulo tarjeta
                        </h4>
                        <small>Actualizado Hace 2 horas</small>
                    </div>
                    
                    <div class="tarjeta-cobertura ">
                        <div class="tarjeta-cuerpo">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt, praesentium labore cum temporibus earum explicabo adipisci magnam eligendi rerum quas distinctio dicta amet ipsa id saepe officiis eos deleniti!</p>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="contenedor-efecto3d" style="width: 18rem;">
                    <div class="contenedor-vertical">
                        <div class="adelante">
                             <div class="tarjeta">
                                <div class="tarjeta-img">
                                     <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg"
                                        alt="">
                                </div>
                                <div class="tarjeta-cuerpo ">
                                    <h4 class="tarjeta-titulo">
                                        Adelante
                                    </h4>
                                    <p class="m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, laudantium.</p>
                                </div>
                                    
                            </div>
                        </div>
                        <div class="atras-vertical">
                            <div class="tarjeta">
                                <div class="tarjeta-img">
                                    <img src="https://i.blogs.es/6b8867/eclipsed-moon-trail-c-chuanjin-su/1366_2000.jpg"
                                        alt="">
                                </div>
                                <div class="tarjeta-cuerpo ">
                                    <h4 class="tarjeta-titulo fz-25">
                                        Atras
                                    </h4>
                                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, nemo!</p>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contenedor-efecto3d" style="width: 18rem;">
                    <div class="contenedor-horizontal">
                        <div class="adelante">
                            <div class="tarjeta">
                                <div class="tarjeta-img">
                                    <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg"
                                        alt="">
                                </div>
                                <div class="tarjeta-cuerpo ">
                                    <h4 class="tarjeta-titulo">
                                        Adelante
                                    </h4>
                                    <p class="m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, laudantium.</p>
                                </div> 
                            </div>
                        </div>
                        <div class="atras-horizontal">
                            <div class="tarjeta">
                                <div class="tarjeta-img">
                                    <img src="https://i.blogs.es/6b8867/eclipsed-moon-trail-c-chuanjin-su/1366_2000.jpg"
                                        alt="">
                                </div>
                                <div class="tarjeta-cuerpo ">
                                    <h4 class="tarjeta-titulo fz-25">
                                        Atras
                                    </h4>
                                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, nemo!</p>
                                </div>
                                    
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        </div>
        <div class="alerta-op-verde mab-3">
            Este efecto se detalla con más profundidad en la sección CSS apartado Efecto 3d.
            <a href="efecto3d.php" target="_blank" class="link">Efecto3D</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="contenedor-efecto3d" style="width: 18rem;">
                        <div class="contenedor-vertical">
                            <div class="adelante">
                                <div class="tarjeta">
                                    <div class="tarjeta-img">
                                        <img src="Imagen ruta ..." alt="Imagen ejemplo">
                                    </div>
                                    <div class="tarjeta-cuerpo ">
                                        <h4 class="tarjeta-titulo">
                                            Adelante
                                        </h4>
                                        <p class="m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, laudantium.</p>
                                    </div>
                                        
                                </div>
                            </div>
                            <div class="atras-vertical">
                                <div class="tarjeta">
                                    <div class="tarjeta-img">
                                        <img src="Imagen ejemplo" alt="Ejemplo">
                                    </div>
                                    <div class="tarjeta-cuerpo ">
                                        <h4 class="tarjeta-titulo fz-25">
                                            Atras
                                        </h4>
                                        <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, nemo!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-efecto3d" style="width: 18rem;">
                        <div class="contenedor-horizontal">
                            <div class="adelante">
                                <div class="tarjeta">
                                    <div class="tarjeta-img">
                                        <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg"
                                            alt="">
                                    </div>
                                    <div class="tarjeta-cuerpo ">
                                        <h4 class="tarjeta-titulo">
                                            Adelante
                                        </h4>
                                        <p class="m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, laudantium.</p>
                                    </div> 
                                </div>
                            </div>
                            <div class="atras-horizontal">
                                <div class="tarjeta">
                                    <div class="tarjeta-img">
                                        <img src="https://i.blogs.es/6b8867/eclipsed-moon-trail-c-chuanjin-su/1366_2000.jpg"
                                            alt="">
                                    </div>
                                    <div class="tarjeta-cuerpo ">
                                        <h4 class="tarjeta-titulo fz-25">
                                            Atras
                                        </h4>
                                        <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, nemo!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="grupos" class="article scroll-item" >
        <h2>Grupos</h2>

        <div class="ejemplo">
            <div class="fila">
                <div class="cs-12 cm-6">
                    <div class="tarjeta">
                        <div class="tarjeta-img">
                            <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg">
                        </div>
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo">
                                Titulo tarjeta 1
                            </h4>
                            <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                        <div class="tarjeta-pie">
                            <a href="#" class="tarjeta-link">Ver</a>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta">
                        <div class="tarjeta-img">
                            <img src="https://i.blogs.es/4ee136/rigel-and-the-witch-head-nebula-c-mario-cogo/1366_2000.jpg">
                        </div>
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo">
                                Titulo tarjeta 2
                            </h4>
                            <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                        <div class="tarjeta-pie">
                            <a href="#" class="tarjeta-link">Ver</a>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta">
                        <div class="tarjeta-img">
                            <img 
                            src="https://diseñoscreativos.com/wp-content/uploads/2018/06/Imagenes-de-gatos-www.dise%C3%B1oscreativos.com-portada-3-1.jpg">
                        </div>
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo">
                                Titulo tarjeta 3
                            </h4>
                            <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                        <div class="tarjeta-pie">
                            <div class="btn-grupo-sm">
                                <a href="#" class="btn btn-azul">Opcion1</a>
                                <a href="#" class="btn btn-azul">Opcion2</a>
                                <a href="#" class="btn btn-azul">Opcion3</a>
                                <a href="#" class="btn btn-azul">Opcion4</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="tarjeta">
                        <div class="tarjeta-img">
                            <img src="https://i.blogs.es/6b8867/eclipsed-moon-trail-c-chuanjin-su/1366_2000.jpg">
                        </div>
                        <div class="tarjeta-cuerpo">
                            <h4 class="tarjeta-titulo">
                                Titulo tarjeta 4
                            </h4>
                            <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                facilis consequatur provident.</p>
                        </div>
                        <div class="tarjeta-pie d-flex just-final">
                            <a href="#" class="btn-sm btn-azul">Ver Mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="fila">
                    <div class="cs-12 cm-6">
                        <div class="tarjeta">
                            <div class="tarjeta-img">
                                <img src="https://ep00.epimg.net/elpais/imagenes/2019/10/30/album/1572424649_614672_1572452580_album_normal.jpg">
                            </div>
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo">
                                    Titulo tarjeta 1
                                </h4>
                                <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                            <div class="tarjeta-pie">
                                <a href="#" class="tarjeta-link">Ver</a>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta">
                            <div class="tarjeta-img">
                                <img src="https://i.blogs.es/4ee136/rigel-and-the-witch-head-nebula-c-mario-cogo/1366_2000.jpg">
                            </div>
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo">
                                    Titulo tarjeta 2
                                </h4>
                                <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                            <div class="tarjeta-pie">
                                <a href="#" class="tarjeta-link">Ver</a>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta">
                            <div class="tarjeta-img">
                                <img src="https://diseñoscreativos.com/wp-content/uploads/2018/06/Imagenes-de-gatos-www.dise%C3%B1oscreativos.com-portada-3-1.jpg">
                            </div>
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo">
                                    Titulo tarjeta 3
                                </h4>
                                <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                            <div class="tarjeta-pie">
                                <div class="btn-grupo-sm">
                                    <a href="#" class="btn btn-azul">Opcion1</a>
                                    <a href="#" class="btn btn-azul">Opcion2</a>
                                    <a href="#" class="btn btn-azul">Opcion3</a>
                                    <a href="#" class="btn btn-azul">Opcion4</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tarjeta">
                            <div class="tarjeta-img">
                                <img src="https://i.blogs.es/6b8867/eclipsed-moon-trail-c-chuanjin-su/1366_2000.jpg">
                            </div>
                            <div class="tarjeta-cuerpo">
                                <h4 class="tarjeta-titulo">
                                    Titulo tarjeta 4
                                </h4>
                                <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi placeat aperiam porro officiis ita
                                    facilis consequatur provident.</p>
                            </div>
                            <div class="tarjeta-pie d-flex just-final">
                                <a href="#" class="btn-sm btn-azul">Ver Mas</a>
                            </div>
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
        <li><a href="#simple">Simple</a></li>
        <li><a href="#anchos">Anchos Variables</a></li>
        <li><a href="#bordes">Bordes</a></li>
        <li><a href="#cabecera-tarjeta">Cabecera</a></li>
        <li><a href="#pie-tarjeta">Pie</a></li>
        <li><a href="#imagenes">Imagenes</a></li>
        <li><a href="#grupos">Grupos</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>
<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>