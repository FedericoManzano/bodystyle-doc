<?php $titulo = "Tabs"?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Tabs";
        $descripcion = "";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="iniciar" class="article scroll-item">
        <h2>Iniciar</h2>

        <p>
            Para poder utilizar este compoenente tenemos que inicializarlo.
        </p>

        <div class="js">
            <pre class="brush:js">
                BS.TabInit().iniciar("#contexto")
            </pre>
        </div>
        <div class="alerta-op-verde">
            Siendo el contexto el id del contenedor padre de todo el tab.
        </div>

    </article>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>

        <div class="ejemplo fd-gris-c">
            <div id="tab1">
                <div class="tab">
                    <div class="op-tab">
                        <div class="op-listado">
                            <label class="tips-ele" data-target="#1"
                            data-posicion="arriba" data-tips="Solapa Activa">Inicio</label>
                            <label data-target="#2">Servicios</label>
                            <label data-target="#3">Contacto</label>
                            <label data-target="#4" class="desactivado tips-ele"
                            data-posicion="arriba" data-tips="<span class='c-rojo-c'>.desactivado</span>">Desactivado</label>
                        </div>
                    </div>
                    <div id="1" class="contenido-tab">
                        <h3 class="mab-2">Contenido 1</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt fugit ea, perspiciatis sequi aliquid doloremque at voluptatibus rerum dolor provident, nisi minima exercitationem eum! Minima magnam eos quia iure voluptatibus!</p>
                    </div>
                    <div id="2" class="contenido-tab">
                        <h3 class="mab-2">Contenido 2</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt fugit ea, perspiciatis sequi aliquid doloremque at voluptatibus rerum dolor provident, nisi minima exercitationem eum! Minima magnam eos quia iure voluptatibus!</p>
                    </div>
                    <div id="3" class="contenido-tab">
                        <h3 class="mab-2">Contenido 3</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt fugit ea, perspiciatis sequi aliquid doloremque at voluptatibus rerum dolor provident, nisi minima exercitationem eum! Minima magnam eos quia iure voluptatibus!</p>
                    </div>
                    <div id="4" class="contenido-tab">
                        <h3 class="mab-2">Contenido 4</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt fugit ea, perspiciatis sequi aliquid doloremque at voluptatibus rerum dolor provident, nisi minima exercitationem eum! Minima magnam eos quia iure voluptatibus!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR SI LO COPIAN
                <div id="tab1">
                    <div class="tab">
                        <div class="op-tab">
                            <div class="op-listado">
                                <label class="tips-ele" data-target="#1"
                                data-posicion="arriba" data-tips="Solapa Activa">Inicio</label>
                                <label data-target="#2">Servicios</label>
                                <label data-target="#3">Contacto</label>
                                <label data-target="#4" class="desactivado tips-ele"
                                data-posicion="arriba" data-tips="<span class='c-rojo-c'>.desactivado</span>">Desactivado</label>
                            </div>
                        </div>
                        <div id="1" class="contenido-tab">
                            <h3 class="mab-2">Contenido 1</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt fugit ea, perspiciatis sequi aliquid doloremque at voluptatibus rerum dolor provident, nisi minima exercitationem eum! Minima magnam eos quia iure voluptatibus!</p>
                        </div>
                        <div id="2" class="contenido-tab">
                            <h3 class="mab-2">Contenido 2</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt fugit ea, perspiciatis sequi aliquid doloremque at voluptatibus rerum dolor provident, nisi minima exercitationem eum! Minima magnam eos quia iure voluptatibus!</p>
                        </div>
                        <div id="3" class="contenido-tab">
                            <h3 class="mab-2">Contenido 3</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt fugit ea, perspiciatis sequi aliquid doloremque at voluptatibus rerum dolor provident, nisi minima exercitationem eum! Minima magnam eos quia iure voluptatibus!</p>
                        </div>
                        <div id="4" class="contenido-tab">
                            <h3 class="mab-2">Contenido 4</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt fugit ea, perspiciatis sequi aliquid doloremque at voluptatibus rerum dolor provident, nisi minima exercitationem eum! Minima magnam eos quia iure voluptatibus!</p>
                        </div>
                    </div>
                </div>
                -->
            </pre>
        </div>
        <h3>Estructura Básica</h3>
        <div class="html">
            <pre class="brush:html">
                <div id="tabX"> <!-- Contenedor Contexto -->

                    <div class="tab">

                        <div class="op-tab">
                            <ul>
                                <!-- Atributo data target -->
                                <label data-target="#1">Inicio</label>
                                <label data-target="#2">Servicios</label>
                                <label data-target="#3">Contacto</label>
                            </ul>
                        </div>

                        <!-- Contenido asociado al primer enlace -->
                        <div id="1" class="contenido-tab">

                            <h3 class="mab-2">Contenido 1</h3>

                        </div>

                        <!-- Contenido asociado al segundo enlace -->
                        <div id="2" class="contenido-tab">

                            <h3 class="mab-2">Contenido 2</h3>
                            
                        </div>

                        <!-- Contenido asociado al tercer enlace -->
                        <div id="3" class="contenido-tab">
                            
                            <h3 class="mab-2">Contenido 3</h3>
        
                        </div>
                    </div>
                </div>
            </pre>
        </div>
        <span class="span">
            Cada una de las etiquetas <i>a</i> tienen el atributo <i>data-target</i> el cual apunta 
            al contenido asociado al enlace. <br> 
            Los ids pueden seleccionarlos ustedes pero tiene que coincidir el attr <i>data-target</i> de 
            la etiqueta <i>a</i> con el id del contenido.
        </span>
        <div class="js">
            <pre class="brush:js">
                BS.TabInit().iniciar("#tabX")
            </pre>
        </div>
        <div class="alerta-op-verde">
            Si tenemos más de un tab dentro de la misma página 
            lo único que tenemos que hacer es inicializar cada uno de ellos 
            con la función correspondiente y respetando el ID que corresponda a cada tab.
        </div>
    </article>
    <article id="borde" class="article scroll-item">
        <h2>Tabs Con borde</h2>

        <div class="ejemplo">
            <div id="tab3">
                <div class="tab-borde ">
                    <div class="op-tab-borde">
                        <ul>
                            <label data-target="#c-1">Test 1</label>
                            <label data-target="#c-2" >Test 2</label>
                            <label data-target="#c-3">Test 3</label>
                            <label data-target="#c-4" class="desactivado">Desactivado</label>
                        </ul>
                    </div>
                </div>
                <div id="c-1" class="contenido-tab">
                    <h3>Test 1</h3>
                </div>
                <div id="c-2" class="contenido-tab">
                    <h3>Test 2</h3>
                </div>
                <div id="c-3" class="contenido-tab">
                    <h3>Test 3</h3>
                </div>
                <div id="c-4" class="contenido-tab">
                    <h3>Desactivado</h3>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR
                    <div id="tab3">
                        <div class="tab-borde ">
                            <div class="op-tab-borde">
                                <ul>
                                    <label data-target="#c-1">Test 1</label>
                                    <label data-target="#c-2" >Test 2</label>
                                    <label data-target="#c-3">Test 3</label>
                                    <label data-target="#c-4" class="desactivado">Desactivado</label>
                                </ul>
                            </div>
                        </div>
                        <div id="c-1" class="contenido-tab">
                            <h3>Test 1</h3>
                        </div>
                        <div id="c-2" class="contenido-tab">
                            <h3>Test 2</h3>
                        </div>
                        <div id="c-3" class="contenido-tab">
                            <h3>Test 3</h3>
                        </div>
                        <div id="c-4" class="contenido-tab">
                            <h3>Desactivado</h3>
                        </div>
                    </div>

                -->
            </pre>
        </div>
        <div class="js">
            <pre class="brush:js">
                BS.TabInit().iniciarBorde({
                    contexto: "#tab3"
                })
            </pre>
        </div>
        <div class="alerta-op-verde">
            Es importante inicializar el componente pasandole el ID del contenedor padre 
            de todo el tab.
        </div>
    </article>
    <article id="personalizado" class="article scroll-item">
        <h2>Tabs Personalizado</h2>
        <h3>Configuración</h3>
        <div class="tabla-responsive">
            <table class="tabla-azul">
                <thead>
                    <tr>
                        <td>Atributo</td>
                        <td>Valores</td>
                        <td>Defecto</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>contexto</td>
                        <td>ID del contenedor padre</td>
                        <td>NULL</td>
                    </tr>
                    <tr>
                        <td>colorFuente</td>
                        <td>Clase Ej (.c-blanco)</td>
                        <td>.c-negro</td>
                    </tr>
                    <tr>
                        <td>colorFuente</td>
                        <td>Clase Ej (.c-blanco)</td>
                        <td>.c-negro</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="ejemplo">
            <div id="tab4">
                <div class="tab-borde ">
                    <div class="op-tab-borde">
                        <ul>
                            <label data-target="#t-1">Test 1</label>
                            <label data-target="#t-2" >Test 2</label>
                            <label data-target="#t-3">Test 3</label>
                            
                        </ul>
                    </div>
                </div>
                <div id="t-1" class="contenido-tab">
                    <h3>Test 1</h3>
                </div>
                <div id="t-2" class="contenido-tab">
                    <h3>Test 2</h3>
                </div>
                <div id="t-3" class="contenido-tab">
                    <h3>Test 3</h3>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR
                    <div id="tab4">
                        <div class="tab-borde ">
                            <div class="op-tab-borde">
                                <ul>
                                    <label data-target="#c-1">Test 1</label>
                                    <label data-target="#c-2" >Test 2</label>
                                    <label data-target="#c-3">Test 3</label>
                                    
                                </ul>
                            </div>
                        </div>
                        <div id="c-1" class="contenido-tab">
                            <h3>Contenido TAb 1</h3>
                        </div>
                        <div id="c-2" class="contenido-tab">
                            <h3>Contenido TAb 2</h3>
                        </div>
                        <div id="c-3" class="contenido-tab">
                            <h3>Contenido TAb 3</h3>
                        </div>
                    </div>

                -->
            </pre>
        </div>
        <div class="js">
            <pre class="brush:js">
                BS.TabInit().iniciarBorde({
                    contexto: "#tab4"
                })
            </pre>
        </div>
        <div class="alerta-op-verde">
            Es importante inicializar el componente pasandole el ID del contenedor padre 
            de todo el tab.
        </div>
        <h3>Ejemplo Configuración</h3>
        <div class="ejemplo">
            <div id="tab5">
                <div class="tab-borde ">
                    <div class="op-tab-borde">
                        <ul>
                            <label data-target="#l-1">Test 1</label>
                            <label data-target="#l-2" >Test 2</label>
                            <label data-target="#l-3">Test 3</label>
                        </ul>
                    </div>
                </div>
                <div id="l-1" class="contenido-tab">
                    <div class="d-flex ali-centrada p-3">
                        <p>Soy el contenido del TAB 1</p>
                    </div>
                </div>
                <div id="l-2" class="contenido-tab">
                    <div class="d-flex ali-centrada p-3">
                        <p>Soy el contenido del TAB 2</p>
                    </div>
                </div>
                <div id="l-3" class="contenido-tab">
                    <div class="d-flex ali-centrada p-3">
                        <p>Soy el contenido del TAB 1</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="html">
        
            <pre class="brush:html">
                <!--
                <div id="tab5">
                    <div class="tab-borde ">
                        <div class="op-tab-borde">
                            <ul>
                                <label data-target="#l-1">Test 1</label>
                                <label data-target="#l-2" >Test 2</label>
                                <label data-target="#l-3">Test 3</label>
                                
                            </ul>
                        </div>
                    </div>
                    <div id="l-1" class="contenido-tab">
                        <h3>Contenido TAb 1</h3>
                    </div>
                    <div id="l-2" class="contenido-tab">
                        <h3>Contenido TAb 2</h3>
                    </div>
                    <div id="l-3" class="contenido-tab">
                        <h3>Contenido TAb 3</h3>
                    </div>
                </div>
                -->
            </pre>
        </div>
        <div class="js">
            <pre class="brush:js">
                BS.TabInit().iniciarBorde({
                    contexto: "#tab5",
                    colorFuente: "c-blanco",
                    colorFondo: "fd-rojo",
                    colorBorde: "fd-blanco"
                })
            </pre>
        </div>
        <h3>Otro Ejemplo Configuración</h3>
        <div class="ejemplo">
            <div id="tab6">
                <div class="tab-borde">
                    <div class="op-tab-borde">
                        <ul>
                            <label data-target="#con-1">Test 1</label>
                            <label data-target="#con-2">Test 2</label>
                            <label data-target="#con-3">Test 3</label>
                            <label data-target="#con-4">Test 4</label>
                            <label data-target="#con-5">Test 5</label>
                            <label data-target="#con-6">Test 6</label>
                        </ul>
                    </div>
                    
                </div>
                <div id="con-1" class="contenido-tab">
                    <p>Contenido 1</p>
                </div>
                <div id="con-1" class="contenido-tab">
                    <p>Contenido 1</p>
                </div>
                <div id="con-2" class="contenido-tab">
                    <p>Contenido 2</p>
                </div>
                <div id="con-3" class="contenido-tab">
                    <p>Contenido 3</p>
                </div>
                <div id="con-4" class="contenido-tab">
                    <p>Contenido 4</p>
                </div>
                <div id="con-5" class="contenido-tab">
                    <p>Contenido 5</p>
                </div>
                <div id="con-6" class="contenido-tab">
                    <p>Contenido 6</p>
                </div>
            </div>
        </div>
        <div class="codigo">
            <pre class="brush:js">
                BS.TabInit().iniciarBorde({
                    contexto: "#tab6",
                    colorFuente: "c-blanco",
                    colorFondo: "fd-azul-ve",
                    colorBorde: "fd-naranja"
                })
            </pre>
        </div>
    </article>
</section>
<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#iniciar">Iniciar</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#borde">Borde</a></li>
        <li><a href="#personalizado">Personalizado</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>



<script>
    BS.DesplegarSidebarFija().desplegar("#menuJS")
</script>


<script>
    BS.TabInit().iniciar("#tab1")


    BS.TabInit().iniciarBorde({
        contexto: "#tab3"
    })

    BS.TabInit().iniciarBorde({
        contexto: "#tab4"
    })

    BS.TabInit().iniciarBorde({
        contexto: "#tab5",
        colorFuente: "c-blanco",
        colorFondo: "fd-rojo",
        colorBorde: "fd-blanco"
    })

    BS.TabInit().iniciarBorde({
        contexto: "#tab6",
        colorFuente: "c-blanco",
        colorFondo: "fd-azul-ve",
        colorBorde: "fd-naranja"
    })
</script>