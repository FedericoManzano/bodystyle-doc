<?php $titulo="Template" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    
    <?php 
        $titulo = "Template";
        $descripcion = "Vamos a ver un conjunto de elementos que permiten generar 
        formularios más vistosos y profesionales.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="inputs" class="article scroll-item">
        <h2>Templates Inputs</h2>
        <p>
            Todo el formulario tiene que estar envuelto dentro de un div 
            con la clase <i>.tem-formulario</i>. <br>
            Para los inputs vamos a utilizar la clase <i>.tem-input</i>.
        </p>
        <div class="ejemplo">
            <div class="tem-formulario">
                <div class="tem-input">
                    <input type="text" name="nombre" id="nombreTxt">
                    <label for="nombreTxt">Nombre</label>
                </div>
                <div class="divisor"></div>
                <div class="tem-input tem-error">
                    <input type="text" name="nombre" id="nombreTxt">
                    <label for="nombreTxt">Nombre</label>
                </div>
                <div class="divisor"></div>
                <div class="tem-input tem-ok">
                    <input type="text" name="nombre" id="nombreTxt">
                    <label for="nombreTxt">Nombre</label>
                </div>
                
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tem-formulario">
                    <div class="tem-input">
                        <input type="text" name="nombre" id="nombreTxt">
                        <label for="nombreTxt">Nombre</label>
                    </div>
                    <div class="divisor"></div>
                    <div class="tem-input tem-error">
                        <input type="text" name="nombre" id="nombreTxt">
                        <label for="nombreTxt">Nombre</label>
                    </div>
                    <div class="divisor"></div>
                    <div class="tem-input tem-ok">
                        <input type="text" name="nombre" id="nombreTxt">
                        <label for="nombreTxt">Nombre</label>
                    </div>
                    
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Esto sería un input modificado.
        </div>
        <p>
            Las clases <i>.tem-error</i> y <i>.tem-ok</i> sirven para 
            validar la información dentro de los campos. <br> 
            Son removidas dinámicamente según el resultado de la validación correspondiente.
        </p>
        <h3>Ejemplo de formulario Simple</h3>
        <div class="ejemplo">
            <div class="tem-formulario">
                <div class="breadcrumb-negro ">
                    <a class="br-activo" href="#datos">Datos</a>
                    <a href="#contrato">Aceptar Contrato</a>
                    <a href="#registrar">Registrar</a>
                </div>
                <h3 id="datos" class="mar-1">Formulario Registro</h3>
                <div class="fila mar-4">
                    <div class="cs-12">
                        <div class="tem-input ">
                            <input type="email" name="correo" id="correoTxt">
                            <label for="correoTxt">Ej: nombre@mail.com</label>
                        </div>
                    </div>
                    <div class="cs-12 cm-6 mar-4">
                        <div class="tem-input">
                            <input type="text" name="nombre" id="nombreTxt1">
                            <label for="nombreTxt1">Nombre</label>
                        </div>
                    </div>
                    <div class="cs-12 cm-6 mar-4">
                        <div class="tem-input">
                            <input type="text" name="apellido" id="apellidoTxt">
                            <label for="apellidoTxt">Apellido</label>
                        </div>
                    </div>
                </div>
                <div id="contrato"class="check-radio-grupo mar-2 mab-2">
                    <input type="checkbox" id="contratoC">
                    <label for="contratoC" class="checkbox">Acepto los terminos y condiciones del contrato</label>
                </div>
                <a id="registrar" href="#" class="btn-lg btn-azul mar-3">Enviar</a>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tem-formulario">
                    <h3>Formulario Registro</h3>
                    <div class="fila">
                        <div class="cs-12">
                            <div class="tem-input">
                                <input type="email" name="correo" id="correoTxt">
                                <label for="correoTxt">Ej: nombre@mail.com</label>
                            </div>
                        </div>
                        <div class="cs-12 cm-6">
                            <div class="tem-input">
                                <input type="text" name="nombre" id="nombreTxt1">
                                <label for="nombreTxt1">Nombre</label>
                            </div>
                        </div>
                        <div class="cs-12 cm-6">
                            <div class="tem-input">
                                <input type="text" name="apellido" id="apellidoTxt">
                                <label for="apellidoTxt">Apellido</label>
                            </div>
                        </div>
                    </div>
                    <div class="check-radio-grupo mar-2 mab-2">
                        <input type="checkbox" id="contrato">
                        <label for="contrato" class="checkbox">Acepto los terminos y condiciones del contrato</label>
                    </div>
                    <a href="#" class="btn-lg btn-azul">Enviar</a>
                </div>
            </pre>
        </div>
    </article>
    <article id="formulario" class="article scroll-item">
        <h2>Formulario Completo</h2>
        
        <p>
            Ahora vamos a ver otros elementos en un ejemplo más completo.
        </p>
        <div class="ejemplo scroll">
            <div class="tem-formulario">
                <div class="breadcrumb-negro ">
                    <a class="br-activo" href="#personales">Personales</a>
                    <a href="#cuenta">Cuenta</a>
                    <a href="#financieros">Financieros</a>
                </div>
                <h3 class="mar-1">Formulario Registro</h3>
                
                <h4 id="personales" class="mar-3">Datos Personales</h4>
                <div class="fila mar-3">
                    <div class="cs-12 cm-6">
                        <div class="tem-input">
                            <input type="text" name="nombre" id="nombreTxt">
                            <label for="nombreTxt">Nombre</label>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tem-input">
                            <input type="text" name="apellido" id="apellidoTxt">
                            <label for="apellidoTxt">Apellido</label>
                        </div>
                    </div>
                    <div class="cs-12">
                        <div class="tem-input">
                            <input type="email" name="correo" id="correo">
                            <label for="correo">Correo</label>
                        </div>
                    </div>
                    <div class="cs-12 cm-6 cl-4">
                        <div class="tem-input">
                            <select name="paises" id="listadoPaises" class="select">
                                <option value="1">Argentina</option>
                                <option value="3">Brazil</option>
                                <option value="3">Chile</option>
                                <option value="4">Paraguay</option>
                            </select>
                            <label for="listadoPaises">Paises</label>
                        </div>
                    </div>
                    <div class="cs-12 cm-6 cl-4 ">
                        <div class="tem-input">
                            <select name="provincia" id="listadoProvincia" class="select">
                                <option value="1">Buenos Aires</option>
                                <option value="2">Chubut</option>
                                <option value="3">Mendoza</option>
                                <option value="4">Salta</option>
                            </select>
                            <label for="listadoProvincia">Ciudades / Región</label>
                        </div>
                    </div>
                    <div class="cs-12 cl-4">
                        <div class="tem-input">
                            <input type="text" name="pd" id="pd">
                            <label for="pd">Código Postal</label>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn-lg btn-azul mar-2">Enviar</a>
                <div class="division"></div>
                <h4 id="cuenta" class="mar-3">Datos de cuenta</h4>
                <div class="fila mar-3">
                    <div class="cs-12">
                        <div class="tem-input">
                            <input type="text" name="usuario" id="usuarioText">
                            <label for="usuarioText">Usuario</label>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tem-input">
                            <input type="password" name="clave" id="clave">
                            <label for="clave">Clave</label>
                        </div>
                        <small>De 8 a 10 caracteres</small>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tem-input">
                            <input type="password" name="repetir" id="repetir">
                            <label for="repetir">Repetir</label>
                        </div>
                        <small>Repetir la clave anterior</small>
                    </div>
                </div>
                <div class="check-radio-grupo mar-2 mab-2">
                    <input type="checkbox" id="contrato2">
                    <label for="contrato2" class="checkbox">Acepto los terminos y condiciones del contrato</label>
                </div>
                <a href="#" class="btn-lg btn-azul mar-3">Enviar</a>
                <div class="division"></div>
                <h4 id="financieros" class="mar-3">Datos Financieros</h4>
                <div class="fila mar-3">
                    <div class="cs-12 cm-6 cl-4">
                        <div class="tem-input">
                            <input type="text" name="banco">
                            <label for="banco">Banco</label>
                        </div>
                        
                    </div>
                    <div class="cs-12 cm-6 cl-4">
                        <div class="tem-input">
                            <input type="text" name="tarjeta">
                            <label for="tarjeta">N° Tarjeta</label>
                        </div>
                        <small>15 Dígitos</small>
                    </div>
                    <div class="cs-12 cl-4">
                        <div class="tem-input">
                            <input type="text" name="seg">
                            <label for="seg">Cod Seguridad</label>
                        </div>
                        <small>4 Dígitos detrás de la targeta</small>
                    </div>
                </div>
                <div class="check-radio-grupo mar-2 mab-2">
                    <input type="checkbox" id="df">
                    <label for="df" class="checkbox">Acepto los terminos y condiciones del contrato</label>
                </div>
                <a href="#" class="btn-lg btn-azul mar-3">Enviar</a>
                <h6 class="fz-15 c-gris mab-0">La información financiera está protegida por la ley 
                <span class="badge badge-negro mar-5" >14.332</span></h6>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tem-formulario">
                    <div class="breadcrumb-negro ">
                        <a class="br-activo" href="#personales">Personales</a>
                        <a href="#cuenta">Cuenta</a>
                        <a href="#financieros">Financieros</a>
                    </div>
                    <h3 class="mar-1">Formulario Registro</h3>
                    
                    <h4 id="personales">Datos Personales</h4>
                    <div class="fila">
                        <div class="cs-12 cm-6">
                            <div class="tem-input">
                                <input type="text" name="nombre" id="nombreTxt">
                                <label for="nombreTxt">Nombre</label>
                            </div>
                        </div>
                        <div class="cs-12 cm-6">
                            <div class="tem-input">
                                <input type="text" name="apellido" id="apellidoTxt">
                                <label for="apellidoTxt">Apellido</label>
                            </div>
                        </div>
                        <div class="cs-12">
                            <div class="tem-input">
                                <input type="email" name="correo" id="correo">
                                <label for="correo">Correo</label>
                            </div>
                        </div>
                        <div class="cs-12 cm-6 cl-4">
                            <div class="tem-input">
                                <select name="paises" id="listadoPaises" class="select">
                                    <option value="1">Argentina</option>
                                    <option value="3">Brazil</option>
                                    <option value="3">Chile</option>
                                    <option value="4">Paraguay</option>
                                </select>
                                <label for="listadoPaises">Paises</label>
                            </div>
                        </div>
                        <div class="cs-12 cm-6 cl-4">
                            <div class="tem-input">
                                <select name="provincia" id="listadoProvincia" class="select">
                                    <option value="1">Buenos Aires</option>
                                    <option value="2">Chubut</option>
                                    <option value="3">Mendoza</option>
                                    <option value="4">Salta</option>
                                </select>
                                <label for="listadoProvincia">Ciudades / Región</label>
                            </div>
                        </div>
                        <div class="cs-12 cl-4">
                            <div class="tem-input">
                                <input type="text" name="pd" id="pd">
                                <label for="pd">Código Postal</label>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn-lg btn-azul mar-2">Enviar</a>
                    <div class="division"></div>
                    <h4 id="cuenta">Datos de cuenta</h4>
                    <div class="fila">
                        <div class="cs-12">
                            <div class="tem-input">
                                <input type="text" name="usuario" id="usuarioText">
                                <label for="usuarioText">Usuario</label>
                            </div>
                        </div>
                        <div class="cs-12 cm-6">
                            <div class="tem-input">
                                <input type="password" name="clave" id="clave">
                                <label for="clave">Clave</label>
                            </div>
                            <small>De 8 a 10 caracteres</small>
                        </div>
                        <div class="cs-12 cm-6">
                            <div class="tem-input">
                                <input type="password" name="repetir" id="repetir">
                                <label for="repetir">Repetir</label>
                            </div>
                            <small>Repetir la clave anterior</small>
                        </div>
                    </div>
                    <div class="check-radio-grupo mar-2 mab-2">
                        <input type="checkbox" id="contrato2">
                        <label for="contrato2" class="checkbox">Acepto los terminos y condiciones del contrato</label>
                    </div>
                    <a href="#" class="btn-lg btn-azul">Enviar</a>
                    <div class="division"></div>
                    <h4 id="financieros">Datos Financieros</h4>
                    <div class="fila">
                        <div class="cs-12 cm-6 cl-4">
                            <div class="tem-input">
                                <input type="text" name="banco">
                                <label for="banco">Banco</label>
                            </div>
                            
                        </div>
                        <div class="cs-12 cm-6 cl-4">
                            <div class="tem-input">
                                <input type="text" name="tarjeta">
                                <label for="tarjeta">N° Tarjeta</label>
                            </div>
                            <small>15 Dígitos</small>
                        </div>
                        <div class="cs-12 cl-4">
                            <div class="tem-input">
                                <input type="text" name="seg">
                                <label for="seg">Cod Seguridad</label>
                            </div>
                            <small>4 Dígitos detrás de la targeta</small>
                        </div>
                    </div>
                    <div class="check-radio-grupo mar-2 mab-2">
                        <input type="checkbox" id="df">
                        <label for="df" class="checkbox">Acepto los terminos y condiciones del contrato</label>
                    </div>
                    <a href="#" class="btn-lg btn-azul mab-6">Enviar</a>
                    <p class="fz-15 c-gris mab-0">La información financiera está protegida por la ley <span class="badge badge-rojo">14.332</span></p>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Los formularios son modelos solamente las etiquetas <i>form</i> no están 
            agregadas en el ejemplo.
        </div>

        <p>
            Los títulos <i>h3</i> y <i>h4</i> son formateados por la clase contenedora 
            no hace falta darles un formato o agregarles ninguna clase.
        </p>

        <div class="alerta-op-verde">
            Para los ejemplos antes descriptos utilizamos la grilla provista por la librería 
            <a href="grilla.php" target="_blank" class="link">Grilla</a>
        </div>
    </article>
    <article id="login" class="article scroll-item">
        <h2>Ejemplo Login</h2>
        <div class="ejemplo">
            <div class="m-a ancho-60 ancho-m-50 ancho-s-80 ancho-xs-100 b bor-rad-5 p-5 fd-blanco" style="border: 1px solid rgba(0, 0, 0, 0.123);">
                <div class="tem-formulario">
                    <div class="breadcrumb-negro">
                        <a class="br-activo" href="#">Usuario</a>
                        <a href="#!">Clave</a>
                        <a href="#!">Ingresar</a>
                    </div>
                    
                    <h3 class="mar-1">Iniciar Sesión</h3>
                    <div class="tem-input mar-4">
                        <input type="text">
                        <label for="">Usuario</label>
                    </div>
                    <div class="tem-input mar-2 mar-3">
                        <input type="password">
                        <label for="">Clave</label>
                    </div>
                    <div class="check-radio-grupo mab-2 mar-3">
                        <input type="checkbox" id="recordar">
                        <label for="recordar" class="checkbox">Recordar Clave</label>
                    </div>
                    <div class="mar-3">
                        <a href="#" class="link">Solicitar una cuenta</a>
                    </div>
                    
                    <a  class="btn-cubrir-lg fd-azul-ve mar-2 waves">Ingresar</a>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="m-a ancho-70 ancho-m-50 ancho-s-80 ancho-xs-100 b bor-rad-5 p-5 fd-blanco" style="border: 1px solid rgba(0, 0, 0, 0.123);">
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
            </pre>
        </div>
        <div class="alerta-op-verde">
            Para este ejemplo utilicé las clases utilitarias para dar formato 
            al contenedor principal del login. <br> 
            También los bordes expuesto en la sección antes mencionada.

            <a href="bordes.php" class="link">Bordes</a>, 
            <a href="medidas.php" class="link">Medidas</a>, 
        </div>
        <div class="alerta-op-gris">
            Es importante aclarar que para todos los ejemplos sólo se utilizaron 
            clases de la librería sin añadir código CSS adicional.
</div>
    </article>
    <article id="correo" class="article scroll-item">
        <h2>Comprobar Correo</h2>
        <div class="ejemplo">
            <div class="tem-formulario">
                <h3>Verificar Correo</h3>
                <div class="fila mar-4">
                    <div class="cs-12 cm-8">
                        <div class="tem-input">
                            <input type="email" name="correo" id="mail">
                            <label for="email">Correo</label>
                        </div>
                    </div>
                    <div class="cs-12 cm-4">
                        <a  class="btn-lg fd-azul-ve waves">Enviar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tem-formulario">
                    <h3>Verificar Correo</h3>
                    <div class="fila">
                        <div class="cs-12 cm-8">
                            <div class="tem-input">
                                <input type="email" name="correo" id="mail">
                                <label for="email">Correo</label>
                            </div>
                        </div>
                        <div class="cs-12 cm-4">
                            <a  class="btn-lg fd-azul-ve waves">Enviar</a>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="cambiar" class="article scroll-item">
        <h2>Cambiar Clave</h2>
        <div class="ejemplo">
            <div class="tem-formulario">
                <div class="breadcrumb-negro">
                    <a href="#verificar"class="br-activo">Verificar</a>
                    <a href="#enviar">Cambiar</a>
                </div>
                <h3 class="mar-1">Cambiar Clave</h3>
                <h4 id="verificar" class="mar-3">Clave Actual</h4>
                <div class="fila mar-2">
                    <div class="cs-12 cm-8">
                        <div class="tem-input">
                            <input type="password" name="clave">
                            <label for="clave">Clave</label>
                        </div>
                    </div>
                    <div class="cs-12 cm-4">
                        <a  class="btn-lg fd-azul-ve">Verificar</a>
                    </div>
                </div>
                
                <div class="division"></div>
                <h4 id="enviar" class="mar-2">Clave Nueva</h4>
                <div class="fila mar-2">
                    <div class="cs-12 cm-6">
                        <div class="tem-input">
                            <input type="password" name="clave2">
                            <label for="clave2">Clave</label>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="tem-input">
                            <input type="password" name="rep">
                            <label for="rep">Repetir</label>
                        </div>
                        <small>Tiene que coincidir con el campo anterior</small>
                    </div>
                </div>
                <a  class="btn-lg fd-azul-ve mar-4">Cambiar</a>
            </div>
        </div>
    </article>
</section>
<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#inputs">Inputs</a></li>
        <li><a href="#formulario">Registro</a></li>
        <li><a href="#login">Login</a></li>
        <li><a href="#correo">Correo</a></li>
        <li><a href="#cambiar">Clave</a></li>
    </ul>
</div>

<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuForm")
</script>