<?php $titulo = "Bordes" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    <?php 
        $titulo = "Bordes";
        $descripcion = "";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="porcentaje" class="article scroll-item">
        <h2>Bordes Porcentaje radio</h2>
        <p>
            Bordes Radio por porcentaje las clases disponibles son: 
            <i>.bor-rad-por-{radio}</i> siendo radio un valor entero de 1 - 50, siendo 
            este valor un porcentaje.
        </p>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="bor-rad-por-5 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-por-10 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-por-15 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-por-20 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-por-25 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-por-30 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-por-35 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-por-40 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-por-45 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-por-50 fd-negro" style="height: 100px; width: 100px"></div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="bor-rad-por-5 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-por-10 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-por-15 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-por-20 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-por-25 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-por-30 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-por-35 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-por-40 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-por-45 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-por-50 fd-negro" style="height: 100px; width: 100px"></div>
                </div>
            </pre>
        </div>
    </article>
    <article id="pixeles" class="article scroll-item">
        <h2>Bordes Radio pixeles</h2>
        <p>
            Bordes Radio en pixeles las clases disponibles son: 
            <i>.bor-rad-{radio}</i> siendo radio un valor entero de 1 - 300, siendo 
            este valor un tamaño en pixeles.
        </p>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="bor-rad-5 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-10 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-15 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-20 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-25 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-30 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-35 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-40 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-45 fd-negro" style="height: 100px; width: 100px"></div>
                <div class="bor-rad-50 fd-negro" style="height: 100px; width: 100px"></div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="bor-rad-5 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-10 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-15 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-20 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-25 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-30 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-35 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-40 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-45 fd-negro" style="height: 100px; width: 100px"></div>
                    <div class="bor-rad-50 fd-negro" style="height: 100px; width: 100px"></div>
                </div>
            </pre>
        </div>
    </article>
    <article id="bordes" class="article scroll-item">
        <h2>Bordes 4 lados</h2>
        <p>
            Vamos a ver la diferentes clases para añadir bordes a una figura.
        </p>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="fd-gris bor-1" style="width: 100px; height: 100px"></div>
                <div class="fd-gris bor-2" style="width: 100px; height: 100px"></div>
                <div class="fd-gris bor-3" style="width: 100px; height: 100px"></div>
                <div class="fd-gris bor-4" style="width: 100px; height: 100px"></div>
                <div class="fd-gris bor-5" style="width: 100px; height: 100px"></div>
                <div class="fd-gris bor-6" style="width: 100px; height: 100px"></div>
                <div class="fd-gris bor-7" style="width: 100px; height: 100px"></div>
                <div class="fd-gris bor-8" style="width: 100px; height: 100px"></div>
                <div class="fd-gris bor-9" style="width: 100px; height: 100px"></div>
                <div class="fd-gris bor-10" style="width: 100px; height: 100px"></div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap just-cobertura">
                    <div class="fd-gris bor-1" style="width: 100px; height: 100px"></div>
                    <div class="fd-gris bor-2" style="width: 100px; height: 100px"></div>
                    <div class="fd-gris bor-3" style="width: 100px; height: 100px"></div>
                    <div class="fd-gris bor-4" style="width: 100px; height: 100px"></div>
                    <div class="fd-gris bor-5" style="width: 100px; height: 100px"></div>
                    <div class="fd-gris bor-6" style="width: 100px; height: 100px"></div>
                    <div class="fd-gris bor-7" style="width: 100px; height: 100px"></div>
                    <div class="fd-gris bor-8" style="width: 100px; height: 100px"></div>
                    <div class="fd-gris bor-9" style="width: 100px; height: 100px"></div>
                    <div class="fd-gris bor-10" style="width: 100px; height: 100px"></div>
                </div>
            </pre>
        </div>
        <p>
            La clase utilizada es <i>.bor-{tam}</i> siendo tam la medida 
            en px del borde que va de 1  a 10.
        </p>
    </article>
    <article id="Colores" class="article scroll-item">
        <h2>Bordes 4 lados colores</h2>
        <p>
            Vamos a ver la diferentes clases para añadir bordes a una figura.
        </p>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="fd-gris bor-rojo-1" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-2" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-3" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-4" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-5" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-6" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-7" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-8" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-9" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-10" style="height: 100px; width: 100px"></div>
            </div>
            <div class="d-flex flex-wrap just-cobertura">
                <div class="fd-gris bor-rojo-c-1" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-2" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-3" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-4" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-5" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-6" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-7" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-8" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-9" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-10" style="height: 100px; width: 100px"></div>
            </div>
            <div class="d-flex flex-wrap just-cobertura">
                <div class="fd-gris bor-azul-1" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-2" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-3" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-4" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-5" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-6" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-7" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-8" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-9" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-10" style="height: 100px; width: 100px"></div>
            </div>
            <div class="d-flex flex-wrap just-cobertura">
                <div class="fd-gris bor-verde-1" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-2" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-3" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-4" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-5" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-6" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-7" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-8" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-9" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-10" style="height: 100px; width: 100px"></div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
            <div class="d-flex flex-wrap just-cobertura">
                <div class="fd-gris bor-rojo-1" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-2" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-3" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-4" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-5" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-6" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-7" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-8" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-9" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-10" style="height: 100px; width: 100px"></div>
            </div>
            <div class="d-flex flex-wrap just-cobertura">
                <div class="fd-gris bor-rojo-c-1" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-2" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-3" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-4" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-5" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-6" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-7" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-8" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-9" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-rojo-c-10" style="height: 100px; width: 100px"></div>
            </div>
            <div class="d-flex flex-wrap just-cobertura">
                <div class="fd-gris bor-azul-1" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-2" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-3" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-4" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-5" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-6" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-7" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-8" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-9" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-azul-10" style="height: 100px; width: 100px"></div>
            </div>
            <div class="d-flex flex-wrap just-cobertura">
                <div class="fd-gris bor-verde-1" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-2" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-3" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-4" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-5" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-6" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-7" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-8" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-9" style="height: 100px; width: 100px"></div>
                <div class="fd-gris bor-verde-10" style="height: 100px; width: 100px"></div>
            </div>
            </pre>
        </div>
        <p>
            La clase utilizada es <i>.bor-{color}-{tam}</i> siendo color los colores 
            documentados en la sección correspondiente. 
        </p>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#porcentaje">Porcentaje</a></li>
        <li><a href="#pixeles">Pixeles</a></li>
        <li><a href="#bordes">Bordes</a></li>
        <li><a href="#colores">Colores</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuUti")
</script>