<?php $titulo="Grupos input"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    <?php 
        $titulo = "Grupos input";
        $descripcion = "Algunos grupos de elementos combinados con elementos input para mejorar 
        las vistas de los formularios.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <div class="input-g">
                <div class="grupo">
                    <span class="span-grupo">
                        @
                    </span>
                    <input type="email" name="correo">
                </div>
            </div>
            <div class="input-g mar-1">
                <div class="grupo">
                    <span class="span-grupo">
                        http://
                    </span>
                    <input type="email" name="correo">
                    <span class="span-grupo">
                        .com
                    </span>
                </div>
            </div>
            <div class="input-g mar-1">
                <div class="grupo">
                    <input type="email" name="correo">
                    <a href="#" class="btn-o btn-gris-c-o">Buscar</a>
                </div>
            </div>
        </div>
        <p>
            Las clases son <i>.input-g</i> que encierra a todo el grupo, 
            <i>.grupo</i> que contiene todos las pripiedades para poder enlazar 
            los elementos, <i>.span-grupo</i> para darle estilos al la etiqueta span y 
            un botón realizado para este componente que es <i>.btn-o .btn-gris-c-o</i>.
        </p>
        <div class="html">
            <pre class="brush:html">
                <div class="input-g">
                    <div class="grupo">
                        <span class="span-grupo">
                            @
                        </span>
                        <input type="email" name="correo">
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <span class="span-grupo">
                            http://
                        </span>
                        <input type="email" name="correo">
                        <span class="span-grupo">
                            .com
                        </span>
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <input type="email" name="correo">
                        <a href="#" class="btn-o btn-gris-c-o">Buscar</a>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="tamaños" class="article scroll-item">
        <h2>Tamaños</h2>
        <p>
            La librería cuenta con 3 tamaños SM MD LG.
        </p>
        <div class="ejemplo">
            <div class="input-g">
                <div class="grupo-sm">
                    <span class="span-grupo">
                         Small
                    </span>
                    <input type="text" name="texto">
                </div>
             </div>
             <div class="input-g mar-1">
                <div class="grupo">
                    <span class="span-grupo">
                         Medium
                    </span>
                    <input type="text" name="texto">
                </div>
             </div>
             <div class="input-g mar-1">
                <div class="grupo-lg">
                    <span class="span-grupo">
                         Large
                    </span>
                    <input type="text" name="texto">
                </div>
             </div>
        </div>
        <div class="alerta-op-verde mab-2">
            Para definir el tamaño simplemente se le añade a la clase <i>.grupo-{tam}</i>. 
            Para los tamaños medios no se agrega el parámetro. 
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="input-g">
                    <div class="grupo-sm">
                        <span class="span-grupo">
                            Small
                        </span>
                        <input type="text" name="texto">
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <span class="span-grupo">
                            Medium
                        </span>
                        <input type="text" name="texto">
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo-lg">
                        <span class="span-grupo">
                            Large
                        </span>
                        <input type="text" name="texto">
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="partes" class="article scroll-item">
        <h2>Partes</h2>
        <div class="ejemplo">
            <div class="input-g">
                <div class="grupo">
                    <span class="span-grupo">
                         @
                    </span>
                    <input type="text" name="texto">
                    <span class="span-grupo">
                         Ej: nombre@mail.com
                    </span>
                    <a href="#" class="btn-o btn-gris-c-o">Enviar</a>
                </div>
             </div>
             <div class="input-g mar-1">
                <div class="grupo">
                    <span class="span-grupo">
                         https://bodystyle/grupos
                    </span>
                    <input type="text" name="texto">
                    <a  class="btn-o btn-gris-c-o dropdown-toggle" data-target="#ext">
                        <span class="c-drop-grupo">.COM</span>
                    </a>
                </div>
             </div>
             <div class="input-g mar-1">
                <div class="grupo">
                    <span class="span-grupo">
                         https://
                    </span>
                    <input type="text" name="texto">
                    <span class="span-grupo">
                         .COM
                    </span>
                    <a  class="btn-o btn-gris-c-o dropdown-toggle a-ajuste-btn" data-target="#ext">
                        <span class="c-drop-grupo">.MX</span>
                    </a>
                </div>
             </div>
        </div>
        <div class="alerta-op-verde mab-2">
            Para agregar un dropdown dentro del botón añadimos una etiqueta span con la clase 
            <i>.f-abajo-grupo</i>. <br> 
            Hay una sección en esta documentación con el funcionamiento del Dropdown. 
            <a href="dropdown.php" class="link">Dropdown</a>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="input-g">
                    <div class="grupo">
                        <span class="span-grupo">
                            @
                        </span>
                        <input type="text" name="texto">
                        <span class="span-grupo">
                            Ej: nombre@mail.com
                        </span>
                        <a href="#" class="btn-o btn-gris-c-o">Enviar</a>
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <span class="span-grupo">
                            https://bodystyle/grupos
                        </span>
                        <input type="text" name="texto">
                        <a  class="btn-o btn-gris-c-o dropdown-toggle a-ajuste-btn" data-target="#ext">
                            <span class="c-drop-grupo">.COM</span>
                        </a>
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <span class="span-grupo">
                            https://
                        </span>
                        <input type="text" name="texto">
                        <span class="span-grupo">
                            .COM
                        </span>
                        <a  class="btn-o btn-gris-c-o dropdown-toggle a-ajuste-btn" data-target="#ext">
                            <span class="c-drop-grupo">.MX</span>
                        </a>
                    </div>
                </div>
            </pre>
        </div>
        <h3>Otro ejemplo</h3>
        <div class="ejemplo">
                <div class="input-g ">
                    <div class="grupo">
                        <span class="span-grupo">
                           $
                        </span>
                        <input type="text" name="texto">
                        <span class="span-grupo">
                            .00
                        </span>
                        <a  class="btn-o btn-gris-c-o dropdown-toggle" data-target="#precio">
                            <span class="c-drop-grupo">ARS</span>
                        </a>
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <span class="span-grupo">
                           $
                        </span>
                        <input type="text" name="texto">
                        <span class="span-grupo">
                            .00
                        </span>
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <input type="text" name="texto">
                        <span class="span-grupo">
                           $
                        </span>
                        <span class="span-grupo">
                            .00
                        </span>
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <span class="span-grupo">
                           $
                        </span>
                        <span class="span-grupo">
                            .00
                        </span>
                        <input type="text" name="texto">
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <input type="text" name="texto">
                        <a  class="btn-o btn-gris-c-o dropdown-toggle" data-target="#busqueda">
                        </a>
                        <a  class="btn-o btn-gris-c-o">
                            Buscar
                        </a>
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <input type="text" name="texto">
                        <a  class="btn-o btn-gris-c-o" >
                            Boton1
                        </a>
                        <a  class="btn-o btn-gris-c-o">
                            Boton2
                        </a>
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        
                        <a  class="btn-o btn-gris-c-o" >
                            Boton1
                        </a>
                        <a  class="btn-o btn-gris-c-o">
                            Boton2
                        </a>
                        <input type="text" name="texto">
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <input type="text" name="texto">
                        <a  class="btn-o btn-gris-c-o" >
                            Boton1
                        </a>
                        <a  class="btn-o btn-gris-c-o">
                            Boton2
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="html">
                <pre class="brush:html">
                    <div class="input-g ">
                        <div class="grupo">
                            <span class="span-grupo">
                            Precio
                            </span>
                            <input type="text" name="texto">
                            <span class="span-grupo">
                                .00
                            </span>
                            <a  class="btn-o btn-gris-c-o dropdown-toggle" data-target="#precio">
                                <span class="c-drop-grupo">ARS</span>
                            </a>
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            <span class="span-grupo">
                            $
                            </span>
                            <input type="text" name="texto">
                            <span class="span-grupo">
                                .00
                            </span>
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            <input type="text" name="texto">
                            <span class="span-grupo">
                            $
                            </span>
                            <span class="span-grupo">
                                .00
                            </span>
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            <span class="span-grupo">
                            $
                            </span>
                            <span class="span-grupo">
                                .00
                            </span>
                            <input type="text" name="texto">
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            <input type="text" name="texto">
                            <a  class="btn-o btn-gris-c-o dropdown-toggle" data-target="#busqueda">
                            </a>
                            <a  class="btn-o btn-gris-c-o">
                                Buscar
                            </a>
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            <input type="text" name="texto">
                            <a  class="btn-o btn-gris-c-o" >
                                Boton1
                            </a>
                            <a  class="btn-o btn-gris-c-o">
                                Boton2
                            </a>
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            
                            <a  class="btn-o btn-gris-c-o" >
                                Boton1
                            </a>
                            <a  class="btn-o btn-gris-c-o">
                                Boton2
                            </a>
                            <input type="text" name="texto">
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            <input type="text" name="texto">
                            <a  class="btn-o btn-gris-c-o" >
                                Boton1
                            </a>
                            <a  class="btn-o btn-gris-c-o">
                                Boton2
                            </a>
                            
                        </div>
                    </div>
                </pre>
            </div>
            <p>
                Cuando queremos generar una especie de combobox con los dropdown de los grupos 
                simplemente dentro de la etiqueta <i>a.dropdown-toggle</i> agregamos un span con la clase 
                <i>.c-drop-grupo</i> con el primer valor de la lista. 
            </p>

            <div class="alerta-op-gris mab-3">
                Es recomendable ver la sección dropdown de esta librería 
                para poder entender más claramente el funcionamiento que se muestra 
                en el ejemplo anterior. <a href="dropdown.php" target="_blank" class="link">Dropdown</a>
            </div>

            <h3>Iconos</h3>
            <p>
                Podemos utilizar los grupos agregandoles íconos.
            </p>

            <div class="ejemplo">
                <div class="input-g">
                    <div class="grupo">
                        <span class="span-grupo tips-ele" >
                            <span class="icon-books"></span>
                        </span>
                        <input type="text">
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <span class="span-grupo">
                            <span class="icon-price-tags"></span>
                        </span>
                        <input type="text">
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <span class="span-grupo tips-ele" data-posicion="arriba" data-tips="Busqueda por nombre">
                            <span class="icon-search"></span>
                        </span>
                        <input type="text">
                        <a href="#" class="btn-o btn-gris-c-o tips-ele" data-posicion="arriba" data-tips="Busqueda por nombre"><span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <span class="span-grupo">
                            <span class="icon-search"></span>
                        </span>
                        <input type="text">
                        <a  class="btn-o btn-gris-c-o dropdown-toggle" data-target="#busqueda"></a>
                        <a href="#" class="btn-o btn-gris-c-o"><span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
                <div class="input-g mar-1">
                    <div class="grupo">
                        <input type="text">
                        <a  class="btn-o btn-gris-c-o dropdown-toggle" data-target="#busqueda"></a>
                        <a class="btn-o btn-gris-c-o">
                            <span class="icon-search"></span>
                        </a>
                       
                    </div>
                </div>
            </div>
            <div class="alerta-op-rojo mab-3">
                Los íconos no pertenecen a la librería los puede conseguir en. <br> 
                <a href="https://icomoon.io" target="_blank" class="link">https://icomoon.io</a>
            </div>
            <div class="html">
                <pre class="brush:html">
                    <div class="input-g">
                        <div class="grupo">
                            <span class="span-grupo">
                                <span class="icon-books"></span>
                            </span>
                            <input type="text">
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            <span class="span-grupo">
                                <span class="icon-price-tags"></span>
                            </span>
                            <input type="text">
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            <span class="span-grupo">
                                <span class="icon-search"></span>
                            </span>
                            <input type="text">
                            <a href="#" class="btn-o btn-gris-c-o"><span class="icon-arrow-right2"></span></a>
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            <span class="span-grupo">
                                <span class="icon-search"></span>
                            </span>
                            <input type="text">
                            <a  class="btn-o btn-gris-c-o dropdown-toggle" data-target="#busqueda">
                                <span class="f-abajo-grupo"></span>
                            </a>
                            <a href="#" class="btn-o btn-gris-c-o"><span class="icon-arrow-right2"></span></a>
                        </div>
                    </div>
                </pre>
            </div>
            </article>
            <article id="check" class="article scroll-item">
                <h2>Checbox Radio Button</h2>
                <div class="ejemplo">

                    <div class="input-g">
                        <div class="grupo">
                            <span class="span-grupo">
                                <input type="checkbox" name>
                            </span>
                            <input type="text">
                            <a href="#" class="btn-o btn-gris-c-o">Registrar</a>
                        </div>
                    </div>
                    <div class="input-g mar-1">
                        <div class="grupo">
                            <span class="span-grupo">
                                <input type="radio" name>
                            </span>
                            <input type="text">
                            <a href="#" class="btn-o btn-gris-c-o">Registrar</a>
                        </div>
                    </div>
                </div>
                <div class="html">
                    <pre class="brush:html">
                        <div class="input-g">
                            <div class="grupo">
                                <span class="span-grupo">
                                    <input type="checkbox" name>
                                </span>
                                <input type="text">
                                <a href="#" class="btn-o btn-gris-c-o">Registrar</a>
                            </div>
                        </div>
                        <div class="input-g mar-1">
                            <div class="grupo">
                                <span class="span-grupo">
                                    <input type="radio" name>
                                </span>
                                <input type="text">
                                <a href="#" class="btn-o btn-gris-c-o">Registrar</a>
                            </div>
                        </div>

                    </pre>
                </div>
            </article>
    
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#tamaños">Tamaños</a></li>
        <li><a href="#partes">Partes</a></li>
        <li><a href="#check">Checkbox y Radio</a></li>
    </ul>
</div>


<div id="listaEjemplo" class="dropdown">
    <ul>
        <li><a>item1</a></li>
        <li><a>item2</a></li>
        <li><a>item3</a></li>
    </ul>
</div>


<div id="ext" class="dropdown">
    <ul>
        <li><a>.AR</a></li>
        <li><a>.MX</a></li>
        <li><a>.ES</a></li>
    </ul>
</div>

<div id="busqueda" class="dropdown">
    <ul>
        <li><a>Articulos</a></li>
        <li><a>Viviendas</a></li>
        <li><a>Vacaciones</a></li>
    </ul>
</div>


<div id="precio" class="dropdown">
    <ul>
        <li><a>ARS</a></li>
        <li><a>USD</a></li>
        <li><a>EUR</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuForm")
</script>
