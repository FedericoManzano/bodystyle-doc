<?php $titulo = "Tablas"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Tablas";
        $descripcion = "En esta sección vamos a ver los diferentes formatos de tablas 
        dispuestas en esta versión y ejemplos que permitan diseñar modelos mas específicos 
        utilizando los utilitarios de la librería";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="defecto" class="article scroll-item">
        <h2>Tabla por defecto</h2>
        <p>
            En este caso sólo necesitamos definir en html  la tabla con el contenido 
            que necesitamos. No hace falta añadir ninguna clase css adicional.
        </p>
        <div class="ejemplo">
            <div class="tabla-responsive">
                <table>
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <table>
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </pre>
        </div>
    </article>
    <article id="vertical" class="article scroll-item">
        <h2>Lineas Verticales <span class="badge badge-verde">Nuevo</span></h2>
        <p>
            En el ejemplo anterior las filas estan separadas por lineas 
            horizontales pero las columnas no están separadas. En este artículo vamos a usar 
            una clase que permita la sepación de columnas y de esta forma lograr mejor visibilidad del 
            contenido de la tabla.
        </p> 
        <div class="ejemplo">
        <table class="borde-vertical">
            <thead>
                <tr>
                    <td>Usuario</td>
                    <td>E-mail</td>
                    <td>Nombre</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>FedericoManzano11</td>
                    <td>federico@gmail.com</td>
                    <td>Federico</td>
                </tr>
                <tr>
                    <td>FedericoManzano11</td>
                    <td>federico@gmail.com</td>
                    <td>Federico</td>
                </tr>
                <tr>
                    <td>FedericoManzano11</td>
                    <td>federico@gmail.com</td>
                    <td>Federico</td>
                </tr>
            </tbody>
        </table>
        </div>
        <p>
            En el ejemplo utilizamos la clase <span class="c-rojo-c">.borde-vertical</span> 
            para trazar las lineas verticales que separan las columnas.
        </p>
        <div class="html">
            <pre class="brush:html">
            <table class="borde-vertical">
                <thead>
                    <tr>
                        <td>Usuario</td>
                        <td>E-mail</td>
                        <td>Nombre</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                </tbody>
            </table>
            </pre>
        </div>
        <h3>Ejemplo Utilitarios <span class="badge badge-verde">Nuevo</span> </h3>
        <p>
            Vamos a utilizar los utilitarios para establece un formato de tabla algo diferente 
            y de esta forma mostrar como podemos generar modelos personalizados y no sólo utilizar 
            los modelos predefinidos.
        </p>
        <div class="ejemplo">
            <table class="borde-vertical">
                <thead>
                    <tr>
                        <td colspan="3">Repositorio Git</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ancho-30"><span class="icon-folder">&nbsp;</span>node-modules</td>
                        <td class="ancho-50">initial commit</td>
                        <td>10 hour ago</td>
                    </tr>
                    <tr>
                        <td class="ancho-30"><span class="icon-folder">&nbsp;</span>test</td>
                        <td class="ancho-50">initial commit</td>
                        <td>10 hour ago</td>
                    </tr>
                    <tr>
                        <td class="ancho-30"><span class="icon-folder">&nbsp;</span>build</td>
                        <td class="ancho-50">initial commit</td>
                        <td>10 hour ago</td>
                    </tr>
                    <tr>
                        <td class="ancho-30"><span class="icon-file-text">&nbsp;</span>package.json</td>
                        <td class="ancho-50">initial commit</td>
                        <td>10 hour ago</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="html">
            <pre class="brush:html">
            <table class="borde-vertical">
                <thead>
                    <tr>
                        <td colspan="3">Repositorio Git</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ancho-30"><span class="icon-folder">&nbsp;</span>node-modules</td>
                        <td class="ancho-50">initial commit</td>
                        <td>10 hour ago</td>
                    </tr>
                    <tr>
                        <td class="ancho-30"><span class="icon-folder">&nbsp;</span>test</td>
                        <td class="ancho-50">initial commit</td>
                        <td>10 hour ago</td>
                    </tr>
                    <tr>
                        <td class="ancho-30"><span class="icon-folder">&nbsp;</span>build</td>
                        <td class="ancho-50">initial commit</td>
                        <td>10 hour ago</td>
                    </tr>
                    <tr>
                        <td class="ancho-30"><span class="icon-file-text">&nbsp;</span>package.json</td>
                        <td class="ancho-50">initial commit</td>
                        <td>10 hour ago</td>
                    </tr>
                </tbody>
            </table>
            </pre>
        </div>
        <h3>Ejemplo abm <span class="badge badge-verde">Nuevo</span></h3>
        <p>
            vamos a ver otro ejemplo utilizando otros componentes de la librería.
        </p>
        <div class="ejemplo">
            <div class="tabla-responsive">
                <table class="borde-vertical">
                    <thead>
                        <tr>
                            <td colspan="3">ABM Usuarios</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ancho-5">
                                <div class="switch-grupo">
                                    <input type="checkbox" name="" id="i-cb-3">
                                    <label for="i-cb-3" class="switch-verde"></label>
                                </div>
                            </td>
                            <td>Federico</td>
                            <td>federico@mail.com</td>
                        </tr>
                        <tr>
                            <td class="ancho-5">
                                <div class="switch-grupo">
                                    <input type="checkbox" name="" id="i-cb-4">
                                    <label for="i-cb-4" class="switch-verde"></label>
                                </div>
                            </td>
                            <td>Alberto</td>
                            <td>alberto@mail.com</td>
                        </tr>
                        <tr>
                            <td class="ancho-5">
                                <div class="switch-grupo">
                                    <input type="checkbox" name="" id="i-cb-5">
                                    <label for="i-cb-5" class="switch-verde"></label>
                                </div>
                            </td>
                            <td>Carlos</td>
                            <td>carlos@mail.com</td>
                        </tr>
                        <tr class="ancho-100">
                            <td></td>
                            <td >
                                <div class="d-flex">
                                    <div class="btn-grupo">
                                        <a  class="btn fd-gris">
                                            <span class="icon-checkbox-checked"></span>
                                        </a>
                                        <a class="btn fd-gris">Seleccionar</a>
                                    </div>
                                    <div class="btn-grupo mi-1 desactivado tips-ele"
                                    data-posicion="abajo" data-tips="Grupo Desactivado">
                                        <a  class="btn fd-gris">
                                            <span class="icon-users"></span>
                                        </a>
                                        <a class="btn fd-gris">Todos</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <div class="btn-grupo">
                                        <a class="btn fd-azul">
                                            <span class="icon-user"></span>
                                        </a>
                                        <a class="btn fd-azul-c">Add</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="alerta-op-rojo">
            Los íconos no pertenecen a la librería pueden descargarlos de 
            <a href="https://icomoon.io/" class="link">https://icomoon.io/</a>
        </div>

        <p>
            En este ejemplo utilizamos varias funcionalidades de la librería. 
            Flexbox, Grupos de botones y switch de formularios. Las secciones de interez 
            son <a href="gruposBotones.php" class="link">Grupos de botones</a>, 
            <a href="flexbox.php" class="link">Flexbox</a>, 
            <a href="switch.php" class="link">Switch</a>
        </p>
    </article>
    <article id="small" class="article scroll-item">
        <h2>Tabla small</h2>
        <p>
            Podemos necesitar tablas con filas mas pequeñas que ocupen menos espacio
            para mostar contenidos que sólo están compuestos por textos.
        </p>
        <div class="ejemplo">
            <div class="tabla-responsive">
                <table class="tabla-sm">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <table class="tabla-sm">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Se agrega la clase <i>tabla-sm</i> de la librería 
        </div>
        <p>
            Podemos hacer lo mismo con las lineas verticales vistas en la sección anterior.
        </p>
        <div class="ejemplo">
            <div class="tabla-responsive">
                <table class="tabla-sm borde-vertical">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <table class="tabla-sm  borde-vertical">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </pre>
        </div>
    </article>
    <article id="hover" class="article scroll-item">
        <h2>Tabla hover</h2>
        <p>
            Podemos agregar un efecto cuando el cursor del mouse pasa por 
            encima de las filas de la tabla resaltandolas con otro color. 
            Para esto hay que agregarle a la tabla la clase <span class="c-rojo-c">.hover</span>.
        </p>
        <div class="ejemplo">
        <div class="tabla-responsive">
            <table class="hover">
                <thead>
                    <tr>
                        <td>Usuario</td>
                        <td>E-mail</td>
                        <td>Nombre</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <table class="hover">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </pre>
        </div>
    </article>
    <article id="selector" class="article scroll-item">
        <h2>Tabla selector</h2>
        <p>
            Pintar las filas que ocupan una posición impar dentro de la tabla. utilizamos para 
            esto la clase <span class="c-rojo-c">.selector</span>.
        </p>
        <div class="ejemplo">
        <div class="tabla-responsive">
            <table class="selector">
                <thead>
                    <tr>
                        <td>Usuario</td>
                        <td>E-mail</td>
                        <td>Nombre</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <table class="selector">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </pre>
        </div>
    </article>
    <article id="colores" class="article scroll-item">
        <h2>Tabla Colores</h2>
        <div class="alerta-op-verde">
            Las clases utilizadas son muy simples. <br>
            Roja: tabla-roja <br>
            Verde: tabla-verde <br>
            Azul: tabla-azul <br>
            Gris: tabla-gris <br>
            Oscura: tabla-oscura
        </div>
        <div class="ejemplo">
        <div class="tabla-responsive">
            <table class="tabla-roja">
                <thead>
                    <tr>
                        <td>Usuario</td>
                        <td>E-mail</td>
                        <td>Nombre</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="tabla-responsive">
            <table class="tabla-verde mar-1">
                <thead>
                    <tr>
                        <td>Usuario</td>
                        <td>E-mail</td>
                        <td>Nombre</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="tabla-responsive">
            <table class="tabla-azul mar-1">
                <thead>
                    <tr>
                        <td>Usuario</td>
                        <td>E-mail</td>
                        <td>Nombre</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="tabla-responsive">
            <table class="tabla-oscura mar-1">
                <thead>
                    <tr>
                        <td>Usuario</td>
                        <td>E-mail</td>
                        <td>Nombre</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <table class="tabla-roja">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
                <table class="tabla-verde mar-1">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
                <table class="tabla-azul mar-1">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
                
                <table class="tabla-oscura mar-1">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </pre>
        </div>
        <span>
            Se agrega la clase <i>.tabla-{color}</i> de la librería 
        </span>
    </article>
    <article id="centrada" class="article scroll-item">
        <h2>Tabla centrada</h2>
        <p>
            Podemos a través de la clase <span class="c-color-rojo">.a-c</span> centrar el contenido 
            de la tabla. Es una clase perteneciente a los utilitarios de texto. 
            <a href="texto.php" class="link">Utilitarios de Texto</a>.
        </p>
        <div class="ejemplo">
            <div class="tabla-responsive">
            
            <table class="tabla-oscura a-c">
                <thead>
                    <tr>
                        <td>Usuario</td>
                        <td>E-mail</td>
                        <td>Nombre</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                    <tr>
                        <td>FedericoManzano11</td>
                        <td>federico@gmail.com</td>
                        <td>Federico</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <table class="tabla-oscura a-c">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </pre>
        </div>
    </article>
    <article id="responsive" class="scroll-item article">
        <h2>Tabla responsive</h2>
        <p>
            Hasta aca todas las tablas vistas tienen problemas en los dispositivos pequeños 
            por esta razón vamos a utilizar la clase <span class="c-rojo-c">tabla-responsive</span>. <br> 
            es necesario encerrar la table dentro del contenedor que posee dicha clase.
        </p>
        <div class="ejemplo">
            <div class="tabla-responsive">
                <table>
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
                <div class="tabla-responsive">
                    <table>
                        <thead>
                            <tr>
                                <td>Usuario</td>
                                <td>E-mail</td>
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Si achicamos la pantalla notaremos que aparece un scroll 
            debajo de la tabla sin distorcionar el contenido.
        </div>
    </article>
    <article id="combinado" class="article scroll-item">
        <h2>Tablas combinadas <span class="badge badge-verde">Nuevo</span></h2>
        <p>
            Podemos utilizar algunos elementos como lo son botones o switchs para 
            realizar tablas con funcionalidades específicas.
        </p>
        <div class="ejemplo">
            <div class="tabla-responsive">
                <table class="tabla-oscura">
                    <thead>
                        <tr>
                            <td>ON / OFF</td>
                            <td>Dni</td>
                            <td>Nombre</td>
                            <td>Operación</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="switch-grupo">
                                    <input type="checkbox" id="row1">
                                    <label for="row1" class="switch-verde"></label>
                                </div>
                            </td>
                            <td>32555444</td>
                            <td>Federico Manzano</td>
                            <td >
                                <div class="btn-grupo">
                                    <a class="btn-sm fd-verde-c md-1"><span class="icon-folder-plus"></span></a>
                                    <a class="btn-sm fd-rojo md-1"><span class="icon-folder-minus"></span></a>
                                    <a class="btn-sm fd-azul-c"><span class="icon-spinner11"></span></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="switch-grupo">
                                    <input type="checkbox" id="row2">
                                    <label for="row2" class="switch-verde"></label>
                                </div>
                            </td>
                            <td>32555444</td>
                            <td>Federico Manzano</td>
                            <td >
                                <div class="btn-grupo">
                                    <a class="btn-sm fd-verde-c md-1"><span class="icon-folder-plus"></span></a>
                                    <a class="btn-sm fd-rojo md-1"><span class="icon-folder-minus"></span></a>
                                    <a class="btn-sm fd-azul-c"><span class="icon-spinner11"></span></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="switch-grupo">
                                    <input type="checkbox" id="row3">
                                    <label for="row3" class="switch-verde"></label>
                                </div>
                            </td>
                            <td>32555444</td>
                            <td>Federico Manzano</td>
                            <td >
                                <div class="btn-grupo">
                                    <a class="btn-sm fd-verde-c md-1"><span class="icon-folder-plus"></span></a>
                                    <a class="btn-sm fd-rojo md-1"><span class="icon-folder-minus"></span></a>
                                    <a class="btn-sm fd-azul-c"><span class="icon-spinner11"></span></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="switch-grupo">
                                    <input type="checkbox" id="row4">
                                    <label for="row4" class="switch-verde"></label>
                                </div>
                            </td>
                            <td>32555444</td>
                            <td>Federico Manzano</td>
                            <td >
                                <div class="btn-grupo">
                                    <a class="btn-sm fd-verde-c md-1"><span class="icon-folder-plus"></span></a>
                                    <a class="btn-sm fd-rojo md-1"><span class="icon-folder-minus"></span></a>
                                    <a class="btn-sm fd-azul-c"><span class="icon-spinner11"></span></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="alerta-op-rojo">
            Los íconos no pertenecen a la librería pueden descargarlos en 
            <a href="https://icomoon.io/" class="link">https://icomoon.io/</a>
        </div>
        <div class="alerta-op-verde">
            Podemos utilizar para las filas los elementos de los formularios expuestos 
            en su respectiva sección dentro de esta documentación.
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="tabla-responsive">
                    <table class="tabla-oscura">
                        <thead>
                            <tr>
                                <td>ON / OFF</td>
                                <td>Dni</td>
                                <td>Nombre</td>
                                <td>Operación</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="switch-grupo">
                                        <input type="checkbox" id="row1">
                                        <label for="row1" class="switch-verde"></label>
                                    </div>
                                </td>
                                <td>32555444</td>
                                <td>Federico Manzano</td>
                                <td >
                                    <div class="d-flex just-cobertura">
                                        <a class="btn-sm fd-verde-c md-1">+</a>
                                        <a class="btn-sm fd-rojo md-1">-</a>
                                        <a class="btn-sm fd-azul-c">A</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="switch-grupo">
                                        <input type="checkbox" id="row2">
                                        <label for="row2" class="switch-verde"></label>
                                    </div>
                                </td>
                                <td>32555444</td>
                                <td>Federico Manzano</td>
                                <td >
                                    <div class="d-flex just-cobertura">
                                        <a class="btn-sm fd-verde-c md-1">+</a>
                                        <a class="btn-sm fd-rojo md-1">-</a>
                                        <a class="btn-sm fd-azul-c">A</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="switch-grupo">
                                        <input type="checkbox" id="row3">
                                        <label for="row3" class="switch-verde"></label>
                                    </div>
                                </td>
                                <td>32555444</td>
                                <td>Federico Manzano</td>
                                <td >
                                    <div class="d-flex just-cobertura">
                                        <a class="btn-sm fd-verde-c md-1">+</a>
                                        <a class="btn-sm fd-rojo md-1">-</a>
                                        <a class="btn-sm fd-azul-c">A</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="switch-grupo">
                                        <input type="checkbox" id="row4">
                                        <label for="row4" class="switch-verde"></label>
                                    </div>
                                </td>
                                <td>32555444</td>
                                <td>Federico Manzano</td>
                                <td >
                                    <div class="d-flex just-cobertura">
                                        <a class="btn-sm fd-verde-c md-1">+</a>
                                        <a class="btn-sm fd-rojo md-1">-</a>
                                        <a class="btn-sm fd-azul-c">A</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </pre>
        </div>
        <h3>Ejemplo <span class="badge badge-verde">Nuevo</span></h3>
        <p>
            Utilizando las clases de colores de fondo de la librería y las clases que permiten 
            darle color a los textos vamos a hacer un ejemplo de tabla con nombres de usuario 
            y condición (aprobado, revisión, desaprobado).
        </p>
        <div class="ejemplo">
            <div class="tabla-responsive">
                <table class="borde-vertical">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>Correo</td>
                            <td>Condición</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Federico</td>
                            <td>federico@mail.com</td>
                            <td class="fd-verde-c c-verde-o"><span class="icon-checkmark ">&nbsp;</span>Aprobado</td>
                        </tr>
                        <tr>
                            <td>Carlos</td>
                            <td>carlos@mail.com</td>
                            <td class="fd-rojo-t c-rojo-o"><span class="icon-cross">&nbsp;</span>Desaprobado</td>
                        </tr>
                        <tr>
                            <td>Roberto</td>
                            <td>roberto@mail.com</td>
                            <td class="fd-amarillo-t c-amarillo-o"><span class="icon-user-minus">&nbsp;</span>Revisión</td>
                        </tr>
                        <tr>
                            <td>Marcelo</td>
                            <td>marcelo@mail.com</td>
                            <td class="fd-verde-c c-verde-o"><span class="icon-checkmark ">&nbsp;</span>Aprobado</td>
                        </tr>
                        <tr>
                            <td>Marcos</td>
                            <td>marcos@mail.com</td>
                            <td class="fd-amarillo-t c-amarillo-o"><span class="icon-user-minus">&nbsp;</span>Revisión</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
            <div class="tabla-responsive">
                <table class="borde-vertical">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>Correo</td>
                            <td>Condición</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Federico</td>
                            <td>federico@mail.com</td>
                            <td class="fd-verde-c c-verde-o"><span class="icon-checkmark ">&nbsp;</span>Aprobado</td>
                        </tr>
                        <tr>
                            <td>Carlos</td>
                            <td>carlos@mail.com</td>
                            <td class="fd-rojo-t c-rojo-o"><span class="icon-cross">&nbsp;</span>Desaprobado</td>
                        </tr>
                        <tr>
                            <td>Roberto</td>
                            <td>roberto@mail.com</td>
                            <td class="fd-amarillo-t c-amarillo-o"><span class="icon-user-minus">&nbsp;</span>Revisión</td>
                        </tr>
                        <tr>
                            <td>Marcelo</td>
                            <td>marcelo@mail.com</td>
                            <td class="fd-verde-c c-verde-o"><span class="icon-checkmark ">&nbsp;</span>Aprobado</td>
                        </tr>
                        <tr>
                            <td>Marcos</td>
                            <td>marcos@mail.com</td>
                            <td class="fd-amarillo-t c-amarillo-o"><span class="icon-user-minus">&nbsp;</span>Revisión</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </pre>
        </div>
        <h3>Ejemplo <span class="badge badge-verde">Nuevo</span></h3>
        <p>
            Un ejemplo smilar con los datos de proyectos y equipos.
        </p>
        <div class="ejemplo">
            <div class="tabla-responsive">
                <table class="borde-vertical">
                    <thead>
                        <tr>
                            <td rowspan="2">Nombre</td>
                            <td rowspan="2">Tipo</td>
                            <td rowspan="2">Archivos</td>
                            <td colspan="3">Lenguaje</td>
                        </tr>
                        <tr>
                            <td>Ruby</td>
                            <td>JavaScript</td>
                            <td>Python</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Equipo1</td>
                            <td>proyecto1</td>
                            <td class="a-d">2</td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td rowspan="3">Equipo2</td>
                            <td>Proyecto1</td>
                            <td class="a-d">3</td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Proyecto2</td>
                            <td class="a-d">10</td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                        </tr>
                        <tr>
                            <td>Proyecto3</td>
                            <td class="a-d">25</td>
                            <td></td>
                            <td></td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                        </tr>
                    </tbody>
                </table>    
            </div>
        </div>
        <div class="html">
            <pre class="brush:html">
            <div class="tabla-responsive">
                <table class="borde-vertical">
                    <thead>
                        <tr>
                            <td rowspan="2">Nombre</td>
                            <td rowspan="2">Tipo</td>
                            <td rowspan="2">Archivos</td>
                            <td colspan="3">Lenguaje</td>
                        </tr>
                        <tr>
                            <td>Ruby</td>
                            <td>JavaScript</td>
                            <td>Python</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Equipo1</td>
                            <td>proyecto1</td>
                            <td class="a-d">2</td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td rowspan="3">Equipo2</td>
                            <td>Proyecto1</td>
                            <td class="a-d">3</td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Proyecto2</td>
                            <td class="a-d">10</td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                        </tr>
                        <tr>
                            <td>Proyecto3</td>
                            <td class="a-d">25</td>
                            <td></td>
                            <td></td>
                            <td class="a-c"><span class="icon-checkmark c-verde-c"></span></td>
                        </tr>
                    </tbody>
                </table>    
            </div>
            </pre>
        </div>
        <p>
            Como podemos ver podemos crear infinidad de modelos que se adapten a nuestras 
            necesidades utilizando los utilitarios de la librería.
        </p>
    </article>
    <article id="bordes" class="article scroll-item">
        <h2>Bordes Tablas</h2>
        <div class="ejemplo">
            <h4 class="mar-3">Tabla Borde Rojo</h4>
            <div class="tabla-responsive mab-2 mar-2">
                <table class="tabla-bor-rojo">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="divisor"></div>

            <h4 class="mar-3">Tabla Borde Azul</h4>
            <div class="tabla-responsive mab-2 mar-2">
                <table class="tabla-bor-azul">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="divisor"></div>

            <h4 class="mar-3">Tabla Borde Verde</h4>
            <div class="tabla-responsive mab-2 mar-2">
                <table class="tabla-bor-verde">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="divisor"></div>
            <h4 class="mar-3">Tabla Borde Gris</h4>
            <div class="tabla-responsive mab-2 mar-2">
                <table class="tabla-bor-gris">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="divisor"></div>
            <h4 class="mar-3">Tabla Borde Negro</h4>
            <div class="tabla-responsive mab-2 mar-2">
                <table class="tabla-bor-negro">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="divisor"></div>
            <h4 class="mar-3">Tabla Borde Blanco</h4>
            <div class="tabla-responsive mab-2 mar-2">
                <table class="tabla-bor-blanco">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>E-mail</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                        <tr>
                            <td>FedericoManzano11</td>
                            <td>federico@gmail.com</td>
                            <td>Federico</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="html">
            <pre class="brush:html">
                <div class="tabla-responsive">
                    <table class="tabla-bor-rojo">
                        <thead>
                            <tr>
                                <td>Usuario</td>
                                <td>E-mail</td>
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tabla-responsive">
                    <table class="tabla-bor-azul">
                        <thead>
                            <tr>
                                <td>Usuario</td>
                                <td>E-mail</td>
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tabla-responsive ">
                    <table class="tabla-bor-verde">
                        <thead>
                            <tr>
                                <td>Usuario</td>
                                <td>E-mail</td>
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tabla-responsive">
                    <table class="tabla-bor-gris">
                        <thead>
                            <tr>
                                <td>Usuario</td>
                                <td>E-mail</td>
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tabla-responsive">
                    <table class="tabla-bor-negro">
                        <thead>
                            <tr>
                                <td>Usuario</td>
                                <td>E-mail</td>
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tabla-responsive">
                    <table class="tabla-bor-blanco">
                        <thead>
                            <tr>
                                <td>Usuario</td>
                                <td>E-mail</td>
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                            <tr>
                                <td>FedericoManzano11</td>
                                <td>federico@gmail.com</td>
                                <td>Federico</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </pre>
        </div>
    </article>
</section>



<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#defecto">Tabla Defecto</a></li>
        <li><a href="#vertical">Vertical</a></li>
        <li><a href="#small">Tabla Small</a></li>
        <li><a href="#hover">Tabla Hover</a></li>
        <li><a href="#selector">Selector</a></li>
        <li><a href="#colores">Colores</a></li>
        <li><a href="#centrada">Centrada</a></li>
        <li><a href="#responsive">Responsive</a></li>
        <li><a href="#combinado">Combinadas</a></li>
        <li><a href="#bordes">Bordes</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>