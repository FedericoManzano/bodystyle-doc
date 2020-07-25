
<?php $titulo="Input Text"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    <?php 
        $titulo = "Input Text";
        $descripcion = "";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <input type="text" name="prueba" placeholder="Prueba" id="campoTexto">
        </div>
        <div class="html">
            <pre class="brush:html">
                <input type="text" name="prueba" placeholder="Prueba" id="campoTexto">
            </pre>
        </div>
        <h3>Formulario Simple</h3>
        <div class="ejemplo">
            <form action="ejemplo.php">
                <div class="fila">
                    <div class="cs-12 cm-6">
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="cs-12 cm-6">
                        <input type="text" name="apellido" id="apellido" placeholder="Apellido">
                    </div>
                    <div class="cs-12 cm-6 offset-m-3-6">
                        <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                    </div>
                    <div class="cs-12 cm-6">
                        <input type="password" name="clave" id="clave" placeholder="Clave">
                    </div>
                    <div class="cs-12 cm-6">
                        <input type="password" name="repetir" id="repetir" placeholder="Repetir">
                    </div>
                    <div class="cs-12 mar-2">
                            <div class="check-radio-grupo">
                                <input id="i-check4" type="checkbox">
                                <label for="i-check4" class="cb-azul">Acepto los terminos</label>
                            </div>
                    </div>
                    <div class="cs-12 mar-2">
                        <input class="btn btn-azul deshabilitado" type="submit" name="repetir" id="repetir" placeholder="Repetir" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
        <div class="alerta-op-verde">
            El botón se mantiene deshabilitado hasta que se realicen las validaciones.
        </div>
        <div class="html">
            <pre class="brush:html">
                <form action="ejemplo.php">
                    <h4>Formulario Registro</h4>
                    <div class="fila">
                        <div class="cs-12 cm-6">
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="cs-12 cm-6">
                            <input type="text" name="apellido" id="apellido" placeholder="Apellido">
                        </div>
                        <div class="cs-12 cm-6 offset-m-3-6">
                            <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                        </div>
                        <div class="cs-12 cm-6">
                            <input type="password" name="clave" id="clave" placeholder="Clave">
                        </div>
                        <div class="cs-12 cm-6">
                            <input type="password" name="repetir" id="repetir" placeholder="Repetir">
                        </div>
                        <div class="cs-12">
                            <div class="check-radio-grupo">
                                <input id="i-check4" type="checkbox">
                                <label for="i-check4" class="cb-azul">Acepto los terminos</label>
                            </div>
                        </div>
                        <div class="cs-12">
                            <input class="btn btn-azul deshabilitado" type="submit" name="repetir" id="repetir" placeholder="Repetir" value="Enviar">
                        </div>
                    </div>
                </form>
            </pre>
        </div>
    </article>
    <article id="deshabilitado" class="article scroll-item">
        <h2>Desactivado</h2>
        <div class="ejemplo">
            <input class="desactivado" type="text" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        <div class="alerta-op-gris">
            La clase para desactivar el input es <i>.desactivado</i>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!-- INPUT DESHABILITADO
                <input class="desactivado" type="text" name="nombre" id="nombre" placeholder="Nombre">
                -->
            </pre>
        </div>
    </article>
    <article id="tamaños" class="article scroll-item">
        <h2>Tamaños</h2>
        <div class="ejemplo">
            <input class="input-sm mab-1" type="text" name="nombre" id="nombre" placeholder="Pequeño">
            <input type="text" name="nombre" id="nombre" placeholder="Normal">
            <input class="input-lg mar-1" type="text" name="nombre" id="nombre" placeholder="Grande">
            <input class="i-error mar-1" type="text" name="nombre" id="nombre" placeholder="Erroneo">
        </div>

        <div class="html">
            <pre class="brush:html">
                <input class="input-sm mab-1" type="text" name="nombre" id="nombre" placeholder="Pequeño">
                <input type="text" name="nombre" id="nombre" placeholder="Normal">
                <input class="input-lg mar-1" type="text" name="nombre" id="nombre" placeholder="Grande">
                <input class="i-error mar-1" type="text" name="nombre" id="nombre" placeholder="Erroneo">
            </pre>
        </div>
    </article>
    <article id="iconos" class="article scroll-item">
        <h2>Iconos</h2>
        <p>
            Podemos insertar iconos en los input utilizando las clases que veromos a continuación.
        </p>

        <div class="ejemplo">
            <div class="input-icon">
                <span class="icon-user-plus elemento"></span>
                <input type="text" name="usuario" >
            </div>
        </div>
        
        <div class="html">
            <pre class="brush:html">
                <div class="input-icon">
                    <span class="icon-user-plus elemento"></span>
                    <input type="text" name="usuario" >
                </div>
            </pre>
        </div>
        <p>
            Utilizamos la clase <i>.input-icon</i> que envuelve a un input y a una 
            etiqueta span en el span se agrega el icono y la clase <i>.elemento</i>
        </p>
        <div class="alerta-op-rojo">
            Los iconos utilizados no pertenecen a la librería. Si quiere acceder a ellos 
            dirijase a la página oficial <a href="https://icomoon.io/" class="link">https://icomoon.io/</a>
        </div>
    </article>
</section>



<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#deshabilitado">Deshabilitado</a></li>
        <li><a href="#tamaños">Tamaños</a></li>
        <li><a href="#iconos">Iconos</a></li>

    </ul>
</div>


<?php require_once("./componentes/footer.php")?>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuForm")
</script>