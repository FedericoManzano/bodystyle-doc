<?php $titulo =  "Colecciones"?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">

    <?php 
        $titulo = "Colecciones";
        $descripcion = "Vamos a ver uno de los elementos que nos permite desplegar y contener 
        gran número de elementos en espacios reducidos.";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="lista-simple" class="article scroll-item">
        <h2>Lista Simple</h2>
        <div class="ejemplo">
            <div id="l-1">
                <div class="lista-contenedor">
                    <div class="lista-item e-borde-izq-verde-4">
                        <a  href="#">Elemento1</a>
                    </div>
                    <div class="lista-item e-borde-izq-azul-4">
                        <a href="#">Elemento2</a>
                    </div>
                    <div class="lista-item e-borde-izq-rojo-4">
                        <a href="#">Elemento3</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <!-- Descomentar si lo copian

                <div id="l-1">
                    <div class="lista-contenedor">
                        <div class="lista-item e-borde-izq-verde-4">
                            <a  href="#">Elemento1</a>
                        </div>
                        <div class="lista-item e-borde-izq-azul-4">
                            <a href="#">Elemento2</a>
                        </div>
                        <div class="lista-item e-borde-izq-rojo-4">
                            <a href="#">Elemento3</a>
                        </div>
                    </div>
                </div>
                -->
            </pre>
        </div>
    
    </article>
    <article id="lista-cabecera-pie" class="article scroll-item">
        <h2>Cabecera y pie</h2>
        <p>
            Podemos agregarle una cabecera a la lista si lo necesitamos
        </p>

        <div class="ejemplo">
                <div class="lista-contenedor activo">
                    <div class="lista-cabecera">
                        Cabecera
                    </div>
                    <div class="lista-item">
                        <a href="#">Elemento1</a>
                        <span class="badge badge-verde bor-pill">4</span>
                    </div>
                    <div class="lista-item">
                        <a href="#">Elemento2</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">Elemento3</a>
                    </div>
                    <div class="lista-pie">
                        Pie de la lista
                    </div>
                </div>
        </div>

        <div class="html">
            <pre class="brush:html">
            
                <div class="lista-contenedor activo">
                    <div class="lista-cabecera">
                        Cabecera
                    </div>
                    <div class="lista-item">
                        <a href="#">Elemento1</a>
                        <span class="badge badge-verde bor-pill">4</span>
                    </div>
                    <div class="lista-item">
                        <a href="#">Elemento2</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">Elemento3</a>
                    </div>
                    <div class="lista-pie">
                        Pie de la lista
                    </div>
                </div> 
            </pre>
        </div>

        <div class="alerta-op-verde">
            Las clases son <i>.lista-cabecera</i> y <i>.lista-pie</i>.
        </div>
        <h3>Colores</h3>
        <p>
            Es necesario encerrar toda la lista en un div con un id para poder darle 
            los estilos configurables. Y luego inicializar el componente con las 
            funciones de la librería.
        </p>
        <div class="tabla-responsive">
            <table class="tabla-azul tabla-sm">
                <thead>
                    <tr>
                        <td>Atributo</td>
                        <td>Recibe</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>contexto</td>
                        <td>Id que envuelve a toda la lista</td>
                    </tr>
                    <tr>
                        <td>colorFondo</td>
                        <td>Color de fondo de la lista</td>
                    </tr>
                    <tr>
                        <td>colorTexto</td>
                        <td>Color de texto de la lista</td>
                    </tr>
                    <tr>
                        <td>colorFlechas</td>
                        <td>Color de las flechas desplegables</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="ejemplo">
            <div class="d-flex flex-wrap just-cobertura ">
                <div id="l-rojo">
                    <div class="lista-contenedor mab-2">
                        <div class="lista-cabecera">
                            Cabecera
                        </div>
                        <div class="lista-item desactivado tips-ele fd-rojo"
                        data-posicion="derecha" data-tips="Elemento desactivado <span class='c-rojo'>.desactivado<span>">
                            <a href="#">Elemento1</a>
                            <span class="badge badge-blanco bor-pill">4</span>
                        </div>
                        <div class="lista-item fd-rojo">
                            <a href="#">Elemento2</a>
                        </div>
                        <div class="lista-item fd-rojo">
                            <a href="#">Elemento3</a>
                        </div>
                        <div class="lista-pie">
                            Pie de la lista
                        </div>
                    </div>
                </div>
                <div id="l-verde">
                    <div class="lista-contenedor mab-2">
                        <div class="lista-cabecera">
                            Cabecera
                        </div>
                        <div class="lista-item fd-verde">
                            <a href="#">Elemento1</a>
                            <span class="badge badge-blanco bor-pill">4</span>
                        </div>
                        <div class="lista-item fd-verde" >
                            <a href="#">Elemento2</a>
                        </div>
                        <div class="lista-item fd-verde">
                            <a href="#">Elemento3</a>
                        </div>
                        <div class="lista-pie">
                            Pie de la lista
                        </div>
                    </div>
                </div>

                <div id="l-azul">
                    <div class="lista-contenedor mab-2">
                        <div class="lista-cabecera">
                            Cabecera
                        </div>
                        <div class="lista-item fd-azul-ve">
                            <a href="#">Elemento1</a>
                            <span class="badge badge-blanco bor-pill">4</span>
                        </div>
                        <div class="lista-item fd-azul-ve">
                            <a href="#">Elemento2</a>
                        </div>
                        <div class="lista-item fd-azul-ve">
                            <a href="#">Elemento3</a>
                        </div>
                        <div class="lista-pie">
                            Pie de la lista
                        </div>
                    </div>
                </div>

                <div id="l-gris">
                    <div class="lista-contenedor mab-2">
                        <div class="lista-cabecera">
                            Cabecera
                        </div>
                        <div class="lista-item fd-gris-n">
                            <a href="#">Elemento1</a>
                            <span class="badge badge-blanco bor-pill">4</span>
                        </div>
                        <div class="lista-item fd-gris-n">
                            <a href="#">Elemento2</a>
                        </div>
                        <div class="lista-item fd-gris-n">
                            <a href="#">Elemento3</a>
                        </div>
                        <div class="lista-pie">
                            Pie de la lista
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div class="html">
            <pre class="brush:html">
                <!-- Descomentar si lo copian 


                <div class="d-flex flex-wrap just-cobertura ">
                <div id="l-rojo">
                    <div class="lista-contenedor mab-2">
                        <div class="lista-cabecera">
                            Cabecera
                        </div>
                        <div class="lista-item desactivado tips-ele fd-rojo"
                        data-posicion="derecha" data-tips="Elemento desactivado <span class='c-rojo'>.desactivado<span>">
                            <a href="#">Elemento1</a>
                            <span class="badge badge-blanco bor-pill">4</span>
                        </div>
                        <div class="lista-item fd-rojo">
                            <a href="#">Elemento2</a>
                        </div>
                        <div class="lista-item fd-rojo">
                            <a href="#">Elemento3</a>
                        </div>
                        <div class="lista-pie">
                            Pie de la lista
                        </div>
                    </div>
                </div>
                <div id="l-verde">
                    <div class="lista-contenedor mab-2">
                        <div class="lista-cabecera">
                            Cabecera
                        </div>
                        <div class="lista-item fd-verde">
                            <a href="#">Elemento1</a>
                            <span class="badge badge-blanco bor-pill">4</span>
                        </div>
                        <div class="lista-item fd-verde" >
                            <a href="#">Elemento2</a>
                        </div>
                        <div class="lista-item fd-verde">
                            <a href="#">Elemento3</a>
                        </div>
                        <div class="lista-pie">
                            Pie de la lista
                        </div>
                    </div>
                </div>

                <div id="l-azul">
                    <div class="lista-contenedor mab-2">
                        <div class="lista-cabecera">
                            Cabecera
                        </div>
                        <div class="lista-item fd-azul-ve">
                            <a href="#">Elemento1</a>
                            <span class="badge badge-blanco bor-pill">4</span>
                        </div>
                        <div class="lista-item fd-azul-ve">
                            <a href="#">Elemento2</a>
                        </div>
                        <div class="lista-item fd-azul-ve">
                            <a href="#">Elemento3</a>
                        </div>
                        <div class="lista-pie">
                            Pie de la lista
                        </div>
                    </div>
                </div>

                <div id="l-gris">
                    <div class="lista-contenedor mab-2">
                        <div class="lista-cabecera">
                            Cabecera
                        </div>
                        <div class="lista-item fd-gris-n">
                            <a href="#">Elemento1</a>
                            <span class="badge badge-blanco bor-pill">4</span>
                        </div>
                        <div class="lista-item fd-gris-n">
                            <a href="#">Elemento2</a>
                        </div>
                        <div class="lista-item fd-gris-n">
                            <a href="#">Elemento3</a>
                        </div>
                        <div class="lista-pie">
                            Pie de la lista
                        </div>
                    </div>
                </div>
            </div>  
                -->
            </pre>
        </div>

        <div class="js">
            <pre class="brush:js">
                BS.ColeccionInit().iniciar({contexto: "#l-rojo", colorFondo: "fd-rojo", colorTexto: "c-blanco"})
                BS.ColeccionInit().iniciar({contexto: "#l-verde", colorFondo: "fd-verde", colorTexto: "c-blanco"})
                BS.ColeccionInit().iniciar({contexto: "#l-azul", colorFondo: "fd-azul-ve", colorTexto: "c-blanco"})
                BS.ColeccionInit().iniciar({contexto: "#l-gris", colorFondo: "fd-gris-az", colorTexto: "c-blanco"})
            </pre>
        </div>
    </article>
    <article class="article scroll-item" id="desplegable">
        <h2>Lista Acordeón</h2>

        <h3>Muestra</h3>
        <div class="ejemplo">
            <div id="l-acordeon">
                <div class="lista-contenedor l-colapso ">
                    <div class="lista-cabecera">
                        Cabecera
                    </div>
                    <div class="lista-item" data-target="#1">
                        <a href="#">Elemento1</a>
                    </div>
                    <div class="desplegable " id="1">
                        <p class="fz-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi deserunt aperiam maiores nobis quasi repellat debitis sapiente accusamus ut perferendis numquam voluptatibus, harum reprehenderit! Asperiores impedit rem modi debitis excepturi.</p>
                    </div>
                    <div class="lista-item desactivado" data-target="#2">
                        <a href="#">Elemento2</a>
                    </div>
                    <div class="desplegable" id="2">
                    <ul>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Porfolio</a></li>
                        <li><a href="#">Actividades</a></li>
                    </ul>
                    </div>
                    <div class="lista-item" data-target="#3">
                        <a href="#">Elemento3</a>
                    </div>
                    <div class="desplegable" id="3">
                        <p class="fz-14">Esto es texto desplegable número 3</p>
                    </div>
                    <div class="lista-pie">
                        Pie de la lista
                    </div>
                </div>
            </div>
            <div id="l-acordeon2">
                <div class="lista-contenedor l-colapso mar-2" style="width: 50%">
                    <div class="lista-cabecera">
                        Cabecera
                    </div>
                    <div class="lista-item desactivado tips-ele e-borde-izq-gris-4 fd-gris-n" data-target="#4"
                    data-posicion="arriba" data-tips="<span class='c-rojo'>.desactivado</span>">
                        <a>Elemento1</a>
                    </div>
                    <div class="desplegable " id="4">
                        <p class="fz-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi deserunt aperiam maiores nobis quasi repellat debitis sapiente accusamus ut perferendis numquam voluptatibus, harum reprehenderit! Asperiores impedit rem modi debitis excepturi.</p>
                    </div>
                    <div class="lista-item fd-gris-n e-borde-izq-rojo-4" data-target="#5">
                        <a >Elemento2</a>
                    </div>
                    <div class="desplegable" id="5">
                    <ul>
                        <li><a>Servicios</a></li>
                        <li><a>Porfolio</a></li>
                        <li><a>Actividades</a></li>
                    </ul>
                    </div>
                    <div class="lista-item fd-gris-n e-borde-izq-rojo-4" data-target="#6">
                        <a>Elemento3</a>
                    </div>
                    <div class="desplegable" id="6">
                        <p class="fz-14">Esto es texto desplegable número 3</p>
                    </div>
                    <div class="lista-pie">
                        Pie de la lista
                    </div>
                </div>
            </div>
            <div id="l-acordeon3">
                <div class="lista-contenedor l-colapso mar-2" style="width: 30%">
                    <div class="lista-cabecera">
                        Cabecera
                    </div>
                    <div class="lista-item fd-verde-az" data-target="#7">
                        <a>Elemento1</a>
                    </div>
                    <div class="desplegable " id="7">
                        <p class="fz-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi deserunt aperiam maiores nobis quasi repellat debitis sapiente accusamus ut perferendis numquam voluptatibus, harum reprehenderit! Asperiores impedit rem modi debitis excepturi.</p>
                    </div>
                    <div class="lista-item fd-verde-az" data-target="#8">
                        <a>Elemento2</a>
                    </div>
                    <div class="desplegable" id="8">
                    <ul>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Porfolio</a></li>
                        <li><a href="#">Actividades</a></li>
                    </ul>
                    </div>
                    <div class="lista-item fd-verde-az" data-target="#9">
                        <a>Elemento3</a>
                    </div>
                    <div class="desplegable" id="9">
                        <p class="fz-14">Esto es texto desplegable número 3</p>
                    </div>
                    <div class="lista-pie">
                        Pie de la lista
                    </div>
                </div>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR ESTE CODIGO SI COPIAN
                 <div id="l-acordeon">
                    <div class="lista-contenedor l-colapso ">
                        <div class="lista-cabecera">
                            Cabecera
                        </div>
                    <div class="lista-item" data-target="#1">
                        <a href="#">Elemento1</a>
                    </div>
                    <div class="desplegable " id="1">
                        <p class="fz-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi deserunt aperiam maiores nobis quasi repellat debitis sapiente accusamus ut perferendis numquam voluptatibus, harum reprehenderit! Asperiores impedit rem modi debitis excepturi.</p>
                    </div>
                    <div class="lista-item desactivado" data-target="#2">
                        <a href="#">Elemento2</a>
                    </div>
                    <div class="desplegable" id="2">
                    <ul>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Porfolio</a></li>
                        <li><a href="#">Actividades</a></li>
                    </ul>
                    </div>
                    <div class="lista-item" data-target="#3">
                        <a href="#">Elemento3</a>
                    </div>
                    <div class="desplegable" id="3">
                        <p class="fz-14">Esto es texto desplegable número 3</p>
                    </div>
                    <div class="lista-pie">
                        Pie de la lista
                    </div>
                </div>
            </div>
            <div id="l-acordeon2">
                <div class="lista-contenedor l-colapso mar-2" style="width: 50%">
                    <div class="lista-cabecera">
                        Cabecera
                    </div>
                    <div class="lista-item desactivado tips-ele e-borde-izq-gris-4 fd-gris-n" data-target="#4"
                    data-posicion="arriba" data-tips="<span class='c-rojo'>.desactivado</span>">
                        <a>Elemento1</a>
                    </div>
                    <div class="desplegable " id="4">
                        <p class="fz-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi deserunt aperiam maiores nobis quasi repellat debitis sapiente accusamus ut perferendis numquam voluptatibus, harum reprehenderit! Asperiores impedit rem modi debitis excepturi.</p>
                    </div>
                    <div class="lista-item fd-gris-n e-borde-izq-rojo-4" data-target="#5">
                        <a >Elemento2</a>
                    </div>
                    <div class="desplegable" id="5">
                    <ul>
                        <li><a>Servicios</a></li>
                        <li><a>Porfolio</a></li>
                        <li><a>Actividades</a></li>
                    </ul>
                    </div>
                    <div class="lista-item fd-gris-n e-borde-izq-rojo-4" data-target="#6">
                        <a>Elemento3</a>
                    </div>
                    <div class="desplegable" id="6">
                        <p class="fz-14">Esto es texto desplegable número 3</p>
                    </div>
                    <div class="lista-pie">
                        Pie de la lista
                    </div>
                </div>
            </div>
            <div id="l-acordeon3">
                <div class="lista-contenedor l-colapso mar-2" style="width: 30%">
                    <div class="lista-cabecera">
                        Cabecera
                    </div>
                    <div class="lista-item fd-verde-az" data-target="#7">
                        <a>Elemento1</a>
                    </div>
                    <div class="desplegable " id="7">
                        <p class="fz-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi deserunt aperiam maiores nobis quasi repellat debitis sapiente accusamus ut perferendis numquam voluptatibus, harum reprehenderit! Asperiores impedit rem modi debitis excepturi.</p>
                    </div>
                    <div class="lista-item fd-verde-az" data-target="#8">
                        <a>Elemento2</a>
                    </div>
                    <div class="desplegable" id="8">
                    <ul>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Porfolio</a></li>
                        <li><a href="#">Actividades</a></li>
                    </ul>
                    </div>
                    <div class="lista-item fd-verde-az" data-target="#9">
                        <a>Elemento3</a>
                    </div>
                    <div class="desplegable" id="9">
                        <p class="fz-14">Esto es texto desplegable número 3</p>
                    </div>
                    <div class="lista-pie">
                        Pie de la lista
                    </div>
                </div>
            </div>
                -->
            </pre>
        </div>
        <div class="js">
            <pre class="brush:js">
                BS.ColeccionInit().iniciar({contexto: "#l-acordeon", colorFondo: "fd-blanco", colorTexto: "c-negro", colorFlechas: "#000"})
                BS.ColeccionInit().iniciar({contexto: "#l-acordeon2", colorFondo: "fd-gris-az", colorTexto: "c-blanco", colorFlechas: "#fff"})
                BS.ColeccionInit().iniciar({contexto: "#l-acordeon3", colorFondo: "fd-verde", colorTexto: "c-blanco", colorFlechas: "#fff"})
            </pre>
        </div>
        <p>
            A la lista hay que agregarle la clase <i>.l-colapso</i> a cada <i>.lista-item</i> hay que 
            agregarle el attr data-target con el id de lo que queremos desplegar y luego 
            al contenido desplegable hay que agregarle la clase <i>.desplegable</i> y un id que se corresponda 
            con el attr data-target del elemento que lo despliega.
        </p>
    </article>
</section>




<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#lista-simple">Lista Simple</a></li>
        <li><a href="#lista-cabecera-pie">Lista Cabecera y pie</a></li>
        <li><a href="#desplegable">Desplegable</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>

    BS.ColeccionInit().iniciar({contexto: "#l-1", colorFondo: "fd-blanco", colorTexto: "c-negro"})
    BS.ColeccionInit().iniciar({contexto: "#l-2", colorFondo: "fd-blanco", colorTexto: "c-negro"})
    BS.ColeccionInit().iniciar({contexto: "#l-5", colorFondo: "fd-blanco", colorTexto: "c-negro"})

    BS.ColeccionInit().iniciar({contexto: "#l-rojo", colorFondo: "fd-rojo", colorTexto: "c-blanco"})
    BS.ColeccionInit().iniciar({contexto: "#l-verde", colorFondo: "fd-verde", colorTexto: "c-blanco"})
    BS.ColeccionInit().iniciar({contexto: "#l-azul", colorFondo: "fd-azul-ve", colorTexto: "c-blanco"})
    BS.ColeccionInit().iniciar({contexto: "#l-gris", colorFondo: "fd-gris-az", colorTexto: "c-blanco"})

    BS.ColeccionInit().iniciar({contexto: "#l-acordeon", colorFondo: "fd-blanco", colorTexto: "c-negro", colorFlechas: "#000"})
    BS.ColeccionInit().iniciar({contexto: "#l-acordeon2", colorFondo: "fd-gris-az", colorTexto: "c-blanco", colorFlechas: "#fff"})
    BS.ColeccionInit().iniciar({contexto: "#l-acordeon3", colorFondo: "fd-verde-az", colorTexto: "c-blanco", colorFlechas: "#fff"})
</script>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>
