<?php $titulo = "Grupos Botones"?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    
    <?php 
        $titulo = "Grupo de Botones";
        $descripcion = "En esta sección vamos a ver los grupos de botones que posee 
        la librería.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <p>
            Como muestra vamos a declarar un conjunto de botones grises
        </p>
        <div class="ejemplo">
            <div class="btn-grupo">
                <a class="btn fd-gris">Boton 1</a>
                <a class="btn fd-gris">Boton 2</a>
                <a class="btn fd-gris">Boton 3</a>
                <a class="btn fd-gris">Boton 4</a>
                <a class="btn fd-gris">Boton 5</a>
            </div>
        </div>
        <div class="alerta-op-verde">
            La clase <i>.btn-grupo</i> encierra a todos los botones que queremos 
            incluir. No hace falta ninguna clase adicional.
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="btn-grupo">
                    <a class="btn fd-gris">Boton 1</a>
                    <a class="btn fd-gris">Boton 2</a>
                    <a class="btn fd-gris">Boton 3</a>
                    <a class="btn fd-gris">Boton 4</a>
                    <a class="btn fd-gris">Boton 5</a>
                </div>
            </pre>
        </div>
    </article>


    <article id="colores" class="article scroll-item">
        <h2>Colores</h2>
        <p>
            Podemos formar grupos de diferentes colores 
        </p>
        <div class="ejemplo">
            <div class="btn-grupo">
                <a class="btn fd-gris">Boton 1</a>
                <a class="btn fd-gris">Boton 2</a>
                <a class="btn fd-gris">Boton 3</a>
                <a class="btn fd-gris">Boton 4</a>
                <a class="btn fd-gris">Boton 5</a>
            </div>
            <div class="btn-grupo mar-2">
                <a class="btn fd-rojo">Boton 1</a>
                <a class="btn fd-rojo">Boton 2</a>
                <a class="btn fd-rojo">Boton 3</a>
                <a class="btn fd-rojo">Boton 4</a>
                <a class="btn fd-rojo">Boton 5</a>
            </div>
            <div class="btn-grupo mar-2">
                <a class="btn fd-azul">Boton 1</a>
                <a class="btn fd-azul">Boton 2</a>
                <a class="btn fd-azul">Boton 3</a>
                <a class="btn fd-azul">Boton 4</a>
                <a class="btn fd-azul">Boton 5</a>
            </div>
            <div class="btn-grupo mar-2">
                <a class="btn fd-verde">Boton 1</a>
                <a class="btn fd-verde">Boton 2</a>
                <a class="btn fd-verde">Boton 3</a>
                <a class="btn fd-verde">Boton 4</a>
                <a class="btn fd-verde">Boton 5</a>
            </div>
            <div class="btn-grupo mar-2">
                <a class="btn fd-negro">Boton 1</a>
                <a class="btn fd-negro">Boton 2</a>
                <a class="btn fd-negro">Boton 3</a>
                <a class="btn fd-negro">Boton 4</a>
                <a class="btn fd-negro">Boton 5</a>
            </div>

            <div class="btn-grupo mar-2">
                <a class="btn fd-negro waves">Clic !!!</a>
                <a class="btn fd-gris waves">Clic !!!</a>
                <a class="btn fd-rojo waves">Clic !!!</a>
                <a class="btn fd-azul waves">Clic !!!</a>
                <a class="btn fd-verde waves">Clic !!!</a>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="btn-grupo">
                    <a class="btn fd-gris">Boton 1</a>
                    <a class="btn fd-gris">Boton 2</a>
                    <a class="btn fd-gris">Boton 3</a>
                    <a class="btn fd-gris">Boton 4</a>
                    <a class="btn fd-gris">Boton 5</a>
                </div>
                <div class="btn-grupo mar-2">
                    <a class="btn fd-rojo">Boton 1</a>
                    <a class="btn fd-rojo">Boton 2</a>
                    <a class="btn fd-rojo">Boton 3</a>
                    <a class="btn fd-rojo">Boton 4</a>
                    <a class="btn fd-rojo">Boton 5</a>
                </div>
                <div class="btn-grupo mar-2">
                    <a class="btn fd-azul">Boton 1</a>
                    <a class="btn fd-azul">Boton 2</a>
                    <a class="btn fd-azul">Boton 3</a>
                    <a class="btn fd-azul">Boton 4</a>
                    <a class="btn fd-azul">Boton 5</a>
                </div>
                <div class="btn-grupo mar-2">
                    <a class="btn fd-verde">Boton 1</a>
                    <a class="btn fd-verde">Boton 2</a>
                    <a class="btn fd-verde">Boton 3</a>
                    <a class="btn fd-verde">Boton 4</a>
                    <a class="btn fd-verde">Boton 5</a>
                </div>
                <div class="btn-grupo mar-2">
                    <a class="btn fd-negro">Boton 1</a>
                    <a class="btn fd-negro">Boton 2</a>
                    <a class="btn fd-negro">Boton 3</a>
                    <a class="btn fd-negro">Boton 4</a>
                    <a class="btn fd-negro">Boton 5</a>
                </div>

                <div class="btn-grupo mar-2">
                    <a class="btn fd-negro waves">Clic !!!</a>
                    <a class="btn fd-gris waves">Clic !!!</a>
                    <a class="btn fd-rojo waves">Clic !!!</a>
                    <a class="btn fd-azul waves">Clic !!!</a>
                    <a class="btn fd-verde waves">Clic !!!</a>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Son muy sencillos de declarar y son muy útiles ya que ocupan poco espacio.
        </div>
    </article>
    <article id="utiles" class="article scroll-item">
        <h2>Utilitarios</h2>
        <p>
            Vamos a ver algonos ejemplo de como se utilizan estos grupos en 
            situaciones normales.
        </p>
        <div class="ejemplo">
            <nav>
                <div class="menu">
                    <a  class="menu-logo m-0">Logo</a>
                    <ul class="lista derecha">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Porfolio</a></li>
                        <div class="btn-grupo">
                            <a class="btn fd-rojo f-grosor-6 waves">Login</a>
                            <a class="btn fd-blanco waves f-grosor-6 c-negro">Registro</a>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="html">
            <pre class="brush:html">
                <nav>
                    <div class="menu">
                        <a  class="menu-logo">Logo</a>
                        <ul class="lista derecha">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Porfolio</a></li>
                            <div class="btn-grupo">
                                <a class="btn fd-rojo f-grosor-6 waves">Login</a>
                                <a class="btn fd-blanco waves f-grosor-6 c-negro">Registro</a>
                            </div>
                        </ul>
                    </div>
                </nav>
            </pre>
        </div>
        <div class="ejemplo">
            <nav>
                <div class="menu">
                    <a  class="menu-logo p-1">Logo</a>
                    <ul class="lista derecha">
                        <div class="btn-grupo">
                            <a class="btn fd-azul waves">Inicio</a>
                            <a class="btn fd-azul waves">Servicios</a>
                            <a class="btn fd-azul waves">Porfolio</a>
                            <a class="btn fd-verde waves">Login</a>
                            <a class="btn fd-rojo waves">Registro</a>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="html">
            <pre class="brush:html">
                <nav>
                    <div class="menu">
                        <a  class="menu-logo p-1">Logo</a>
                        <ul class="lista derecha">
                            <div class="btn-grupo">
                                <a class="btn fd-azul waves">Inicio</a>
                                <a class="btn fd-azul waves">Servicios</a>
                                <a class="btn fd-azul waves">Porfolio</a>
                                <a class="btn fd-verde waves">Login</a>
                                <a class="btn fd-rojo waves">Registro</a>
                            </div>
                        </ul>
                    </div>
                </nav>
            </pre>
        </div>
        <div class="ejemplo">
            <h4>Paginación</h4>
            <div class="d-flex just-centrada">
                <div class="btn-grupo">
                    <a class="btn fd-gris-o-1">1</a>
                    <a class="btn fd-gris-o-1">2</a>
                    <a class="btn fd-gris-o-1">3</a>
                    <a class="btn fd-gris-o-1">4</a>
                </div>
                <div class="btn-grupo mi-2">
                    <a class="btn fd-gris-o-1">5</a>
                    <a class="btn fd-gris-o-1">6</a>
                    <a class="btn fd-gris-o-1">7</a>
                    <a class="btn fd-gris-o-1">8</a>
                </div>
                <div class="btn-grupo mi-2">
                    <a class="btn fd-gris-o-1">9</a>
                    <a class="btn fd-gris-o-1">10</a>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <h4>Paginación</h4>
                <div class="btn-grupo">
                        <a class="btn fd-gris-o-1">1</a>
                        <a class="btn fd-gris-o-1">2</a>
                        <a class="btn fd-gris-o-1">3</a>
                        <a class="btn fd-gris-o-1">4</a>
                    </div>
                    <div class="btn-grupo mi-2">
                        <a class="btn fd-gris-o-1">5</a>
                        <a class="btn fd-gris-o-1">6</a>
                        <a class="btn fd-gris-o-1">7</a>
                        <a class="btn fd-gris-o-1">8</a>
                    </div>
                    <div class="btn-grupo mi-2">
                        <a class="btn fd-gris-o-1">9</a>
                        <a class="btn fd-gris-o-1">10</a>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="tamaños" class="article scroll-item">
        <h2>Tamaños</h2>
        <p>
            Hay tres tamaños disponibles <i>[sm | _ | lg]</i> El guión representa 
            la medida mediano que no necesita parametro.
            <i>.btn-grupo-{medida}</i> 
        </p>
        <div class="ejemplo">
            <div class="btn-grupo-sm mar-1">
                <a class="btn fd-gris">Boton 1</a>
                <a class="btn fd-gris">Boton 2</a>
                <a class="btn fd-gris">Boton 3</a>
                <a class="btn fd-gris">Boton 4</a>
                <a class="btn fd-gris">Boton 5</a>
            </div>
            <div class="btn-grupo mar-1">
                <a class="btn fd-gris">Boton 1</a>
                <a class="btn fd-gris">Boton 2</a>
                <a class="btn fd-gris">Boton 3</a>
                <a class="btn fd-gris">Boton 4</a>
                <a class="btn fd-gris">Boton 5</a>
            </div>
            <div class="btn-grupo-lg mar-1">
                <a class="btn fd-gris">Boton 1</a>
                <a class="btn fd-gris">Boton 2</a>
                <a class="btn fd-gris">Boton 3</a>
                <a class="btn fd-gris">Boton 4</a>
                <a class="btn fd-gris">Boton 5</a>
            </div>


            <div class="btn-grupo-sm mar-1">
                <a class="btn fd-rojo">Boton 1</a>
                <a class="btn fd-rojo">Boton 2</a>
                <a class="btn fd-rojo">Boton 3</a>
                <a class="btn fd-rojo">Boton 4</a>
                <a class="btn fd-rojo">Boton 5</a>
            </div>
            <div class="btn-grupo mar-1">
                <a class="btn fd-rojo">Boton 1</a>
                <a class="btn fd-rojo">Boton 2</a>
                <a class="btn fd-rojo">Boton 3</a>
                <a class="btn fd-rojo">Boton 4</a>
                <a class="btn fd-rojo">Boton 5</a>
            </div>
            <div class="btn-grupo-lg mar-1">
                <a class="btn fd-rojo">Boton 1</a>
                <a class="btn fd-rojo">Boton 2</a>
                <a class="btn fd-rojo">Boton 3</a>
                <a class="btn fd-rojo">Boton 4</a>
                <a class="btn fd-rojo">Boton 5</a>
            </div>

            <div class="btn-grupo-sm mar-1">
                <a class="btn fd-azul">Boton 1</a>
                <a class="btn fd-azul">Boton 2</a>
                <a class="btn fd-azul">Boton 3</a>
                <a class="btn fd-azul">Boton 4</a>
                <a class="btn fd-azul">Boton 5</a>
            </div>
            <div class="btn-grupo mar-1">
                <a class="btn fd-azul">Boton 1</a>
                <a class="btn fd-azul">Boton 2</a>
                <a class="btn fd-azul">Boton 3</a>
                <a class="btn fd-azul">Boton 4</a>
                <a class="btn fd-azul">Boton 5</a>
            </div>
            <div class="btn-grupo-lg mar-1">
                <a class="btn fd-azul">Boton 1</a>
                <a class="btn fd-azul">Boton 2</a>
                <a class="btn fd-azul">Boton 3</a>
                <a class="btn fd-azul">Boton 4</a>
                <a class="btn fd-azul">Boton 5</a>
            </div>



            <div class="btn-grupo-sm mar-1">
                <a class="btn fd-verde">Boton 1</a>
                <a class="btn fd-verde">Boton 2</a>
                <a class="btn fd-verde">Boton 3</a>
                <a class="btn fd-verde">Boton 4</a>
                <a class="btn fd-verde">Boton 5</a>
            </div>
            <div class="btn-grupo mar-1">
                <a class="btn fd-verde">Boton 1</a>
                <a class="btn fd-verde">Boton 2</a>
                <a class="btn fd-verde">Boton 3</a>
                <a class="btn fd-verde">Boton 4</a>
                <a class="btn fd-verde">Boton 5</a>
            </div>
            <div class="btn-grupo-lg mar-1">
                <a class="btn fd-verde">Boton 1</a>
                <a class="btn fd-verde">Boton 2</a>
                <a class="btn fd-verde">Boton 3</a>
                <a class="btn fd-verde">Boton 4</a>
                <a class="btn fd-verde">Boton 5</a>
            </div>

            <div class="btn-grupo-sm mar-1">
                <a class="btn fd-negro">Boton 1</a>
                <a class="btn fd-negro">Boton 2</a>
                <a class="btn fd-negro">Boton 3</a>
                <a class="btn fd-negro">Boton 4</a>
                <a class="btn fd-negro">Boton 5</a>
            </div>
            <div class="btn-grupo mar-1">
                <a class="btn fd-negro">Boton 1</a>
                <a class="btn fd-negro">Boton 2</a>
                <a class="btn fd-negro">Boton 3</a>
                <a class="btn fd-negro">Boton 4</a>
                <a class="btn fd-negro">Boton 5</a>
            </div>
            <div class="btn-grupo-lg mar-1">
                <a class="btn fd-negro">Boton 1</a>
                <a class="btn fd-negro">Boton 2</a>
                <a class="btn fd-negro">Boton 3</a>
                <a class="btn fd-negro">Boton 4</a>
                <a class="btn fd-negro">Boton 5</a>
            </div>
            
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="btn-grupo-sm mar-1">
                    <a class="btn fd-gris">Boton 1</a>
                    <a class="btn fd-gris">Boton 2</a>
                    <a class="btn fd-gris">Boton 3</a>
                    <a class="btn fd-gris">Boton 4</a>
                    <a class="btn fd-gris">Boton 5</a>
                </div>
                <div class="btn-grupo mar-1">
                    <a class="btn fd-gris">Boton 1</a>
                    <a class="btn fd-gris">Boton 2</a>
                    <a class="btn fd-gris">Boton 3</a>
                    <a class="btn fd-gris">Boton 4</a>
                    <a class="btn fd-gris">Boton 5</a>
                </div>
                <div class="btn-grupo-lg mar-1">
                    <a class="btn fd-gris">Boton 1</a>
                    <a class="btn fd-gris">Boton 2</a>
                    <a class="btn fd-gris">Boton 3</a>
                    <a class="btn fd-gris">Boton 4</a>
                    <a class="btn fd-gris">Boton 5</a>
                </div>


                <div class="btn-grupo-sm mar-1">
                    <a class="btn fd-rojo">Boton 1</a>
                    <a class="btn fd-rojo">Boton 2</a>
                    <a class="btn fd-rojo">Boton 3</a>
                    <a class="btn fd-rojo">Boton 4</a>
                    <a class="btn fd-rojo">Boton 5</a>
                </div>
                <div class="btn-grupo mar-1">
                    <a class="btn fd-rojo">Boton 1</a>
                    <a class="btn fd-rojo">Boton 2</a>
                    <a class="btn fd-rojo">Boton 3</a>
                    <a class="btn fd-rojo">Boton 4</a>
                    <a class="btn fd-rojo">Boton 5</a>
                </div>
                <div class="btn-grupo-lg mar-1">
                    <a class="btn fd-rojo">Boton 1</a>
                    <a class="btn fd-rojo">Boton 2</a>
                    <a class="btn fd-rojo">Boton 3</a>
                    <a class="btn fd-rojo">Boton 4</a>
                    <a class="btn fd-rojo">Boton 5</a>
                </div>

                <div class="btn-grupo-sm mar-1">
                    <a class="btn fd-azul">Boton 1</a>
                    <a class="btn fd-azul">Boton 2</a>
                    <a class="btn fd-azul">Boton 3</a>
                    <a class="btn fd-azul">Boton 4</a>
                    <a class="btn fd-azul">Boton 5</a>
                </div>
                <div class="btn-grupo mar-1">
                    <a class="btn fd-azul">Boton 1</a>
                    <a class="btn fd-azul">Boton 2</a>
                    <a class="btn fd-azul">Boton 3</a>
                    <a class="btn fd-azul">Boton 4</a>
                    <a class="btn fd-azul">Boton 5</a>
                </div>
                <div class="btn-grupo-lg mar-1">
                    <a class="btn fd-azul">Boton 1</a>
                    <a class="btn fd-azul">Boton 2</a>
                    <a class="btn fd-azul">Boton 3</a>
                    <a class="btn fd-azul">Boton 4</a>
                    <a class="btn fd-azul">Boton 5</a>
                </div>



                <div class="btn-grupo-sm mar-1">
                    <a class="btn fd-verde">Boton 1</a>
                    <a class="btn fd-verde">Boton 2</a>
                    <a class="btn fd-verde">Boton 3</a>
                    <a class="btn fd-verde">Boton 4</a>
                    <a class="btn fd-verde">Boton 5</a>
                </div>
                <div class="btn-grupo mar-1">
                    <a class="btn fd-verde">Boton 1</a>
                    <a class="btn fd-verde">Boton 2</a>
                    <a class="btn fd-verde">Boton 3</a>
                    <a class="btn fd-verde">Boton 4</a>
                    <a class="btn fd-verde">Boton 5</a>
                </div>
                <div class="btn-grupo-lg mar-1">
                    <a class="btn fd-verde">Boton 1</a>
                    <a class="btn fd-verde">Boton 2</a>
                    <a class="btn fd-verde">Boton 3</a>
                    <a class="btn fd-verde">Boton 4</a>
                    <a class="btn fd-verde">Boton 5</a>
                </div>

                <div class="btn-grupo-sm mar-1">
                    <a class="btn fd-negro">Boton 1</a>
                    <a class="btn fd-negro">Boton 2</a>
                    <a class="btn fd-negro">Boton 3</a>
                    <a class="btn fd-negro">Boton 4</a>
                    <a class="btn fd-negro">Boton 5</a>
                </div>
                <div class="btn-grupo mar-1">
                    <a class="btn fd-negro">Boton 1</a>
                    <a class="btn fd-negro">Boton 2</a>
                    <a class="btn fd-negro">Boton 3</a>
                    <a class="btn fd-negro">Boton 4</a>
                    <a class="btn fd-negro">Boton 5</a>
                </div>
                <div class="btn-grupo-lg mar-1">
                    <a class="btn fd-negro">Boton 1</a>
                    <a class="btn fd-negro">Boton 2</a>
                    <a class="btn fd-negro">Boton 3</a>
                    <a class="btn fd-negro">Boton 4</a>
                    <a class="btn fd-negro">Boton 5</a>
                </div>
            </pre>
        </div>
        <span class="span">
            Todas las características vistas anteriormente pueden ser aplicadas 
            a los diferentes tamaños.
        </span>
    </article>
    <article id="iconos" class="article scroll-item">
        <h2>Íconos</h2>
        <p>
            Podemos utilizar los grupos con íconos.
        </p>

        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="btn-grupo " >
                    <a class="btn fd-verde tips-ele" data-posicion="arriba" data-tips="Btn verde con <span ><span class='badge badge-verde'>&nbspíconos</span></span>">Etiqueta</a>
                    <a class="btn fd-verde-o-1"><span class="icon-notification"></span></a>
                </div>
                <div class="btn-grupo">
                    <a class="btn fd-rojo tips-ele"  data-posicion="abajo" data-tips="Btn rojo con <span ><span class='badge badge-rojo'>&nbspíconos</span></span>">Etiqueta</a>
                    <a class="btn fd-rojo-o-1"><span class="icon-price-tags"></span></a>
                </div>
                <div class="btn-grupo tips-ele" data-posicion="izquierda" data-tips="Btn azul con <span ><span class='badge badge-azul'>&nbspíconos</span></span>">
                    <a class="btn fd-azul">Etiqueta</a>
                    <a class="btn fd-azul-o-1"><span class="icon-switch"></span></a>
                </div>
            </div>
        </div>
        <div class="alerta-op-rojo mab-3">
            Los íconos no pertenecen a la librería.
            Puede descargarlos de <a href="https://icomoon.io" target="_blank" class="link">https://icomoon.io</a>
        </div>
        <div class="codigo">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="btn-grupo " >
                        <a class="btn fd-verde tips-ele" data-posicion="arriba" data-tips="Btn verde con <span ><span class='badge badge-verde'>&nbspíconos</span></span>">Etiqueta</a>
                        <a class="btn fd-verde-o"><span class="icon-notification"></span></a>
                    </div>
                    <div class="btn-grupo">
                        <a class="btn fd-rojo tips-ele"  data-posicion="abajo" data-tips="Btn rojo con <span ><span class='badge badge-rojo'>&nbspíconos</span></span>">Etiqueta</a>
                        <a class="btn fd-rojo-o"><span class="icon-price-tags"></span></a>
                    </div>
                    <div class="btn-grupo tips-ele">
                        <a class="btn fd-azul tips-ele" data-posicion="izquierda" data-tips="Btn azul con <span ><span class='badge badge-azul'>&nbspíconos</span></span>">Etiqueta</a>
                        <a class="btn fd-azul-o"><span class="icon-switch"></span></a>
                    </div>
                </div>
            </pre>
        </div>
        <div class="alerta-op-gris">
            En el último ejemplo utilicé para alinear los botones las clases 
            <i>.d-flex .flex-wrap .just-cobertura</i> que pertenecen a la sección 
            alineamiento FlexBox. <a href="flexbox.php" target="_blank" class="link">Flexbox</a>. <br> 
            También utilicé los tips los cuales pueden encontrarlos en la sección JavaScript. 
            <a href="tips.php" target="_blank" class="link">ToolTips</a>
        </div>
    </article>
</section>

<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#colores">Colores</a></li>
        <li><a href="#utiles">Utilitarios</a></li>
        <li><a href="#tamaños">Tamaños</a></li>
        <li><a href="#iconos">Iconos</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>