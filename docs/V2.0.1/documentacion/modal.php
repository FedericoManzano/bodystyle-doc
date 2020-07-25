

<?php $titulo = "Modal"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">

    <?php 
        $titulo = "Modal";
        $descripcion = "En este apartado vamos a ver las ventanas modal, elementos que permiten 
        mostrar la información ocupando toda la ventana y haciendo que el usuario 
        tenga que accionar obligadamente en ese elemento.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>
        <div class="ejemplo">
            <a class="btn btn-azul activar-modal" data-target="#modal1">Modal</a>
            <div class="modal-fondo" id="modal1">
                <div class="modal m-0" style="min-width: 350px;">
                    <div class="modal-cuerpo">
                        <h4 class="modal-titulo">
                            Titulo del modal
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Esse incidunt ipsum quae doloremque officia
                            quaerat rem, facere corrupti est iure tempore dicta 
                            doloribus sunt aperiam laborum dolorem
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="alerta-op-verde">
            En este caso es muy simple al botón Modal solo le agregamos la clase 
            <i>.activar-modal</i> y un data-target que contiene el id del modal a mostrar,
            paralelelamente tenemos un contenedor con la clase <i>.modal-fondo</i> y el id que figura 
            en el attr data-target del botón. <br> 
            Dentro del contenedor antes mencionado tenemos otro contenedor con la clase 
            <i>.modal</i> el cual va a ser el que encierre el contenido de la ventana modal.
        </div>

        <div class="html">
            <pre class="brush:html">
                <a class="btn btn-azul activar-modal" data-target="#modal1">Modal</a>
                <div class="modal-fondo" id="modal1">
                    <div class="modal" style="min-width: 350px;">
                        <div class="modal-cuerpo">
                            <h4 class="modal-titulo">
                                Titulo del modal
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Esse incidunt ipsum quae doloremque officia
                                quaerat rem, facere corrupti est iure tempore dicta 
                                doloribus sunt aperiam laborum dolorem
                            </p>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="cabecera-pie" class="article scroll-item">
        <h2>Cabecera Pie</h2>
        <div class="ejemplo">
            <a class="btn btn-azul activar-modal" data-target="#modal2">Modal</a>
            <div class="modal-fondo" id="modal2">
                <div class="modal fd-azul-ve c-blanco m-0" style="min-width: 350px;">
                    <div class="modal-cabecera">
                        Cabecera
                        <span class="modal-salir c-blanco"></span>
                    </div>
                    <div class="modal-cuerpo">
                        <h4 class="modal-titulo c-blanco">
                            Titulo del modal
                        </h4>
                        <p class="c-blanco">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse incidunt ipsum quae doloremque
                            officia
                            quaerat rem, facere corrupti est iure tempore dicta doloribus sunt aperiam laborum dolorem
                            necessitatibus quis quisquam?
                        </p>
                    </div>
                    <div class="modal-pie">
                        <a href="#" class="btn btn-rojo bor-pill">Ver mas</a>
                        <a href="#" class="btn btn-verde bor-pill">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>

        <p>
            Como podemos observar ahora el modal tiene una cabecera y un pie. En este caso 
            también tiene un color proporcionado por la clase <i>fd-azul-ve</i>. <br> 
            Las clases son <i>modal-cabecera</i> y <i>modal-pie</i> para poder agregarle 
             <br> 
            Es importante aclarar que todo el contenido del modal menos la cabecera y el pie 
            están dentro de la clase <i>.modal-cuerpo</i>.
        </p>

        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR SI LO COPIAN

                <a class="btn btn-azul activar-modal" data-target="#modal2">Modal</a>
                <div class="modal-fondo" id="modal2">
                    <div class="modal fd-azul-ve c-blanco" style="min-width: 350px;">
                        <div class="modal-cabecera">
                            Cabecera
                            <span class="modal-salir c-blanco"></span>
                        </div>
                        <div class="modal-cuerpo">
                            <h4 class="modal-titulo c-blanco">
                                Titulo del modal
                            </h4>
                    
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse incidunt ipsum quae doloremque
                                officia
                                quaerat rem, facere corrupti est iure tempore dicta doloribus sunt aperiam laborum dolorem
                                necessitatibus quis quisquam?
                            </p>
                            

                        </div>
                        <div class="modal-pie">
                            <a href="#" class="btn btn-rojo bor-pill">Ver mas</a>
                            <a href="#" class="btn btn-verde bor-pill">Ver mas</a>
                        </div>
                    </div>
                </div>
                -->
            </pre>
        </div>
    </article>
    <article id="contenido-scroll" class="article scroll-item">
        <h2>Scroll</h2>
        <p>
            Añadiendo la clase <i>.modal-scroll</i> al contenido podemos 
            incorporar la sentencia overflow: auto de css.
        </p>
        <div class="ejemplo">
            <a class="btn btn-azul activar-modal" data-target="#modal3">Modal</a>
            <div class="modal-fondo" id="modal3">
                <div class="modal fd-azul-ve c-blanco m-0" style="min-width: 350px;">
                    <div class="modal-cabecera">
                        Cabecera
                        <span class="modal-salir c-blanco"></span>
                    </div>
                    <div class="modal-cuerpo">
                        <h4 class="modal-titulo c-blanco">
                            Titulo del modal
                        </h4>
                        <div class="modal-scroll">
                            <p class="c-blanco">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Esse incidunt ipsum quae doloremque
                                officia
                                quaerat rem, facere corrupti est iure tempore dicta doloribus 
                                sunt aperiam laborum dolorem
                                necessitatibus quis quisquam?
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed quas repudiandae rem! Officiis
                                voluptate officia magnam vel excepturi laboriosam reprehenderit eos animi, explicabo molestias
                                commodi asperiores dolorum repudiandae nihil et?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur corrupti maiores quidem
                                adipisci autem. Amet illo, suscipit voluptas cum dignissimos adipisci hic, harum tenetur ea
                                nobis exercitationem veritatis, doloremque dolorum?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti qui ipsum numquam cupiditate,
                                velit vel laudantium cumque eos saepe vero minima. Hic nostrum, error voluptas mollitia
                                molestias nobis saepe beatae.
                            </p>
                        </div>

                    </div>
                    <div class="modal-pie">
                        <a href="#" class="btn fd-rojo bor-pill">Ver mas</a>
                        <a href="#" class="btn fd-verde bor-pill">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR SI LO COPIAN

                <a class="btn btn-azul activar-modal" data-target="#modal3">Modal</a>
                <div class="modal-fondo" id="modal1">
                    <div class="modal fd-azul-ve c-blanco" style="min-width: 350px;">
                        <div class="modal-cabecera">
                            Cabecera
                            <span class="modal-salir c-blanco"></span>
                        </div>
                        <div class="modal-cuerpo">
                            <h4 class="modal-titulo c-blanco">
                                Titulo del modal
                            </h4>
                            <div class="modal-scroll">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Esse incidunt ipsum quae doloremque
                                    officia
                                    quaerat rem, facere corrupti est iure tempore dicta doloribus sunt 
                                    aperiam laborum dolorem
                                    necessitatibus quis quisquam?
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Sed quas repudiandae rem! Officiis
                                    voluptate officia magnam vel excepturi laboriosam reprehenderit 
                                    eos animi, explicabo molestias
                                    commodi asperiores dolorum repudiandae nihil et?
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    Pariatur corrupti maiores quidem
                                    adipisci autem. Amet illo, suscipit voluptas cum dignissimos 
                                    adipisci hic, harum tenetur ea
                                    nobis exercitationem veritatis, doloremque dolorum?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Corrupti qui ipsum numquam cupiditate,
                                    velit vel laudantium cumque eos saepe vero minima. 
                                    Hic nostrum, error voluptas mollitia
                                    molestias nobis saepe beatae.
                                </p>
                            </div>
                        </div>
                        <div class="modal-pie">
                            <a href="#" class="btn fd-rojo bor-pill">Ver mas</a>
                            <a href="#" class="btn fd-verde bor-pill">Ver mas</a>
                        </div>
                    </div>
                </div>
                -->
            </pre>
        </div>
    </article>
    <article id="ejemplos" class="article scroll-item">
        <h2>Ejemplos</h2>
        <h3>Login</h3>
        <div class="ejemplo">
            <a class="btn fd-azul-c activar-modal" data-target="#modal4">Modal</a>
            <div class="modal-fondo" id="modal4">
                <div class="modal m-0 ancho-35 ancho-m-55 ancho-s-80 ancho-xs-95 fd-blanco p-3">
                    <div class="modal-cuerpo">
                        <div>
                            <div class="tem-formulario">
                                <div class="breadcrumb-negro ">
                                    <a class="br-activo" href="#">Usuario</a>
                                    <a href="#!">Clave</a>
                                    <a href="#!">Ingresar</a>
                                </div>
                                
                                <h3 class="mar-1 mab-1">Iniciar Sesión</h3>
                                <div class="tem-input mar-3">
                                    <input type="text">
                                    <label for="">Usuario</label>
                                </div>
                                <div class="tem-input mar-2 mar-3">
                                    <input type="password">
                                    <label for="">Clave</label>
                                </div>
                                <div class="check-radio-grupo mar-2">
                                    <input type="checkbox" id="recordar">
                                    <label for="recordar" class="checkbox">Recordar Clave</label>
                                </div>
                                <div class="mar-3">
                                    <a href="#" class="link">Solicitar una cuenta</a>
                                </div>
                                
                                <a href="#" class="btn-cubrir-lg fd-azul-ve mar-2 waves">Ingresar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR EL CÓDIGO
                <a class="btn btn-azul activar-modal" data-target="#modal4">Modal</a>
                <div class="modal-fondo" id="modal4">
                    <div class="modal ancho-35 ancho-m-55 ancho-s-80 ancho-xs-95">
                        <div class="modal-cuerpo">
                            <div class="m-a ancho-100 bor-rad-5 p-5 fd-blanco" style="border: 1px solid rgba(0, 0, 0, 0.123);">
                                <div class="tem-formulario">
                                    <div class="breadcrumb-negro mab-1">
                                        <a class="br-activo" href="#">Usuario</a>
                                        <a href="#!">Clave</a>
                                        <a href="#!">Ingresar</a>
                                    </div>
                                    
                                    <h3>Iniciar Sesión</h3>
                                    <div class="tem-input">
                                        <input type="text">
                                        <label for="">Usuario</label>
                                    </div>
                                    <div class="tem-input mar-2 mab-3">
                                        <input type="password">
                                        <label for="">Clave</label>
                                    </div>
                                    <div class="check-radio-grupo mab-2">
                                        <input type="checkbox" id="recordar">
                                        <label for="recordar" class="checkbox">Recordar Clave</label>
                                    </div>
                                    <div class="mab-3">
                                        <a href="#" class="link">Solicitar una cuenta</a>
                                    </div>
                                    
                                    <a href="#" class="btn-cubrir-lg fd-azul-ve mar-2 waves">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </pre>
        </div>
        <h3>Registro Usuario</h3>
        <div class="ejemplo">
            <a class="btn btn-azul activar-modal" data-target="#modal5">Modal</a>
            <div class="modal-fondo" id="modal5">
                <div class="modal fd-azul-ve c-blanco m-0" style="min-width: 350px;">
                    <div class="modal-cabecera c-blanco">
                        Registro Usuario
                        <span class="modal-salir"></span>
                    </div>
                    <div class="modal-cuerpo">
                        <div class="fila">
                            <div class="cs-12 cm-6">
                                <div class="form-grupo">
                                    <label for="correo" class="c-blanco">Correo</label>
                                    <input type="email" name="correo" id="correo" placeholder="jorge@mail.com">
                                </div>
                            </div>
                            <div class="cs-12 cm-6">
                                <div class="form-grupo">
                                    <label for="usuario" class="c-blanco">Usuario</label>
                                    <input type="text" name="usuario" id="usuario">
                                </div>
                            </div>

                            <div class="cs-12 cm-6">
                                <div class="form-grupo">
                                    <label for="pass" class="c-blanco">Clave</label>
                                    <input type="password" name="clave" id="clave">
                                    <small>De 8 a 10 caracteres alfanuméricos</small>
                                </div>

                            </div>
                            <div class="cs-12 cm-6">
                                <div class="form-grupo">
                                    <label for="repetir" class="c-blanco">Repetir</label>
                                    <input type="password" name="repetir" id="repetir">
                                </div>
                            </div>

                        </div>
                        <div class="check-radio-grupo mar-2">
                            <input type="checkbox" name="check" id="acepto">
                            <label for="acepto" class="cb-blanco">Acepto los términos y condiciones</label>
                        </div>
                    </div>
                    <div class="modal-pie">
                        <a href="#" class="btn btn-verde bor-pill">Ingresar</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <!-- DESCOMENTAR EL CÓDIGO
                <a class="btn btn-azul activar-modal" data-target="#modal5">Modal</a>
                <div class="modal-fondo" id="modal5">
                    <div class="modal fd-azul-ve c-blanco" style="min-width: 350px;">
                        <div class="modal-cabecera c-blanco">
                            Registro Usuario
                            <span class="modal-salir"></span>
                        </div>
                        <div class="modal-cuerpo">
                            <div class="fila">
                                <div class="cs-12 cm-6">
                                    <div class="form-grupo">
                                        <label for="correo" class="c-blanco">Correo</label>
                                        <input type="email" name="correo" id="correo" placeholder="jorge@mail.com">
                                    </div>
                                </div>
                                <div class="cs-12 cm-6">
                                    <div class="form-grupo">
                                        <label for="usuario" class="c-blanco">Usuario</label>
                                        <input type="text" name="usuario" id="usuario">
                                    </div>
                                </div>

                                <div class="cs-12 cm-6">
                                    <div class="form-grupo">
                                        <label for="pass" class="c-blanco">Clave</label>
                                        <input type="password" name="clave" id="clave">
                                        <small>De 8 a 10 caracteres alfanuméricos</small>
                                    </div>

                                </div>
                                <div class="cs-12 cm-6">
                                    <div class="form-grupo">
                                        <label for="repetir" class="c-blanco">Repetir</label>
                                        <input type="password" name="repetir" id="repetir">
                                    </div>
                                </div>

                            </div>
                            <div class="check-radio-grupo mar-2">
                                <input type="checkbox" name="check" id="acepto">
                                <label for="acepto" class="cb-blanco">Acepto los términos y condiciones</label>
                            </div>
                        </div>
                        <div class="modal-pie">
                            <a href="#" class="btn fd-verde bor-pill">Ingresar</a>

                        </div>
                    </div>
                </div>
                -->
            </pre>
        </div>
        <h3>Publicidad</h3>
        <div class="ejemplo">
            <a class="btn btn-azul activar-modal" data-target="#modal6">Modal</a>
            <div class="modal-fondo" id="modal6">
                <div class="modal m-0 a-c fd-gris-az c-blanco" style="max-width: 25rem; min-width: 350px">
                        <div class="modal-cabecera c-blanco">
                                Promoción
                            </div>
                    <div class="modal-cuerpo">
                        
                        <p class="mar-3 c-blanco">
                            Un descuento del <span class="badge badge-rojo bor-pill">50%</span>
                            en todas las sucursales del país
                        </p>
                        <div class="divisor"></div>
                        <div class="d-flex just-centrada mar-3 mab-3">

                            <div class="input-g">
                                <div class="grupo">
                                    <span class="span-grupo c-negro">@</span>
                                    <input type="email">
                                </div>
                            </div>
                        </div>
                        <p class="c-verde-c mar-3">
                            Si le intereza ingrese su correo y oprima el botón enviar.
                        </p>
                    </div>
                    <div class="modal-pie">
                        <a href="#" class="btn fd-azul bor-pill m-a">Enviar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="codigo">
            <pre class="brush:html">

                <!--DESCOMENTAR EL CODIGO
                <a class="btn btn-azul activar-modal" data-target="#modal6">Modal</a>
                <div class="modal-fondo" id="modal6">
                    <div class="modal a-c fd-gris-az c-blanco" style="max-width: 25rem; min-width: 350px">
                            <div class="modal-cabecera c-blanco">
                                    Promoción
                                </div>
                        <div class="modal-cuerpo">
                            
                            <p class="mab-3">
                                Un descuento del <span class="badge badge-rojo bor-pill">50%</span>
                                en todas las sucursales del país
                            </p>
                            <div class="divisor"></div>
                            <div class="d-flex just-centrada mar-3 mab-3">

                               <div class="input-g">
                                    <div class="grupo">
                                        <span class="span-grupo c-negro">@</span>
                                        <input type="email">
                                    </div>
                                </div>
                            </div>
                            <p class="c-verde-c">
                                Si le intereza ingrese su correo y oprima el botón enviar.
                            </p>
                        </div>
                        <div class="modal-pie">
                            <a href="#" class="btn fd-azul bor-pill">Enviar</a>
                        </div>
                    </div>
                </div>
                -->
            </pre>
        </div>
        <div class="alerta-op-verde">
            Es necesario la activación de los modales a través de JS.
        </div>

        <div class="html">
            <pre class="brush:js">
                BS.ModalInit()
            </pre>
        </div>
    </article>
</section>

<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#cabecera-pie">Cabecera-Pie</a></li>
        <li><a href="#contenido-scroll">Scroll contenido</a></li>
        <li><a href="#ejemplos">Ejemplos</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuComp")
</script>