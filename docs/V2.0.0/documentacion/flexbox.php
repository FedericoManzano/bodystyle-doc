<?php $titulo = "Flexbox" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Flexbox";
        $descripcion = "Una de las herramientas más utilizadas desde CSS3 y que a través de 
        bodyStyle vamos a disponer de clases que nos permitan hacer uso de estas propiedades 
        sin demasiado esfuerzo y sin agregar código css adicional.";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="flex" class="article scroll-item">
        <h2>Display Flex</h2>
        <p class="parrafo">
            la propiedad de CSS que permite declarar un elemento con alineación Flexbox es 
            <span class="c-azul-c">display: flex </span> de css. <br> 
            Lo que permite que en un contenedor todos los hijos se posicionen horizontalmente uno al lado 
            de otro.
        </p>

        <div class="ejemplo">
            <div class="d-flex">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="d-flex">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                </div>
            </pre>
        </div>
        <p class="parrafo">
            Ahora que pasaría si no utilizamos flexbox. 
        </p>

        <div class="ejemplo">
            <div>
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
            </div>
        </div>
        <p class="parrafo">
            Noten que los contenedores se posicionan uno abajo del otro y la 
            única diferencia con el ejemplo anterior es la clase <span class="c-azul-c">d-flex</span> 
            que contiene el contenedor padre de las dos cajas.
        </p>

        <h3>Varias cajas con flexbox</h3>
            <div class="ejemplo">
                <div class="d-flex">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                    <div class="ej-fijo">
                        Box3
                    </div>
                    <div class="ej-fijo">
                        Box4
                    </div>
                    <div class="ej-fijo">
                        Box5
                    </div>
                </div>
            </div>
            
            <div class="html">
                <pre class="brush:html">
                
                <div class="d-flex">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                    <div class="ej-fijo">
                        Box3
                    </div>
                    <div class="ej-fijo">
                        Box4
                    </div>
                    <div class="ej-fijo">
                        Box5
                    </div>
                </div>
                </pre>
            </div>
            <p class="parrafo">
                Es importante poder observar como flexbox ajusta el ancho de 
                las cajas para que quepan detro de la misma fila horizontal. 
                Ahora bien, las cajas tienen un ancho fijo de 200px pero en el 
                ejemplo su ancho disminuye para poder posicionar horizontalmente los 
                elementos. <br> 
                para evitar esto y mantener el ancho fijo utilizamos flex-wrap.
            </p>
    </article>
    <article id="wrap" class="article scroll-item">
        <h2>Flex wrap</h2>
        <p class="parrafo">
            Esta propiedad permite mantener el ancho de los elementos y si estos no 
            caben dentro de una sola fila, la propiedad crea una segunda fila reacomodando 
            los elementos sobrantes debajo.
        </p>

        <div class="ejemplo">
            <div class="d-flex flex-wrap">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
                <div class="ej-fijo">
                    Box3
                </div>
                <div class="ej-fijo">
                    Box4
                </div>
                <div class="ej-fijo">
                    Box5
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                    <div class="ej-fijo">
                        Box3
                    </div>
                    <div class="ej-fijo">
                        Box4
                    </div>
                    <div class="ej-fijo">
                        Box5
                    </div>
                </div>
            </pre>
        </div>

        <p class="parrafo">
            Como podemos ver se mantiene el ancho de 200px y se colocan 2 
            cajas en la segunda fila.
        </p>
    </article>

    <article id="direcciones" class="article scroll-item">
        <h2>Direcciones flexbox</h2>
        <p>
            Disponemos de dos tipos de flexbox (fila, columna). <br> 
            por defecto d-flex es en filas pero si utilizamos la clase 
            flex-columna. Podemos alinear el contenido verticalmente.
        </p>

        <div class="ejemplo">
            <div class="d-flex flex-fila">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
                <div class="ej-fijo">
                    Box3
                </div>
                <div class="ej-fijo">
                    Box4
                </div>
            </div>
            <div class="d-flex flex-columna mar-2">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
                <div class="ej-fijo">
                    Box3
                </div>
                <div class="ej-fijo">
                    Box4
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-fila">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                    <div class="ej-fijo">
                        Box3
                    </div>
                    <div class="ej-fijo">
                        Box4
                    </div>
                </div>
                <div class="d-flex flex-columna mar-2">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                    <div class="ej-fijo">
                        Box3
                    </div>
                    <div class="ej-fijo">
                        Box4
                    </div>
                </div>
            </pre>
        </div>

        <h3>Flex reverso</h3>
        <p>
            Podemos reacomodar los elementos en orden inverso al que se encuentran 
            definidos dento del html.
        </p>

        <div class="ejemplo">
            <div class="d-flex flex-fila-reversa">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
                <div class="ej-fijo">
                    Box3
                </div>
                <div class="ej-fijo">
                    Box4
                </div>
            </div>

            <div class="d-flex flex-columna-reversa mar-1">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
                <div class="ej-fijo">
                    Box3
                </div>
                <div class="ej-fijo">
                    Box4
                </div>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-fila-reversa">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                    <div class="ej-fijo">
                        Box3
                    </div>
                    <div class="ej-fijo">
                        Box4
                    </div>
                </div>

                <div class="d-flex flex-columna-reversa mar-1">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                    <div class="ej-fijo">
                        Box3
                    </div>
                    <div class="ej-fijo">
                        Box4
                    </div>
                </div>
            </pre>
        </div>
    </article>

    <article id="just" class="article scroll-item">
        <h2>Justificación</h2>
        <p>
            La justificación es una de las propiedades más importantes de flexbox 
            ya que permite alinear el contenido a la izquierda, a la derecha o en el centro. 
            También permite alinear los elementos de manera tal que cubran todo el ancho 
            del contenedor padre.
        </p>

        <h3>Justificación centrada</h3>

        <div class="ejemplo">
            <div class="d-flex just-centrada">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-centrada">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                </div>
            </pre>
        </div>

        <h3>Justificación Inicio</h3>
        <div class="ejemplo">
            <div class="d-flex just-inicio">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-inicio">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                </div>
            </pre>
        </div>
        <h3>Justificación final</h3>
        <div class="ejemplo">
            <div class="d-flex just-final">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-final">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                </div>
            </pre>
        </div>
        <h3>Justificación Cobertura</h3>
        <p>
            Cubre todo el ancho del contenedor padre 
            dejando espacios en blanco entre los elementos.
        </p>
        <div class="ejemplo">
            <div class="d-flex just-cobertura">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-cobertura">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                </div>
            </pre>
        </div>
        <h3>Justificación Cobertura Tope</h3>
        <p>
            Es igual que el anterior la diferencia es que en este caso 
            el primer elemento se coloca al inicio y el último al final del contenedor padre.
        </p>

        <div class="ejemplo">
            <div class="d-flex just-cobertura-tope">
                <div class="ej-fijo">
                    Box1
                </div>
                <div class="ej-fijo">
                    Box2
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex just-cobertura-tope">
                    <div class="ej-fijo">
                        Box1
                    </div>
                    <div class="ej-fijo">
                        Box2
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="ali" class="article scroll-item">
        <h2>Alineación</h2>
        <p>
            Similar a la justificación pero en este caso realiza el trabajo 
            de manera vertical y solo cuando hay una sola fila de contenido. 
        </p>
        <h3>Alineación centrada</h3>
        <div class="ejemplo">
            <div class="d-flex ali-centrada bor-1" style="height: 350px" >
                <div class="ej-fijo">
                        Box1
                </div>
                <div class="ej-fijo">
                        Box2
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex ali-centrada bor-1" style="height: 350px" >
                    <div class="ej-fijo">
                            Box1
                    </div>
                    <div class="ej-fijo">
                            Box2
                    </div>
                </div>
            </pre>
        </div>
        <h3>Alineación inicio</h3>
        <div class="ejemplo">
            <div class="d-flex ali-inicio bor-1" style="height: 350px" >
                <div class="ej-fijo">
                        Box1
                </div>
                <div class="ej-fijo">
                        Box2
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex ali-inicio bor-1" style="height: 350px" >
                    <div class="ej-fijo">
                            Box1
                    </div>
                    <div class="ej-fijo">
                            Box2
                    </div>
                </div>
            </pre>
        </div>
        <h3>Alineación al final</h3>
        <div class="ejemplo">
            <div class="d-flex ali-final bor-1" style="height: 350px" >
                <div class="ej-fijo">
                        Box1
                </div>
                <div class="ej-fijo">
                        Box2
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex ali-final bor-1" style="height: 350px" >
                    <div class="ej-fijo">
                            Box1
                    </div>
                    <div class="ej-fijo">
                            Box2
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="ali-cont" class="article scroll-item">
        <h2>Alineación Contenido</h2>
        <p>
            Puede pasar que queramos alinear varias filas verticalmente. 
            En el caso anterior solo podiamos alinear una sola fila ahora vamos a ver algunas 
            clases que nos permitiran alinear varias filas dentro de un contenedor.
        </p>

        <h3>Alineación contenido centrada</h3>

        <div class="ejemplo">
            <div class="d-flex flex-wrap ali-contenido-centrada bor-1" style="height: 350px" >
                <div class="ej-fijo">
                        Box1
                </div>
                <div class="ej-fijo">
                        Box2
                </div>
                <div class="ej-fijo">
                        Box3
                </div>
                <div class="ej-fijo">
                        Box4
                </div>
                <div class="ej-fijo">
                        Box5
                </div>
                <div class="ej-fijo">
                        Box6
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap ali-contenido-centrada bor-1" style="height: 350px" >
                    <div class="ej-fijo">
                            Box1
                    </div>
                    <div class="ej-fijo">
                            Box2
                    </div>
                    <div class="ej-fijo">
                            Box3
                    </div>
                    <div class="ej-fijo">
                            Box4
                    </div>
                    <div class="ej-fijo">
                            Box5
                    </div>
                    <div class="ej-fijo">
                            Box6
                    </div>
                </div>
            </pre>
        </div>

        <h3>Alineación contenido inicio</h3>
        <div class="ejemplo">
            <div class="d-flex flex-wrap ali-contenido-inicio bor-1" style="height: 350px" >
                <div class="ej-fijo">
                        Box1
                </div>
                <div class="ej-fijo">
                        Box2
                </div>
                <div class="ej-fijo">
                        Box3
                </div>
                <div class="ej-fijo">
                        Box4
                </div>
                <div class="ej-fijo">
                        Box5
                </div>
                <div class="ej-fijo">
                        Box6
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap ali-contenido-inicio bor-1" style="height: 350px" >
                    <div class="ej-fijo">
                            Box1
                    </div>
                    <div class="ej-fijo">
                            Box2
                    </div>
                    <div class="ej-fijo">
                            Box3
                    </div>
                    <div class="ej-fijo">
                            Box4
                    </div>
                    <div class="ej-fijo">
                            Box5
                    </div>
                    <div class="ej-fijo">
                            Box6
                    </div>
                </div>
            </pre>
        </div>
        <h3>Alineación contenido final</h3>
        <div class="ejemplo">
            <div class="d-flex flex-wrap ali-contenido-final bor-1" style="height: 350px" >
                <div class="ej-fijo">
                        Box1
                </div>
                <div class="ej-fijo">
                        Box2
                </div>
                <div class="ej-fijo">
                        Box3
                </div>
                <div class="ej-fijo">
                        Box4
                </div>
                <div class="ej-fijo">
                        Box5
                </div>
                <div class="ej-fijo">
                        Box6
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="d-flex flex-wrap ali-contenido-final bor-1" style="height: 350px" >
                    <div class="ej-fijo">
                            Box1
                    </div>
                    <div class="ej-fijo">
                            Box2
                    </div>
                    <div class="ej-fijo">
                            Box3
                    </div>
                    <div class="ej-fijo">
                            Box4
                    </div>
                    <div class="ej-fijo">
                            Box5
                    </div>
                    <div class="ej-fijo">
                            Box6
                    </div>
                </div>
            </pre>
        </div>


    </article>
    
</section>


    <div class="lista-scroll ocultar-desde-medianos">
        <ul>
            <li><a href="#introduccion">Introducción</a></li>
            <li><a href="#flex">Flex</a></li>
            <li><a href="#wrap">Flex Wrap</a></li>
            <li><a href="#direcciones">Direcciones</a></li>
            <li><a href="#just">Justificación</a></li>
            <li><a href="#ali">Alineación</a></li>
            <li><a href="#ali-cont">Contenido</a></li>
        </ul>
    </div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuAli")
</script>