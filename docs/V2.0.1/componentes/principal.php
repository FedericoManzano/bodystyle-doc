        <div class="d-flex just-centrada ali-centrada fd-azul-c p-2">
    <span class="c-blanco">Ya existe la versión V3.1.0 &nbsp</span> <a href="https://bodystyle.000webhostapp.com">BodyStyle V3.1.0</a>
</div>
    <nav>    
        <div class="menu">
            <a class="menu-logo  par-m-2 fz-m-30">BodyStyle</a>
            <ul class="lista derecha ocultar-desde-medianos">
                <li><a href="documentacion/empezar.php" class="efecto-borde-rojo izquierda">Documentación</a></li>
                <li><a class="dropdown-toggle efecto-borde-rojo izquierda"
                        data-target="#versiones">v2.0.1</a></li>
                <a href="https://github.com/FedericoManzano/Bodystyle-v2.0.1-compilado/archive/master.zip" class="btn fd-naranja ">Descargar</a>
            </ul>
        </div>

        <div class="menu">
            <ul class="lista  just-centrada ocultar-solo-grandes">
                <li><a href="documentacion/empezar.php" class="efecto-borde-rojo izquierda">Documentación</a></li>
                <li><a class="dropdown-toggle efecto-borde-rojo izquierda"
                        data-target="#versiones">v2.0.1</a></li>
            </ul>
        </div>
    </nav>
    <section id="cabecera-principal" itemscope itemtype="http://schema.org/CreativeWork">
        <span class="badge-md badge-rojo" itemprop="version">v 2.0.1</span>
        <h1 class="fz-65 fz-m-80 fz-s-70" itemprop="name">BodyStyle</h1>
        <h2 itemprop="description">Librería de estilos CSS. Realizada para el desarrollo del interfaz de usuario UI.</h2>
        <div class="d-flex flex-wrap-m just-cobertura ancho-50 ancho-m-70 ancho-s-90 m-a mab-1">
            <a href="documentacion/empezar.php" class="btn-cubrir-lg-o btn-blanco-o">Comenzar</a>
            <a href="https://github.com/FedericoManzano" class="btn-cubrir-lg fd-blanco c-negro mi-1 mi-m-0">GitHub</a>
        </div>
    </section>


    <section itemscope itemtype="http://schema.org/CreativeWork" class="secciones">
        <h2 itemprop="name" class="fz-s-42"><span class="icon-flag c-azul-c " >&nbsp</span>Introducción</h2>
        <div class="fila" itemprop="description">
            <div class="cs-12 cm-6 cl-4 mab-10">
                <span class="icon-embed2 c-rojo fz-100"></span>
                <p  class="parrafo">
                    BodyStyle es una librería de estilos CSS de código abierto lo que permite 
                    la modificación e incorporación de nuevas funcionalidades que cumplan las necesidades 
                    de los desarrolladores.
                </p>
            </div>
            <div class="cs-12 cm-6 cl-4  mab-10">
                <span class="icon-github c-negro fz-100"></span>
                <p class="parrafo">
                    Todas las versiones de la librería esttán en repositoros de GitHub los cuales están 
                    enlazados en toda esta documentación.
                </p>
            </div>
            <div class="cs-12 cm-6 cl-4  mab-10">
                <span class="icon-css3 c-azul fz-100"></span>
                <p class="parrafo">
                    La librería está compuesta por estilos CSS compilados desde el pre-procesador SASS
                    prporcionado por ruby y que es de descarga libre desde la página oficial.
                </p>
            </div>
        </div>
    </section>

    <section class="secciones" itemscope itemtype="http://schema.org/CreativeWork" >
        <h2 itemprop="name"  class="fz-s-42"><span class="icon-display c-azul-c">&nbsp</span>Responsive</h2>
        <h3 itemprop="description"  class="f-grosor-3 c-gris mab-5">Todos los diseños pueden adaptarse a todos los tamaños de pantalla sin
            demasiado esfuerzo
            utilizando las herremientas de la librería.
        </h3>
        <img class="img-resposive ancho-70 ancho-m-80 ancho-s-100"
            src="https://editadigital.com/wp-content/uploads/2015/10/responsive_web_design.jpg" alt="BodyStyle y responsive design">
    </section>

    <section class="secciones" itemscope itemtype="http://schema.org/CreativeWork">
        <h2 itemprop="name" class="fz-s-42"><span class="icon-bullhorn c-azul-c">&nbsp</span>v2.0.1</h2>
        <div class="fila" itemprop="description">
            <div class="cs-12 cm-6 p-1 mab-10">
                <h3 class="mab-1"><span class="icon-cross c-rojo">&nbsp</span>Gestión de errores</h3>
                <p class="parrafo">
                    En esta versión se añade un modulo para la gestión de errores. Permite
                    poder comprender la raiz del problema cuando se ingresan mal los parámetros a
                    las llamadas a módulos de la librería.
                </p>
            </div>
            <div class="cs-12 cm-6  p-1 mab-10">
                <h3 class="mab-1"><span class="icon-wrench c-gris">&nbsp</span>Formularios</h3>
                <p class="parrafo">
                    Se incorporaron nuevos elementos para formularios y mejoras en las funcionalidades
                    que ya disponiamos en versiones anteriores. Validación de campos input, select mejorados,
                    y templates con mejores terminaciones.
                </p>
            </div>
            <div class="cs-12 cm-6  p-1  mab-10">
                <h3 class="mab-1"><span class="icon-embed c-verde">&nbsp</span>Refactorización</h3>
                <p class="parrafo">
                    El código SASS de la librería fué refactorizado ahora contamos con una
                    estructura de carpetas que hace más sencillo la modificación de estilos
                    pudiendo acceder a ellos a través de un archivo gloval con todas las variables
                    necesarias para alterar cualquier componente.
                </p>
            </div>
            <div class="cs-12 cm-6 p-1 mab-10">
                <h3 class="mab-1"><span class="icon-droplet c-azul-c">&nbsp</span>Paleta de colores</h3>
                <p class="parrafo">
                    Se añadieron mas colores a la paleta de fondos y textos para permitir
                    una mejor flexibilidad al momento de desarroolar el fronend.
                    Como así también mas utilitarios de flexbox y de textos que facilitan bastante la generación de
                    elementos
                    personalizados en diferentes tamaños de pantalla.
                </p>
            </div>
            <div class="cs-12 cm-6 p-1 mab-10">
                <h3 class="mab-1"><span class="icon-folder c-naranja">&nbsp</span>Modulos JS</h3>
                <p class="parrafo">
                    Se incorporaron mas módulos JS ampliando la gama de posibilidades en el diseño.
                    Entre ello se incorporó nuevos ScrollSpy, se le añadieron funcionalidades a las
                    barras de navegación y disponemos del módulo de gestión de errores.
                </p>
            </div>
            <div class="cs-12 cm-6 p-1 mab-10">
                <h3 class="mab-1"><span class="icon-cogs">&nbsp</span>Node Package</h3>
                <p class="parrafo">
                    A partir de esta versión podemos instalar bodystyle como una dependencia de NodeJs
                    utilizando los gestores de paquetes mas conocidos.
                    NPM y Yarn.
                </p>
            </div>
        </div>
    </section>

    <section class="secciones" itemscope itemtype="http://schema.org/CreativeWork">
        <h2 itemprop="name" class="fz-s-42"><span class="icon-laptop c-azul-c">&nbsp</span>Tecnologías</h2>

        <div class="contenedor-relativo ov-hidden ancho-70 ancho-s-100 m-a">
            <img src="https://s3-us-west-2.amazonaws.com/devcodepro/media/tutorials/instalacion-de-nodejs-en-ubuntu-t1.jpg"
                alt="Node Js dependencias" class="img-responsive img-display-enc img-exp">
            <span class="badge-esquina-sup-izq-verde">
                <span class="icon-images"></span>
            </span>
        </div>
        <div class="fila mar-5 " itemprop="description">
            <div class="cs-12 cm-4 m-1 m-s-0">
                <div class="contenedor-relativo">
                    <div id="webpack" class="d-flex just-centrada ali-centrada fd-gris-n efecto-hover-borde"
                        style="height: 200px;">
                        <h3 class="c-gris fz-30 f-grosor-7 ">Webpack</h3>
                    </div>
                    <span class="badge-solapa-azul">
                        Versión 4.42.1
                    </span>
                </div>
            </div>
            <div class="cs-12 cm-4 m-1 m-s-0">
                <div class="contenedor-relativo">
                    <div id="babel" class="d-flex just-centrada ali-centrada fd-gris-n efecto-hover-borde"
                        style="height: 200px;">
                        <h3 class="c-gris fz-30 f-grosor-7 ">Babel</h3>
                    </div>
                    <span class="badge-solapa-rojo">
                        Versión 7.8.4
                    </span>
                </div>
            </div>
            <div class="cs-12 cm-4 m-1 m-s-0">
                <div class="contenedor-relativo">
                    <div id="jquery" class="d-flex just-centrada ali-centrada fd-gris-n efecto-hover-borde"
                        style="height: 200px;">
                        <h3 class="c-gris fz-30 f-grosor-7 ">Jquery</h3>
                    </div>
                    <span class="badge-solapa-verde">
                        Versión 3.5.0
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones" itemscope itemtype="http://schema.org/CreativeWork">
        <h2 itemprop="name" class="fz-s-42"><span class="icon-folder-download c-azul-c">&nbsp</span>Descarga</h2>
        <p itemprop="description" class="parrafo">La descarga puede ser a través de los archivos convertidos a CSS <span
                class="badge badge-azul">bodystyle.css</span>
            o la librería con todos los archivos de SASS para poder modificar o agregar funcionalidades.
        </p>
        <div class="d-flex just-centrada">
            <div class="a-i">
                <h6 class="mar-3 fz-20"><span class="icon-file-zip c-naranja">&nbsp</span>BodyStyle-v2.0.1.zip</h6>
                <h6 class="mi-3 fz-20"><span class="icon-folder c-naranja">&nbsp</span>dist</h6>
                <h6 class="mi-6 fz-20"><span class="icon-folder c-naranja">&nbsp</span>css</h6>
                <p class="mi-9 p-1"><span class="icon-file-text2">&nbsp;</span>bodystyle.css</p>
                <p class="mi-9 p-1"><span class="icon-file-text2">&nbsp;</span>bodystyle.css.map</p>
                <p class="mi-9 p-1"><span class="icon-file-text2">&nbsp;</span>bodystyle.min.css</p>
                <p class="mi-9 p-1"><span class="icon-file-text2">&nbsp;</span>grillaSolo.css</p>
                <p class="mi-9 p-1"><span class="icon-file-text2">&nbsp;</span>grillaSolo.css.map</p>
                <p class="mi-9 p-1"><span class="icon-file-text2">&nbsp;</span>grillaSolo.min.css</p>
                <h6 class="mi-6 fz-20"><span class="icon-folder c-naranja">&nbsp</span>js</h6>
                <p class="mi-9 p-1"><span class="icon-file-text2">&nbsp;</span>bodystyle.js</p>
                <p class="mi-9 p-1"><span class="icon-file-text2">&nbsp;</span>bodystyle.min.js</p>
                <p class="mi-3 p-1"><span class="icon-file-text2">&nbsp;</span>LICENCE</p>
                <div class="d-flex flex-wrap-s mar-4">
                    <a href="https://github.com/FedericoManzano/bodystyle-fuente-v2.0.0" class="btn-cubrir-lg fd-azul-ve  md-1 md-s-0 mar-1"><span
                            class="icon-github">&nbsp;</span>Repositorio</a>
                    <a href="https://github.com/FedericoManzano/BodyStyle-v2.0.0-compilado/archive/master.zip" class="btn-cubrir-lg fd-rojo md-1 md-s-0 mar-1"><span
                            class="icon-cloud-download">&nbsp;</span>Descarga</a>
                    <a href="https://github.com/FedericoManzano" class="btn-cubrir-lg fd-verde mar-1"><span
                            class="icon-user-check">&nbsp;</span>Contacto</a>
                </div>

            </div>
        </div>
    </section>
    <footer class="footer fd-gris-az-o" itemscope itemtype="http://schema.org/CreativeWork">
        <div class="fila">
            <div class="cs-12 cm-12 cl-4">
                <div class="footer-logo" itemprop="name">
                    BodyStyle
                </div>
            </div>
            <div class="cs-12 cm-6 cl-4">
                <h3 class="footer-titulo" itemprop="name">
                    Librería
                </h3>
                <ul>
                    <li><a href="documentacion/empezar.php">Descarga</a></li>
                    <li><a href="documentacion/empezar.php">Documentación</a></li>
                </ul>
            </div>
            <div class="cs-12 cm-6 cl-4">
                <h3 class="footer-titulo" itemprop="name">
                    Contacto
                </h3>
                <ul>
                    <li><a href="#!">federicomanzano111@gmail.com</a></li>
                </ul>


            </div>
        </div>

        <div class="footer-pie fz-13">
            <span itemprop="author">©Federico Manzano</span>
            <span itemprop="license">Licencia MIT</span>
        </div>
    </footer>

    <div class="social">
        <a target="_blank" href="https://bodystylecss.blogspot.com/" class="fd-naranja">
            <span class="fd-naranja">Blog</span>
            <i class="icon-blogger"></i>
        </a>
        <a target="_blank" href="https://github.com/FedericoManzano" class="fd-azul-ve">
            <span class="fd-azul-ve">GitHub</span>
            <i class="icon-github"></i>
        </a>
    </div>
    <div id="versiones" class="dropdown">
        <ul>
            <li><a href="https://bodystyle.000webhostapp.com/" class="e-borde-izq-verde-5">V3.1.0 Actual</a></li>
            <li><a href="https://bodystyle.000webhostapp.com/docs/V3.0.0" class="e-borde-izq-verde-5">V3.0.0</a></li>
            <li><a href="https://bodystyle.000webhostapp.com/docs/V2.2.0" class="e-borde-izq-verde-5">V2.2.0</a></li>
            <li><a href="https://bodystyle.000webhostapp.com/docs/V2.0.1/index.php" class="e-borde-izq-verde-5">2.0.1</a></li>
            <li><a href="https://bodystyle.000webhostapp.com/docs/V2.0.0/index.php" class="e-borde-izq-verde-5">2.0.0</a></li>
        </ul>
    </div>

    

