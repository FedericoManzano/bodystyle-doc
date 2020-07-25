<?php $titulo = "AutoInit" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">

    <?php 
        $titulo = "AutoInit";
        $descripcion = "Función que permite inicializar módulos de la librería 
        que no tienen un impacto visual sin el código html declarado";
        require_once("./articuloPrincipal.php");
    ?>
    
    <article id="activar" class="article scroll-item">
        <h2>Activación</h2>
        <p>
            Es necesario disponer del archivo bodystyle.js o bodystyle.min.js incluidos 
            en el documento en el que estemos trabajando. Es recomendable ver como inicializar la librería 
            en la sección comenzar de esta documentación. <a href="empezar.php" class="link">Get Started</a> 
        </p>

        <p>
            Si estamos utlizando Jquery agregamos el siguiente código dentro debajo del la inclusión de 
            del archivo bodystyle.js.
        </p>
        <div class="js">
            <pre class="brush:js">
                $(document).ready(function(){
                    BS.AutoInit() 
                })
                
            </pre>
        </div>
        <div class="alerta-op-verde">
            Todos los módulos que inicializa son con la configuración por defecto.
        </div>
        <h3>Módulos</h3>
            <div class="ejemplo">
                <div class="lista-contenedor activo" style="width:18rem">
                    <div class="lista-cabecera">
                        Módulos JS
                    </div>
                    <div class="lista-item">
                        <a href="#">MenuSuperior</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">SidebarInit</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">ModalInit</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">DropDownInit</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">SidebarFijaInit</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">ScrollSpyInit</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">BotonFlotanteInit</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">ImagenesInit</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">Deshabilitar</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">focusInput</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">SliderInit</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">ListaInit</a>
                    </div>
                    <div class="lista-item">
                        <a href="#">ParalaxInit</a>
                    </div>
                    <div class="lista-pie">
                        Configuración por defecto
                    </div>
                </div>
            </div>
            
    </article>
    <article id="codigo" class="article scroll-item">
        <h2>Código</h2>
        <div class="html">
            <pre class="brush:html">
                <!--
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="js/bodystyle.js"></script>
                <script>
                    $(document).ready(function(){
                        BS.AutoInit() 
                    })
                </script>  
                -->
            </pre>
        </div>
        <p>
            Si lo que queremos es configurar los elementos con las opciones 
            disponibles debemos inicializarlos con su respectiva función y no con la de AutoInit.
        </p>
    </article>
</section>
<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion ">Introducción</a></li>
        <li><a href="#activar ">Activar</a></li>
        <li><a href="#codigo ">Código</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuJS")
</script>