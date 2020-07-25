<?php $titulo = "Formularios" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">

    <?php 
        $titulo = "Formularios";
        $descripcion = "En esta sección vamos a generar algunos formularios 
        comunes en todas los sitios y que puede facilitarnos 
        la tarea de desarrollo. <br>
        <i>Importante: </i> los elementos utilizados 
        están a lo largo de toda la librería por lo tanto 
        cuando no entiendan algo busquenlo en la ducumentación.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="registro" class="article scroll-item">
        <h2>Registro</h2>
        <p>
            Para agrupar label con un input utilizamos la clase 
            <i>.form-grupo</i>.
        </p>
        <div class="ejemplo">
            <h4>Formulario Registro</h4>
            <div class="fila">
                <div class="cs-12 cm-6">
                    <div class="form-grupo">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                    <div class="form-grupo">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                    </div>
                </div>
                <div class="cs-12">
                    <div class="input-g">
                        <div class="grupo">
                            <span class="span-grupo">@</span>
                            <input type="email" id="correo" placeholder="nombre@mail.com">
                        </div>
                    </div>
                </div>
                <div class="cs-12">
                    <div id="select" class="select-mod">
                        <select name="select" id="paises">
                            <option class="inactivo" value="1">Seleccione un país ...</option>
                            <option value="3">Argentina</option>
                            <option value="4">Bolivia</option>
                            <option value="5">Chile</option>
                            <option value="6">Perú</option>
                        </select>
                    </div>
                </div>
                <div class="cs-12">
                    <div class="d-flex">
                        <div class="check-radio-grupo m-1">
                            <input id="i-radio-m" type="radio" name="sexo">
                            <label for="i-radio-m" class="radiobtn">
                                Masculino
                            </label>
                        </div>
                        <div class="check-radio-grupo m-1">
                            <input id="i-radio-f" type="radio" name="sexo">
                            <label for="i-radio-f" class="radiobtn">
                                Femenino
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex just-final">
                <a  class="btn fd-azul-ve waves">Enviar</a>
            </div>
        </div>
        
        <div class="html">
            <pre class="brush:html">
                <h4>Formulario Registro</h4>
                <div class="fila">
                    <div class="cs-12 cm-6">
                        <div class="form-grupo">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="cs-12 cm-6">
                        <div class="form-grupo">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                        </div>
                    </div>
                    <div class="cs-12">
                        <div class="input-g">
                            <div class="grupo">
                                <span class="span-grupo">@</span>
                                <input type="email" id="correo" placeholder="nombre@mail.com">
                            </div>
                        </div>
                    </div>
                    <div class="cs-12">
                        
                        <div id="selectEjemplo" class="select-mod">
                            <select name="select" id="paises">
                                <option class="inactivo" value="1">Seleccione un país ...</option>
                                <option value="2">Argentina</option>
                                <option value="3">Bolivia</option>
                                <option value="4">Chile</option>
                                <option value="5">Perú</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="cs-12">
                        <div class="d-flex">
                            <div class="check-radio-grupo m-1">
                                <input id="i-radio-m" type="radio" name="sexo">
                                <label for="i-radio-m" class="radiobtn">
                                    Masculino
                                </label>
                            </div>
                            <div class="check-radio-grupo m-1">
                                <input id="i-radio-f" type="radio" name="sexo">
                                <label for="i-radio-f" class="radiobtn">
                                    Femenino
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex just-final">
                    <a  class="btn fd-azul-ve waves">Enviar</a>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Podriamos agregarle mas atributos a los input y convigurar el formulario 
            para enviarlo pero sería mas código que no tiene que ver con el UI entonces 
            decidimos sacarlo.
        </div>
    </article>
    <article id="fgrupo" class="article scroll-item">
        <h2>Form Grupo</h2>

        <p>
            Para agregar un campo de texto y una etiqueta utilizamos la clase 
            .form-grupo para agrupar ambon elementos.
        </p>
        <div class="ejemplo">
            <div class="form-grupo">
                <label for="ejemplo">Correo</label>
                <input type="email" id="ejemplo" placeholder="ej: nombre@mail.com">
            </div>
        </div>
        
        <div class="html">
            <pre class="brush:html">
                <div class="form-grupo">
                    <label for="ejemplo">Correo</label>
                    <input type="email" id="ejemplo" placeholder="ej: nombre@mail.com">
                </div>
            </pre>
        </div>
        <h3>Campo requerido</h3>
        <p>
            Podemos agregarle al input del form-grupo un attr <span class="c-rojo">required</span>. De esta forma 
            cuando pierde el foco el campo y no hay texto el borde se tornará rojo.
        </p>
        <div class="ejemplo">
            <div class="form-grupo">
                <label for="ejemploReq">Correo</label>
                <input type="email" id="ejemploReq" placeholder="ej: nombre@mail.com" required>
            </div>
        </div>
        
        <div class="html">
            <pre class="brush:html">
                <div class="form-grupo">
                    <label for="ejemploReq">Correo</label>
                    <input type="email" id="ejemploReq" placeholder="ej: nombre@mail.com" required>
                </div>
            </pre>
        </div>
    </article>
    <article id="cambioCon" class="article scroll-item">
        <h2>Cambio Contraseña</h2>
        <div class="ejemplo">
            <h4>Cambio de Contraseña</h4>
            <div class="fila">
                <div class="cs-7 cm-8">
                    <div class="form-grupo">
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" id="i-correo">
                    </div>
                </div>
                <div class="cs-5 cm-4 mar-4"> 
                    <label class="badge-mje-izq badge-mje-verde">Ej: carlos@mail.com</label>    
                </div>
                <div class="cs-12">
                    <a  class="btn fd-verde waves tips-ele"
                    data-posicion="arriba" data-tips="Comprobar la existencia del correo">Verificar</a>
                </div>
                <div class="divisor"></div>

                <div class="cs-12">
                    <div class="form-grupo">
                        <label for="passActual">Contraseña Actual</label>
                        <input type="password" name="passActual" id="i-passActual">
                    </div>
                </div>
                <div class="cs-12">
                    <a  class="btn fd-verde waves tips-ele"
                    data-posicion="arriba" data-tips="Validar la contraseña actual">Verificar</a>
                </div>
                
                <div class="cs-12 cm-6">
                    <div class="form-grupo">
                        <label for="passNuevo">Contraseña Nueva</label>
                        <input type="password" name="passNuevo" id="i-passNuevo">
                        <small>De 8 a 10 caracteres alfanuméricos</small>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                <div class="form-grupo">
                        <label for="passRepetir">Repetir</label>
                        <input type="password" name="passRepetir" id="i-passRepetir">
                    </div>
                </div>
            </div>
            <div class="d-flex just-centrada ali-centrada mar-3">
                <a  class="btn btn-azul waves">Cambiar</a>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
            <h4>Cambio de Contraseña</h4>
            <div class="fila">
                <div class="cm-8">
                    <div class="form-grupo">
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" id="i-correo">
                    </div>
                </div>
                <div class="cm-4"> 
                    <label class="badge-mje-izq badge-mje-verde">Ej: carlos@mail.com</label>    
                </div>
                <div class="cs-12">
                    <a  class="btn fd-verde waves tips-ele"
                    data-posicion="arriba" data-tips="Comprobar la existencia del correo">Verificar</a>
                </div>
                <div class="divisor"></div>

                <div class="cs-12">
                    <div class="form-grupo">
                        <label for="passActual">Contraseña Actual</label>
                        <input type="password" name="passActual" id="i-passActual">
                    </div>
                </div>
                <div class="cs-12">
                    <a  class="btn fd-verde waves tips-ele"
                    data-posicion="arriba" data-tips="Validar la contraseña actual">Verificar</a>
                </div>
                
                <div class="cs-12 cm-6">
                    <div class="form-grupo">
                        <label for="passNuevo">Contraseña Nueva</label>
                        <input type="password" name="passNuevo" id="i-passNuevo">
                        <small>De 8 a 10 caracteres alfanuméricos</small>
                    </div>
                </div>
                <div class="cs-12 cm-6">
                <div class="form-grupo">
                        <label for="passRepetir">Repetir</label>
                        <input type="password" name="passRepetir" id="i-passRepetir">
                    </div>
                </div>
            </div>
            <div class="d-flex just-centrada ali-centrada mar-3">
                <a  class="btn btn-azul waves">Cambiar</a>
            </div>
            </pre>
        </div>
    </article>

    <article id="mensaje" class="article scroll-item">
        <h2>Enviar Mensaje</h2>
        <div class="ejemplo">
            
            <div class="input-g tips-ele" data-posicion="arriba" data-tips="Grupos Inputs">
                <div class="grupo">
                    <span class="span-grupo">Ej: nombre@mail.com</span>
                    <input type="email">
                    <a class="btn-o btn-gris-c-o" style="min-width: 85px !important">Verificar</a>
                </div>
            </div>
            <div class="form-grupo">
                <label for="mensaje">Mensaje</label>
                <textarea class="deshabilitado" name="mensaje" id="" cols="30" rows="80" style="resize:none; height: 120px"></textarea>
                <small>Hasta 500 caracteres max</small>
            </div>
            <div class="d-flex just-final mar-1">
                <a class="btn btn-rojo deshabilitado tips-ele"
                data-posicion="arriba" data-tips="Inactivo hasta validar el correo">Enviar</a>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <h4>Enviar mensaje</h4>
                <div class="input-g tips-ele" data-posicion="arriba" data-tips="Grupos Inputs">
                    <div class="grupo">
                        <span class="span-grupo">Ej: nombre@mail.com</span>
                        <input type="email">
                        <a class="btn-o btn-gris-c-o" style="min-width: 85px !important">Verificar</a>
                    </div>
                </div>
                <div class="form-grupo">
                    <label for="mensaje">Mensaje</label>
                    <textarea class="deshabilitado" name="mensaje" id="" cols="30" rows="80" style="resize:none; height: 120px"></textarea>
                    <small>Hasta 500 caracteres max</small>
                </div>
                <div class="d-flex just-final mar-1">
                    <a class="btn btn-rojo deshabilitado">Enviar</a>
                </div>
            </pre>
        </div>
        
    </article>
    <article id="range" class="article scroll-item">
        <h2>Formulario Range</h2>
        <div class="ejemplo">
            <h4>Registro</h4>
            <div class="fila">
                <div class="cs-12 cm-6">
                    <div class="form-grupo">
                        <label for="correo">Correo</label>
                        <div class="input-g">
                            <div class="grupo">
                                <span class="span-grupo">@</span>
                                <input type="email" placeholder="Ej: alberto@mail.com">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-12 mar-2">
                    <div class="form-grupo">
                        <label for="edad">Edad</label>
                        <div class="input-range">
                            <span>0</span>
                            <input type="range" value="0" min="1" max="99">
                        </div>
                    </div>
                    <div class="d-flex just-final mar-5">
                        <a class="btn btn-negro waves">Enviar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
            <h2>Formulario Range</h2>
        <div class="ejemplo">
            <h4>Registro</h4>
                <div class="fila">
                    <div class="cs-12 cm-6">
                        <div class="form-grupo">
                            <label for="correo">Correo</label>
                            <div class="input-g">
                                <div class="grupo">
                                    <span class="span-grupo">@</span>
                                    <input type="email" placeholder="Ej: alberto@mail.com">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs-12 mar-2">
                        <div class="form-grupo">
                            <label for="edad">Edad</label>
                            <div class="input-range">
                                <span>0</span>
                                <input type="range" value="0" min="1" max="99">
                            </div>
                        </div>
                        <div class="d-flex just-final mar-5">
                            <a class="btn btn-negro waves">Enviar</a>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
    </article>
    <article id="linea" class="article scroll-item">
        <h2>Formularios en linea</h2>
        <div class="ejemplo">
            
            <div class="form-grupo-linea">
                <label for="correo">Correo</label>
                <input type="email" name="correo">
                <a class="btn btn-azul waves">Enviar</a>
            </div>
        </div>
        <div class="alerta-op-verde">
            utilizamos apara esto la clase que envuelve a los elementos 
            <i>.form-grupo-linea</i>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="form-grupo-linea">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo">
                    <a class="btn btn-azul waves">Enviar</a>
                </div>
            </pre>
        </div>
        <p>Podemos utilizar la grilla para que no ocupe el 100%</p>

        <div class="ejemplo">
            <div class="fila">
                <div class="form-grupo-linea cs-12">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" placeholder="Ej: ramon@mail.com">
                    <a class="btn fd-azul waves">Enviar</a>
                </div>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
               
                <div class="fila">
                    <div class="form-grupo-linea cs-12">
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" placeholder="Ej: ramon@mail.com">
                        <a class="btn fd-azul waves">Enviar</a>
                    </div>
                </div>
            </pre>
        </div>
        <div class="ejemplo">
            <div class="form-grupo-linea">
                <label for="correo">Correo</label>
                <input type="email" name="correo">
            </div>
            <div class="d-flex ali-inicio just-final mar-1">
                <div class="check-radio-grupo">
                    <input id="val" type="checkbox" name="grupo1">
                    <label for="val" class="checkbox">
                        Acepto
                    </label>
                </div>
                <a href="#" class="btn-sm fd-azul mi-1 waves">Enviar</a>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="form-grupo-linea">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo">
                </div>
                <div class="d-flex ali-inicio just-final mar-1">
                    <div class="check-radio-grupo">
                        <input id="val" type="checkbox" name="grupo1">
                        <label for="val" class="checkbox">
                            Acepto
                        </label>
                    </div>
                    <a href="#" class="btn-sm fd-azul mi-1 waves">Enviar</a>
                </div>
            </pre>
            
        </div>
        <div class="ejemplo">
                <h4>Formulario en linea</h4>
                <div class="form-grupo-linea">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">
                </div>
                <div class="form-grupo-linea">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido">
                </div>
                <div class="form-grupo-linea">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario">
                </div>
                <div class="form-grupo-linea">
                    <label for="select">Pais</label>
                    <select name="" id="" class="select">
                        <option value="1">Seleccionar País</option>
                        <option value="2">Argentina</option>
                        <option value="3">Perú</option>
                        <option value="4">Chile</option>
                        <option value="5">etc ...</option>
                    </select>
                </div>
                
                <div class="form-grupo-linea">
                    <label for="clave">Clave</label>
                    <input type="password" name="clave">
                </div>
                <div class="form-grupo-linea">
                    <label for="repetir">Repetir</label>
                    <input type="password" name="Repetir">
                </div>
                <div class="d-flex just-final ali-centrada mar-2">
                    <div class="check-radio-grupo">
                        <input id="inline" type="checkbox" name="grupo1">
                        <label for="inline" class="checkbox">
                            Acepto los terminos y condiciones del servicio
                        </label>
                    </div>
                    <a  class="btn btn-azul mi-1 tips-ele deshabilitado" 
                        data-posicion="arriba" data-tips="Enviar formulario">
                        Enviar
                    </a>
                </div>
            </div>
            <div class="html">
                <pre class="brush:html">
                    <div class="form-grupo-linea">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre">
                    </div>
                    <div class="form-grupo-linea">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido">
                    </div>
                    <div class="form-grupo-linea">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario">
                    </div>
                    <div class="form-grupo-linea">
                        <label for="select">Pais</label>
                        <select name="" id="" class="select">
                            <option value="1">Seleccionar País</option>
                            <option value="2">Argentina</option>
                            <option value="3">Perú</option>
                            <option value="4">Chile</option>
                            <option value="5">etc ...</option>
                        </select>
                    </div>
                    
                    <div class="form-grupo-linea">
                        <label for="clave">Clave</label>
                        <input type="password" name="clave">
                    </div>
                    <div class="form-grupo-linea">
                        <label for="repetir">Repetir</label>
                        <input type="password" name="Repetir">
                    </div>
                    <div class="d-flex just-final ali-centrada mar-2">
                        <div class="check-radio-grupo">
                            <input id="inline" type="checkbox" name="grupo1">
                            <label for="inline" class="checkbox">
                                Acepto los terminos y condiciones del servicio
                            </label>
                        </div>
                        <a  class="btn btn-azul mi-1 tips-ele deshabilitado" 
                            data-posicion="arriba" data-tips="Enviar formulario">
                            Enviar
                        </a>
                    </div>

                </pre>
            </div>
    </article>
    <article id="inputIcon" class="article scroll-item">
        <h2>Input con iconos</h2>
        <p>
            En esta sección vamos a ver inputs para los formularios 
            a los cuales podemos agregarles iconos.
        </p>

        <div class="alerta-op-rojo">
            Es importante aclarar que no hay iconos en la librería 
            por los tanto los mismo son del sitio 
            <a href="http//icomoon.io" class="link" target="_blank">
                Icomoon.io
            </a>
        </div>

        <div class="ejemplo">
            <div class="input-icon">
                <span class="icon-user elemento"></span>
                <input type="text">
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="input-icon">
                    <span class="icon-user elemento"></span>
                    <input type="text">
                </div>
            </pre>
        </div>

        <p>
            Envolvemos al input con la clase <i>.input-icon</i> luego agregamos 
            un span con el icono y con la clase elemento.
        </p>

        <div class="ejemplo">
            <div class="form-grupo">
                <label for="Usuario">Usuario</label>
                <div class="input-icon">
                    <span class="icon-user elemento"></span>
                    <input type="text">
                </div>
            </div>
            <div class="form-grupo">
                <label for="Usuario">Clave</label>
                <div class="input-icon">
                    <span class="icon-lock elemento"></span>
                    <input type="password">
                </div>
                <small>De 8 a 10 caracteres alfanuméricos</small>
            </div>
            <div class="form-grupo">
                <label for="clave">Preloader</label>
                <div class="input-icon input-cargando">
                    <span class="preloader-sm pre-gris"></span>
                    <input type="password" class="input-cargando">
                </div>

            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="form-grupo">
                    <label for="Usuario">Usuario</label>
                    <div class="input-icon">
                        <span class="icon-user elemento"></span>
                        <input type="text">
                    </div>
                </div>
                <div class="form-grupo">
                    <label for="Usuario">Clave</label>
                    <div class="input-icon">
                        <span class="icon-lock elemento"></span>
                        <input type="password">
                    </div>
                    <small>De 8 a 10 caracteres alfanuméricos</small>
                </div>
                <div class="form-grupo">
                    <label for="clave">Preloader</label>
                    <div class="input-icon">
                        <span class="preloader-sm pre-rojo"></span>
                        <input type="password">
                    </div>

                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Adicionalmente la librería dispone de templates de formularios con 
            otros estilos para poder utilizar. <br>
            Los mismos podemos verlos en el siguiente enlace. <br>
            <a href="template.php" class="link">Template Fomularios</a>
        </div>
    </article>
</section>



<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#registro">Registro</a></li>
        <li><a href="#fgrupo">Form grupo</a></li>
        <li><a href="#cambioCon">Cambio Contraseña</a></li>
        <li><a href="#mensaje">Mensaje</a></li>
        <li><a href="#range">Range</a></li>
        <li><a href="#linea">Linea</a></li>
        <li><a href="#inputIcon">Input Icon</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuForm")
    BS.SelectInit().iniciar("#select", "fondo")
</script>
