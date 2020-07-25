<?php $titulo = "Tablas"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Tablas";
        $descripcion = "Algunos estilos para dar formato a las tablas.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="defecto" class="article scroll-item">
        <h2>Tabla por defecto</h2>
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
    <article id="small" class="article scroll-item">
        <h2>Tabla small</h2>
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
    </article>
    <article id="hover" class="article scroll-item">
        <h2>Tabla hover</h2>
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
        <div class="alerta-op-verde">
            Se agrega la clase <i>.hover</i> de la librería 
        </div>
    </article>
    <article id="selector" class="article scroll-item">
        <h2>Tabla selector</h2>
        <p>
            Pintar de otro color las celdas de número impar.
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
        <span>
            Se agrega la clase <i>.selector</i> de la librería 
        </span>
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
        <div class="span">
            Simplemente se añade la clase <i>.a-c</i> a la tabla.
        </div>
    </article>
    <article id="responsive" class="scroll-item article">
        <h2>Tabla responsive</h2>
        <p>
            Hasta aca todas las tablas vistas tienen problemas en dispositivos pequeños 
            por esta razón vamos a utilizar la clase <i>.tabla-responsive</i>. <br> 
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
        <h2>Tablas combinadas</h2>
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